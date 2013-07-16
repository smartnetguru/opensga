<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 
 
class MatriculasController extends AppController {

	var $name = 'Matriculas';
    
    
    /**
     *Overview das Matriculas
     * Mostra o grafico de Novos ingressos por Curso 
     */
	function index() {
		$matriculas_novas = $this->Matricula->find('all',array('conditions'=>array('Matricula.anolectivo_id'=>Configure::read('OpenSGA.ano_lectivo_id'),'Matricula.tipo_matricula_id'=>array(1,0)),'group'=>array('Matricula.curso_id','Matricula.turno_id'),'fields'=>array('Count(*) as total','Curso.name','Turno.name','Curso.id','Turno.id')));
        
        
        
        $this->set(compact('matriculas_novas'));
	}
    
    function lista_matriculas_por_curso_turno($curso_id=null,$turno_id=null){
        $this->Matricula->contain(
                array(
                    'Curso'=>array(
                        'fields'=>array(
                            'id','name','codigo'
                        )
                    ),'Turno','Aluno'=>array(
                        'Entidade'=>array(
                            'fields'=>array(
                                'name','id'
                            )
                        ),
                        'fields'=>array(
                            'id','codigo','entidade_id'
                        )
                    )
                )
        );
        $conditions = array('Matricula.anolectivo_id'=>Configure::read('OpenSGA.ano_lectivo_id'),'Matricula.tipo_matricula_id'=>1);
        if($curso_id!=null){
            if($curso_id==18){
               $limite_sala = 30;
            }
            else{
                $limite_sala=42;
            }
            $conditions[]=array('Matricula.curso_id'=>$curso_id);
            
        }
        if($turno_id != null){
            $conditions[] = array('Matricula.turno_id'=>$turno_id);
        }
        $matriculas_novas2 = $this->Matricula->find('all',array('conditions'=>$conditions,'order'=>array('Matricula.curso_id','Matricula.turno_id')));
        
        $ii=0;
        $jj=0;
        $matriculas_nova = array();
        foreach($matriculas_novas2 as $mn2){
            if($ii==$limite_sala){
                $ii=1;
                $jj=$jj+1;
            }
            $matriculas_nova[$jj][]=$mn2;
            $ii=$ii+1;
        }
        
        
        $this->set(compact('matriculas_nova','curso_id','turno_id'));
        //$this->layout = 'pdf';
    }

