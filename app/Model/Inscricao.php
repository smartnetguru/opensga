<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
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
         *Retorna a lista de todos os alunos que podem fazer inscricao
         * Podem fazer inscricao os alunos que tiverem a matricula activa
         * @return array()
         */
        function findAllAlunos(){
            App::import('Model','Matricula');
            $matriculas = new Matricula;
            //$matriculas->recursive=-1;
            $alunos = $matriculas->find('all',array('conditions'=>array('tg0021estadomatricula_id'=>1),'order'=> array ('name ASC')));
            $alunos2 = array();
            foreach($alunos as $aluno){
                $alunos2[$aluno['Aluno']['id']] = $aluno['Aluno']['name'];
            }
		    return $alunos2;
        }
		// Devolve o turno da Turma
		function getAnolectivo($turma_id){
            $query = "SELECT tal.codigo FROM turmas tt, anolectivos tal WHERE tt.anolectivo_id=tal.id and tt.id= {$turma_id}";
            //var_dump($query);
			$resultado = $this->query($query);
			return $resultado;				
		}
        
        /**
         * Verifica se um aluno pode se inscrever na cadeira em questao
         */
        function validaInscricao($inscricao_data){
            $this->recursive = -1;
            $turma = $this->find('first',array('conditions'=>array('turma_id'=>$inscricao_data['Inscricao']['turma_id'],'aluno_id'=>$inscricao_data['Inscricao']['aluno_id'],'matricula_id'=>$inscricao_data['Inscricao']['matricula_id'])));
            if(!$turma){
                return true;
            }
            return FALSE;
        }
        
        
        public function inscreveAluno($data){
            $dataSource = $this->getDataSource();
            $dataSource->useNestedTransactions = true;
            
            $dataSource->begin();
           $this->FinanceiroTransacao =  ClassRegistry::init('FinanceiroTransacao');
           
           //Primeiro Realizamos o deposito
           if($this->FinanceiroTransacao->processarDeposito($data)){
               
               
               //Temos de ver se o valor depositado é suficiente para pagar a Inscrição
               $valor_total_inscricao  = $data['total_normal'] + $data['total_atraso'];
               $conta = $this->Aluno->getContaByAlunoId($data['FinanceiroTransacao']['aluno_id']);
               if($valor_total_inscricao > $conta['FinanceiroConta']['saldo_actual']){
                   return false;
               }
               
               foreach($data['turmas'] as $turma_id){
                
                    //Primeiro gravamos o pagamento ;)
                    if($data['turmas_tipo'][$turma_id]==1){
                        $tipo_pagamento_id = 35;
                        $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 35;
                        $valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
                    }
                    else{
                        $tipo_pagamento_id = 36;
                        $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->id = 36;
                        $valor = $this->FinanceiroTransacao->FinanceiroPagamento->FinanceiroTipoPagamento->field('valor');
                    }
                    
                    //Mas antes do Pagamento, a Transacao
                    
                    $pagamento_inscricao = array(
                        'aluno_id'=>$data['FinanceiroTransacao']['aluno_id'],
                        'financeiro_conta_id'=>$conta['FinanceiroConta']['id'],
                        'valor'=>$valor,
                        'data_pagamento'=>date('Y-m-d'),
                        'financeiro_tipo_pagamento_id'=>$tipo_pagamento_id,
                        'data_orcamento'=>date('Y-m-d'),
                        'financeiro_estado_pagamento_id'=>2,
                        'anolectivo_id'=>Configure::read('OpenSGA.ano_lectivo_id'),
                        'data_emissao'=>date('Y-m-d'),
                        'semestrelectivo_id'=>Configure::read('OpenSGA.semestre_lectivo_id'),
                        'entidade_id'=>$conta['FinanceiroConta']['entidade_id']
                    );
                    
                    $pagamento_id = $this->FinanceiroTransacao->processarPagamento($pagamento_inscricao);
                    if($pagamento_inscricao){
                      
                        $inscricao_save = array('Inscricao'=>array('aluno_id'=>$data['aluno_id'],'turma_id'=>$turma_id,'estadoinscricao_id'=>1,'matricula_id'=>$data['matricula_id'],'data'=>date('Y-m-d'),'pagamento_id'=>$pagamento_id));

                        if($this->validaInscricao($inscricao_save)){
                            $this->create();
                            if(!$this->save($inscricao_save)){
                                $dataSource->rollback();
                                return false;
                            }
                        } else{
                            $dataSource->rollback();
                            return false;
                        } 
                    } else{
                        $dataSource->rollback();
                        return false;
                    }
                    

               }
               
               //Chamamos o Metodo Gera Pagamentos, Para Gerar os pagamentos deste Aluno
               if($this->FinanceiroTransacao->FinanceiroPagamento->gerarPagamentosByAluno($data['FinanceiroTransacao']['aluno_id'])){
                   return $dataSource->commit();
               }
               //return $dataSource->commit();
           }
           
            
            $dataSource->rollback();
            
            
           
            
        }
       /* var $validate = array
(
    'first_column' => array
    (
        'unique' => array
        (
            'rule' => array('checkUnique', array('first_column', 'second_column', 'third_column')),
            'message' => 'Your input violates a unique key constraint, check your input and try again.',
        )
    ),
);
*/
		

}
?>