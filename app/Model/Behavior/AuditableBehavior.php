<?php
/**
 * Behavior to automagic log actions in aplications with authenticated users.
 * Store info about user which created entry, and user which modified an entry at the proper
 * table.
 * Also use a table called 'logs' (or other configurated for that) to save created/edited action
 * for continuous changes history.
 *
 * Code comments in brazilian portuguese.
 * -----
 *
 * Behavior que permite log automágico de ações executadas em uma aplicação com
 * usuários autenticados.
 *
 * Armazena informações do usuário que criou um registro, e do usuário
 * que alterou o registro no próprio registro.
 *
 * Ainda utiliza um modelo auxiliar Logger (ou outro configurado para isso) para registrar
 * ações de inserção/edição e manter um histórico contínuo de alterações.
 *
 * PHP version > 5.3.1
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright 2011-2012, Radig - Soluções em TI, www.radig.com.br
 * @link http://www.radig.com.br
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 * @package radig
 * @subpackage Auditable.Model.Behavior
 */
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('QueryLogSource', 'Auditable.Lib');
App::uses('CakeLog', 'Log');

class AuditableBehavior extends ModelBehavior
{
    /**
     * Configurações correntes do Behavior
     *
     * @var array
     */
    public $settings = [];

    /**
     * Configurações padrões do Behavior
     *
     * @var array
     */
    protected $defaults = [
        'priority' => 1,
        'auditSql' => true,
        'skip' => [
            'created',
            'modified',
        ],
        'fields' => [
            'created' => 'created_by',
            'modified' => 'modified_by',
        ],
    ];

    protected $typesEnum = [
        'create' => 1,
        'modify' => 2,
        'delete' => 3,
    ];

    /**
     * ID do usuário ativo
     *
     * @var mixed Pode ser um int, string (uuid) ou qualquer outro campo tipo de campo
     * primário.
     */
    protected $activeResponsibleId = null;

    /**
     * Referência para o modelo que persistirá
     * as informações
     *
     * @var Model
     */
    protected $Logger = null;

    /**
     * Guarda o instântaneo do registro antes
     * de ser atualizado. O valor é usado após
     * confirmação da alteração no registro e depois
     * é limpado deste 'cache'
     *
     * @var array
     */
    protected $snapshots = [];

    /**
     *
     * @var QueryLogSource
     */
    protected $QueryLogSource = null;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();

