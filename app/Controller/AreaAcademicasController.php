<?php
	App::uses('AppController', 'Controller');

	/**
	 * AreaAcademicas Controller
	 *
	 * @property AreaAcademica $AreaAcademica
	 */
	class AreaAcademicasController extends AppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->AreaAcademica->recursive = 0;
			$this->set('areaAcademicas', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->AreaAcademica->id = $id;
			if (!$this->AreaAcademica->exists()) {
				throw new NotFoundException(__('Área Académica Inválida'));
			}
			$this->set('areaAcademica', $this->AreaAcademica->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->AreaAcademica->create();
				if ($this->AreaAcademica->save($this->request->data)) {
					$this->Session->setFlash(__('A Área Académica foi registrada com sucesso'), 'default',
						['class' => 'alert_success']);
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('Problemas ao registrar a Área Académica'), 'default', ['alert_error']);
				}
			}
		}

		/**
		 * edit method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			$this->AreaAcademica->id = $id;
			if (!$this->AreaAcademica->exists()) {
				throw new NotFoundException(__('Área Académica Inválida'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->AreaAcademica->save($this->request->data)) {
					$this->Session->setFlash(__('A Área Académica foi editada com sucesso'), 'default',
						['class' => 'alert_success']);
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('Problemas ao editar a Área Académica'), 'default',
						['class' => 'alert_error']);
				}
			} else {
				$this->request->data = $this->AreaAcademica->read(null, $id);
			}
		}

		/**
		 * delete method
		 *
		 * @throws MethodNotAllowedException
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 * FIXME Não se pode remover áreas académicas já referenciadas
		 */
		public function delete($id = null)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->AreaAcademica->id = $id;
			if (!$this->AreaAcademica->exists()) {
				throw new NotFoundException(__('Invalid area academica'));
			}
			if ($this->AreaAcademica->delete()) {
				$this->Session->setFlash(__('Area academica deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Area academica was not deleted'));
			$this->redirect(['action' => 'index']);
		}
	}
