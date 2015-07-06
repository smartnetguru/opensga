<?php
App::uses('AppController', 'Controller');
/**
 * BolsaPedidos Controller
 *
 * @property BolsaPedido $BolsaPedido
 * @property PaginatorComponent $Paginator
 */
class BolsaPedidosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BolsaPedido->recursive = 0;
		$this->set('bolsaPedidos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BolsaPedido->exists($id)) {
			throw new NotFoundException(__('Invalid bolsa pedido'));
		}
		$options = array('conditions' => array('BolsaPedido.' . $this->BolsaPedido->primaryKey => $id));
		$this->set('bolsaPedido', $this->BolsaPedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

            $conditions['BolsaPedido.aluno_id'] = $this->request->data('aluno_id');
            $options = array('conditions' => $conditions);
            $exist = $this->BolsaPedido->find('first', $options);

            if(!empty($exist)){
                $this->Session->setFlash(__('<div class="alert alert-warning">Este estudante ja possui um pedido de renovacao de bolsa</div>'));
            }else {
                $this->BolsaPedido->create();
                if ($this->BolsaPedido->save($this->request->data)) {
				    $this->Session->setFlash(__('<div class="alert alert-success">Pedido gravado com sucesso!</div>'));
                }
                else {
                    $this->Session->setFlash(__('<div class="alert alert-danger">Erro! Por favor, Tente novamente.</div>'));
                }
            }
		}
		$alunos = $this->BolsaPedido->Aluno->find('list');
        $entidade = $this->Aluno->Entidade->find('list');
		$bolsapedido = $this->BolsaPedido->find('list');
		$anoLectivos = $this->BolsaPedido->AnoLectivo->find('list');
		$bolsaBolsas = $this->BolsaPedido->BolsaBolsa->find('list');
		$estadoObjectos = $this->BolsaPedido->EstadoObjecto->find('list');
		$bolsaTipoBolsas = $this->BolsaPedido->BolsaTipoBolsa->find('list');

		$this->set(compact('bolsapedido','alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas','entidade'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BolsaPedido->exists($id)) {
			throw new NotFoundException(__('Invalid bolsa pedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BolsaPedido->save($this->request->data)) {
				$this->Session->setFlash(__('The bolsa pedido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bolsa pedido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BolsaPedido.' . $this->BolsaPedido->primaryKey => $id));
			$this->request->data = $this->BolsaPedido->find('first', $options);
		}
		$alunos = $this->BolsaPedido->Aluno->find('list');
		$anoLectivos = $this->BolsaPedido->AnoLectivo->find('list');
		$bolsaBolsas = $this->BolsaPedido->BolsaBolsa->find('list');
		$estadoObjectos = $this->BolsaPedido->EstadoObjecto->find('list');
		$bolsaTipoBolsas = $this->BolsaPedido->BolsaTipoBolsa->find('list');

		$this->set(compact('alunos', 'anoLectivos', 'bolsaBolsas', 'estadoObjectos', 'bolsaTipoBolsas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BolsaPedido->id = $id;
		if (!$this->BolsaPedido->exists()) {
			throw new NotFoundException(__('Invalid bolsa pedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BolsaPedido->delete()) {
			$this->Session->setFlash(__('The bolsa pedido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bolsa pedido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    /**
     * buscar bolseiro ou aluno... pedido de renovacao ou atribuicao de bolsa
     * @return void
     */

    public  function pesquisa_aluno_(){

        $this->loadModel('Aluno');
        $this->loadModel('BolsaBolsa');
        $this->loadModel('Entidade');
        $this->loadModel('Curso');
        $this->loadModel('BolsaTipoBolsa');
        $conditions = array();

        if ($this->request->is('post')) {

            if ($this->request->data('numero')!= '') {
                $conditions['Aluno.codigo'] = $this->request->data('numero');
            }

            $option = array('conditions' => $conditions, 'fields' => array('Aluno.entidade_id', 'id','curso_id'));
            $aluno = $this->Aluno->find('first',$option);

            $option_bolsas = array('conditions' => array('BolsaBolsa.aluno_id' =>$aluno['Aluno']['id']));
            $bolsaBolsa = $this->BolsaBolsa->find('first',$option_bolsas);
            $return_array = null;

            if($bolsaBolsa){

                $option_entidade =  array('conditions' => array('Entidade.' . $this->Entidade->primaryKey =>$aluno['Aluno']['entidade_id']));
                $entidade_dados = $this->Entidade->find('first',$option_entidade);


                $options_Curso = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $aluno['Aluno']['curso_id']));
                $curso = $this->Curso->find('first', $options_Curso);

                $bolsa_tipo = $this->BolsaTipoBolsa->find('first',array('conditions' => array('id' => $bolsaBolsa['BolsaBolsa']['bolsa_tipo_bolsa_id'] )));

                $return_array = array('all' => $entidade_dados, 'curso' => $curso['Curso']['name'],'bolsa_id' => $bolsaBolsa['BolsaBolsa']['id'], 'bolsa_activa' => $bolsaBolsa['BolsaBolsa']['bolsa_estado_bolsa_id'], 'aluno_id' => $aluno['Aluno']['id'],'bolsa_tipo' =>$bolsa_tipo);


            }
            else{
                $return_array = null;
            }


           return new CakeResponse(array('body' => json_encode($return_array)));
        }




    }


}


