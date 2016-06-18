<?php
App::uses('AppController', 'Controller');

/**
 * ArtigoTagArtigos Controller
 *
 * @property ArtigoTagArtigo $ArtigoTagArtigo
 * @property PaginatorComponent $Paginator
 */
class ArtigoTagArtigosController extends AppController
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
        $this->ArtigoTagArtigo->recursive = 0;
        $this->set('artigoTagArtigos', $this->Paginator->paginate());
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
        if (!$this->ArtigoTagArtigo->exists($id)) {
            throw new NotFoundException(__('Invalid artigo tag artigo'));
        }
        $options = ['conditions' => ['ArtigoTagArtigo.' . $this->ArtigoTagArtigo->primaryKey => $id]];
        $this->set('artigoTagArtigo', $this->ArtigoTagArtigo->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->ArtigoTagArtigo->create();
            if ($this->ArtigoTagArtigo->save($this->request->data)) {
                $this->Flash->success(__('The artigo tag artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The artigo tag artigo could not be saved. Please, try again.'));
            }
        }
        $artigos = $this->ArtigoTagArtigo->Artigo->find('list');
        $artigoTags = $this->ArtigoTagArtigo->ArtigoTag->find('list');
        $estadoObjectos = $this->ArtigoTagArtigo->EstadoObjecto->find('list');
        $this->set(compact('artigos', 'artigoTags', 'estadoObjectos'));
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
        if (!$this->ArtigoTagArtigo->exists($id)) {
            throw new NotFoundException(__('Invalid artigo tag artigo'));
        }
        if ($this->request->is(['post', 'put'])) {
            if ($this->ArtigoTagArtigo->save($this->request->data)) {
                $this->Flash->success(__('The artigo tag artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The artigo tag artigo could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['ArtigoTagArtigo.' . $this->ArtigoTagArtigo->primaryKey => $id]];
            $this->request->data = $this->ArtigoTagArtigo->find('first', $options);
        }
        $artigos = $this->ArtigoTagArtigo->Artigo->find('list');
        $artigoTags = $this->ArtigoTagArtigo->ArtigoTag->find('list');
        $estadoObjectos = $this->ArtigoTagArtigo->EstadoObjecto->find('list');
        $this->set(compact('artigos', 'artigoTags', 'estadoObjectos'));
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
        $this->ArtigoTagArtigo->id = $id;
        if (!$this->ArtigoTagArtigo->exists()) {
            throw new NotFoundException(__('Invalid artigo tag artigo'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->ArtigoTagArtigo->delete()) {
            $this->Flash->success(__('The artigo tag artigo has been deleted.'));
        } else {
            $this->Flash->error(__('The artigo tag artigo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
