<?php

App::uses('AppController', 'Controller');

/**
 * @auhor: CRISTIANO GILBERTO JOAO
 * BolsaTemporarias Controller
 *
 * @property BolsaTemporaria $BolsaTemporaria
 * @property PaginatorComponent $Paginator
 */
class BolsaTemporariasController extends AppController
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
        $this->BolsaTemporaria->recursive = 0;
        $this->set('bolsaTemporarias', $this->Paginator->paginate());
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
        if (!$this->BolsaTemporaria->exists($id)) {
            throw new NotFoundException(__('Invalid bolsa temporaria'));
        }
        $options = ['conditions' => ['BolsaTemporaria.' . $this->BolsaTemporaria->primaryKey => $id]];
        $this->set('bolsaTemporaria', $this->BolsaTemporaria->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $conditions['BolsaTemporaria.numero_estudante'] = $this->request->data('numero_estudante');
            $options = ['conditions' => $conditions];
            $exist = $this->BolsaTemporaria->find('first', $options);
            if (!empty($exist)) {
                $this->Session->setFlash(__('<div class="alert alert-warning">Este candidato (<b>' . $this->request->data('nomes') . '</b>) ja foi atribuido bolsa</div>'));
            } else {
                $this->BolsaTemporaria->create();
                if ($this->BolsaTemporaria->save($this->request->data)) {
                    $this->Session->setFlash(__('<div class="alert alert-success">Bolsa gravada com sucesso!</div>'));
                    //return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('<div class="alert alert-danger">A bolsa nao foi atribuida. Por favor, Tente novamente.</div>'));
                }
            }

        }
        $bolsaTipoBolsas = $this->BolsaTemporaria->BolsaTipoBolsa->find('list');
        $candidaturas = $this->BolsaTemporaria->Candidatura->find('list');
        $cursos = $this->BolsaTemporaria->Curso->find('list');
        $this->set(compact('bolsaTipoBolsas', 'candidaturas', 'cursos'));
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
        if (!$this->BolsaTemporaria->exists($id)) {
            throw new NotFoundException(__('Invalid bolsa temporaria'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->BolsaTemporaria->save($this->request->data)) {
                $this->Session->setFlash(__('The bolsa temporaria has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The bolsa temporaria could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['BolsaTemporaria.' . $this->BolsaTemporaria->primaryKey => $id]];
            $this->request->data = $this->BolsaTemporaria->find('first', $options);
        }
        $bolsaTipoBolsas = $this->BolsaTemporaria->BolsaTipoBolsa->find('list');
        $candidaturas = $this->BolsaTemporaria->Candidatura->find('list');
        $cursos = $this->BolsaTemporaria->Curso->find('list');
        $this->set(compact('bolsaTipoBolsas', 'candidaturas', 'cursos'));
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
        $this->BolsaTemporaria->id = $id;
        if (!$this->BolsaTemporaria->exists()) {
            throw new NotFoundException(__('Invalid bolsa temporaria'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->BolsaTemporaria->delete()) {
            $this->Session->setFlash(__('The bolsa temporaria has been deleted.'));
        } else {
            $this->Session->setFlash(__('The bolsa temporaria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