        $this->activeResponsibleId =& AuditableConfig::$responsibleId;
        $this->Logger =& AuditableConfig::$Logger;
        $this->QueryLogSource = new QueryLogSource();
    }

    /**
     * Chamado pelo CakePHP para iniciar o behavior
     *
     * @param Model $model
     * @param array $config
     *
     * Opções de configurações:
     *   auditSql       : bool. Habilita ou não o log das queries
     *   skip           : array. Lista com nome das ações que devem ser ignoradas pelo log.
     *   fields            : array. Aceita os dois índices abaixo
     *     - created    : string. Nome do campo presente em cada modelo para armazenar quem criou o registro
     *     - modified    : string. Nome do campo presente em cada modelo para armazenar quem alterou o registro
     */
    public function setup(Model $model, $config = [])
    {
        if (!is_array($config) || isset($config[0])) {
            $config = $this->defaults;
        }

        if (isset($config['priority'])) {
            unset($config['priority']);
        }

        $this->settings[$model->alias] = array_merge($this->defaults, $config);

        if ($this->settings[$model->alias]['auditSql']) {
            $this->QueryLogSource->enable($model);
        }
    }

    /**
     *
     * @param Model $model
     * @return bool
     */
    public function beforeSave(Model $model, $options = [])
    {
        parent::beforeSave($model, $options);

        $action = $this->getAction($model);

        $this->logResponsible($model, $action === 'create');

        if ($action === 'modify') {
            $this->takeSnapshot($model);
        }

        return true;
    }

    /**
     * Baseado no Modelo passado e seus dados, retorna true
     * caso seja a criação de um novo registro ou modificação
     * de um registro já existente.
     *
     * @param Model $model
     *
     * @return string 'create' ou 'modify' dependendo da operação
     */
    private function getAction(Model $model)
    {
        $isCreate = true;

        if (isset($model->data[$model->alias][$model->primaryKey]) && !empty($model->data[$model->alias][$model->primaryKey])) {
            $isCreate = false;
        } else {
            if (!empty($model->id)) {
                $isCreate = false;
            }
        }

        return $isCreate ? 'create' : 'modify';
    }

    /**
     * Altera dados que estão sendo salvos para incluir responsável pela
     * ação.
     *
     * @param Model $model
     * @param bool $create
     */
    protected function logResponsible(Model $model, $create = true)
    {
        if (empty($this->activeResponsibleId)) {
            return;
        }

        $createdByField = $this->settings[$model->alias]['fields']['created'];
        $modifiedByField = $this->settings[$model->alias]['fields']['modified'];

        if ($create && $model->schema($createdByField) !== null) {
            $model->data[$model->alias][$createdByField] = $this->activeResponsibleId;
        }

        if (!$create && $model->schema($modifiedByField) !== null) {
            $model->data[$model->alias][$modifiedByField] = $this->activeResponsibleId;
        }
    }

    /**
     * Guarda um instântaneo do registro que está sendo alterado
     *
     * @param Model $model
     *
     * @return void
     */
    protected function takeSnapshot(Model $model)
    {
        $id = $model->id;

        if (isset($model->data[$model->alias]['id']) && !empty($model->data[$model->alias]['id'])) {
            $id = $model->data[$model->alias]['id'];
        }

        $aux = $model->find('first', [
                'conditions' => ["{$model->alias}.id" => $id],
                'recursive' => -1,
            ]
        );
        if (isset($aux['Session'])) {

        } else {
            $this->snapshots[$model->alias] = $aux[$model->alias];
        }

    }

    /**
     *
     *
     * @param Model $model
     * @param bool $created
     * @return bool
     */
    public function afterSave(Model $model, $created, $options = [])
    {
        parent::afterSave($model, $created, $options);

        $action = $created ? 'create' : 'modify';

        $this->logQuery($model, $action);

        return true;
    }

    /**
     * Constrói e persiste informações relevantes sobre a transação através
     * do Modelo Logger
     *
     * @param Model $model
     * @param string $action
     */
    protected function logQuery(Model $model, $action = 'create')
    {
        // Se não houver modelo configurado para salvar o log, aborta
        if ($this->checkLogModels() === false) {
            CakeLog::write(LOG_WARNING, __d('auditable', 'You need to define AuditableConfig::$Logger'));

            return;
        }

        $diff = $this->getDiff($action, $model);

        // Caso não haja alterações/registro criado/excluído, não cria log
        if (empty($diff)) {
            return;
        }

        $encoded = $this->buildEncodedMessage($action, $diff);

        $statement = $this->getQuery($model, $action);

        $toSave = [
            'Logger' => [
                'responsible_id' => $this->activeResponsibleId ?: 0,
                'model_alias' => $model->alias,
                'model_id' => $model->id,
                'type' => $this->typesEnum[$action] ?: 0,
            ],
            'LogDetail' => [
                'difference' => $encoded,
                'statement' => $statement,
            ],
        ];

        $this->QueryLogSource->disable($this->Logger);

        // Salva a entrada nos logs. Caso haja falha, usa o Log default do Cake para registrar a falha
        if ($this->Logger->saveAssociated($toSave) === false) {
            CakeLog::write(LOG_WARNING,
                sprintf(__d('auditable', "Can't save log entry for statement: \"%s'\""), $statement));
        }

        $this->QueryLogSource->enable($this->Logger);
    }

    /**
     * Verifica e prepara os modelos utilizados para salvar os logs
     * para que não haja recursão infinita.
     *
     * @return bool
     */
    private function checkLogModels()
    {
        if (!($this->Logger instanceof Model)) {
            return false;
        }

        if ($this->Logger->Behaviors->attached('Auditable')) {
            $this->Logger->Behaviors->unload('Auditable');
        }

        if (!isset($this->Logger->LogDetail)) {
            return false;
        }

        if ($this->Logger->LogDetail->Behaviors->attached('Auditable')) {
            $this->Logger->LogDetail->Behaviors->unload('Auditable');
        }

        return true;
    }

    private function getDiff($action, $model)
    {
        $diff = [];

        switch ($action) {
            case 'create':
                if (isset($model->data[$model->alias])) {
                    $diff = $model->data[$model->alias];
                }

                break;

            case 'modify':
                $diff = $this->diffRecords($this->snapshots[$model->alias], $model->data[$model->alias]);
                break;

            case 'delete':
                $diff = $this->snapshots[$model->alias];
                break;
        }

        // Remoção dos campos ignorados
        foreach ($this->settings[$model->alias]['skip'] as $field) {
            if (isset($diff[$field])) {
                unset($diff[$field]);
            }
        }

        return $diff;
    }

    /**
     * Computa as alterações no registro e retorna um array formatado
     * com os valores antigos e novos
     *
     * 'campo' => array('old' => valor antigo, 'new' => valor novo)
     *
     * @param array $old
     * @param array $new
     *
     * @return array $formatted
     */
    private function diffRecords($old, $new)
    {
        $diff = Set::diff($old, $new);
        $formatted = [];

        foreach ($diff as $key => $value) {
            if (!isset($old[$key]) || !isset($new[$key])) {
                continue;
            }

            $formatted[$key] = ['old' => $old[$key], 'new' => $new[$key]];
        }

        return $formatted;
    }

    /**
     * Codifica as alterações no registro (ou dados de criação) em um formato
     * serializado, que é passado como primeiro parâmetro da função.
     * Caso não seja passado uma função válida, a serialize padrão é usada.
     *
     *
     * @param string $action create|modify|delete
     * @param array $data Dados do registro
     *
     * @return string Dados $data serializados
     */
    private function buildEncodedMessage($action, $data)
    {
        $encode = [];

        switch ($action) {
            case 'modify':
                foreach ($data as $field => $changes) {
                    $encode[$field] = $changes;
                }

                break;

            case 'create':
            case 'delete':
                foreach ($data as $field => $value) {
                    $encode[$field] = $value;
                }
                break;
        }

        $func = 'serialize';

        if (is_callable(AuditableConfig::$serialize)) {
            $func = AuditableConfig::$serialize;
        }

        return call_user_func($func, $encode);
    }

    /**
     * Recupera a última query executada pelo Modelo->DataSource
     * e a retorna.
     *
     * @param Model $model
     * @param  string $action 'create'|'modify'|'delete'
     * @return string $statement
     */
    private function getQuery($model, $action)
    {
        $queries = $this->QueryLogSource->getModelQueries($model, $action);
        $statement = '';

        if (!empty($queries)) {
            $statement = implode(";\n", $queries);
        }

        return $statement;
    }

    /**
     *
     *
     * @param Model $model
     * @param bool $cascade
     */
    public function beforeDelete(Model $model, $cascade = true)
    {
        parent::beforeDelete($model, $cascade);

        $this->takeSnapshot($model);

        return true;
    }

    /**
     *
     *
     * @param Model $model
     */
    public function afterDelete(Model $model)
    {
        parent::afterDelete($model);

        $this->logQuery($model, 'delete');
    }

    /**
     * Passa referência para modelo responsável por persistir os logs
     *
     * @param Model $model
     * @param Model $L
     */
    public function setLogger(Model $model, $L)
    {
        $this->Logger =& $L;
    }

    /**
     * Permite a definição do usuário ativo.
     *
     * @param int $responsibleId
     */
    public function setActiveResponsible(Model $model, $responsibleId)
    {
        if (empty($responsibleId)) {
            return false;
        }

        $this->activeResponsibleId = $responsibleId;

        return true;
    }

    /**
     * Recupera as definições para o modelo corrente
     *
     * @param Model $model
     */
    public function getAuditableSettings(Model $model, $local = true)
    {
        if ($local === true) {
            return $this->settings[$model->alias];
        }

        $global = [
            'Logger' => $this->Logger,
            'activeResponsibleId' => $this->activeResponsibleId,
        ];

        return $global;
    }
}