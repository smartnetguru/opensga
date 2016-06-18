<?php
App::uses('AppController', 'Controller');

/**
 * EstadoTurmas Controller
 *
 * @property EstadoTurma $EstadoTurma
 * @property PaginatorComponent $Paginator
 */
class EstadoTurmasController extends AppController
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
        $this->EstadoTurma->recursive = 0;
        $this->set('estadoTurmas', $this->Paginator->paginate());
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
        if (!$this->EstadoTurma->exists($id)) {
            throw new NotFoundException(__('Invalid estado turma'));
        }
        $options = ['conditions' => ['EstadoTurma.' . $this->EstadoTurma->primaryKey => $id]];
        $this->set('estadoTurma', $this->EstadoTurma->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->EstadoTurma->create();
            if ($this->EstadoTurma->save($this->request->data)) {
                $this->Session->setFlash(__('The estado turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado turma could not be saved. Please, try again.'));
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
        if (!$this->EstadoTurma->exists($id)) {
            throw new NotFoundException(__('Invalid estado turma'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->EstadoTurma->save($this->request->data)) {
                $this->Session->setFlash(__('The estado turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado turma could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['EstadoTurma.' . $this->EstadoTurma->primaryKey => $id]];
            $this->request->data = $this->EstadoTurma->find('first', $options);
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
        $this->EstadoTurma->id = $id;
        if (!$this->EstadoTurma->exists()) {
            throw new NotFoundException(__('Invalid estado turma'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->EstadoTurma->delete()) {
            $this->Session->setFlash(__('The estado turma has been deleted.'));
        } else {
            $this->Session->setFlash(__('The estado turma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
