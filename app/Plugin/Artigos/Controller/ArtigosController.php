<?php
    App::uses('ArtigosAppController', 'Artigos.Controller');

    /**
     * Artigos Controller
     *
     * @property Artigo $Artigo
     * @property PaginatorComponent $Paginator
     */
    class ArtigosController extends ArtigosAppController
    {

        /**
         * Components
         *
         * @var array
         */


        /**
         * index method
         *
         * @return void
         */
        public function index()
        {
            $this->Paginator->settings = [
                'contain'=>['Entidade'],
                'order'=>'Artigo.data_publicacao DESC'
            ];

            $this->set('artigos', $this->Paginator->paginate());
            $this->set('title_for_layout','Artigos Academicos');
            $this->layout = 'guest_users';


        }

        public function dashboard()
        {

        }

        /**
         * view method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function ver_artigo($id = null)
        {
            if (!$this->Artigo->exists($id)) {
                throw new NotFoundException(__('Invalid artigo'));
            }

            $this->Artigo->contain(
                ['User','Entidade'=>['User'],'EstadoObjecto','ArtigoEstadoArtigo']
            );
            $options = ['conditions' => ['Artigo.' . $this->Artigo->primaryKey => $id]];
            $artigo = $this->Artigo->find('first', $options);
            $this->set('artigo', $artigo);
            $this->set('title_for_layout',$artigo['Artigo']['titulo']);

            $this->layout = 'guest_users';
        }

        public function artigos_recentes($totalArtigos){

            $this->Paginator->settings = [
                'contain'=>['Entidade'],
                'order'=>'Artigo.data_publicacao DESC',
                'limit'=>$totalArtigos
            ];

            return $this->Paginator->paginate();

        }

        /**
         * add method
         *
         * @return void
         */
        public function adicionar_artigo()
        {
            if ($this->request->is('post')) {
                if ($this->Artigo->adicionaArtigo($this->request->data)) {
                    $this->Flash->success(__('The artigo has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
                }
            }
            $users = $this->Artigo->User->find('list');
            $entidades = $this->Artigo->Entidade->find('list');
            $estadoObjectos = $this->Artigo->EstadoObjecto->find('list');
            $artigoEstadoArtigos = $this->Artigo->ArtigoEstadoArtigo->find('list');
            $this->set(compact('users', 'entidades', 'estadoObjectos', 'artigoEstadoArtigos'));
        }

        /**
         * edit method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function editar_artigo($id = null)
        {
            if (!$this->Artigo->exists($id)) {
                throw new NotFoundException(__('Invalid artigo'));
            }
            if ($this->request->is(['post', 'put'])) {
                if ($this->Artigo->save($this->request->data)) {
                    $this->Flash->success(__('The artigo has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
                }
            } else {
                $options = ['conditions' => ['Artigo.' . $this->Artigo->primaryKey => $id]];
                $this->request->data = $this->Artigo->find('first', $options);
            }
            $users = $this->Artigo->User->find('list');
            $entidades = $this->Artigo->Entidade->find('list');
            $estadoObjectos = $this->Artigo->EstadoObjecto->find('list');
            $artigoEstadoArtigos = $this->Artigo->ArtigoEstadoArtigo->find('list');
            $this->set(compact('users', 'entidades', 'estadoObjectos', 'artigoEstadoArtigos'));
        }

        /**
         * delete method
         *
         * @throws NotFoundException
         * @param string $id
         * @return void
         */
        public function remover_artigo($id = null)
        {
            throw new MethodNotAllowedException('Nao implementado');
            $this->Artigo->id = $id;
            if (!$this->Artigo->exists()) {
                throw new NotFoundException(__('Invalid artigo'));
            }
            $this->request->allowMethod('post', 'delete');
            if ($this->Artigo->delete()) {
                $this->Flash->success(__('The artigo has been deleted.'));
            } else {
                $this->Flash->error(__('The artigo could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }

        public function pesquisa(){

        }
        public function beforeFilter()
        {
            parent::beforeFilter();

            $this->Auth->allow(['index', 'ver_artigo','artigos_recentes','pesquisa','ver_autor']);
        }

        public function ver_autor($entidadeId){
            $this->Artigo->Entidade->contain(['PaisNascimento','Genero','User']);
            $entidade = $this->Artigo->Entidade->findById($entidadeId);
            if(empty($entidade)){
                throw new NotFoundException('Autor não Encontrado');
            }

            $this->set(compact('entidade'));

        }
    }
