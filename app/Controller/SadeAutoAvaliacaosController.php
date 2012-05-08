<?php
App::uses('AppController', 'Controller');
/**
 * SadeAutoAvaliacaos Controller
 *
 * @property SadeAutoAvaliacao $SadeAutoAvaliacao
 */
class SadeAutoAvaliacaosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SadeAutoAvaliacao->recursive = 0;
		$this->set('sadeAutoAvaliacaos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SadeAutoAvaliacao->id = $id;
		if (!$this->SadeAutoAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid sade auto avaliacao'));
		}
		$this->set('sadeAutoAvaliacao', $this->SadeAutoAvaliacao->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SadeAutoAvaliacao->create();
			if ($this->SadeAutoAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The sade auto avaliacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade auto avaliacao could not be saved. Please, try again.'));
			}
		}
		$entidades = $this->SadeAutoAvaliacao->Entidade->find('list');
		$sadeParametros = $this->SadeAutoAvaliacao->SadeParametro->find('list');
		$anolectivos = $this->SadeAutoAvaliacao->Anolectivo->find('list');
		$semestrelectivos = $this->SadeAutoAvaliacao->Semestrelectivo->find('list');
		$sadeAvaliacaos = $this->SadeAutoAvaliacao->SadeAvaliacao->find('list');
		$this->set(compact('entidades', 'sadeParametros', 'anolectivos', 'semestrelectivos', 'sadeAvaliacaos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SadeAutoAvaliacao->id = $id;
		if (!$this->SadeAutoAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid sade auto avaliacao'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SadeAutoAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The sade auto avaliacao has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sade auto avaliacao could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SadeAutoAvaliacao->read(null, $id);
		}
		$entidades = $this->SadeAutoAvaliacao->Entidade->find('list');
		$sadeParametros = $this->SadeAutoAvaliacao->SadeParametro->find('list');
		$anolectivos = $this->SadeAutoAvaliacao->Anolectivo->find('list');
		$semestrelectivos = $this->SadeAutoAvaliacao->Semestrelectivo->find('list');
		$sadeAvaliacaos = $this->SadeAutoAvaliacao->SadeAvaliacao->find('list');
		$this->set(compact('entidades', 'sadeParametros', 'anolectivos', 'semestrelectivos', 'sadeAvaliacaos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->SadeAutoAvaliacao->id = $id;
		if (!$this->SadeAutoAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid sade auto avaliacao'));
		}
		if ($this->SadeAutoAvaliacao->delete()) {
			$this->Session->setFlash(__('Sade auto avaliacao deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sade auto avaliacao was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
    
    /**
     * Pagina de Auto-Avaliação do Docente
     */
    public function docente(){
        if($this->request->is('post') || $this->request->is('put')){
            $user_id  =$this->Session->read('Auth.User.id');
            $entidade = $this->SadeAutoAvaliacao->Entidade->find('first',array('conditions'=>array('Entidade.user_id'=>$user_id)));
            $respostas  = $this->request->data['SadeAutoAvaliacao'];
            
            
            foreach($respostas as $k=>$v){
                $sade_parametro = $this->SadeAutoAvaliacao->SadeParametro->find('first',array('conditions'=>array('SadeParametro.codigo'=>$k)));
                $sade_auto_avaliacao = array();
                $sade_auto_avaliacao['resposta']=$v['resposta'];
                $sade_auto_avaliacao['entidade_id']=$entidade['Entidade']['id'];
                $sade_auto_avaliacao['sade_parametro_id']=$k;
                $sade_auto_avaliacao['data']=date('Y-m-d');
                $sade_auto_avaliacao['anolectivo_id']=$this->Session->read('SGAConfig.anolectivo_id');
                $sade_auto_avaliacao['semestrelectivo_id']=$this->Session->read('SGAConfig.semestrelectivo_id');
                
                if($v['resposta']>=$sade_parametro['SadeParametro']['quantidade_padrao']){
                    $sade_auto_avaliacao['pontos_obtidos']=$sade_parametro['SadeParametro']['pontos_padrao'];
                }
                else{
                    $sade_auto_avaliacao['pontos_obtidos']=0;
                }
                debug($sade_auto_avaliacao);
            }
            
            debug($sa);
            die(debug($this->request->data));
        }
    }
    public function assistente(){
        
    }
    
    public function investigador(){
        
    }
    
    public function update_form(){
        debug($this->request->data);
    }
}
