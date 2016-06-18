<?php
App::uses('AppController', 'Controller');

/**
 * Alumnis Controller
 *
 * @property Alumni $Alumni
 */
class AlumniAlumnisController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Alumni->recursive = 0;
        $this->set('alumnis', $this->paginate());
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
        if (!$this->Alumni->exists($id)) {
            throw new NotFoundException(__('Invalid alumni'));
        }
        $options = ['conditions' => ['Alumni.' . $this->Alumni->primaryKey => $id]];
        $this->set('alumni', $this->Alumni->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Alumni->create();
            if ($this->Alumni->save($this->request->data)) {
                $this->Session->setFlash(__('The alumni has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The alumni could not be saved. Please, try again.'));
            }
        }
        $entidades = $this->Alumni->Entidade->find('list');
        $alunos = $this->Alumni->Aluno->find('list');
        $candidatoAlumnis = $this->Alumni->CandidatoAlumnus->find('list');
        $users = $this->Alumni->User->find('list');
        $this->set(compact('entidades', 'alunos', 'candidatoAlumnis', 'users'));
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
        if (!$this->Alumni->exists($id)) {
            throw new NotFoundException(__('Invalid alumni'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Alumni->save($this->request->data)) {
                $this->Session->setFlash(__('The alumni has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The alumni could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['Alumni.' . $this->Alumni->primaryKey => $id]];
            $this->request->data = $this->Alumni->find('first', $options);
        }
        $entidades = $this->Alumni->Entidade->find('list');
        $alunos = $this->Alumni->Aluno->find('list');
        $candidatoAlumnis = $this->Alumni->CandidatoAlumnus->find('list');
        $users = $this->Alumni->User->find('list');
        $this->set(compact('entidades', 'alunos', 'candidatoAlumnis', 'users'));
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
        $this->Alumni->id = $id;
        if (!$this->Alumni->exists()) {
            throw new NotFoundException(__('Invalid alumni'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Alumni->delete()) {
            $this->Session->setFlash(__('Alumni deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Alumni was not deleted'));
        $this->redirect(['action' => 'index']);
    }


}
