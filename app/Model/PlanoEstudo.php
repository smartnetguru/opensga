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
 * @property PlanoEstudo @PlanoEstudo
 * @todo Dar a possibilidade de activar e desactivar um plano de estudos
 */
 
class PlanoEstudo extends AppModel {
	var $name = 'PlanoEstudo';
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
		'DisciplinaPlanoEstudo' => array(
			'className' => 'DisciplinaPlanoEstudo',
			'foreignKey' => 'plano_estudo_id',
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
         * 
         * @fixme Rever como se buscam as precedencias
         */
        function getAllDisciplinasByPlanoEstudo($plano_id){
            trigger_error("Deprecated function called.", E_USER_NOTICE);
            App::import('Model','planoestudoano');
            $planoestudoano = new DisciplinaPlanoEstudo;
            $query = "Select p.id,plano_estudo_id,ano,semestre,cargahorariateoricas,cargahorariapraticas,d.id,d.name,d.codigo,pe.curso_id,pe.name ";
            $query .="from planoestudoanos p,disciplinas d,planoestudos pe ";
            $query .="where p.disciplina_id = d.id and p.plano_estudo_id = {$plano_id} and p.plano_estudo_id=pe.id ";
            $query .="order by ano, semestre, d.name ";
            $disciplinas = $this->query($query);
            for($i=0;$i<count($disciplinas);$i++){
                //$disciplinas[$i]['pr']=$this->getAllPrecedenciasByDisciplina($disciplinas[$i]['d']['id'],$plano_id);
                
            }
            return $disciplinas;
        }
        
        public function getAllDisciplinas($plano_id){
            
            $this->DisciplinaPlanoEstudo->contain(array(
                'Disciplina','PlanoEstudo'
            ));
            $disciplinas = $this->DisciplinaPlanoEstudo->find('all',array('conditions'=>array('plano_estudo_id'=>$plano_id)));
            return $disciplinas;
        }
		
        function deleteAllDisciplinasByPlanoEstudo($plano_id){
            App::import('Model','planoestudoano');
            $planoestudoano = new DisciplinaPlanoEstudo;
            $query = "delete from planoestudoanos  where plano_estudo_id = {$plano_id} ";
            $resultado = $this->query($query);
			return $resultado;
        }	

        function deleteAllGrupoDiscByPlanoEstudo($plano_id){
            App::import('Model','Grupodisciplina');
            $planoestudogruposdisc = new Grupodisciplina;
            $query = "delete from grupodisciplinas where plano_estudo_id = {$plano_id} ";
           	$resultado = $this->query($query);
			return $resultado;
        }			
		

       function getAllMatriculasByPlanoEstudo($plano_id){
            App::import('Model','planoestudoano');
            $planoestudoano = new DisciplinaPlanoEstudo;
            $query = "select tm.id ";
            $query .="from planoestudos tp , matriculas tm ";
            $query .="where tm.plano_estudo_id=tp.id and tm.plano_estudo_id = {$plano_id} ";
            $resultado = $this->query($query);
			
			//var_dump($resultado);
			return $resultado;
        }		
		

        function getAllPrecedenciasByDisciplina($disciplina_id,$plano_id=null){
            App::Import('Model','Grupodisciplina');
            $grupodisciplinas = new Grupodisciplina;
            
            
            $o = $grupodisciplinas->find('all',array('conditions'=>array('plano_estudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipoprecedencia_id'=>'O'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
            $obr=array();
            foreach($o as $ob){
                $obr[$ob['Grupodisciplina']['id']]=$ob['Disciplina']['name'];
            }
            $a = $grupodisciplinas->find('all',array('conditions'=>array('plano_estudo_id'=>$plano_id,'disciplina_id'=>$disciplina_id,'tipoprecedencia_id'=>'A'),'fields'=>array('Grupodisciplina.id','Disciplina.name')));
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
            $disciplina_plano = $this->DisciplinaPlanoEstudo->find('first',array('conditions'=>array('disciplina_id'=>$disciplina_id,'plano_estudo_id'=>$plano_id )));
            //Agora buscamos todas as disciplinas daquele plano que podem ser precedentes
            $disciplinas_precedentes = $this->DisciplinaPlanoEstudo->find('all',array('conditions'=>array('plano_estudo_id'=>$plano_id,"OR"=>array('ano <'=>$disciplina_plano['DisciplinaPlanoEstudo']['ano'],"AND"=>array('semestre <'=>$disciplina_plano['DisciplinaPlanoEstudo']['semestre'],'ano'=>$disciplina_plano['DisciplinaPlanoEstudo']['ano'])))));
          return $disciplinas_precedentes;
        }
		
		

}