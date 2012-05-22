<?php
App::uses('AppModel', 'Model');
/**
 * Classe Model do Aluno
 * 
 * @copyright     Copyright (C) 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.estudantes
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0

 * 
 * @property User $User
 * @property Matricula $Matricula
 * 
 * 
 */
 
 
class Aluno extends AppModel {
	var $name = 'Aluno';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Entidade' => array(
			'className' => 'Entidade',
			'foreignKey' => 'entidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Genero' => array(
			'className' => 'Genero',
			'foreignKey' => 'genero_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Escola' => array(
			'className' => 'Escola',
			'foreignKey' => 'escola_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),		

	);
	
	var $hasMany = array(
		'Matricula' => array(
			'className' => 'Matricula',
			'foreignKey' => 'aluno_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
        'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'aluno_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
        'Pagamento' => array(
			'className' => 'Pagamento',
			'foreignKey' => 'aluno_id',
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
         *Retorna o plano de estudos activo do aluno
         * @param int $id
         * @return int
         */
        function getPlanoEstudoCorrente($id){
            App::import('Model','Matricula');
            $matriculas = new Matricula;
            $matriculas->recursive=-1;

            $matricula = $matriculas->find('all',array('conditions'=>array('tg0021estadomatricula_id'=>1,'Aluno_id'=>$id)));

            $plano_estudo = $matricula[0]['Matricula']['t0005planoestudo_id'];
            return $plano_estudo;
        }


		/**
		 * Funcao generica para retornar todas as turmas de um aluno com base no estado da turma
		 * @Todo Testar :-)
		 */	
        function getAllTurmasByEstado($aluno,$estado = 1){
            App::import('Model','Turma');
            App::import('Model','Inscricao');
			App::import('Model','Matricula');
			
            $turma = new Turma;
            $inscricao  = new Inscricao;
			$Matricula = new Matricula;
			
			$plano_estudo = $this->query("Select planoestudo_id from matriculas where aluno_id = {$aluno}");
            $turma->recursive=-1;
			
            $turmas = $turma->getAllTurmasActivasByPlanoEstudo($plano_estudo[0]['matriculas']['planoestudo_id']);
            
			return $turmas;
            
        }
		
		function getAllTurmasByAluno($aluno_id,$estado=1){
            App::import('Model','Turma');
            App::import('Model','Inscricao');
			App::import('Model','Matricula');
			
            $turma = new Turma;
            $inscricao  = new Inscricao;
			$Matricula = new Matricula;
			
			$plano_estudo = $this->query("Select planoestudo_id from matriculas where aluno_id = {$aluno}");
            $turma->recursive=-1;
            $turmas = $turma->getAllTurmasByAluno($plano_estudo[0]['matriculas']['planoestudo_id']);
			return $turmas;
		}

       // function getAllTurmasCompletas

        function geraCodigo(){
            	$ano=date('Y');
				$this->recursive=-1;
            	$id = $this->find('count', array('conditions'=>array('Aluno.codigo LIKE'=>'%'.$ano.'%'),'order' => array('Aluno.created DESC'),'fields'=>'id'));
            $id_for=str_pad($id+1, 4,"0",STR_PAD_LEFT);
            $codigo = $ano.$id_for;
			
			return $codigo;
        }
		
		/**
		 * Devolve todas as turmas que o aluno pode se inscrever, baseado nas cadeiras feitas e precedencias
		 * @Todo por enquanto as precedencias e cadeiras feitas nao sao processadas
		 */
		function getAllTurmasForInscricao(){
			
		}



}
