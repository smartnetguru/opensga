<?php
//App::uses('AppModel', 'Model');
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
    //var $recursive = 0;
	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
   
    
    public $hasOne = array(
        'AlunoNivelMedio' => array(
            'className'    => 'AlunoNivelMedio',
            'dependent'    => true
        )
    );

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
        'Areatrabalho' => array(
			'className' => 'Areatrabalho',
			'foreignKey' => 'areatrabalho_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
        'Faculdade' => array(
			'className' => 'Faculdade',
			'foreignKey' => 'faculdade_ingresso_id',
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
    
    public $validate = array(
        'curso_id' => array(
            'rule'       => 'alphaNumeric', // or: array('ruleName', 'param1', 'param2' ...)
            'required'   => true,
            'allowEmpty' => false,
            'on'         => 'create', // or: 'update'
            'message'    => 'Curso é um campo obrigatório'
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

            $matricula = $matriculas->find('all',array('conditions'=>array('estadomatricula_id'=>1,'Aluno_id'=>$id)));

            $plano_estudo = $matricula[0]['Matricula']['t0005planoestudo_id'];
            return $plano_estudo;
        }
        
        /**
         *Retorna as cadeiras em que o aluno esta inscrito actualmente 
         */
        public function getAllCadeirasActivas(){
            $inscrioes = $this->Inscricao->find('all',array('conditions'=>array('Inscricao.estadoinscricao_id'=>1)));
            return $inscrioes;
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
         * 
         * 
         * @todo falta isso
		 */
		function getAllTurmasForInscricao(){
			
		}
        
        public function cadastraAluno(array $data){
            $dataSource = $this->getDataSource();
            
            $dataSource->begin();

                $data_matricula = array();
                if($data['Aluno']['numero_estudante']==''){
                    $data['Aluno']['codigo'] = $this->geraCodigo();
                }
                else{
                    $data['Aluno']['codigo'] = $data['Aluno']['numero_estudante'];
                    $data['Aluno']['numero_estudante_antigo'] = $data['Aluno']['numero_estudante'];
                }
            
                    //Grava os dados do Usuario
                $this->User->create();
                $data['User']['username'] = $data['Aluno']['codigo'];
                    $data['User']['password'] = AuthComponent::password($data['Aluno']['codigo']);
                    $data['User']['codigocartao'] = $data['Aluno']['codigo'];
                    $data['User']['name'] = $data['Entidade']['name'];
                    $data['User']['group_id'] = 3;
                    if($this->User->save($data)){
                        //Grava os dados da Entidade
                        $data['Aluno']['user_id'] = $this->User->getLastInsertID();
                        $data['Entidade']['user_id']=$this->User->getLastInsertID();
                        $this->Entidade->create();
                        if($this->Entidade->save($data)){

                            //Grava os dados do Aluno
                            $data['Aluno']['entidade_id'] = $this->Entidade->getLastInsertID();
                            //Escola nao pode ser null
                            if(!isset($data['Aluno']['escola_id'])){
                                $data['Aluno']['escola_id']=1;
                            }
                            $this->create();
                            if ($this->save($data)) {

                                //Pega os dados da matricula e realiza a matricula
                                $data_matricula['aluno_id']= $this->getInsertID();
                                $data_matricula['curso_id'] = $data['Aluno']['curso_id'];
                                $data_matricula['planoestudo_id'] = $data['Aluno']['planoestudo_id'];
                                $data_matricula['estadomatricula_id'] = 1;
                                $data_matricula['data'] = $data['Aluno']['dataingresso'];
                                $data_matricula['user_id'] = SessionComponent::read('Auth.User.id');
                                $data_matricula['anolectivo_id'] = SessionComponent::read('SGAConfig.anolectivo_id');
                                $data_matricula['turno_id'] = $data['Aluno']['turno_id'];
                                $data_matricula['nivel'] = $data['Aluno']['nivel'];
                                if(Configure::read('OpenSGA.matriculas.regimes'==2)){
                                    $data_matricula['regimelectivo_id']==$data['Aluno']['regimelectivo_id'];
                                }

                                $matricula_gravar=array('Matricula'=>$data_matricula);
                                $this->Matricula->create();
                                if($this->Matricula->save($matricula_gravar)){

                                    //Registra os dados do pagamento
                                    $this->Pagamento->gerarPagamentos(SessionComponent::read('SGAConfig.anolectivo_id'),$this->getLastInsertID(),SessionComponent::read('SGAConfig.semestre'));
                                    return $dataSource->commit();
                                }
                            }
                        }
                    }

             
                $dataSource->rollback();
            
        }
        
    public function isBolseiro($aluno_id,$ano_lectivo_id=null){
        
        return TRUE;
    }
    
    /**
     *Verifica se o aluno esta matriculado 
     */
    public function isMatriculado($aluno_id,$anolectivo_id){
        $matricula = $this->Matricula->find('first',array('conditions'=>array('aluno_id'=>$aluno_id,'anolectivo_id'=>$anolectivo_id),'recursive'=>-1));
        return $matricula;
    }
    
    public function setNovaMatricula($data){
        if(empty($data['Matricula']['anolectivo_id'])){
            $data['Matricula']['anolectivo_id']=$data['Sessao']['anolectivo_id'];
        }
        
        $data['Matricula']['user_id'] = $data['Sessao']['user_id'];
        $data['Matricula']['aluno_id'] = $this->id;
        if($this->isMatriculado($this->id, $data['Matricula']['user_id'])){
            return false;
        }
        if($this->Matricula->save($data)){
            return true;
        }
        return false;
    }
    
    public function getPerfilAluno(){
        
    }
    
    /**
     *Retorna o numero de estudantes por faculdade 
     */
    public function getEstudantesByFaculdade(){
        $alunos_faculdade = $this->find('all',array('conditions'=>array(),'group'=>'faculdade_ingresso_id','fields'=>array('Count(*) as total','Faculdade.name')));
        return $alunos_faculdade;
    }
    
    public function getEstudantesByCurso($curso_id){
        $alunos_curso = $this->find('all',array('conditions'=>array('Aluno.curso_ingresso_id'=>$curso_id)));
        
        
        return $alunos_curso;
    }
    
    public function getTotalAlunos()
    {
        return $this->find('count');
    }
    
  



}
