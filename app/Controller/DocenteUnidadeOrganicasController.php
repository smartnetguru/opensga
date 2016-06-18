<?php
App::uses('AppController', 'Controller');

/**
 * DocenteUnidadeOrganicas Controller
 *
 * @property DocenteUnidadeOrganica $DocenteUnidadeOrganica
 * @property PaginatorComponent $Paginator
 */
class DocenteUnidadeOrganicasController extends AppController
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
        $this->DocenteUnidadeOrganica->recursive = 0;
        $this->set('docenteUnidadeOrganicas', $this->Paginator->paginate());
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
        if (!$this->DocenteUnidadeOrganica->exists($id)) {
            throw new NotFoundException(__('Invalid docente unidade organica'));
        }
        $options = ['conditions' => ['DocenteUnidadeOrganica.' . $this->DocenteUnidadeOrganica->primaryKey => $id]];
        $this->set('docenteUnidadeOrganica', $this->DocenteUnidadeOrganica->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->DocenteUnidadeOrganica->create();
            if ($this->DocenteUnidadeOrganica->save($this->request->data)) {
                $this->Session->setFlash(__('The docente unidade organica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The docente unidade organica could not be saved. Please, try again.'));
            }
        }
        $docentes = $this->DocenteUnidadeOrganica->Docente->find('list');
        $unidadeOrganicas = $this->DocenteUnidadeOrganica->UnidadeOrganica->find('list');
        $estadoObjectos = $this->DocenteUnidadeOrganica->EstadoObjecto->find('list');
        $this->set(compact('docentes', 'unidadeOrganicas', 'estadoObjectos'));
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
        if (!$this->DocenteUnidadeOrganica->exists($id)) {
            throw new NotFoundException(__('Invalid docente unidade organica'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->DocenteUnidadeOrganica->save($this->request->data)) {
                $this->Session->setFlash(__('The docente unidade organica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The docente unidade organica could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['DocenteUnidadeOrganica.' . $this->DocenteUnidadeOrganica->primaryKey => $id]];
            $this->request->data = $this->DocenteUnidadeOrganica->find('first', $options);
        }
        $docentes = $this->DocenteUnidadeOrganica->Docente->find('list');
        $unidadeOrganicas = $this->DocenteUnidadeOrganica->UnidadeOrganica->find('list');
        $estadoObjectos = $this->DocenteUnidadeOrganica->EstadoObjecto->find('list');
        $this->set(compact('docentes', 'unidadeOrganicas', 'estadoObjectos'));
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
        $this->DocenteUnidadeOrganica->id = $id;
        if (!$this->DocenteUnidadeOrganica->exists()) {
            throw new NotFoundException(__('Invalid docente unidade organica'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->DocenteUnidadeOrganica->delete()) {
            $this->Session->setFlash(__('The docente unidade organica has been deleted.'));
        } else {
            $this->Session->setFlash(__('The docente unidade organica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
