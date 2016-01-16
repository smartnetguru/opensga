<?php

App::uses('CooperacaoAppController', 'Cooperacao.Controller');
App::uses('CakeTime', 'Utility');

/**
 * CooperacaoAcordos Controller
 *
 * @property CooperacaoAcordo $CooperacaoAcordo
 * @property PaginatorComponent $Paginator
 */
class CooperacaoAcordosController extends CooperacaoAppController {

    public $component = array('Security', 'Paginator');

    function beforeFilter() {
        $this->Security->unlockedActions = array('edit_acordo', 'novo_acordo', 'ver_acordo', 'edit_acordo_Instituicao');
    }

//       
//    }
    /**
     * Pagina Inicial de acordos de cooperacao
     */
    public function visao_geral() {
        $this->loadModel('CooperacaoArea');
        $cooperacaoAreas = $this->CooperacaoArea->find('count');
        $acordos_coo = $this->CooperacaoAcordo->find('count');
         $cooperacaoTipoAcordos = $this->CooperacaoAcordo->CooperacaoTipoAcordo->find('count');
          $instituicao = $this->CooperacaoAcordo->Instituicao->find('count');
          
        $this->set('cooperacaoAreas', $cooperacaoAreas);
        $this->set('acordos_cooperacao', $acordos_coo);
         $this->set('cooperacaoTipoAcordos', $cooperacaoTipoAcordos);
          $this->set('instituicao', $instituicao);
            $this->CooperacaoAcordo->contain(array('CooperacaoTipoAcordo', 'CooperacaoArea'));
        $this->set('cooperacaoAcordos', $this->Paginator->paginate());
    }

    /**
     * Cadastra nova instituicao de cooperacao
     */
    public function nova_instituicao() {
        $this->loadModel('Instituicao');
        if ($this->request->is('post')) {
            $this->CooperacaoAcordo->Instituicao->create();
            if ($this->CooperacaoAcordo->Instituicao->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success">Instituição Gravada com Sucesso</div>'));
                $this->redirect(array('action' => 'lista_instituicaos'));
            } else {
                $this->Session->setFlash(__('<div class="alert alert-danger">Problemas ao gravar a instituição. Verifique os campos e tente novamente</div>'));
            }
        }
        $continentes = $this->CooperacaoAcordo->Instituicao->Continente->find('list');
        $paises = $this->CooperacaoAcordo->Instituicao->Pais->find('list');
        $provincias = $this->CooperacaoAcordo->Instituicao->Provincia->find('list');
        $cidades = $this->CooperacaoAcordo->Instituicao->Cidade->find('list');

        $this->set(compact('continentes', 'paises', 'provincias', 'cidades'));
    }

