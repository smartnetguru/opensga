<?php
App::uses('AppController', 'Controller');

/**
 * AreaUnidades Controller
 *
 * @property AreaUnidade $AreaUnidade
 */
class AreaUnidadesController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->AreaUnidade->recursive = 0;
        $this->set('areaUnidades', $this->paginate());
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
        $this->AreaUnidade->id = $id;
        if (!$this->AreaUnidade->exists()) {
            throw new NotFoundException(__('Área Funcional Inválida'));
        }
        $this->set('areaUnidade', $this->AreaUnidade->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->AreaUnidade->create();
            if ($this->AreaUnidade->save($this->request->data)) {
                $this->Session->setFlash(__('A Área Funcional foi registrada com Sucesso'), 'default',
                    ['class' => 'alert_success']);
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('Problemas ao registrar a Área Funcional'), 'default',
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
        $this->AreaUnidade->id = $id;
        if (!$this->AreaUnidade->exists()) {
            throw new NotFoundException(__('Área Funcional Inválida'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->AreaUnidade->save($this->request->data)) {
                $this->Session->setFlash(__('A Área Funcional foi editada com Sucesso'), 'default',
                    ['class' => 'alert_success']);
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('Problemas ao editar a Área Funcional'), 'default',
                    ['class' => 'alert_error']);
            }
        } else {
            $this->request->data = $this->AreaUnidade->read(null, $id);
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
     * FIXME Nao se pode remover uma area funcional ja referenciada em outros modulos
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->AreaUnidade->id = $id;
        if (!$this->AreaUnidade->exists()) {
            throw new NotFoundException(__('Invalid area unidade'));
        }
        if ($this->AreaUnidade->delete()) {
            $this->Session->setFlash(__('Area unidade deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Area unidade was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
