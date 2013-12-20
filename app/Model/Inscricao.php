<?php

/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0
 * @
 *
 * @property Aluno $Aluno
 * @property FinanceiroTransacao $FinanceiroTransacao
 *
 */
class Inscricao extends AppModel {

    var $name = 'Inscricao';
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    public $actsAs = array('Auditable.Auditable');
    var $belongsTo = array(
        'Aluno' => array(
            'className' => 'Aluno',
            'foreignKey' => 'Aluno_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Turma' => array(
            'className' => 'Turma',
            'foreignKey' => 'turma_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Estadoinscricao' => array(
            'className' => 'Estadoinscricao',
            'foreignKey' => 'estadoinscricao_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Epocaavaliacao' => array(
            'className' => 'Epocaavaliacao',
            'foreignKey' => 'epocaavaliacao_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Matricula' => array(
            'className' => 'Matricula',
            'foreignKey' => 'matricula_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    var $hasMany = array(
        'Avaliacao' => array(
            'className' => 'Avaliacao',
            'foreignKey' => 'inscricao_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );


    /**
     *Calcula os valores de pagamentos relativos a Inscricao, de acordo com as cadeiras e o tipo de inscricao seleccionados
     * @param type $data
     */
    public function calculaValoresInscricao($data){


        $inscricao_normal = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(44);
        $inscricao_atraso = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(45);

        $mensalidade_atraso = $this->Aluno->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(30);

        debug($inscricao_normal);
        die(debug($data));
    }
    /**
     * Retorna a lista de todos os alunos que podem fazer inscricao
     * Podem fazer inscricao os alunos que tiverem a matricula activa
     * @return array()
     */
    function findAllAlunos() {
        App::import('Model', 'Matricula');
        $matriculas = new Matricula;
        //$matriculas->recursive=-1;
        $alunos = $matriculas->find('all', array('conditions' => array('estadomatricula_id' => 1), 'order' => array('name ASC')));
        $alunos2 = array();
        foreach ($alunos as $aluno) {
            $alunos2[$aluno['Aluno']['id']] = $aluno['Aluno']['name'];
        }
        return $alunos2;
    }

    /**
     * Devolve todas as cadeiras inscritas por um aluno num dado Semestre
     * @param type $aluno_id
     * @param type $semestre_id
     */
    public function getAllCadeirasInscritasByAlunoSemestre($aluno_id, $semestre_id = null) {

        //Se o semestre nao for mencionado, usamos o semestre actual
        if ($semestre_id == null)
            $semestre_id = Configure::read('OpenSGA.semestre_lectivo_id');

        $this->contain(array(
            'Turma'
        ));
        return $this->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id, 'Turma.semestrelectivo_id' => $semestre_id)));
    }

    /**
     * Verifica se um aluno pode se inscrever na cadeira em questao
     */
    function validaInscricao($inscricao_data) {
        $this->recursive = -1;
        $turma = $this->find('first', array('conditions' => array('turma_id' => $inscricao_data['Inscricao']['turma_id'], 'aluno_id' => $inscricao_data['Inscricao']['aluno_id'], 'matricula_id' => $inscricao_data['Inscricao']['matricula_id'])));
        if (!$turma) {
            return true;
        }
        return FALSE;
    }

    public function inscreveAluno($data) {
        $dataSource = $this->getDataSource();
        $dataSource->useNestedTransactions = true;

        $dataSource->begin();
        $this->FinanceiroTransacao = ClassRegistry::init('FinanceiroTransacao');
        
        //Primeiro Realizamos o deposito
        if ($this->FinanceiroTransacao->processarDeposito($data)) {


            //Temos de ver se o valor depositado é suficiente para pagar a Inscrição
            $valor_total_inscricao = $data['total_normal'] + $data['total_atraso'];
            $conta = $this->Aluno->getContaByAlunoId($data['FinanceiroTransacao']['aluno_id']);
           /** if ($valor_total_inscricao > $conta['FinanceiroConta']['saldo_actual']) {
                return false;
            }
*/




            foreach ($data['turmas'] as $turma_id) {

                //Primeiro gravamos o pagamento ;)
                if ($data['turmas_tipo'][$turma_id] == 1) {
                    $tipo_pagamento_id = 35;
                    $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 35;
                    $valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
                } else {
                    $tipo_pagamento_id = 36;
                    $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 36;
                    $valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
                }

                //Mas antes do Pagamento, a Transacao

                $pagamento_inscricao = array(
                    'aluno_id' => $data['FinanceiroTransacao']['aluno_id'],
                    'financeiro_conta_id' => $conta['FinanceiroConta']['id'],
                    'valor' => $valor,
                    'data_pagamento' => date('Y-m-d'),
                    'financeiro_tipo_pagamento_id' => $tipo_pagamento_id,
                    'data_orcamento' => date('Y-m-d'),
                    'financeiro_estado_pagamento_id' => 2,
                    'anolectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'),
                    'data_emissao' => date('Y-m-d'),
                    'semestrelectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'),
                    'entidade_id' => $conta['FinanceiroConta']['entidade_id']
                );

                $pagamento_id = $this->FinanceiroTransacao->processarPagamento($pagamento_inscricao);
                if ($pagamento_inscricao) {

                    $inscricao_save = array('Inscricao' => array('aluno_id' => $data['aluno_id'], 'turma_id' => $turma_id, 'estadoinscricao_id' => 1, 'matricula_id' => $data['matricula_id'], 'data' => date('Y-m-d'), 'pagamento_id' => $pagamento_id));

                    if ($this->validaInscricao($inscricao_save)) {
                        $this->create();
                        if (!$this->save($inscricao_save)) {
                            $dataSource->rollback();
                            return false;
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

            //Chamamos o Metodo Gera Pagamentos, Para Gerar os pagamentos deste Aluno
            if ($this->FinanceiroTransacao->FinanceiroPagamento->gerarPagamentosByAluno($data['FinanceiroTransacao']['aluno_id'],$data)) {
                return $dataSource->commit();
            }
            //return $dataSource->commit();
        }


        $dataSource->rollback();
    }

}

?>