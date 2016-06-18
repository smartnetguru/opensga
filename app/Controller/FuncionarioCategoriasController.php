<?php
App::uses('AppController', 'Controller');

/**
 * FuncionarioCategorias Controller
 *
 * @property FuncionarioCategoria $FuncionarioCategoria
 * @property PaginatorComponent $Paginator
 */
class FuncionarioCategoriasController extends AppController
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
        $this->FuncionarioCategoria->recursive = 0;
        $this->set('funcionarioCategorias', $this->Paginator->paginate());
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
        if (!$this->FuncionarioCategoria->exists($id)) {
            throw new NotFoundException(__('Invalid funcionario categoria'));
        }
        $options = ['conditions' => ['FuncionarioCategoria.' . $this->FuncionarioCategoria->primaryKey => $id]];
        $this->set('funcionarioCategoria', $this->FuncionarioCategoria->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->FuncionarioCategoria->create();
            if ($this->FuncionarioCategoria->save($this->request->data)) {
                $this->Session->setFlash(__('The funcionario categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The funcionario categoria could not be saved. Please, try again.'));
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
        if (!$this->FuncionarioCategoria->exists($id)) {
            throw new NotFoundException(__('Invalid funcionario categoria'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->FuncionarioCategoria->save($this->request->data)) {
                $this->Session->setFlash(__('The funcionario categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The funcionario categoria could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['FuncionarioCategoria.' . $this->FuncionarioCategoria->primaryKey => $id]];
            $this->request->data = $this->FuncionarioCategoria->find('first', $options);
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
        $this->FuncionarioCategoria->id = $id;
        if (!$this->FuncionarioCategoria->exists()) {
            throw new NotFoundException(__('Invalid funcionario categoria'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->FuncionarioCategoria->delete()) {
            $this->Session->setFlash(__('The funcionario categoria has been deleted.'));
        } else {
            $this->Session->setFlash(__('The funcionario categoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
