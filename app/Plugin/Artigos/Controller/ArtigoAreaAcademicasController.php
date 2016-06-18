<?php
App::uses('AppController', 'Controller');

/**
 * ArtigoAreaAcademicas Controller
 *
 * @property ArtigoAreaAcademica $ArtigoAreaAcademica
 * @property PaginatorComponent $Paginator
 */
class ArtigoAreaAcademicasController extends AppController
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
        $this->ArtigoAreaAcademica->recursive = 0;
        $this->set('artigoAreaAcademicas', $this->Paginator->paginate());
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
        if (!$this->ArtigoAreaAcademica->exists($id)) {
            throw new NotFoundException(__('Invalid artigo area academica'));
        }
        $options = ['conditions' => ['ArtigoAreaAcademica.' . $this->ArtigoAreaAcademica->primaryKey => $id]];
        $this->set('artigoAreaAcademica', $this->ArtigoAreaAcademica->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->ArtigoAreaAcademica->create();
            if ($this->ArtigoAreaAcademica->save($this->request->data)) {
                $this->Flash->success(__('The artigo area academica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The artigo area academica could not be saved. Please, try again.'));
            }
        }
        $artigos = $this->ArtigoAreaAcademica->Artigo->find('list');
        $areaAcademicas = $this->ArtigoAreaAcademica->AreaAcademica->find('list');
        $estadoObjectos = $this->ArtigoAreaAcademica->EstadoObjecto->find('list');
        $this->set(compact('artigos', 'areaAcademicas', 'estadoObjectos'));
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
        if (!$this->ArtigoAreaAcademica->exists($id)) {
            throw new NotFoundException(__('Invalid artigo area academica'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->ArtigoAreaAcademica->save($this->request->data)) {
                $this->Flash->success(__('The artigo area academica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The artigo area academica could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['ArtigoAreaAcademica.' . $this->ArtigoAreaAcademica->primaryKey => $id]];
            $this->request->data = $this->ArtigoAreaAcademica->find('first', $options);
        }
        $artigos = $this->ArtigoAreaAcademica->Artigo->find('list');
        $areaAcademicas = $this->ArtigoAreaAcademica->AreaAcademica->find('list');
        $estadoObjectos = $this->ArtigoAreaAcademica->EstadoObjecto->find('list');
        $this->set(compact('artigos', 'areaAcademicas', 'estadoObjectos'));
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
        $this->ArtigoAreaAcademica->id = $id;
        if (!$this->ArtigoAreaAcademica->exists()) {
            throw new NotFoundException(__('Invalid artigo area academica'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->ArtigoAreaAcademica->delete()) {
            $this->Flash->success(__('The artigo area academica has been deleted.'));
        } else {
            $this->Flash->error(__('The artigo area academica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
