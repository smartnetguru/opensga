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
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class Matricula extends AppModel {
	var $name = 'Matricula';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Aluno' => array(
			'className' => 'Aluno',
			'foreignKey' => 'aluno_id',
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
		'Planoestudo' => array(
			'className' => 'Planoestudo',
			'foreignKey' => 'planoestudo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estadomatricula' => array(
			'className' => 'Estadomatricula',
			'foreignKey' => 'estadomatricula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Turno' => array(
			'className' => 'Turno',
			'foreignKey' => 'turno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Anolectivo' => array(
			'className' => 'Anolectivo',
			'foreignKey' => 'anolectivo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    var $validate = array(
        'Aluno_id' =>array(
            'rule'=>'validaMatricula',
            'message'=>'Este aluno ja possui uma matricula activa'
        )
    );


	/**
	 * Retorna todos os alunos matriculados num dado plano de estudos
	 */
	function getAllAlunosMatriculados($anolectivo_id){
		$alunos = $this->find('all',array('conditions'=>array('anolectivo_id'=>$anolectivo_id),'fields'=>array('aluno_id','Aluno.codigo')));
		return $alunos;
	}
    function validaMatricula($check){
        $aluno = $check['aluno_id'];
        $alunos = $this->find('all',array('conditions'=>array('aluno_id'=>$aluno,'estadomatricula_id'=>4)));
       
        if(empty($alunos)){return true;}
        return false;
    }
	function verificaStatusAluno($id_aluno){
       $query = "SELECT estadomatricula_id FROM matriculas WHERE aluno_id ={$id_aluno}";
	   $resultado = $this->query($query);
	   //var_dump($resultado);
	   return $resultado;
    }

    function getAlunosForMatricula(){
        App::import('Model','Aluno');
        $aluno = new Aluno;

        $matriculados_f = $this->find('list',array('conditions'=>array('estadomatricula_id'=>4,'estadomatricula_id'=>3,'estadomatricula_id'=>1),'fields'=>'aluno_id'));
        $matriculados = array();
        foreach($matriculados_f as $f){
            $matriculados[] = $f;
        }
        $alunos = $aluno->find('list',array('conditions'=>array("NOT"=>array('Aluno.id'=>$matriculados)),'order'=>array('Aluno.name')));
       return $alunos;
    }
	
	
   function getAlunosForMatricula1(){
        App::import('Model','Aluno');
        $aluno = new Aluno;

        $matriculados_f = $this->find('list',array('conditions'=>array('estadomatricula_id'=>1),'fields'=>'aluno_id'));
        $matriculados = array();
        foreach($matriculados_f as $f){
            $matriculados[] = $f;
        }
        $alunos = $aluno->find('list',array('conditions'=>array(array('Aluno.id'=>$matriculados)),'order'=>array('Aluno.name')));
       return $alunos;
    }
	
}
?>