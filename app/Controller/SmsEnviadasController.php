<?php
App::uses('AppController', 'Controller');

/**
 * SmsEnviadas Controller
 *
 * @property SmsEnviada $SmsEnviada
 */
class SmsEnviadasController extends AppController
{

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->SmsEnviada->recursive = 0;
        $this->set('smsEnviadas', $this->paginate());
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
        if (!$this->SmsEnviada->exists($id)) {
            throw new NotFoundException(__('Invalid sms enviada'));
        }
        $options = ['conditions' => ['SmsEnviada.' . $this->SmsEnviada->primaryKey => $id]];
        $this->set('smsEnviada', $this->SmsEnviada->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->SmsEnviada->create();
            if ($this->SmsEnviada->save($this->request->data)) {
                $this->Session->setFlash(__('The sms enviada has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The sms enviada could not be saved. Please, try again.'));
            }
        }
        $users = $this->SmsEnviada->User->find('list');
        $smsTipos = $this->SmsEnviada->SmsTipo->find('list');
        $this->set(compact('users', 'smsTipos'));
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
        if (!$this->SmsEnviada->exists($id)) {
            throw new NotFoundException(__('Invalid sms enviada'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->SmsEnviada->save($this->request->data)) {
                $this->Session->setFlash(__('The sms enviada has been saved'));
                $this->redirect(['action' => 'index']);
            } else {
                $this->Session->setFlash(__('The sms enviada could not be saved. Please, try again.'));
            }
        } else {
            $options = ['conditions' => ['SmsEnviada.' . $this->SmsEnviada->primaryKey => $id]];
            $this->request->data = $this->SmsEnviada->find('first', $options);
        }
        $users = $this->SmsEnviada->User->find('list');
        $smsTipos = $this->SmsEnviada->SmsTipo->find('list');
        $this->set(compact('users', 'smsTipos'));
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
        $this->SmsEnviada->id = $id;
        if (!$this->SmsEnviada->exists()) {
            throw new NotFoundException(__('Invalid sms enviada'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->SmsEnviada->delete()) {
            $this->Session->setFlash(__('Sms enviada deleted'));
            $this->redirect(['action' => 'index']);
        }
        $this->Session->setFlash(__('Sms enviada was not deleted'));
        $this->redirect(['action' => 'index']);
    }
}
