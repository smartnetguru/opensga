<?php
App::uses('AppController', 'Controller');

/**
 * FuncaoProfissionalRoles Controller
 *
 * @property FuncaoProfissionalRole $FuncaoProfissionalRole
 * @property PaginatorComponent $Paginator
 */
class FuncaoProfissionalRolesController extends AppController
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
        $this->FuncaoProfissionalRole->recursive = 0;
        $this->set('funcaoProfissionalRoles', $this->Paginator->paginate());
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
        if (!$this->FuncaoProfissionalRole->exists($id)) {
            throw new NotFoundException(__('Invalid funcao profissional role'));
        }
        $options = ['conditions' => ['FuncaoProfissionalRole.' . $this->FuncaoProfissionalRole->primaryKey => $id]];
        $this->set('funcaoProfissionalRole', $this->FuncaoProfissionalRole->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->FuncaoProfissionalRole->create();
            if ($this->FuncaoProfissionalRole->save($this->request->data)) {
                $this->Session->setFlash(__('The funcao profissional role has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The funcao profissional role could not be saved. Please, try again.'));
            }
        }
        $funcaoProfissionals = $this->FuncaoProfissionalRole->FuncaoProfissional->find('list');
        $roles = $this->FuncaoProfissionalRole->Role->find('list');
        $estadoObjectos = $this->FuncaoProfissionalRole->EstadoObjecto->find('list');
        $this->set(compact('funcaoProfissionals', 'roles', 'estadoObjectos'));
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
        if (!$this->FuncaoProfissionalRole->exists($id)) {
            throw new NotFoundException(__('Invalid funcao profissional role'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->FuncaoProfissionalRole->save($this->request->data)) {
                $this->Session->setFlash(__('The funcao profissional role has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The funcao profissional role could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['FuncaoProfissionalRole.' . $this->FuncaoProfissionalRole->primaryKey => $id]];
            $this->request->data = $this->FuncaoProfissionalRole->find('first', $options);
        }
        $funcaoProfissionals = $this->FuncaoProfissionalRole->FuncaoProfissional->find('list');
        $roles = $this->FuncaoProfissionalRole->Role->find('list');
        $estadoObjectos = $this->FuncaoProfissionalRole->EstadoObjecto->find('list');
        $this->set(compact('funcaoProfissionals', 'roles', 'estadoObjectos'));
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
        $this->FuncaoProfissionalRole->id = $id;
        if (!$this->FuncaoProfissionalRole->exists()) {
            throw new NotFoundException(__('Invalid funcao profissional role'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->FuncaoProfissionalRole->delete()) {
            $this->Session->setFlash(__('The funcao profissional role has been deleted.'));
        } else {
            $this->Session->setFlash(__('The funcao profissional role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
