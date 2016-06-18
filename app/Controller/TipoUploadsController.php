<?php
App::uses('AppController', 'Controller');

/**
 * TipoUploads Controller
 *
 * @property TipoUpload $TipoUpload
 * @property PaginatorComponent $Paginator
 */
class TipoUploadsController extends AppController
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
        $this->TipoUpload->recursive = 0;
        $this->set('tipoUploads', $this->Paginator->paginate());
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
        if (!$this->TipoUpload->exists($id)) {
            throw new NotFoundException(__('Invalid tipo upload'));
        }
        $options = ['conditions' => ['TipoUpload.' . $this->TipoUpload->primaryKey => $id]];
        $this->set('tipoUpload', $this->TipoUpload->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->TipoUpload->create();
            if ($this->TipoUpload->save($this->request->data)) {
                $this->Session->setFlash(__('The tipo upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The tipo upload could not be saved. Please, try again.'));
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
        if (!$this->TipoUpload->exists($id)) {
            throw new NotFoundException(__('Invalid tipo upload'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TipoUpload->save($this->request->data)) {
                $this->Session->setFlash(__('The tipo upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The tipo upload could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['TipoUpload.' . $this->TipoUpload->primaryKey => $id]];
            $this->request->data = $this->TipoUpload->find('first', $options);
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
        $this->TipoUpload->id = $id;
        if (!$this->TipoUpload->exists()) {
            throw new NotFoundException(__('Invalid tipo upload'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->TipoUpload->delete()) {
            $this->Session->setFlash(__('The tipo upload has been deleted.'));
        } else {
            $this->Session->setFlash(__('The tipo upload could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
