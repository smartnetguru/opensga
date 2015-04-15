<?php

App::uses('AppController', 'Controller');

/**
 * Uploads Controller
 *
 * @property Upload $Upload
 * @property PaginatorComponent $Paginator
 */
class UploadsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Upload->recursive = 0;
        $this->set('uploads', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Upload->exists($id)) {
            throw new NotFoundException(__('Invalid upload'));
        }
        $options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
        $this->set('upload', $this->Upload->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function carregar_upload() {
        if ($this->request->is('post')) {
            $this->Upload->create();
            if ($this->Upload->save($this->request->data)) {
                
                $this->Upload->uploadFiles('uploads', array($this->request->data['Upload']['file']),'renovacao');
                $this->Session->setFlash(__('The upload has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
            }
        }
        $tipoUploads = $this->Upload->TipoUpload->find('list');
        $estadoUploads = $this->Upload->EstadoUpload->find('list');
        $this->set(compact('tipoUploads', 'estadoUploads'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Upload->exists($id)) {
            throw new NotFoundException(__('Invalid upload'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Upload->save($this->request->data)) {
                $this->Session->setFlash(__('The upload has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The upload could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id));
            $this->request->data = $this->Upload->find('first', $options);
        }
        $tipoUploads = $this->Upload->TipoUpload->find('list');
        $estadoUploads = $this->Upload->EstadoUpload->find('list');
        $this->set(compact('tipoUploads', 'estadoUploads'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Upload->id = $id;
        if (!$this->Upload->exists()) {
            throw new NotFoundException(__('Invalid upload'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Upload->delete()) {
            $this->Session->setFlash(__('The upload has been deleted.'));
        } else {
            $this->Session->setFlash(__('The upload could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    
    public function beforeFilter() {
        parent::beforeFilter();
        
        $this->Security->unlockedActions = array('carregar_upload');
    }

}
