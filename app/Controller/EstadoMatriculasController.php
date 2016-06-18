<?php
App::uses('AppController', 'Controller');

/**
 * EstadoMatriculas Controller
 *
 * @property EstadoMatricula $EstadoMatricula
 * @property PaginatorComponent $Paginator
 */
class EstadoMatriculasController extends AppController
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
        $this->EstadoMatricula->recursive = 0;
        $this->set('estadoMatriculas', $this->Paginator->paginate());
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
        if (!$this->EstadoMatricula->exists($id)) {
            throw new NotFoundException(__('Invalid estado matricula'));
        }
        $options = ['conditions' => ['EstadoMatricula.' . $this->EstadoMatricula->primaryKey => $id]];
        $this->set('estadoMatricula', $this->EstadoMatricula->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->EstadoMatricula->create();
            if ($this->EstadoMatricula->save($this->request->data)) {
                $this->Session->setFlash(__('The estado matricula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado matricula could not be saved. Please, try again.'));
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
        if (!$this->EstadoMatricula->exists($id)) {
            throw new NotFoundException(__('Invalid estado matricula'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->EstadoMatricula->save($this->request->data)) {
                $this->Session->setFlash(__('The estado matricula has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The estado matricula could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['EstadoMatricula.' . $this->EstadoMatricula->primaryKey => $id]];
            $this->request->data = $this->EstadoMatricula->find('first', $options);
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
        $this->EstadoMatricula->id = $id;
        if (!$this->EstadoMatricula->exists()) {
            throw new NotFoundException(__('Invalid estado matricula'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->EstadoMatricula->delete()) {
            $this->Session->setFlash(__('The estado matricula has been deleted.'));
        } else {
            $this->Session->setFlash(__('The estado matricula could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