    /**
     * Lista de instituicoes de cooperacao
     */
    public function lista_instituicaos() {
        $this->CooperacaoAcordo->Instituicao->contain(array(
            'Continente', 'Pais', 'Provincia', 'Cidade'
        ));
        $this->set('instituicaos', $this->Paginator->paginate('Instituicao'));
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        //$this->CooperacaoAcordo->CooperacaoTipoAcordo->contain(array(''))

        $this->CooperacaoAcordo->contain(array('CooperacaoTipoAcordo', 'CooperacaoArea'));
        $this->set('cooperacaoAcordos', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function ver_acordo($id = null) {

        if (!$this->CooperacaoAcordo->exists($id)) {
            throw new NotFoundException(__('Invalid cooperacao acordo'));
        }
        $this->loadModel('CooperacaoAcordoInstituicao');
        $options = array('conditions' => array('CooperacaoAcordo.' . $this->CooperacaoAcordo->primaryKey => $id));
        $this->CooperacaoAcordo->contain(array('CooperacaoTipoAcordo', 'CooperacaoArea'));
        $cooperacaoAcordo = $this->CooperacaoAcordo->find('first', $options);

        $optionsObjectivos = array('conditions' => array('cooperacao_acordo_id' . $this->CooperacaoAcordo->CooperacaoObjectivoAcordo->foreignKey => $id));
        $objectivos = $this->CooperacaoAcordo->CooperacaoObjectivoAcordo->find('list', $optionsObjectivos);


        $optionsObservacao = array('conditions' => array('cooperacao_acordo_id' . $this->CooperacaoAcordo->CooperacaoAcordoObservacao->foreignKey => $id));
        $observacao = $this->CooperacaoAcordo->CooperacaoAcordoObservacao->find('list', $optionsObservacao);

        $conditionsInst = array('conditions' => array('cooperacao_acordo_id' . $this->CooperacaoAcordoInstituicao->foreignKey => $id));
        $instituicao = $this->CooperacaoAcordoInstituicao->find('all', $conditionsInst);

        $cooperacaoTipoAcordos = $this->CooperacaoAcordo->CooperacaoTipoAcordo->find('all');
        $this->loadModel('CooperacaoArea');
        $cooperacaoAreas = $this->CooperacaoArea->find('all');

        foreach ($instituicao as $instituicaoAc) {

            $instituicaoAcordo[] = $this->CooperacaoAcordo->Instituicao->find('all', array('conditions' => array('Instituicao.' . $this->CooperacaoAcordo->Instituicao->primaryKey => $instituicaoAc['CooperacaoAcordoInstituicao']['instituicao_id'])));
        }

        $instituicoes = $this->CooperacaoAcordo->Instituicao->find('all');


        $this->set(compact('cooperacaoAreas', 'cooperacaoTipoAcordos', 'instituicoes', 'instituicaoAcordo', 'observacao', 'objectivos', 'cooperacaoAcordo'));
    }

    public function ver_instituicao($id = null) {

        if (!$instituicao = $this->CooperacaoAcordo->Instituicao->getInstituicaoById($id)) {
            throw new NotFoundException(__('Invalid Instituicao'));
        } else {

            $options = array('conditions' => array('Instituicao.' . $this->CooperacaoAcordo->Instituicao->primaryKey => $id));
            $this->CooperacaoAcordo->Instituicao->contain(array('Continente', 'Pais', 'Provincia', 'Cidade'));
            $this->set('instituicao', $this->CooperacaoAcordo->Instituicao->find('first', $options));
        }
    }

    public function edit_instituicao() {
        $pk = $this->request->data('pk');
        $name = $this->request->data('name');
        $value = $this->request->data('value');

        $this->CooperacaoAcordo->Instituicao->read(null, $pk);
        $this->CooperacaoAcordo->Instituicao->set(array($name => $value, 'modified' => date('Y-m-d H:i:s')));
        $this->CooperacaoAcordo->Instituicao->save();

        $this->redirect(array('action' => 'lista_instituicaos'));
    }

    public function edit_acordo() {
        $pk = $this->request->data('pk');
        $name = $this->request->data('name');
        $value = $this->request->data('value');

        $this->CooperacaoAcordo->read(null, $pk);
        $this->CooperacaoAcordo->set(array($name => $value, 'modified' => date('Y-m-d H:i:s')));
        $this->CooperacaoAcordo->save();

        $this->redirect(array('action' => 'index'));
    }

//      public function edit_acordo_Instituicao() {
//        $this->loadModel('CooperacaoAcordoInstituicao');
//       
//        $pk = $this->request->data('pk');
//        $instituicao_acordo_id =  'instituicao_id';
//        $value = $this->request->data('value');
//        
//     
//       
//        $this->CooperacaoAcordoInstituicao->read(null, 1);
//        $this->CooperacaoAcordoInstituicao->set(array($instituicao_acordo_id => $value));
//        $this->CooperacaoAcordoInstituicao->save();
//
//        $this->redirect(array('action' => 'index'));
//    }

    /**
     * add method
     *
     * @return void
     */
    public function novo_acordo() {

// Funcao para operacoes sobre data
        function add_data($givendate, $day = 0, $mth = 0, $yr = 0) {
            $cd = strtotime($givendate);
            $newdate = date('Y-m-d', mktime(0, 0, 0, date('m', $cd) + $mth, date('d', $cd) + $day, date('Y', $cd) + $yr));
            return $newdate;
        }

        if ($this->request->is('post')) {
            $data_ = $this->request->data['CooperacaoAcordo']['data_assinatura'];
            if ($this->request->data['CooperacaoAcordo']['data_validade'] != '') {

                $this->request->data['CooperacaoAcordo']['data_validade'] = $this->request->data['CooperacaoAcordo']['data_validade'];
            } elseif ($this->request->data['CooperacaoAcordo']['prazo_validade'] != '') {

                if ($this->request->data['CooperacaoAcordo']['tempo_validade'] == 1) {


                    $this->request->data['CooperacaoAcordo']['data_validade'] = add_data($data_, '', '', $this->request->data['CooperacaoAcordo']['prazo_validade']);
                } elseif ($this->request->data['CooperacaoAcordo']['tempo_validade'] == 2) {



                    $this->request->data['CooperacaoAcordo']['data_validade'] = add_data($data_, '', $this->request->data['CooperacaoAcordo']['prazo_validade'], '');
                } else {
                    $this->request->data['CooperacaoAcordo']['data_validade'] = add_data($data_, $this->request->data['CooperacaoAcordo']['prazo_validade'], '', '');
                }
            } else {
                //Indeterminado
            }


            $this->CooperacaoAcordo->create();
            if ($this->CooperacaoAcordo->save($this->request->data)) {
                $this->loadModel('CooperacaoAcordoInstituicao');

                foreach ($this->request->data['CooperacaoAcordo']['instituicao_id'] as $instituicao => $id_inst) {

                    $array_cooperacao_acordo_instituicaos = [ 'cooperacao_acordo_id' => $this->CooperacaoAcordo->id, 'instituicao_id' => $id_inst];
                    $this->CooperacaoAcordoInstituicao->create();
                    $this->CooperacaoAcordoInstituicao->save($array_cooperacao_acordo_instituicaos);
                }


                $this->Session->setFlash(__('Dados Gravados com Sucesso.'), 'default', array('class' => 'alert success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Problemas ao gravar dados. Por favor, Tente novamente'), 'default', array('class' => 'alert error'));
            }
        }

        $instituicaos = $this->CooperacaoAcordo->Instituicao->find('list');
        $cooperacaoTipoAcordos = $this->CooperacaoAcordo->CooperacaoTipoAcordo->find('list');
        $this->loadModel('CooperacaoArea');
        $cooperacaoAreas = $this->CooperacaoArea->find('list');
        $this->set(compact('instituicaos', 'cooperacaoTipoAcordos', 'cooperacaoAreas'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        /*
          if (!$this->CooperacaoAcordo->exists($id)) {
          throw new NotFoundException(__('Invalid cooperacao acordo'));
          }// || $this->request->is('put'))****** estava no if da verficacao do post
         */
        if ($this->request->is('post')) {
            if ($this->CooperacaoAcordo->save($this->request->data)) {
                $this->Session->setFlash(__('The cooperacao acordo has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cooperacao acordo could not be saved. Please, try again.'));
            }
        } /*
          else {
          $options = array('conditions' => array('CooperacaoAcordo.' . $this->CooperacaoAcordo->primaryKey => $id));
          $this->request->data = $this->CooperacaoAcordo->find('first', $options);
          } */
        //$instituicaos = $this->CooperacaoAcordo->Instituicao->find('list');
        // $cooperacaoTipoAcordos = $this->CooperacaoAcordo->CooperacaoTipoAcordo->find('list');
        //$this->set(compact('instituicaos', 'cooperacaoTipoAcordos'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->CooperacaoAcordo->id = $id;
        if (!$this->CooperacaoAcordo->exists()) {
            throw new NotFoundException(__('Invalid cooperacao acordo'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->CooperacaoAcordo->delete()) {
            $this->Session->setFlash(__('The cooperacao acordo has been deleted.'));
        } else {
            $this->Session->setFlash(__('The cooperacao acordo could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
