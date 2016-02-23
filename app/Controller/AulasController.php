<?php
	App::uses('AppController', 'Controller');

	/**
	 * Aulas Controller
	 *
	 * @property Aula $Aula
	 * @property PaginatorComponent $Paginator
	 */
	class AulasController extends AppController
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
			$this->Aula->recursive = 0;
			$this->set('aulas', $this->Paginator->paginate());
		}

		public function estudante_index($turmaId = null)
		{
			$this->Aula->recursive = 0;
			$this->set('aulas', $this->Paginator->paginate());
		}

		public function docente_index($turmaId = null)
		{
			$this->Aula->recursive = 0;
			$this->set('aulas', $this->Paginator->paginate());
			$this->set(compact('turmaId'));
		}

		public function faculdade_index()
		{
			$this->Aula->recursive = 0;
			$this->set('aulas', $this->Paginator->paginate());
		}

		/**
		 * view method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function docente_ver_aula($id = null)
		{
			if (!$this->Aula->exists($id)) {
				throw new NotFoundException(__('Invalid aula'));
			}
			$options = ['conditions' => ['Aula.' . $this->Aula->primaryKey => $id]];
			$this->set('aula', $this->Aula->find('first', $options));
		}

		public function estudante_ver_aula($id = null)
		{
			if (!$this->Aula->exists($id)) {
				throw new NotFoundException(__('Invalid aula'));
			}
			$options = ['conditions' => ['Aula.' . $this->Aula->primaryKey => $id]];
			$this->set('aula', $this->Aula->find('first', $options));
		}

		public function faculdade_estudante_ver_aula($id = null)
		{
			if (!$this->Aula->exists($id)) {
				throw new NotFoundException(__('Invalid aula'));
			}
			$options = ['conditions' => ['Aula.' . $this->Aula->primaryKey => $id]];
			$this->set('aula', $this->Aula->find('first', $options));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function docente_criar_aula($turmaId=null)
		{
			$this->Aula->Turma->id = $turmaId;
			if(!$this->Aula->Turma->exists()){
				throw new NotFoundException('Turma não Encontrada');
			}

			if ($this->request->is('post')) {
				try{
					$this->Aula->criaAula($this->request->data);
					$this->Flash->success(__('Aula Gravada com Sucesso.'));
					return $this->redirect(['action' => 'index',$turmaId]);

				} catch(DataNotSavedException $dex){
					$this->Flash->error($dex->getMessage());
				}
			}
			$this->Aula->Turma->contain(['Disciplina','Curso','AnoLectivo']);
			$turma = $this->Aula->Turma->findById($turmaId);
			$docente = $this->Aula->Docente->getByUserID(CakeSession::read('Auth.User.id'));
			$salaAulas = $this->Aula->SalaAula->find('list');
			$this->set(compact('turma', 'docente', 'salaAulas'));
		}

		public function faculdade_criar_aula()
		{
			if ($this->request->is('post')) {
				$this->Aula->create();
				if ($this->Aula->save($this->request->data)) {
					$this->Flash->success(__('The aula has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The aula could not be saved. Please, try again.'));
				}
			}
			$turmas = $this->Aula->Turma->find('list');
			$docentes = $this->Aula->Docente->find('list');
			$salaAulas = $this->Aula->SalaAula->find('list');
			$this->set(compact('turmas', 'docentes', 'salaAulas'));
		}

		/**
		 * edit method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function docente_editar_aula($id = null)
		{
			if (!$this->Aula->exists($id)) {
				throw new NotFoundException(__('Invalid aula'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->Aula->save($this->request->data)) {
					$this->Flash->success(__('The aula has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The aula could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['Aula.' . $this->Aula->primaryKey => $id]];
				$this->request->data = $this->Aula->find('first', $options);
			}
			$turmas = $this->Aula->Turma->find('list');
			$docentes = $this->Aula->Docente->find('list');
			$salaAulas = $this->Aula->SalaAula->find('list');
			$this->set(compact('turmas', 'docentes', 'salaAulas'));
		}

		public function faculdade_editar_aula($id = null)
		{
			if (!$this->Aula->exists($id)) {
				throw new NotFoundException(__('Invalid aula'));
			}
			if ($this->request->is(['post', 'put'])) {
				if ($this->Aula->save($this->request->data)) {
					$this->Flash->success(__('The aula has been saved.'));

					return $this->redirect(['action' => 'index']);
				} else {
					$this->Flash->error(__('The aula could not be saved. Please, try again.'));
				}
			} else {
				$options = ['conditions' => ['Aula.' . $this->Aula->primaryKey => $id]];
				$this->request->data = $this->Aula->find('first', $options);
			}
			$turmas = $this->Aula->Turma->find('list');
			$docentes = $this->Aula->Docente->find('list');
			$salaAulas = $this->Aula->SalaAula->find('list');
			$this->set(compact('turmas', 'docentes', 'salaAulas'));
		}

		public function docente_marcar_presenca()
		{

		}

		public function faculdade_marcar_presenca()
		{

		}

		public function docente_cancelar_aula()
		{

		}

	}
