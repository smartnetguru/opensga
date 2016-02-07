<?php
	App::uses('AppController', 'Controller');

	/**
	 * DisciplinaUnidadeOrganicas Controller
	 *
	 * @property DisciplinaUnidadeOrganica $DisciplinaUnidadeOrganica
	 * @property PaginatorComponent $Paginator
	 */
	class DisciplinaUnidadeOrganicasController extends AppController
	{

		/**
		 * Components
		 *
		 * @var array
		 */
		public $components = ['Paginator'];

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->DisciplinaUnidadeOrganica->recursive = 0;
			$this->set('disciplinaUnidadeOrganicas', $this->Paginator->paginate());
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
			if (!$this->DisciplinaUnidadeOrganica->exists($id)) {
				throw new NotFoundException(__('Invalid disciplina unidade organica'));
			}
			$options = ['conditions' => ['DisciplinaUnidadeOrganica.' . $this->DisciplinaUnidadeOrganica->primaryKey => $id]];
			$this->set('disciplinaUnidadeOrganica', $this->DisciplinaUnidadeOrganica->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->DisciplinaUnidadeOrganica->create();
				if ($this->DisciplinaUnidadeOrganica->save($this->request->data)) {
					$this->Session->setFlash(__('The disciplina unidade organica has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The disciplina unidade organica could not be saved. Please, try again.'));
				}
			}
			$disciplinas = $this->DisciplinaUnidadeOrganica->Disciplina->find('list');
			$unidadeOrganicas = $this->DisciplinaUnidadeOrganica->UnidadeOrganica->find('list');
			$estadoObjectos = $this->DisciplinaUnidadeOrganica->EstadoObjecto->find('list');
			$this->set(compact('disciplinas', 'unidadeOrganicas', 'estadoObjectos'));
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
			if (!$this->DisciplinaUnidadeOrganica->exists($id)) {
				throw new NotFoundException(__('Invalid disciplina unidade organica'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->DisciplinaUnidadeOrganica->save($this->request->data)) {
					$this->Session->setFlash(__('The disciplina unidade organica has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The disciplina unidade organica could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['DisciplinaUnidadeOrganica.' . $this->DisciplinaUnidadeOrganica->primaryKey => $id]];
				$this->request->data = $this->DisciplinaUnidadeOrganica->find('first', $options);
			}
			$disciplinas = $this->DisciplinaUnidadeOrganica->Disciplina->find('list');
			$unidadeOrganicas = $this->DisciplinaUnidadeOrganica->UnidadeOrganica->find('list');
			$estadoObjectos = $this->DisciplinaUnidadeOrganica->EstadoObjecto->find('list');
			$this->set(compact('disciplinas', 'unidadeOrganicas', 'estadoObjectos'));
		}

		/**
		 * delete method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			$this->DisciplinaUnidadeOrganica->id = $id;
			if (!$this->DisciplinaUnidadeOrganica->exists()) {
				throw new NotFoundException(__('Invalid disciplina unidade organica'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->DisciplinaUnidadeOrganica->delete()) {
				$this->Session->setFlash(__('The disciplina unidade organica has been deleted.'));
			} else {
				$this->Session->setFlash(__('The disciplina unidade organica could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