	function view($id = null) {
	    //App::Import('Model','Logmv');
	    //$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Matricula->read(null, $id);
			//$logmv->logview(10,$this->Session->read('Auth.User.id'),$id,$this->data["Matricula"]["name"]);
		}
		$alunos = $this->Matricula->Aluno->find('list');
		$cursos = $this->Matricula->Curso->find('list');
		$planoestudos = $this->Matricula->Planoestudo->find('list');
		$users = $this->Matricula->User->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos', 'users'));
	}

	function add() {
	    //App::Import('Model','Logmv');
	    //$logmv = new Logmv;
		if (!empty($this->data)) {
			$this->Matricula->create();
            $this->data['Matricula']['tg0021estadomatricula_id']=1;
			if ($this->Matricula->save($this->data)) {
			//$logmv->logInsert(10,$this->Session->read('Auth.User.id'),$this->Matricula->getLastInsertID(),$this->data["Matricula"]["codigo"]);
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');}
		}
		$alunos = $this->Matricula->getAlunosForMatricula();
		//sort($alunos);
		$cursos = $this->Matricula->Curso->find('list');
		$planoestudos = $this->Matricula->Planoestudo->find('list');
		$users = $this->Matricula->User->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos', 'users'));
	}

	function edit($id = null) {
	    $this->Matricula->id=$id;
        if(!$this->Matricula->exists()){
            throw new NotFoundException('Matricula Invalida');
        }
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Matricula->save($this->data)) {
			
			   
				$this->Session->setFlash('Dado Editados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
		if (empty($this->data)) {
			$this->data = $this->Matricula->read(null, $id);
			 //$logmv->logUpdate(10,$this->Session->read('Auth.User.id'),$id,$this->data["Matricula"]["codigo"]);
		}
		$alunos = $this->Matricula->Aluno->find('list',array('order'=>'id'));
		$cursos = $this->Matricula->Curso->find('list');
		$planoestudos = $this->Matricula->Planoestudo->find('list');
		$users = $this->Matricula->User->find('list');
		$this->set(compact('Alunos', 't0003cursos', 't0005planoestudos', 'users'));
	}

	function delete($id = null) {
	    //App::Import('Model','Logmv');
	    //$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 't0011matricula'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Matricula->delete($id)) {
		    //$logmv->logDelete(10,$this->Session->read('Auth.User.id'),$id,'Delete Matricula');
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Matricula'));
		$this->redirect(array('action' => 'index'));
	}
        function beforeRender(){
            $this->set('current_section','manutencao');
        }
        function pdf_index(){
		//App::Import('Model','Logmv');
	    //$logmv = new Logmv;
            Configure::write('debug',0); // Otherwise we cannot use this method while developing
            $matricula = $this->Matricula->find('all',array("order"=>"Aluno.name"));
			$estado = "";
            $listas = array();
            foreach( $matricula as $m){
			//var_dump($matricula[0]["Matricula"]["tg0021estadomatricula_id"]);
                $lista = array();
                $lista[] =$m["Matricula"]["id"];
                $lista[] =$m["Aluno"]["name"];
	        $lista[] =str_replace("Licenciatura em"," L.",$m["Curso"]["name"]);
                $lista[] =$m["Planoestudo"]["name"];
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] == 1)
				$estado = "Normal";
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] == 2)
				$estado = "Anulada";
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] == 3)
				$estado = "Suspensa";
				if($matricula[0]["Matricula"]["tg0021estadomatricula_id"] ==4)
				$estado = "Concluida";
				
				$lista[] =$estado;
                $lista[] =$m["Matricula"]["data"];
                $listas[] =$lista;
            }
           // $this->set('cursos',$this->Curso->find('all'));
           $this->set('lista',$listas);
           $this->layout = 'pdf'; //this will use the pdf.ctp layout
           $this->render();
        }


          function ajax_update_plano_estudos(){

            $curso = $this->data["Matricula"]["t0003curso_id"];

            $planoestudos = $this->Matricula->Planoestudo->find('list',array('conditions'=>array('t0003curso_id'=>$curso)));
            $this->set('planoestudos',$planoestudos);
            $this->layout = 'ajax';
        }
        
        public function lista_alunos_excel($curso_id=null,$turno_id=null){
            $this->Matricula->contain(
                array(
                    'Curso'=>array(
                        'fields'=>array(
                            'id','name','codigo'
                        )
                    ),'Turno','Aluno'=>array(
                        'Entidade'=>array(
                            'fields'=>array(
                                'name','id'
                            )
                        ),
                        'fields'=>array(
                            'id','codigo','entidade_id'
                        )
                    )
                )
        );
        $conditions = array('Matricula.anolectivo_id'=>Configure::read('OpenSGA.ano_lectivo_id'),'Matricula.tipo_matricula_id'=>array(0,1));
        if($curso_id!=null){
            if($curso_id==18){
               $limite_sala = 30;
            }
            else{
                $limite_sala=38;
            }
            $conditions[]=array('Matricula.curso_id'=>$curso_id);
            
        }
        if($turno_id != null){
            $conditions[] = array('Matricula.turno_id'=>$turno_id);
        }
        
        $matriculas_novas2 = $this->Matricula->find('all',array('conditions'=>$conditions,'order'=>array('Matricula.curso_id','Matricula.turno_id')));
        
       // die(debug($matriculas_novas2));
        
        $ii=0;
        $jj=0;
        $matriculas_nova = array();
        foreach($matriculas_novas2 as $mn2){
            if($ii==$limite_sala){
                $ii=0;
                $jj=$jj+1;
            }
            $matriculas_nova[$jj][]=$mn2;
            $ii=$ii+1;
        }
        
        
        $this->set(compact('matriculas_nova','curso_id','turno_id'));
        //$this->layout = 'pdf';
        }
        
        
        public function exportar_matriculas(){
            
            $this->Matricula->contain(array(
                'Anolectivo'
            ));
            $matriculas = $this->Matricula->find('all',array('conditions'=>array('Anolectivo.ano'=>2013)));
            die(debug($matriculas));
        }

}
?>