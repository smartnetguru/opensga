<?php
/**
 * Model do plano de estudo
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA-Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 * @property Planoestudo @Planoestudo
 * @todo Dar a possibilidade de activar e desactivar um plano de estudos
 */
 
class Planoestudo extends AppModel {
	var $name = 'Planoestudo';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
    
    var $hasMany = array(
		'Planoestudoano' => array(
			'className' => 'Planoestudoano',
			'foreignKey' => 'planoestudo_id',
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
         *Nao usar esta funcao
         * @param type $plano_id
         * @return type 
         */
        function getAllDisciplinasByPlanoEstudo($plano_id){
            trigger_error("Deprecated function called.", E_USER_NOTICE);
            App::import('Model','planoestudoano');
            $planoestudoano = new Planoestudoano;
            $query = "Select p.id,planoestudo_id,ano,semestre,cargahorariateoricas,cargahorariapraticas,d.id,d.name,d.codigo,pe.curso_id,pe.name ";
            $query .="from planoestudoanos p,disciplinas d,planoestudos pe ";
            $query .="where p.disciplina_id = d.id and p.planoestudo_id = {$plano_id} and p.planoestudo_id=pe.id ";
            $query .="order by ano, semestre, d.name ";
            $disciplinas = $this->query($query);
            for($i=0;$i<count($disciplinas);$i++){
                $disciplinas[$i]['pr']=$this->getAllPrecedenciasByDisciplina($disciplinas[$i]['d']['id'],$plano_id);
                
            }
            return $disciplinas;
        }
        
        public function getAllDisciplinas($plano_id){
            
            $this->Planoestudoano->contain(array(
                'Disciplina'
            ));
            $disciplinas = $this->Planoestudoano->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id)));
            return $disciplinas;
        }
		
        function deleteAllDisciplinasByPlanoEstudo($plano_id){
            App::import('Model','planoestudoano');
            $planoestudoano = new Planoestudoano;
            $query = "delete from planoestudoanos  where planoestudo_id = {$plano_id} ";
            $resultado = $this->query($query);
			return $resultado;
        }	

        function deleteAllGrupoDiscByPlanoEstudo($plano_id){
            App::import('Model','Grupodisciplina');
            $planoestudogruposdisc = new Grupodisciplina;
            $query = "delete from grupodisciplinas where planoestudo_id = {$plano_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }			
		

       function getAllMatriculasByPlanoEstudo($plano_id){
            App::import('Model','planoestudoano');
            $planoestudoano = new Planoestudoano;
            $query = "select tm.id ";
            $query .="from planoestudos tp , matriculas tm ";
            $query .="where tm.planoestudo_id=tp.id and tm.planoestudo_id = {$plano_id} ";
            $resultado = $this->query($query);
			
			//var_dump($resultado);
			return $resultado;
        }		
		

        function getAllPrecedenciasByDisciplina($disciplina_id,$plano_id=null){
            App::Import('Model','Grupodisciplina');
            $grupodisciplinas = new Grupodisciplina;
            
            $o = $grupodisciplinas->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipoprecedencia_id'=>'O'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
            $obr=array();
            foreach($o as $ob){
                $obr[$ob['Grupodisciplina']['id']]=$ob['Disciplina']['name'];
            }
            $a = $grupodisciplinas->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipoprecedencia_id'=>'A'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
            $acs=array();
            foreach($a as $ac){
                
                $acs[$ac['Grupodisciplina']['id']]=$ac['Disciplina']['name'];
            }
            $precedencias = array('a'=>$acs,'o'=>$obr);
           

            return $precedencias;
        }
        
        /**
         *Retorna todas as disciplinas que podem ser precedentes da disciplina em questao
         * @param type $disciplina_id
         * @param type $plano_id
         * @todo Depois usar containable para optimizar 
         */
        public function getAllDisciplinasForPrecedencia($disciplina_id,$plano_id){
            //Primeiro verificamos o ano e o semestre da disciplina em questao
            $disciplina_plano = $this->Planoestudoano->find('first',array('conditions'=>array('disciplina_id'=>$disciplina_id,'planoestudo_id'=>$plano_id )));
            //Agora buscamos todas as disciplinas daquele plano que podem ser precedentes
            $disciplinas_precedentes = $this->Planoestudoano->find('all',array('conditions'=>array('planoestudo_id'=>$plano_id,"OR"=>array('ano <'=>$disciplina_plano['Planoestudoano']['ano'],"AND"=>array('semestre <'=>$disciplina_plano['Planoestudoano']['semestre'],'ano'=>$disciplina_plano['Planoestudoano']['ano'])))));
          return $disciplinas_precedentes;
        }
		
		

}