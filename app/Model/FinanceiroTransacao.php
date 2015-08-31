<?php
App::uses('AppModel', 'Model');

/**
 * FinanceiroTransacao Model
 *
 * @property FinanceiroTipoTransacao $FinanceiroTipoTransacao
 * @property Entidade $Entidade
 * @property FinanceiroConta $FinanceiroConta
 * @property FinanceiroDeposito $FinanceiroDeposito
 * @property FinanceiroPagamento $FinanceiroPagamento
 */
class FinanceiroTransacao extends AppModel
{


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = [
        'FinanceiroTipoTransacao' => [
            'className'  => 'FinanceiroTipoTransacao',
            'foreignKey' => 'financeiro_tipo_transacao_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'Entidade'                => [
            'className'  => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ],
        'FinanceiroConta'         => [
            'className'  => 'FinanceiroConta',
            'foreignKey' => 'financeiro_conta_id',
            'conditions' => '',
            'fields'     => '',
            'order'      => ''
        ]
    ];

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = [
        'FinanceiroDeposito'  => [
            'className'    => 'FinanceiroDeposito',
            'foreignKey'   => 'financeiro_transacao_id',
            'dependent'    => false,
            'conditions'   => '',
            'fields'       => '',
            'order'        => '',
            'limit'        => '',
            'offset'       => '',
            'exclusive'    => '',
            'finderQuery'  => '',
            'counterQuery' => ''
        ],
        'FinanceiroPagamento' => [
            'className'    => 'FinanceiroPagamento',
            'foreignKey'   => 'financeiro_transacao_id',
            'dependent'    => false,
            'conditions'   => '',
            'fields'       => '',
            'order'        => '',
            'limit'        => '',
            'offset'       => '',
            'exclusive'    => '',
            'finderQuery'  => '',
            'counterQuery' => ''
        ]
    ];

    public $validate = [

    ];

    public function geraCheckDigito()
    {
        $arrayPesos = [
            1  => 1,
            2  => 10,
            3  => 3,
            4  => 30,
            5  => 9,
            6  => 90,
            7  => 27,
            8  => 76,
            9  => 81,
            10 => 34,
            11 => 49,
            12 => 5,
            13 => 50,
            14 => 15,
            15 => 53,
            16 => 45,
            17 => 62,
            18 => 38,
            19 => 89,
            20 => 17,
            21 => 73,
            22 => 51,
            23 => 25,
            24 => 56,
            25 => 75,
            26 => 71,
            27 => 31,
            28 => 19,
            29 => 93,
            30 => 57
        ];

        $numero = "";
        $somaPeso1=0;
        $somaPeso2=0;
        $somaPeso3=0;
        $somaPeso4=0;

        $entidade= "150";
        $referencia="1231234";
        $montante = "00543200";
        $validaTotal = "sim";

        if($validaTotal==="sim"){
            $numero=$entidade.$referencia.$montante;
        } else{
            $numero = $entidade.$referencia;
        }

        debug($numero);
        $tamanhoNum = strlen($numero);

        debug($tamanhoNum);
        for($x=$tamanhoNum;$x>=1;$x--){
            $valPosicao = substr($numero,$x,1);
            $somaPeso1 = $somaPeso1 + $arrayPesos[$tamanhoNum-$x+3]*intval($valPosicao);
            debug('--------------------------');
            debug($x);
            debug($valPosicao);
            debug($somaPeso1);
            die();
        }
        $somaPeso2 = $somaPeso1/97;
        $somaPeso3 = intval($somaPeso2)*97;
        $somaPeso4 = $somaPeso1-$somaPeso3;
        $checkdigito = 98-$somaPeso4;
        if($checkdigito<10){
            $checkdigito = "0".trim($checkdigito);
        } else{
            $checkdigito=trim($checkdigito);
        }

        return $checkdigito;

    }


    public function criaNovoPagamentoPendente($data)
    {
        $datasource = $this->getDataSource();
        $datasource->begin();

        $this->FinanceiroPagamento->FinanceiroTipoPagamento->id = $data['FinanceiroPagamento']['financeiro_tipo_pagamento_id'];

        $data['FinanceiroPagamento']['valor'] = $this->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
        $data['FinanceiroPagamento']['codigo'] = $this->FinanceiroPagamento->gerarCodigoPagamento($data['FinanceiroTransacao']['aluno_id'],
            $data['FinanceiroPagamento']['financeiro_tipo_pagamento_id']);

        $this->FinanceiroPagamento->create();
        if ($this->FinanceiroPagamento->save($data)) {
            $datasource->commit();

            return $this->FinanceiroPagamento->id;
        }

        $datasource->rollback();

        return false;
    }

    public function getSaldoActual($aluno_id)
    {
        $entidade_id = $this->Entidade->Aluno->field('entidade_id', ['id' => $aluno_id]);

        $this->contain();
        $depositos = $this->find('all', [
            'conditions' => ['entidade_id' => $entidade_id, 'financeiro_tipo_transacao_id' => 1],
            'fields'     => ['SUM(valor) as valor']
        ]);

        if ($depositos) {
            $valor_depositos = $depositos[0][0]['valor'];
        } else {
            $valor_depositos = 0;
        }

        $this->contain();
        $pagamentos = $this->find('all', [
            'conditions' => ['entidade_id' => $entidade_id, 'financeiro_tipo_transacao_id' => 2],
            'fields'     => ['SUM(valor) as valor']
        ]);
        if ($pagamentos) {
            $valor_pagamentos = $pagamentos[0][0]['valor'];
        } else {
            $valor_pagamentos = 0;
        }

        return $valor_depositos - $valor_pagamentos;
    }

