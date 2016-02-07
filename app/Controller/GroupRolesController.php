<?php
	App::uses('AppController', 'Controller');

	/**
	 * GroupRoles Controller
	 *
	 * @property GroupRole $GroupRole
	 * @property PaginatorComponent $Paginator
	 */
	class GroupRolesController extends AppController
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
			$this->GroupRole->recursive = 0;
			$this->set('groupRoles', $this->Paginator->paginate());
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
			if (!$this->GroupRole->exists($id)) {
				throw new NotFoundException(__('Invalid group role'));
			}
			$options = ['conditions' => ['GroupRole.' . $this->GroupRole->primaryKey => $id]];
			$this->set('groupRole', $this->GroupRole->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->GroupRole->create();
				if ($this->GroupRole->save($this->request->data)) {
					$this->Session->setFlash(__('The group role has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The group role could not be saved. Please, try again.'));
				}
			}
			$groups = $this->GroupRole->Group->find('list');
			$roles = $this->GroupRole->Role->find('list');
			$estadoObjectos = $this->GroupRole->EstadoObjecto->find('list');
			$this->set(compact('groups', 'roles', 'estadoObjectos'));
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
			if (!$this->GroupRole->exists($id)) {
				throw new NotFoundException(__('Invalid group role'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->GroupRole->save($this->request->data)) {
					$this->Session->setFlash(__('The group role has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The group role could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['GroupRole.' . $this->GroupRole->primaryKey => $id]];
				$this->request->data = $this->GroupRole->find('first', $options);
			}
			$groups = $this->GroupRole->Group->find('list');
			$roles = $this->GroupRole->Role->find('list');
			$estadoObjectos = $this->GroupRole->EstadoObjecto->find('list');
			$this->set(compact('groups', 'roles', 'estadoObjectos'));
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
			$this->GroupRole->id = $id;
			if (!$this->GroupRole->exists()) {
				throw new NotFoundException(__('Invalid group role'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->GroupRole->delete()) {
				$this->Session->setFlash(__('The group role has been deleted.'));
			} else {
				$this->Session->setFlash(__('The group role could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
