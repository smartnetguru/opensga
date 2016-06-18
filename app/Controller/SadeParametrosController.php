<?php
App::uses('AppController', 'Controller');

/**
 * SadeParametros Controller
 *
 * @property SadeParametro $SadeParametro
 */
class SadeParametrosController extends AppController
{


    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->SadeParametro->recursive = 0;
        $this->set('sadeParametros', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->SadeParametro->id = $id;
        if (!$this->SadeParametro->exists()) {
            throw new NotFoundException(__('Invalid sade parametro'));
        }
        $this->set('sadeParametro', $this->SadeParametro->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->SadeParametro->create();
            if ($this->SadeParametro->save($this->request->data)) {
                $this->Session->setFlash(__('The sade parametro has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The sade parametro could not be saved. Please, try again.'));
            }
        }
        $sadeIndicadors = $this->SadeParametro->SadeIndicador->find('list');
        $this->set(compact('sadeIndicadors'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->SadeParametro->id = $id;
        if (!$this->SadeParametro->exists()) {
            throw new NotFoundException(__('Invalid sade parametro'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->SadeParametro->save($this->request->data)) {
                $this->Session->setFlash(__('The sade parametro has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The sade parametro could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->SadeParametro->read(null, $id);
        }
        $sadeIndicadors = $this->SadeParametro->SadeIndicador->find('list');
        $this->set(compact('sadeIndicadors'));
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->SadeParametro->id = $id;
        if (!$this->SadeParametro->exists()) {
            throw new NotFoundException(__('Invalid sade parametro'));
        }
        if ($this->SadeParametro->delete()) {
            $this->Session->setFlash(__('Sade parametro deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Sade parametro was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
