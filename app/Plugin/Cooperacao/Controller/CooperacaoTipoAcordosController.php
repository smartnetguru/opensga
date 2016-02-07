<?php
	App::uses('CooperacaoAppController', 'Cooperacao.Controller');

	/**
	 * CooperacaoTipoAcordos Controller
	 *
	 * @property CooperacaoTipoAcordo $CooperacaoTipoAcordo
	 * @property PaginatorComponent $Paginator
	 */
	class CooperacaoTipoAcordosController extends CooperacaoAppController
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
			$this->CooperacaoTipoAcordo->recursive = 0;
			$this->set('cooperacaoTipoAcordos', $this->Paginator->paginate());
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
			if (!$this->CooperacaoTipoAcordo->exists($id)) {
				throw new NotFoundException(__('Invalid cooperacao tipo acordo'));
			}
			$options = ['conditions' => ['CooperacaoTipoAcordo.' . $this->CooperacaoTipoAcordo->primaryKey => $id]];
			$this->set('cooperacaoTipoAcordo', $this->CooperacaoTipoAcordo->find('first', $options));
		}

		function beforeFilter()
		{
			$this->Security->unlockedActions = ['novo_tipo_acordo', 'edit'];
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function novo_tipo_acordo()
		{
			if ($this->request->is('post')) {
				$this->CooperacaoTipoAcordo->create();
				if ($this->CooperacaoTipoAcordo->save($this->request->data)) {
					$this->Session->setFlash(__('<div class="alert alert-success">Dados Gravados com Sucesso.</div>'),
						'default', ['class' => 'alert success']);

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('<div class="alert alert-danger">Problemas ao gravar dados. Por favor, tente novamente.</div>'),
						'default', ['class' => 'alert error']);
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
		public function edit()
		{
			$id = $this->request->data['id'];
			if (!$this->CooperacaoTipoAcordo->exists($id)) {
				throw new NotFoundException(__('<div class="alert alert-danger">Invalid cooperacao tipo acordo</div>'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->CooperacaoTipoAcordo->save($this->request->data)) {
					$this->Session->setFlash(__('<div class="alert alert-success">The cooperacao tipo acordo has been saved.</div>'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('<div class="alert alert-danger">The cooperacao tipo acordo could not be saved. Please, try again.</div>'));
				}
			} else {
				$options = ['conditions' => ['CooperacaoTipoAcordo.' . $this->CooperacaoTipoAcordo->primaryKey => $id]];
				$this->request->data = $this->CooperacaoTipoAcordo->find('first', $options);
			}
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
			$this->CooperacaoTipoAcordo->id = $id;
			if (!$this->CooperacaoTipoAcordo->exists()) {
				throw new NotFoundException(__('Invalid cooperacao tipo acordo'));
			}
			$this->request->onlyAllow('post', 'delete');
			if ($this->CooperacaoTipoAcordo->delete()) {
				$this->Session->setFlash(__('The cooperacao tipo acordo has been deleted.'));
			} else {
				$this->Session->setFlash(__('The cooperacao tipo acordo could not be deleted. Please, try again.'));
			}

			return $this->redirect(['action' => 'index']);
		}
	}
