<?php
App::uses('AppController', 'Controller');

/**
 * Notifications Controller
 *
 * @property Notification $Notification
 * @property PaginatorComponent $Paginator
 */
class NotificationsController extends AppController
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
        $this->Notification->recursive = 0;
        $this->set('notifications', $this->Paginator->paginate());
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
        if (!$this->Notification->exists($id)) {
            throw new NotFoundException(__('Invalid notification'));
        }
        $options = ['conditions' => ['Notification.' . $this->Notification->primaryKey => $id]];
        $this->set('notification', $this->Notification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Notification->create();
            if ($this->Notification->save($this->request->data)) {
                $this->Session->setFlash(__('The notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
            }
        }
        $users = $this->Notification->User->find('list');
        $estadoMessages = $this->Notification->EstadoMessage->find('list');
        $this->set(compact('users', 'estadoMessages'));
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
        if (!$this->Notification->exists($id)) {
            throw new NotFoundException(__('Invalid notification'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->Notification->save($this->request->data)) {
                $this->Session->setFlash(__('The notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The notification could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['Notification.' . $this->Notification->primaryKey => $id]];
            $this->request->data = $this->Notification->find('first', $options);
        }
        $users = $this->Notification->User->find('list');
        $estadoMessages = $this->Notification->EstadoMessage->find('list');
        $this->set(compact('users', 'estadoMessages'));
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
        $this->Notification->id = $id;
        if (!$this->Notification->exists()) {
            throw new NotFoundException(__('Invalid notification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Notification->delete()) {
            $this->Session->setFlash(__('The notification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The notification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
