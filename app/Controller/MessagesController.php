<?php
    App::uses('AppController', 'Controller');
use Aws\Sns\MessageValidator\Message;
use Aws\Sns\MessageValidator\MessageValidator;
use Guzzle\Http\Client;

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


        public function aws_bounces(){


// Make sure the request is POST
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                http_response_code(405);
                die;
            }

            try {
                // Create a message from the post data and validate its signature
                $message = Message::fromRawPostData();
                $validator = new MessageValidator();
                $validator->validate($message);
            } catch (Exception $e) {
                // Pretend we're not here if the message is invalid
                http_response_code(404);
                die;
            }

            if ($message->get('Type') === 'SubscriptionConfirmation') {
                // Send a request to the SubscribeURL to complete subscription
                (new Client)->get($message->get('SubscribeURL'))->send();
            } elseif ($message->get('Type') === 'Notification') {
                // Do something with the notification
                $this->log(serialize($message));
            }
        }


        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allow(['aws_complaints','aws_bounces','aws_deliveries']);
            if($this->action == 'aws_complaints' || $this->action=='aws_bounces' || $this->action=='aws_deliveries'){
                $this->Security->csrfCheck = false;
                $this->Security->validatePost = false;
                $this->Security->unlockedActions= array('aws_complaints','aws_bounces','aws_deliveries');
            }

        }

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
         *
         * @todo implementar a funcao
         */
        public function estudante_index()
        {
            $userId = CakeSession::read('Auth.User.id');
            $this->paginate = [
                //'conditions' => ['MessageUser.user_id'=>$userId],
                'contain'    => ['MessageUser','User' ],
            ];
            //$this->set('messages', $this->Paginator->paginate());
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
        public function estudante_ver_mensagem($messageId = null)
        {
            if (!$this->Message->exists($messageId)) {
                throw new NotFoundException(__('Invalid message'));
            }

            $userId = $this->Session->read('Auth.User.id');
            $this->Message->MessageUser->contain(['Message' => ['User' => 'Entidade']]);
            $options = [
                'conditions' => ['Message.id >=' => $messageId, 'MessageUser.user_id' => $userId],
                'limit'      => 10
            ];
            $messages = $this->Message->MessageUser->find('all', $options);

            $this->Message->contain([
                'User'        => ['Entidade'],
                'MessageText',
                'MessageUser' => ['User' => ['Entidade'],'conditions'=>['user_id'=>$userId],'limit'=>1]
            ]);

            $message0 = $this->Message->findById($messageId);
            $this->Message->MessageUser->id = $message0['MessageUser'][0]['id'];
            $this->Message->MessageUser->set('estado_message_id',2);
            $this->Message->MessageUser->save();
            $this->set('messages', $messages);
            $this->set(compact('messageId','message0'));
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
    }
