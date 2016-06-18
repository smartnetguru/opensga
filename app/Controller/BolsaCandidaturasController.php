<?php
App::uses('AppController', 'Controller');

/**
 * BolsaCandidaturas Controller
 *
 * @property BolsaPedido $BolsaPedido
 */
class BolsaCandidaturasController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->BolsaPedido->recursive = 0;
        $this->set('bolsaCandidaturas', $this->paginate());
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
        $this->BolsaPedido->id = $id;
        if (!$this->BolsaPedido->exists()) {
            throw new NotFoundException(__('Invalid bolsa candidatura'));
        }
        $this->set('bolsaCandidatura', $this->BolsaPedido->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->BolsaPedido->create();
            if ($this->BolsaPedido->save($this->request->data)) {
                $this->Session->setFlash(__('The bolsa candidatura has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The bolsa candidatura could not be saved. Please, try again.'));
            }
        }
        $alunos = $this->BolsaPedido->Aluno->find('list');
        $anoLectivos = $this->BolsaPedido->AnoLectivo->find('list');
        $bolsaBolsas = $this->BolsaPedido->BolsaBolsa->find('list');
        $estadoObjectos = $this->BolsaPedido->EstadoObjecto->find('list');
        $bolsaTipoBolsas = $this->BolsaPedido->BolsaTipoBolsa->find('list');
        $entidades = $this->BolsaPedido->Entidade->find('list');
        $bolsaTipoCandidaturas = $this->BolsaPedido->BolsaTipoCandidatura->find('list');
        $this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas', 'entidades',
            'bolsaTipoCandidaturas'));
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
        $this->BolsaPedido->id = $id;
        if (!$this->BolsaPedido->exists()) {
            throw new NotFoundException(__('Invalid bolsa candidatura'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->BolsaPedido->save($this->request->data)) {
                $this->Session->setFlash(__('The bolsa candidatura has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The bolsa candidatura could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->BolsaPedido->read(null, $id);
        }
        $alunos = $this->BolsaPedido->Aluno->find('list');
        $anoLectivos = $this->BolsaPedido->AnoLectivo->find('list');
        $bolsaBolsas = $this->BolsaPedido->BolsaBolsa->find('list');
        $estadoObjectos = $this->BolsaPedido->EstadoObjecto->find('list');
        $bolsaTipoBolsas = $this->BolsaPedido->BolsaTipoBolsa->find('list');
        $entidades = $this->BolsaPedido->Entidade->find('list');
        $bolsaTipoCandidaturas = $this->BolsaPedido->BolsaTipoCandidatura->find('list');
        $this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas', 'entidades',
            'bolsaTipoCandidaturas'));
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
        $this->BolsaPedido->id = $id;
        if (!$this->BolsaPedido->exists()) {
            throw new NotFoundException(__('Invalid bolsa candidatura'));
        }
        if ($this->BolsaPedido->delete()) {
            $this->Session->setFlash(__('Bolsa candidatura deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Bolsa candidatura was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
