<?php
App::uses('AppModel', 'Model');

/**
 * FinanceiroConta Model
 *
 * @property Entidade $Entidade
 * @property FinanceiroDeposito $FinanceiroDeposito
 * @property FinanceiroPagamento $FinanceiroPagamento
 */
class FinanceiroConta extends AppModel
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
    ];


    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'FinanceiroDeposito' => [
            'className' => 'FinanceiroDeposito',
            'foreignKey' => 'financeiro_conta_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
        'FinanceiroPagamento' => [
            'className' => 'FinanceiroPagamento',
            'foreignKey' => 'financeiro_conta_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => '',
        ],
    ];


    public $validade = [
        'entidade_id' => [
            'notEmpty' => [
                'rule' => 'notEmpty',
                'message' => 'Este campo nao pode ficar vazio',
            ],
            'unique' => [
                'rule' => 'isUnique',
                'message' => 'Uma entidade só pode ter uma conta',
            ],
        ],
    ];


    /**
     * @param $entidadeId
     *
     * @return mixed
     * @throws \Exception
     * @deprecated Use getContaByEntidadeId
     */
    public function criarConta($entidadeId)
    {

        $nova_conta = ['FinanceiroConta' => ['entidade_id' => $entidadeId, 'saldo_actual' => 0]];
        $this->create();
        $this->save($nova_conta);
        $conta = $this->findById($this->id);

        return $conta;
    }

    /**
     * Retorna a conta de uma dada entidade
     *
     * @param $entidadeId
     *
     * @return mixed
     * @throws \Exception
     */
    public function getByEntidadeId($entidadeId)
    {
        $conta = $this->findByEntidadeId($entidadeId);
        if (!empty($conta)) {
            return $conta;
        }
        $novaConta = ['FinanceiroConta' => ['entidade_id' => $entidadeId, 'saldo_actual' => 0]];
        $this->create();
        $this->save($novaConta);
        $conta = $this->findById($this->id);

        return $conta;
    }

}
