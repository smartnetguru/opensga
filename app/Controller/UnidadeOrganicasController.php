<?php
App::uses('AppController', 'Controller');
/**
 * UnidadeOrganicas Controller
 *
 * @property UnidadeOrganica $UnidadeOrganica
 */
class UnidadeOrganicasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UnidadeOrganica->recursive = 0;
		$this->set('unidadeOrganicas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UnidadeOrganica->id = $id;
		if (!$this->UnidadeOrganica->exists()) {
			throw new NotFoundException(__('Unidade Orgânica Inválida'));
		}
        $this->UnidadeOrganica->contain(array(
            'ParentUnidadeOrganica','TipoUnidadeOrganica','AreaAcademica','AreaUnidade','Director'=>array(
                'Entidade'
            )
        ));
		$this->set('unidadeOrganica', $this->UnidadeOrganica->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function nova_unidade($parent_id=null) {
		if ($this->request->is('post')) {

            //Se estivermos a registar sub_unidade
            if($parent_id!=null){

                $this->request->data['UnidadeOrganica']['parent_id']=$parent_id;
                $parente = $this->UnidadeOrganica->findById($parent_id);
                $this->request->data['UnidadeOrganica']['nivel_unidade']= $parente['UnidadeOrganica']['nivel_unidade']+1;
            } else{
                $this->request->data['UnidadeOrganica']['nivel_unidade']=1;
            }
			$this->UnidadeOrganica->create();
			if ($this->UnidadeOrganica->save($this->request->data)) {
				$this->Session->setFlash(__('Unidade Orgânica Registrada com Sucesso'),'default',array('class'=>'alert_success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Problemas ao Registrar Unidade Orgânica'),'default',array('class'=>'alert_error'));
			}
		}
		$tipoUnidadeOrganicas = $this->UnidadeOrganica->TipoUnidadeOrganica->find('list');
		$areaAcademicas = $this->UnidadeOrganica->AreaAcademica->find('list');
		$areaUnidades = $this->UnidadeOrganica->AreaUnidade->find('list');
		$parentUnidadeOrganicas = $this->UnidadeOrganica->ParentUnidadeOrganica->find('list');
        $directors = $this->UnidadeOrganica->Director->listaFuncionarios('all');
		$this->set(compact('tipoUnidadeOrganicas', 'areaAcademicas', 'areaUnidades', 'parentUnidadeOrganicas','directors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UnidadeOrganica->id = $id;
		if (!$this->UnidadeOrganica->exists()) {
			throw new NotFoundException(__('Unidade Orgânica Inválida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UnidadeOrganica->save($this->request->data)) {
				$this->Session->setFlash(__('A Unidade Orgânica foi editada com sucesso'),'default',array('class'=>'alert_success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Problemas ao editar Unidade Orgânica'),'default',array('class'=>'alert_error'));
			}
		} else {
			$this->request->data = $this->UnidadeOrganica->read(null, $id);
		}
		$tipoUnidadeOrganicas = $this->UnidadeOrganica->TipoUnidadeOrganica->find('list');
		$areaAcademicas = $this->UnidadeOrganica->AreaAcademica->find('list');
		$areaUnidades = $this->UnidadeOrganica->AreaUnidade->find('list');
		$parentUnidadeOrganicas = $this->UnidadeOrganica->ParentUnidadeOrganica->find('list');
        $directors = $this->UnidadeOrganica->Director->listaFuncionarios('all');
		$this->set(compact('tipoUnidadeOrganicas', 'areaAcademicas', 'areaUnidades', 'parentUnidadeOrganicas','directors'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->UnidadeOrganica->id = $id;
		if (!$this->UnidadeOrganica->exists()) {
			throw new NotFoundException(__('Invalid unidade organica'));
		}
		if ($this->UnidadeOrganica->delete()) {
			$this->Session->setFlash(__('Unidade organica deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Unidade organica was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
