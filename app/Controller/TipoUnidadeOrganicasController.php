<?php
App::uses('AppController', 'Controller');

/**
 * TipoUnidadeOrganicas Controller
 *
 * @property TipoUnidadeOrganica $TipoUnidadeOrganica
 */
class TipoUnidadeOrganicasController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->TipoUnidadeOrganica->recursive = 0;
        $this->set('tipoUnidadeOrganicas', $this->paginate());
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
        $this->TipoUnidadeOrganica->id = $id;
        if (!$this->TipoUnidadeOrganica->exists()) {
            throw new NotFoundException(__('Tipo de Unidade Orgânica Inválido'));
        }
        $this->set('tipoUnidadeOrganica', $this->TipoUnidadeOrganica->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->TipoUnidadeOrganica->create();
            if ($this->TipoUnidadeOrganica->save($this->request->data)) {
                $this->Session->setFlash(__('O Tipo de Unidade Orgânica foi gravado com sucesso'), 'default',
                    ['class' => 'alert_success']);
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('Problemas ao registrar este tipo de Unidade orgânica'), 'default',
                    ['class' => 'alert_error']);
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
        $this->TipoUnidadeOrganica->id = $id;
        if (!$this->TipoUnidadeOrganica->exists()) {
            throw new NotFoundException(__('Tipo de Unidade Orgânica Invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TipoUnidadeOrganica->save($this->request->data)) {
                $this->Session->setFlash(__('O Tipo de Unidade Orgânica foi gravado com sucesso'), 'default',
                    ['class' => 'alert_success']);
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('Problemas ao registrar este tipo de Unidade orgânica'), 'default',
                    ['class' => 'alert_error']);
            }
        } else {
            $this->request->data = $this->TipoUnidadeOrganica->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @param string $id
     * @return void
     *
     * FIXME apenas podem-se apagar tipos de unidades nao usadas ou seja, quando nao existem unidades desse tipo. Verificar
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->TipoUnidadeOrganica->id = $id;
        if (!$this->TipoUnidadeOrganica->exists()) {
            throw new NotFoundException(__('Invalid tipo unidade organica'));
        }
        if ($this->TipoUnidadeOrganica->delete()) {
            $this->Session->setFlash(__('Tipo unidade organica deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Tipo unidade organica was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
