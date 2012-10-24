<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 *
 */


class CursosController extends AppController {

	var $name = 'Cursos';


	function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());


	}

	function view($id = null)
	{

		if (!$id) {
			$this->Session->setFlash('Curso Invalido','flasherror');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cursos', $this->Curso->read(null, $id));
		if (empty($this->data))
		{

		$this->data = $this->Curso->read(null, $id);


		}

		$grauacademicos = $this->Curso->GrauAcademico->find('list');
		$tipocursos = $this->Curso->Tipocurso->find('list');
        $escolas = $this->Curso->Escola->find('list');
		$this->set(compact('grauacademicos', 'tipocursos','escolas'));
	}

	function add()
	{

		if (!empty($this->data)) {

			$this->Curso->create();
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **','flashok');

				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.','flasherror');
			}
		}
		$grauacademicos = $this->Curso->GrauAcademico->find('list');
		$tipocursos = $this->Curso->Tipocurso->find('list');
		$this->set(compact('grauacademicos', 'tipocursos','escolas'));
	}

	function edit($id = null) {
        $this->Curso->id = $id;
        if(!$this->Curso->exists()){
            throw new NotFoundException('Curso Inválido');
        }
		if (!$id && empty($this->data)) {
			$this->Session->setFlash('Invalido %s', 'flasherror');
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {

			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash('Dados modificados com sucesso.','flashok');

				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.','flasherror');}
		}
                $this->set('cursos', $this->Curso->read(null, $id));
		if (empty($this->data)) {
			$this->data = $this->Curso->read(null, $id);
		}
		$grauacademicos = $this->Curso->GrauAcademico->find('list');
		$tipocursos = $this->Curso->Tipocurso->find('list');
		$this->set(compact('GrauAcademicos', 'tipocursos','escolas'));
	}

	function delete($id = null) {

		if (!$id) {
			$this->Session->setFlash('Codigo Invalido para este curso','flasherror');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Curso->delete($id)) {
	    $this->Session->setFlash('Dados deletedos com sucesso ','flashok');

			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('Curso nao eliminado.Por favor, tente novamente','flasherror');
		$this->redirect(array('action' => 'index'));
	}

        function beforeRender(){
            parent::beforeRender();
        }
}
?>