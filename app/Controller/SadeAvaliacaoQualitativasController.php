<?php
App::uses('AppController', 'Controller');

/**
 * SadeAvaliacaoQualitativas Controller
 *
 * @property SadeAvaliacaoQualitativa $SadeAvaliacaoQualitativa
 */
class SadeAvaliacaoQualitativasController extends AppController
{


    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->SadeAvaliacaoQualitativa->recursive = 0;
        $this->set('sadeAvaliacaoQualitativas', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        $this->SadeAvaliacaoQualitativa->id = $id;
        if (!$this->SadeAvaliacaoQualitativa->exists()) {
            throw new NotFoundException(__('Invalid sade avaliacao qualitativa'));
        }
        $this->set('sadeAvaliacaoQualitativa', $this->SadeAvaliacaoQualitativa->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->SadeAvaliacaoQualitativa->create();
            if ($this->SadeAvaliacaoQualitativa->save($this->request->data)) {
                $this->Session->setFlash(__('The sade avaliacao qualitativa has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The sade avaliacao qualitativa could not be saved. Please, try again.'));
            }
        }
        $sadeAvaliadors = $this->SadeAvaliacaoQualitativa->SadeAvaliador->find('list');
        $entidades = $this->SadeAvaliacaoQualitativa->Entidade->find('list');
        $sadeParametros = $this->SadeAvaliacaoQualitativa->SadeParametro->find('list');
        $anolectivos = $this->SadeAvaliacaoQualitativa->AnoLectivo->find('list');
        $this->set(compact('sadeAvaliadors', 'entidades', 'sadeParametros', 'anolectivos'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->SadeAvaliacaoQualitativa->id = $id;
        if (!$this->SadeAvaliacaoQualitativa->exists()) {
            throw new NotFoundException(__('Invalid sade avaliacao qualitativa'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->SadeAvaliacaoQualitativa->save($this->request->data)) {
                $this->Session->setFlash(__('The sade avaliacao qualitativa has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The sade avaliacao qualitativa could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->SadeAvaliacaoQualitativa->read(null, $id);
        }
        $sadeAvaliadors = $this->SadeAvaliacaoQualitativa->SadeAvaliador->find('list');
        $entidades = $this->SadeAvaliacaoQualitativa->Entidade->find('list');
        $sadeParametros = $this->SadeAvaliacaoQualitativa->SadeParametro->find('list');
        $anolectivos = $this->SadeAvaliacaoQualitativa->AnoLectivo->find('list');
        $this->set(compact('sadeAvaliadors', 'entidades', 'sadeParametros', 'anolectivos'));
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
        $this->SadeAvaliacaoQualitativa->id = $id;
        if (!$this->SadeAvaliacaoQualitativa->exists()) {
            throw new NotFoundException(__('Invalid sade avaliacao qualitativa'));
        }
        if ($this->SadeAvaliacaoQualitativa->delete()) {
            $this->Session->setFlash(__('Sade avaliacao qualitativa deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Sade avaliacao qualitativa was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
