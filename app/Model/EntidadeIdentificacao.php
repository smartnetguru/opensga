<?php
App::uses('AppModel', 'Model');

/**
 * EntidadeIdentificacao Model
 *
 * @property Entidade $Entidade
 * @property Documentoentificacao $Documentoentificacao
 * @property EstadoObjecto $EstadoObjecto
 */
class EntidadeIdentificacao extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Entidade'               => [
            'className'  => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'DocumentoIdentificacao' => [
            'className'  => 'DocumentoIdentificacao',
            'foreignKey' => 'documento_identificacao_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'EstadoObjecto'          => [
            'className'  => 'EstadoObjecto',
            'foreignKey' => 'estado_objecto_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ]
    ];

    public $validate = [
        'numero' => [
            'Unico'                   => [
                'rule'    => ['autenticaDocumentoIdentificacao'],
                'message' => 'Alguem já se registou no sistema usando este documento de Identificação'
            ],
            'numeroDocumentoNotBlank' => [
                'rule'    => 'notBlank',
                'message' => 'O numero de documento de identificacao nao pode estar em branco',
                // extra keys like on, required, etc. go here...
            ],
        ],
        'documento_identificacao_id'=>[
            'numeroDocumentoNotBlank' => [
                'rule'    => 'notBlank',
                'message' => 'Deve Indicar o Tipo de Documento de Identificacao',
                // extra keys like on, required, etc. go here...
            ],

        ],
        'local_emissao'=>[
            'localEmissaoNotBlank' => [
                'rule'    => 'notBlank',
                'message' => 'Deve Indicar o Local de Emissao do Documento de Identificacao',
                // extra keys like on, required, etc. go here...
            ],
        ],
        'data_emissao'=>[
            'numeroDocumentoNotBlank' => [
                'rule'    => 'notBlank',
                'message' => 'Deve Indicar a data de Emissao do Documento de Identificacao',
                // extra keys like on, required, etc. go here...
            ],
        ],

    ];


    /**
     *Tenta ver se o documento de identificacao ainda nao foi usado por ninguem
     * @param type $check
     * @return type
     * @todo implementar isso :(
     */
    public function autenticaDocumentoIdentificacao($check)
    {

        $tipo_documento = $this->data['EntidadeIdentificacao']['documento_identificacao_id'];
        $this->contain();
        $find = $this->find('count',
            ['conditions' => ['documento_identificacao_id' => $tipo_documento, 'numero' => $check]]);

        return $find == 0;
    }

    /**
     * Actualiza dados do documento de Identificacao
     * Primeiro desactiva o documento anterior
     * @param $data
     */
    public function actualizaIdentificacao($data)
    {
        $dataSource = $this->getDataSource();
        $dataSource->begin();
        $this->Entidade->id = $data['entidade_id'];
        $this->Entidade->set('documento_identificacao_id', $data['documento_identificacao_id']);
        $this->Entidade->set('documento_identificacao_numero', $data['numero']);
        $this->Entidade->set('documento_identificacao_data_emissao', $data['data_emissao']);
        $this->Entidade->set('documento_identificacao_local_emissao', $data['local_emissao']);
        $this->Entidade->set('documento_identificacao_data_validade', $data['data_validade']);
        if ($this->Entidade->save()) {
            //Desactivando a identificacao anterior
            $entidadeIdentificacaos = $this->find('all', [
                'entidade_ide'               => $data['entidade_id'],
                'documento_identificacao_id' => $data['documento_identificacao_id'],

            ]);

            foreach ($entidadeIdentificacaos as $entidadeIdentificacao) {
                $this->id = $entidadeIdentificacao['EntidadeIdentificacao']['id'];
                $this->set('estado_objecto_id', 2);
                $this->save();
            }
            $this->create();
            if ($this->save($data)) {
                $dataSource->commit();

                return true;
            } else {
                $dataSource->rollback();

                return [false, $this->validationErrors];
            }
        } else {
            $dataSource->rollback();

            return ['false', $this->Entidade->validationErrors];
        }

    }
}