    public function pagarFactura($pagamento_id, $aluno_id)
    {
        $this->FinanceiroPagamento->id = $pagamento_id;

        $valor_pagamento = $this->FinanceiroPagamento->field('valor');
        $saldo_actual = $this->getSaldoActual($aluno_id);

        if ($saldo_actual < $valor_pagamento) {
            return false;
        }
        $estado_pagamento = $this->FinanceiroPagamento->field('financeiro_estado_pagamento_id');
        if ($estado_pagamento != 1) {
            return false;
        }

        $entidade_id = $this->FinanceiroPagamento->Aluno->field('entidade_id', ['id' => $aluno_id]);
        $conta_id = $this->FinanceiroPagamento->Aluno->getContaIdByAlunoId($aluno_id);

        $transacao = [
            'financeiro_tipo_transacao_id' => 2,
            'valor'                        => $valor_pagamento,
            'entidade_id'                  => $entidade_id,
            'financeiro_conta_id'          => $conta_id
        ];

        $datasource = $this->getDataSource();
        $datasource->begin();

        $this->create();
        if ($this->save(['FinanceiroTransacao' => $transacao])) {
            $this->FinanceiroPagamento->set('financeiro_estado_pagamento_id', 2);
            $this->FinanceiroPagamento->set('financeiro_transacao_id', $this->id);
            $this->FinanceiroPagamento->set('data_pagamento', date('Y-m-d'));
            if ($this->FinanceiroPagamento->save()) {
                return $datasource->commit();

            }
        }

        $datasource->rollback();

        return false;
    }

    public function processarDeposito($data)
    {
        $this->Entidade->Aluno->id = $data['FinanceiroTransacao']['aluno_id'];

        $this->Entidade->Aluno->recursive = -1;
        $aluno = $this->Entidade->Aluno->read();

        $dataSource = $this->getDataSource();

        $dataSource->begin();
        //Busca ou cria a nova conta
        $conta = $this->FinanceiroConta->findByEntidadeId($aluno['Aluno']['entidade_id']);
        if ($conta == false) {
            $conta = $this->FinanceiroConta->criarConta($aluno['Aluno']['entidade_id']);

        }

        //Grava os dados da transacao
        $data['FinanceiroTransacao']['financeiro_tipo_transacao_id'] = 1;
        $data['FinanceiroTransacao']['entidade_id'] = $aluno['Aluno']['entidade_id'];
        $data['FinanceiroTransacao']['financeiro_conta_id'] = $conta['FinanceiroConta']['id'];

        $this->create();
        if ($this->save($data)) {
            $novo_deposito_1 = array_merge($data['FinanceiroTransacao'], $data['FinanceiroDeposito']);
            $novo_deposito = ['FinanceiroDeposito' => $novo_deposito_1];

            $novo_deposito['FinanceiroDeposito']['financeiro_transacao_id'] = $this->id;
            $novo_deposito['FinanceiroDeposito']['data_reconciliacao'] = null;
            $novo_deposito['FinanceiroDeposito']['financeiro_estado_deposito_id'] = 1;
            $novo_deposito['FinanceiroDeposito']['semestre_lectivo_id'] = Configure::read('OpenSGA.semestre_lectivo_id');
            //die(debug($novo_deposito));            
            $this->FinanceiroDeposito->create();
            if ($this->FinanceiroDeposito->save($novo_deposito)) {

                //Agora Actualizamos o Saldo da Conta
                $this->FinanceiroConta->id = $conta['FinanceiroConta']['id'];
                $saldo_actual = $this->FinanceiroConta->field('saldo_actual');
                $saldo_novo = $saldo_actual + $data['FinanceiroTransacao']['valor'];
                $this->FinanceiroConta->set('saldo_actual', $saldo_novo);
                if ($this->FinanceiroConta->save()) {
                    return $dataSource->commit();
                } else {
                    $dataSource->rollback();
                }


            } else {
                $dataSource->rollback();

                return false;
            }
        } else {
            $dataSource->rollback();

            return false;
        }
    }

    public function processarPagamento($data)
    {
        $dataSource = $this->getDataSource();
        $dataSource->begin();

        $data['financeiro_tipo_transacao_id'] = 2;


        $this->create();
        if ($this->save(['FinanceiroTransacao' => $data])) {
            $this->FinanceiroPagamento->create();
            $data['financeiro_transacao_id'] = $this->id;
            if ($this->FinanceiroPagamento->save(['FinanceiroPagamento' => $data])) {
                $this->FinanceiroConta->id = $data['financeiro_conta_id'];
                $saldo_actual = $this->FinanceiroConta->field('saldo_actual');
                $saldo_novo = $saldo_actual - $data['valor'];
                $this->FinanceiroConta->set('saldo_actual', $saldo_novo);


                if ($this->FinanceiroConta->save()) {
                    $dataSource->commit();

                    return $this->FinanceiroPagamento->id;
                } else {
                    $datasource->rollback();
                }
            } else {
                $dataSource->rollback();
            }
        } else {
            $dataSource->rollback();
        }


    }

    public function validaPagamento($data)
    {
        $this->FinanceiroPagamento->FinanceiroTipoPagamento->id = $data['FinanceiroPagamento']['financeiro_tipo_pagamento_id'];
        $valor_real = $this->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
        if ($valor_real > $data['FinanceiroPagamento']['valor']) {
            return 0;
        } elseif ($valor_real == $data['FinanceiroPagamento']['valor']) {
            return 1;
        } else {
            return 2;
        }

    }

}
