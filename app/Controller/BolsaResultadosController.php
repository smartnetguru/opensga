<?php
App::uses('AppController', 'Controller');

/**
 * BolsaResultados Controller
 *
 * @property BolsaResultado $BolsaResultado
 */
class BolsaResultadosController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->BolsaResultado->recursive = 0;
        $this->set('bolsaResultados', $this->paginate());
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
        $this->BolsaResultado->id = $id;
        if (!$this->BolsaResultado->exists()) {
            throw new NotFoundException(__('Invalid bolsa resultado'));
        }
        $this->set('bolsaResultado', $this->BolsaResultado->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->BolsaResultado->create();
            if ($this->BolsaResultado->save($this->request->data)) {
                $this->Session->setFlash(__('The bolsa resultado has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The bolsa resultado could not be saved. Please, try again.'));
            }
        }
        $bolsaCandidaturas = $this->BolsaResultado->BolsaPedido->find('list');
        $bolsaTipoBolsas = $this->BolsaResultado->BolsaTipoBolsa->find('list');
        $bolsaMotivoIndeferimentos = $this->BolsaResultado->BolsaMotivoIndeferimento->find('list');
        $this->set(compact('bolsaCandidaturas', 'bolsaTipoBolsas', 'bolsaMotivoIndeferimentos'));
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
        $this->BolsaResultado->id = $id;
        if (!$this->BolsaResultado->exists()) {
            throw new NotFoundException(__('Invalid bolsa resultado'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->BolsaResultado->save($this->request->data)) {
                $this->Session->setFlash(__('The bolsa resultado has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The bolsa resultado could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->BolsaResultado->read(null, $id);
        }
        $bolsaCandidaturas = $this->BolsaResultado->BolsaPedido->find('list');
        $bolsaTipoBolsas = $this->BolsaResultado->BolsaTipoBolsa->find('list');
        $bolsaMotivoIndeferimentos = $this->BolsaResultado->BolsaMotivoIndeferimento->find('list');
        $this->set(compact('bolsaCandidaturas', 'bolsaTipoBolsas', 'bolsaMotivoIndeferimentos'));
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
        $this->BolsaResultado->id = $id;
        if (!$this->BolsaResultado->exists()) {
            throw new NotFoundException(__('Invalid bolsa resultado'));
        }
        if ($this->BolsaResultado->delete()) {
            $this->Session->setFlash(__('Bolsa resultado deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Bolsa resultado was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
