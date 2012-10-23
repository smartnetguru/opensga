<?php
/**
 * Controller de Disciplinas
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0

 *
 */



class DisciplinasController extends AppController {

	var $name = 'Disciplinas';
        var $paginate = array(
            'limit'=>1000
        );

    function index() {
		$this->Disciplina->recursive = 0;
        $disciplinas = $this->Disciplina->find('all');
		$this->set('disciplinas', $disciplinas);
	}

	function ver_disciplina($id = null)
    {

		if (!$id) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
	$this->set('disciplina', $this->Disciplina->read(null, $id));
    // var_dump($this->data);
			if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}
		$grupodisciplinars = $this->Disciplina->Grupodisciplinar->find('list');
		$this->set(compact('grupodisciplinars'));
	}

	function adicionar_disciplina() {
		if (!empty($this->data)) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->data)) {
				$this->Session->setFlash(__('Disciplina Cadastrada com Sucesso'),'default',array('class'=>'alert success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Problemas no cadastro da disciplina.'),'default',array('class'=>'alert error'));
			}
		}

		$this->set(compact('faculdades','departamentos','seccaos'));
	}

	function editar_disciplina($id = null){
        $this->Disciplina->id = $id;
		if(!$this->Disciplina->exists()){
            throw new NotFoundException('Disciplina Inválida');
        }
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			//die(var_dump($this->request->data));
			if ($this->Disciplina->save($this->request->data)) {
			////$logmv->logUpdate(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);

				$this->Session->setFlash('Dados modificados com sucesso','flashok');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Disciplina->read(null, $id);
		}
		
		$this->set(compact('faculdades','departamentos','seccaos'));
	}

/*	function delete($id = null)
	{
	//App::Import('Model','Logmv');
	//$logmv = new Logmv;
		if (!$id) {
			$this->Session->setFlash('Invalido codigo para %s','flasherror');
            $this->redirect(array('action'=>'index'));
		}
		$verifica = $this->Disciplina->query("select id from grupodisciplinas where disciplina_id = {$id}");
		//var_dump($verifica);

		if(empty($verifica))
		{
	    if ($this->Disciplina->delete($id))
		{
		////$logmv->logDelete(4,$this->Session->read('Auth.User.id'),$id,$this->data["Disciplina"]["name"]);
			$this->Session->setFlash('Dados deletedos com sucesso ','flashok');
			$this->redirect(array('action'=>'index'));
		}
		}
		$this->Session->setFlash('Esta Disciplina nao pode ser Deletada. Ja Pertence a um Palno de Estudo.','flasherror');
		$this->redirect(array('action' => 'index'));
	}
 *
 */
        function beforeRender()
		{
            parent::beforeRender();
            $this->set('current_section','pedagogica');
        }

        function pdf_index()
		{
            Configure::write('debug',0);
            $disciplina = $this->Disciplina->find('all',array('order'=> array ('Disciplina.name ASC')));
            $listas = array();
			$id = 1;
            foreach( $disciplina as $m)
			{
                $lista = array();
                $lista[] =$id;
	            $lista[] =$m["Disciplina"]["codigo"];
                $lista[] =$m["Disciplina"]["name"];
                $lista[] =$m["Grupodisciplinar"]["name"];
                $listas[] =$lista;
				$id++;
            }

            $this->set('lista',$listas);
            $this->layout = 'pdf'; //this will use the pdf.ctp layout
            $this->render();
        }

        public function beforeFilter() {
            parent::beforeFilter();



        }
}
?>