<?php
App::uses('AppController', 'Controller');

/**
 * EstadoUploads Controller
 *
 * @property EstadoUpload $EstadoUpload
 * @property PaginatorComponent $Paginator
 */
class EstadoUploadsController extends AppController
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
        $this->EstadoUpload->recursive = 0;
        $this->set('estadoUploads', $this->Paginator->paginate());
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
        if (!$this->EstadoUpload->exists($id)) {
            throw new NotFoundException(__('Invalid estado upload'));
        }
        $options = ['conditions' => ['EstadoUpload.' . $this->EstadoUpload->primaryKey => $id]];
        $this->set('estadoUpload', $this->EstadoUpload->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->EstadoUpload->create();
            if ($this->EstadoUpload->save($this->request->data)) {
                $this->Session->setFlash(__('The estado upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado upload could not be saved. Please, try again.'));
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
        if (!$this->EstadoUpload->exists($id)) {
            throw new NotFoundException(__('Invalid estado upload'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->EstadoUpload->save($this->request->data)) {
                $this->Session->setFlash(__('The estado upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado upload could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['EstadoUpload.' . $this->EstadoUpload->primaryKey => $id]];
            $this->request->data = $this->EstadoUpload->find('first', $options);
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
        $this->EstadoUpload->id = $id;
        if (!$this->EstadoUpload->exists()) {
            throw new NotFoundException(__('Invalid estado upload'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->EstadoUpload->delete()) {
            $this->Session->setFlash(__('The estado upload has been deleted.'));
        } else {
            $this->Session->setFlash(__('The estado upload could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
