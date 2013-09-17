<?php
App::uses('AppController', 'Controller');
/**
 * SmsNotificationTypes Controller
 *
 * @property SmsNotificationType $SmsNotificationType
 */
class SmsNotificationTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SmsNotificationType->recursive = 0;
		$this->set('smsNotificationTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SmsNotificationType->exists($id)) {
			throw new NotFoundException(__('Invalid sms notification type'));
		}
		$options = array('conditions' => array('SmsNotificationType.' . $this->SmsNotificationType->primaryKey => $id));
		$this->set('smsNotificationType', $this->SmsNotificationType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SmsNotificationType->create();
			if ($this->SmsNotificationType->save($this->request->data)) {
				$this->Session->setFlash(__('The sms notification type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sms notification type could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->SmsNotificationType->exists($id)) {
			throw new NotFoundException(__('Invalid sms notification type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SmsNotificationType->save($this->request->data)) {
				$this->Session->setFlash(__('The sms notification type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sms notification type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SmsNotificationType.' . $this->SmsNotificationType->primaryKey => $id));
			$this->request->data = $this->SmsNotificationType->find('first', $options);
		}
	}


}
