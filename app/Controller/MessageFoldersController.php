<?php
App::uses('AppController', 'Controller');

/**
 * MessageFolders Controller
 *
 * @property MessageFolder $MessageFolder
 * @property PaginatorComponent $Paginator
 */
class MessageFoldersController extends AppController
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
        $this->MessageFolder->recursive = 0;
        $this->set('messageFolders', $this->Paginator->paginate());
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
        if (!$this->MessageFolder->exists($id)) {
            throw new NotFoundException(__('Invalid message folder'));
        }
        $options = ['conditions' => ['MessageFolder.' . $this->MessageFolder->primaryKey => $id]];
        $this->set('messageFolder', $this->MessageFolder->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->MessageFolder->create();
            if ($this->MessageFolder->save($this->request->data)) {
                $this->Flash->success(__('The message folder has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The message folder could not be saved. Please, try again.'));
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
        if (!$this->MessageFolder->exists($id)) {
            throw new NotFoundException(__('Invalid message folder'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->MessageFolder->save($this->request->data)) {
                $this->Flash->success(__('The message folder has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The message folder could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['MessageFolder.' . $this->MessageFolder->primaryKey => $id]];
            $this->request->data = $this->MessageFolder->find('first', $options);
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
        $this->MessageFolder->id = $id;
        if (!$this->MessageFolder->exists()) {
            throw new NotFoundException(__('Invalid message folder'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->MessageFolder->delete()) {
            $this->Flash->success(__('The message folder has been deleted.'));
        } else {
            $this->Flash->error(__('The message folder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
