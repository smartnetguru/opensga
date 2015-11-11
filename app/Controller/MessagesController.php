<?php
    App::uses('AppController', 'Controller');

    /**
     * Messages Controller
     *
     * @property Message $Message
     * @property PaginatorComponent $Paginator
     */
    class MessagesController extends AppController
    {

        /**
         * Components
         *
         * @var array
         */
        public $components = ['Paginator'];

        /**
         * delete method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function delete($id = null)
        {
            $this->Message->id = $id;
            if (!$this->Message->exists()) {
                throw new NotFoundException(__('Invalid message'));
            }
            $this->request->allowMethod('post', 'delete');
            if ($this->Message->delete()) {
                $this->Flash->success(__('The message has been deleted.'));
            } else {
                $this->Flash->error(__('The message could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);
        }

        /**
         * add method
         *
         * @return void
         */
        public function enviar_mensagem()
        {
            if ($this->request->is('post')) {
                $this->Message->create();
                if ($this->Message->save($this->request->data)) {
                    $this->Flash->success(__('The message has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The message could not be saved. Please, try again.'));
                }
            }
            $users = $this->Message->User->find('list');
            $recipients = $this->Message->Recipient->find('list');
            $this->set(compact('users', 'recipients'));
        }

        /**
         * index method
         *
         * @return void
         */
        public function index()
        {
            $this->Message->recursive = 0;
            $this->set('messages', $this->Paginator->paginate());
        }

        /**
         * view method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function ver_mensagem($id = null)
        {
            if (!$this->Message->exists($id)) {
                throw new NotFoundException(__('Invalid message'));
            }
            $options = ['conditions' => ['Message.' . $this->Message->primaryKey => $id]];
            $this->set('message', $this->Message->find('first', $options));
        }


        public function estudante_enviar_mensagem()
        {
            if ($this->request->is('post')) {
                $this->Message->create();
                if ($this->Message->save($this->request->data)) {
                    $this->Flash->success(__('The message has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The message could not be saved. Please, try again.'));
                }
            }
            $users = $this->Message->User->find('list');
            $recipients = $this->Message->Recipient->find('list');
            $this->set(compact('users', 'recipients'));
        }

        /**
         * index method
         *
         * @return void
         */
        public function estudante_index()
        {
            $this->Message->recursive = 0;
            $this->set('messages', $this->Paginator->paginate());
        }

        /**
         * view method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function estudante_ver_mensagem($id = null)
        {
            if (!$this->Message->exists($id)) {
                throw new NotFoundException(__('Invalid message'));
            }
            $options = ['conditions' => ['Message.' . $this->Message->primaryKey => $id]];
            $this->set('message', $this->Message->find('first', $options));
        }

        public function docente_enviar_mensagem()
        {
            if ($this->request->is('post')) {
                $this->Message->create();
                if ($this->Message->save($this->request->data)) {
                    $this->Flash->success(__('The message has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The message could not be saved. Please, try again.'));
                }
            }
            $users = $this->Message->User->find('list');
            $recipients = $this->Message->Recipient->find('list');
            $this->set(compact('users', 'recipients'));
        }

        /**
         * index method
         *
         * @return void
         */
        public function docente_index()
        {
            $this->Message->recursive = 0;
            $this->set('messages', $this->Paginator->paginate());
        }

        /**
         * view method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function docente_ver_mensagem($id = null)
        {
            if (!$this->Message->exists($id)) {
                throw new NotFoundException(__('Invalid message'));
            }
            $options = ['conditions' => ['Message.' . $this->Message->primaryKey => $id]];
            $this->set('message', $this->Message->find('first', $options));
        }

        public function faculdade_enviar_mensagem()
        {
            if ($this->request->is('post')) {
                $this->Message->create();
                if ($this->Message->save($this->request->data)) {
                    $this->Flash->success(__('The message has been saved.'));

                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The message could not be saved. Please, try again.'));
                }
            }
            $users = $this->Message->User->find('list');
            $recipients = $this->Message->Recipient->find('list');
            $this->set(compact('users', 'recipients'));
        }

        /**
         * index method
         *
         * @return void
         */
        public function faculdade_index()
        {
            $this->Message->recursive = 0;
            $this->set('messages', $this->Paginator->paginate());
        }

        /**
         * view method
         *
         * @throws NotFoundException
         *
         * @param string $id
         *
         * @return void
         */
        public function faculdade_ver_mensagem($id = null)
        {
            if (!$this->Message->exists($id)) {
                throw new NotFoundException(__('Invalid message'));
            }
            $options = ['conditions' => ['Message.' . $this->Message->primaryKey => $id]];
            $this->set('message', $this->Message->find('first', $options));
        }
    }
