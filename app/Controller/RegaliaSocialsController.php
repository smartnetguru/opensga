<?php
App::uses('AppController', 'Controller');

/**
 * RegaliaSocials Controller
 *
 * @property RegaliaSocial $RegaliaSocial
 * @property PaginatorComponent $Paginator
 */
class RegaliaSocialsController extends AppController
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
        $this->RegaliaSocial->recursive = 0;
        $this->set('regaliaSocials', $this->Paginator->paginate());
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
        if (!$this->RegaliaSocial->exists($id)) {
            throw new NotFoundException(__('Invalid regalia social'));
        }
        $options = ['conditions' => ['RegaliaSocial.' . $this->RegaliaSocial->primaryKey => $id]];
        $this->set('regaliaSocial', $this->RegaliaSocial->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->RegaliaSocial->create();
            if ($this->RegaliaSocial->save($this->request->data)) {
                $this->Session->setFlash(__('The regalia social has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The regalia social could not be saved. Please, try again.'));
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
        if (!$this->RegaliaSocial->exists($id)) {
            throw new NotFoundException(__('Invalid regalia social'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->RegaliaSocial->save($this->request->data)) {
                $this->Session->setFlash(__('The regalia social has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The regalia social could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['RegaliaSocial.' . $this->RegaliaSocial->primaryKey => $id]];
            $this->request->data = $this->RegaliaSocial->find('first', $options);
        }
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
        $this->RegaliaSocial->id = $id;
        if (!$this->RegaliaSocial->exists()) {
            throw new NotFoundException(__('Invalid regalia social'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->RegaliaSocial->delete()) {
            $this->Session->setFlash(__('The regalia social has been deleted.'));
        } else {
            $this->Session->setFlash(__('The regalia social could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
