<?php
App::uses('AppModel', 'Model');

/**
 * FinanceiroDeposito Model
 *
 * @property Entidade $Entidade
 * @property FinanceiroConta $FinanceiroConta
 * @property FinanceiroEstadoDeposito $FinanceiroEstadoDeposito
 * @property FinanceiroFormaDeposito $FinanceiroFormaDeposito
 * @property FinanceiroBanco $FinanceiroBanco
 * @property FinanceiroTransacao $FinanceiroTransacao
 */
class FinanceiroDeposito extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'Entidade' => [
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'FinanceiroConta' => [
            'className' => 'FinanceiroConta',
            'foreignKey' => 'financeiro_conta_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'FinanceiroEstadoDeposito' => [
            'className' => 'FinanceiroEstadoDeposito',
            'foreignKey' => 'financeiro_estado_deposito_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'FinanceiroFormaDeposito' => [
            'className' => 'FinanceiroFormaDeposito',
            'foreignKey' => 'financeiro_forma_deposito_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'FinanceiroBanco' => [
            'className' => 'FinanceiroBanco',
            'foreignKey' => 'financeiro_banco_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
        'FinanceiroTransacao' => [
            'className' => 'FinanceiroTransacao',
            'foreignKey' => 'financeiro_transacao_id',
            'conditions' => '',
            'fields' => '',
            'order' => '',
        ],
    ];

    public function depositaValor($entidadeId, $numeroComprovativo, $valor, $referenciaAluno, $dataDeposito)
    {

        $datasource = $this->getDataSource();
        $datasource->begin();
        $financeiroConta = $this->FinanceiroConta->getByEntidadeId($entidadeId);


        $arrayNovoDeposito = [
            'FinanceiroDeposito' => [
                'entidade_id' => $entidadeId,
                'numero_comprovativo' => $numeroComprovativo,
                'valor' => $valor,
                'referencia_deposito' => $referenciaAluno,
                'id_transacao_banco' => $numeroComprovativo,
                'financeiro_ccdonta_id' => $financeiroConta['FinanceiroConta']['id'],
                'data_deposito' => $dataDeposito,
                'data_reconciliacao' => $dataDeposito,
                'financeiro_estado_deposito_id' => 1,
                'numero_comprovativo' => $numeroComprovativo,
                'financeiro_forma_deposito_id' => 1,
                'financeiro_banco_id' => 1,
                'valor' => $valor,
                'semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'),
                'referencia_deposito' => $referenciaAluno,
                'id_transacao_banco' => $numeroComprovativo,

            ],
        ];


        $arrayTransacao = [
            'FinanceiroTransacao' => [
                'financeiro_tipo_transacao_id' => 1,
                'valor' => $valor,
                'entidade_id' => $entidadeId,
                'financeiro_conta_id' => $financeiroConta['FinanceiroConta']['id'],
                'detalhes' => '',
                'financeiro_estado_transacao_id' => 1,
            ],
        ];
        $this->FinanceiroTransacao->create();
        $this->FinanceiroTransacao->save($arrayTransacao);
        $arrayNovoDeposito['FinanceiroDeposito']['financeiro_transacao_id'] = $this->FinanceiroTransacao->id;

        //Primeiro verificar se o deposito nao foi efectuado
        $depositoExiste = $this->findByReferenciaDepositoAndNumeroComprovativo($referenciaAluno,
            $numeroComprovativo);
        if (empty($depositoExiste)) {
            $this->create();
            $this->save($arrayNovoDeposito);
            $datasource->commit();

            return [true, $this->id];
        } else {
            $datasource->rollback();

            return [false, $depositoExiste['FinanceiroDeposito']['id']];
        }
    }

    /**public $validate = array(
     * 'numero_comprovativo'=>array(
     * 'Unico'=>array(
     * 'rule'=>'isUnique',
     * 'message'=>'Já existe um depósito registado com este número de comprovativo',
     * 'required'=>'create',
     * ),
     * 'NaoVazio'=>array(
     * 'rule'=>'notEmpty',
     * 'message'=>'É obrigatório indicar o número de comprovativo',
     *
     * )
     * )
     * );**/


    public function setNovoDeposito($entidadeId, $numeroComprovativo, $valor, $referenciaAluno, $dataDeposito)
    {

        $datasource = $this->getDataSource();
        $datasource->begin();
        $financeiroConta = $this->FinanceiroConta->getByEntidadeId($entidadeId);


        $arrayNovoDeposito = [
            'FinanceiroDeposito' => [
                'entidade_id' => $entidadeId,
                'numero_comprovativo' => $numeroComprovativo,
                'valor' => $valor,
                'referencia_deposito' => $referenciaAluno,
                'id_transacao_banco' => $numeroComprovativo,
                'financeiro_conta_id' => $financeiroConta['FinanceiroConta']['id'],
                'data_deposito' => $dataDeposito,
                'data_reconciliacao' => $dataDeposito,
                'financeiro_estado_deposito_id' => 1,
                'numero_comprovativo' => $numeroComprovativo,
                'financeiro_forma_deposito_id' => 1,
                'financeiro_banco_id' => 1,
                'valor' => $valor,
                'semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'),
                'referencia_deposito' => $referenciaAluno,
                'id_transacao_banco' => $numeroComprovativo,

            ],
        ];


        $arrayTransacao = [
            'FinanceiroTransacao' => [
                'tipo_transacao_id' => 1,
                'valor' => $valor,
                'entidade_id' => $entidadeId,
                'financeiro_conta_id' => $financeiroConta['FinanceiroConta']['id'],
                'detalhes' => '',
                'financeiro_estado_transacao_id' => 1,
            ],
        ];
        $this->FinanceiroTransacao->create();
        $this->FinanceiroTransacao->save($arrayTransacao);
        $arrayNovoDeposito['FinanceiroDeposito']['financeiro_transacao_id'] = $this->FinanceiroTransacao->id;

        //Primeiro verificar se o deposito nao foi efectuado
        $depositoExiste = $this->findByEntidadeIdAndDataDeposito($entidadeId, $dataDeposito);
        if (empty($depositoExiste)) {
            $this->create();
            $this->save($arrayNovoDeposito);
            $datasource->commit();

            return $this->id;
        } else {
            $datasource->rollback();

            return $depositoExiste['FinanceiroDeposito']['id'];
        }
    }
}
