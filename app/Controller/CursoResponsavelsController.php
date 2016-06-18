<?php
App::uses('AppController', 'Controller');

/**
 * CursoResponsavels Controller
 *
 * @property CursoResponsavel $CursoResponsavel
 * @property PaginatorComponent $Paginator
 */
class CursoResponsavelsController extends AppController
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
        $this->CursoResponsavel->recursive = 0;
        $this->set('cursoResponsavels', $this->Paginator->paginate());
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
        if (!$this->CursoResponsavel->exists($id)) {
            throw new NotFoundException(__('Invalid curso responsavel'));
        }
        $options = ['conditions' => ['CursoResponsavel.' . $this->CursoResponsavel->primaryKey => $id]];
        $this->set('cursoResponsavel', $this->CursoResponsavel->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->CursoResponsavel->create();
            if ($this->CursoResponsavel->save($this->request->data)) {
                $this->Session->setFlash(__('The curso responsavel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The curso responsavel could not be saved. Please, try again.'));
            }
        }
        $cursos = $this->CursoResponsavel->Curso->find('list');
        $funcionarios = $this->CursoResponsavel->Funcionario->find('list');
        $estadoObjectos = $this->CursoResponsavel->EstadoObjecto->find('list');
        $this->set(compact('cursos', 'funcionarios', 'estadoObjectos'));
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
        if (!$this->CursoResponsavel->exists($id)) {
            throw new NotFoundException(__('Invalid curso responsavel'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->CursoResponsavel->save($this->request->data)) {
                $this->Session->setFlash(__('The curso responsavel has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The curso responsavel could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['CursoResponsavel.' . $this->CursoResponsavel->primaryKey => $id]];
            $this->request->data = $this->CursoResponsavel->find('first', $options);
        }
        $cursos = $this->CursoResponsavel->Curso->find('list');
        $funcionarios = $this->CursoResponsavel->Funcionario->find('list');
        $estadoObjectos = $this->CursoResponsavel->EstadoObjecto->find('list');
        $this->set(compact('cursos', 'funcionarios', 'estadoObjectos'));
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
        $this->CursoResponsavel->id = $id;
        if (!$this->CursoResponsavel->exists()) {
            throw new NotFoundException(__('Invalid curso responsavel'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CursoResponsavel->delete()) {
            $this->Session->setFlash(__('The curso responsavel has been deleted.'));
        } else {
            $this->Session->setFlash(__('The curso responsavel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
