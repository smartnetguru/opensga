<?php

/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
 * 
 * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licen�a por nele
 * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
 * 
 * Este software � distribuido sob a perspectiva de que possa ser �til para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licen�a GNU Affero General Public License para mais detalhes
 * 
 * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
 * devem manter est� informa��o legal, assim como a licen�a original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga CakePHP(tm) Project
 * @author		  Elisio Leonardo (http://infomoz.net/elisio-leonardo)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 * @license       GNU Affero General Public License
 * 
 */
 
 
class LogsController extends AppController {
   	public $helpers = array('Auditable.Auditor','Time');
	
	public function index()
	{
            $this->loadModel('Auditable.Logger');
            $this->Logger->contain(array(
                'User'=>array('Entidade')
            ));
            $logs = $this->Logger->find('all',array('conditions'=>array(),'limit'=>1000,'order'=>'Logger.created DESC'));
            
            $this->set('loggers', $logs);
	}
	
	public function view($id)
	{
            $this->loadModel('Auditable.Logger');
		$this->Logger->id = $id;
		
		if(!$this->Logger->exists())
		{
			throw new NotFoundException(__d('auditable', 'Log entry could not be find.'));
		}
		
		$this->set('logger', $this->Logger->get($id));
	}

    public $paginate = array(
        'order' => array('Log.created' => 'DESC'),
        'limit'=>24,
        'fields' => array(
            'Log.created',
            'Log.type',
            'Log.message',
            'Log.id'
        )
    );

    /**
     * Index action
     *
     * @param null|string $filter The filter string.
     * @return void
     */
    public function admin_index($filter = null) {
        if (!empty($this->data)) {
            $filter = $this->data['Log']['filter'];
        }
        $conditions = $this->Log->textSearch($filter);
        if ($type = $this->request->query('type')) {
            $conditions['type'] = $type;
        }


        $logs  = $this->Log->find('all',array('limit'=>25,'order'=>'created DESC'));
        $totalLogs = $this->Log->find('count');
        $this->set(compact('totalLogs'));
        $this->set('logs', $logs);
        $this->set('types', $this->Log->getTypes());
        $this->set('filter', $filter);
    }

    /**
     * View action
     *
     * @param null|int $id The log ID to view.
     * @return void
     */
    public function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid log'));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('log', $this->Log->read(null, $id));
    }

    /**
     * Delete action
     *
     * @param null|int $id The log ID to delete.
     * @return void
     */
    public function admin_delete($id = null) {
        $this->request->onlyAllow('post');
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for log'));
            $this->redirect(array('action' => 'index'));
        }
        $log = $this->Log->findById($id);

        if ($this->Log->deleteAll(array('Log.message'=>$log['Log']['message']))) {
            $this->Session->setFlash(__('Log deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Log was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * Reset action
     *
     * Deletes all log entries.
     *
     * @return void
     */
    public function admin_reset() {
        $this->request->onlyAllow('post');

        $this->Log->deleteAll('1 = 1');
        $this->redirect(array('action' => 'index'));
    }

    /**
     * Remove duplicates action
     *
     * @return void
     */
    public function admin_remove_duplicates() {
        $this->Log->removeDuplicates();

        $this->Session->setFlash(__('Duplicates have been removed.'));
        $this->redirect(array('action' => 'index'));
    }

    public function beforeFilter(){
        parent::beforeFilter();

        $this->Security->csrfCheck= false;
    }
 }
?>