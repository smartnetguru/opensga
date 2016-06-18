<?php
App::uses('AppController', 'Controller');

/**
 * EntidadeIdentificacaos Controller
 *
 * @property EntidadeIdentificacao $EntidadeIdentificacao
 */
class EntidadeIdentificacaosController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->EntidadeIdentificacao->recursive = 0;
        $this->set('entidadeIdentificacaos', $this->paginate());
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
        $this->EntidadeIdentificacao->id = $id;
        if (!$this->EntidadeIdentificacao->exists()) {
            throw new NotFoundException(__('Invalid entidade identificacao'));
        }
        $this->set('entidadeIdentificacao', $this->EntidadeIdentificacao->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->EntidadeIdentificacao->create();
            if ($this->EntidadeIdentificacao->save($this->request->data)) {
                $this->Session->setFlash(__('The entidade identificacao has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The entidade identificacao could not be saved. Please, try again.'));
            }
        }
        $entidades = $this->EntidadeIdentificacao->Entidade->find('list');
        $documentoIdentificacaos = $this->EntidadeIdentificacao->DocumentoIdentificacao->find('list');
        $estadoObjectos = $this->EntidadeIdentificacao->EstadoObjecto->find('list');
        $this->set(compact('entidades', 'documentoIdentificacaos', 'estadoObjectos'));
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
        $this->EntidadeIdentificacao->id = $id;
        if (!$this->EntidadeIdentificacao->exists()) {
            throw new NotFoundException(__('Invalid entidade identificacao'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->EntidadeIdentificacao->save($this->request->data)) {
                $this->Session->setFlash(__('The entidade identificacao has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The entidade identificacao could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->EntidadeIdentificacao->read(null, $id);
        }
        $entidades = $this->EntidadeIdentificacao->Entidade->find('list');
        $documentoIdentificacaos = $this->EntidadeIdentificacao->DocumentoIdentificacao->find('list');
        $estadoObjectos = $this->EntidadeIdentificacao->EstadoObjecto->find('list');
        $this->set(compact('entidades', 'documentoIdentificacaos', 'estadoObjectos'));
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->EntidadeIdentificacao->id = $id;
        if (!$this->EntidadeIdentificacao->exists()) {
            throw new NotFoundException(__('Invalid entidade identificacao'));
        }
        if ($this->EntidadeIdentificacao->delete()) {
            $this->Session->setFlash(__('Entidade identificacao deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Entidade identificacao was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
