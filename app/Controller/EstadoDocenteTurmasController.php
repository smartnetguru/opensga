<?php
App::uses('AppController', 'Controller');

/**
 * EstadoDocenteTurmas Controller
 *
 * @property EstadoDocenteTurma $EstadoDocenteTurma
 * @property PaginatorComponent $Paginator
 */
class EstadoDocenteTurmasController extends AppController
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
        $this->EstadoDocenteTurma->recursive = 0;
        $this->set('estadoDocenteTurmas', $this->Paginator->paginate());
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
        if (!$this->EstadoDocenteTurma->exists($id)) {
            throw new NotFoundException(__('Invalid estado docente turma'));
        }
        $options = ['conditions' => ['EstadoDocenteTurma.' . $this->EstadoDocenteTurma->primaryKey => $id]];
        $this->set('estadoDocenteTurma', $this->EstadoDocenteTurma->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->EstadoDocenteTurma->create();
            if ($this->EstadoDocenteTurma->save($this->request->data)) {
                $this->Session->setFlash(__('The estado docente turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado docente turma could not be saved. Please, try again.'));
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
        if (!$this->EstadoDocenteTurma->exists($id)) {
            throw new NotFoundException(__('Invalid estado docente turma'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->EstadoDocenteTurma->save($this->request->data)) {
                $this->Session->setFlash(__('The estado docente turma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado docente turma could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['EstadoDocenteTurma.' . $this->EstadoDocenteTurma->primaryKey => $id]];
            $this->request->data = $this->EstadoDocenteTurma->find('first', $options);
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
        $this->EstadoDocenteTurma->id = $id;
        if (!$this->EstadoDocenteTurma->exists()) {
            throw new NotFoundException(__('Invalid estado docente turma'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->EstadoDocenteTurma->delete()) {
            $this->Session->setFlash(__('The estado docente turma has been deleted.'));
        } else {
            $this->Session->setFlash(__('The estado docente turma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
