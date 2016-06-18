<?php
App::uses('AppController', 'Controller');

/**
 * TipoNivelMedios Controller
 *
 * @property TipoNivelMedio $TipoNivelMedio
 */
class TipoNivelMediosController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->TipoNivelMedio->recursive = 0;
        $this->set('tipoNivelMedios', $this->paginate());
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
        $this->TipoNivelMedio->id = $id;
        if (!$this->TipoNivelMedio->exists()) {
            throw new NotFoundException(__('Invalid tipo nivel medio'));
        }
        $this->set('tipoNivelMedio', $this->TipoNivelMedio->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->TipoNivelMedio->create();
            if ($this->TipoNivelMedio->save($this->request->data)) {
                $this->Session->setFlash(__('The tipo nivel medio has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The tipo nivel medio could not be saved. Please, try again.'));
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
        $this->TipoNivelMedio->id = $id;
        if (!$this->TipoNivelMedio->exists()) {
            throw new NotFoundException(__('Invalid tipo nivel medio'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TipoNivelMedio->save($this->request->data)) {
                $this->Session->setFlash(__('The tipo nivel medio has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The tipo nivel medio could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->TipoNivelMedio->read(null, $id);
        }
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
        $this->TipoNivelMedio->id = $id;
        if (!$this->TipoNivelMedio->exists()) {
            throw new NotFoundException(__('Invalid tipo nivel medio'));
        }
        if ($this->TipoNivelMedio->delete()) {
            $this->Session->setFlash(__('Tipo nivel medio deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Tipo nivel medio was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
