
<?php

App::uses('AppController', 'Controller');

/**
 * BolsaBolsas Controller
 *
 * @property BolsaBolsa $BolsaBolsa
 */
class BolsaBolsasController extends AppController {

    
//    public $helpers = 
    /**
     * index method
     *
     * @return void
     */
   // var $components = array("RequestHandler");

    public function index() {
        $this->loadModel('BolsaPedido');
        $this->loadModel('BolsaTemporaria');
        $this->loadModel('BolsaTipoBolsa');
        $this->loadModel('Cidade');
        $this->loadModel('Aluno');

        $this->loadModel('Candidatura');
        $this->loadModel('Curso');
        $this->loadModel('Genero');

        $numero_bolsaPedido = $this->BolsaPedido->find('count');
        $numero_bolseiros = $this->BolsaTemporaria->find('count');
        $bolsas_ = $this->BolsaBolsa->find('all', array('fields' => array('BolsaBolsa.bolsa_tipo_bolsa_id'), 'order' => 'BolsaBolsa.bolsa_tipo_bolsa_id'));
        $merito = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 1)));
        $completa = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 2)));
        $reduzida = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 3)));
        $isencao = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 4)));
        $indeferido = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 5)));
        $reducao = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 6)));
        $alojamento = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 7)));
        $alojamento_isencao = $this->BolsaBolsa->find('count', array('conditions' => array('BolsaBolsa.bolsa_tipo_bolsa_id' => 8)));



        $this->BolsaTemporaria->contain('Curso');
        $cursos = $this->BolsaTemporaria->find('list', array('fields' => array('BolsaTemporaria.curso_id', 'Curso.name'), 'order' => 'Curso.name'));
        $bolsas = array();
        foreach ($cursos as $k => $v) {
            $this->BolsaTemporaria->contain('BolsaTipoBolsa');
            $bolsa = $this->BolsaTemporaria->find('all', array('conditions' => array('curso_id' => $k), 'order' => array('apelido', 'nomes')));
            $bolsas[$v] = $bolsa;
        }



        $bolsaTipoBolsa = $this->BolsaBolsa->BolsaTipoBolsa->find('all');
        $bolsaFonteBolsa = $this->BolsaBolsa->BolsaFonteBolsa->find('all');
        $cidade = $this->Cidade->find('all');

        $this->set(compact('bolsaFonteBolsa','bolsaTipoBolsa','cidade','bolsas','numero_bolsaPedido','numero_bolseiros','merito','completa','reduzida','isencao','indeferido','reducao','alojamento','alojamento_isencao'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->BolsaBolsa->id = $id;
        if (!$this->BolsaBolsa->exists()) {
            throw new NotFoundException(__('Invalid bolsa bolsa'));
        }
        $this->set('bolsaBolsa', $this->BolsaBolsa->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->BolsaBolsa->create();
            if ($this->BolsaBolsa->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alerta alert-success">Bolsa gravada com sucesso!</div>'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('<div class="alerta alert-danger">A bolsa nao foi atribuida. Por favor, Tente novamente.</div>'));
            }
        }
        $alunos = $this->BolsaBolsa->Aluno->find('list');
        $bolsaCandidaturas = $this->BolsaBolsa->BolsaPedido->find('list');
        $anolectivos = $this->BolsaBolsa->AnoLectivo->find('list');
        $bancos = $this->BolsaBolsa->Banco->find('list');
        $bolsaFonteBolsas = $this->BolsaBolsa->BolsaFonteBolsa->find('list');
        $bolsaCriadorContas = $this->BolsaBolsa->BolsaCriadorContum->find('list');
        $bolsaEstadoBolsas = $this->BolsaBolsa->BolsaEstadoBolsa->find('list');
        $bolsaResultados = $this->BolsaBolsa->BolsaResultado->find('list');
        $this->set(compact('alunos', 'bolsaCandidaturas', 'anolectivos', 'bancos', 'bolsaFonteBolsas', 'bolsaCriadorContas', 'bolsaEstadoBolsas', 'bolsaResultados'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->BolsaBolsa->id = $id;
        if (!$this->BolsaBolsa->exists()) {
            throw new NotFoundException(__('Invalid bolsa bolsa'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->BolsaBolsa->save($this->request->data)) {
                $this->Session->setFlash(__('The bolsa bolsa has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The bolsa bolsa could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->BolsaBolsa->read(null, $id);
        }
        $alunos = $this->BolsaBolsa->Aluno->find('list');
        $bolsaCandidaturas = $this->BolsaBolsa->BolsaPedido->find('list');
        $anolectivos = $this->BolsaBolsa->AnoLectivo->find('list');
        $bancos = $this->BolsaBolsa->Banco->find('list');
        $bolsaFonteBolsas = $this->BolsaBolsa->BolsaFonteBolsa->find('list');
        $bolsaCriadorContas = $this->BolsaBolsa->BolsaCriadorContum->find('list');
        $bolsaEstadoBolsas = $this->BolsaBolsa->BolsaEstadoBolsa->find('list');
        $bolsaResultados = $this->BolsaBolsa->BolsaResultado->find('list');
        $this->set(compact('alunos', 'bolsaCandidaturas', 'anolectivos', 'bancos', 'bolsaFonteBolsas', 'bolsaCriadorContas', 'bolsaEstadoBolsas', 'bolsaResultados'));
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
        $this->BolsaBolsa->id = $id;
        if (!$this->BolsaBolsa->exists()) {
            throw new NotFoundException(__('Invalid bolsa bolsa'));
        }
        if ($this->BolsaBolsa->delete()) {
            $this->Session->setFlash(__('Bolsa bolsa deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Bolsa bolsa was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function exportar_bolseiros_ano_ingresso($anoIngresso = null) {
        if ($anoIngresso == null) {
            $anoIngresso = Configure::read('OpenSGA.ano_lectivo');
        }

        $this->loadModel('BolsaTemporaria');
        $this->BolsaTemporaria->contain(array(
            'BolsaTipoBolsa'
        ));
        $bolsas = $this->BolsaTemporaria->find('all');
        foreach ($bolsas as $k => $bolsa) {
            $this->BolsaBolsa->Aluno->contain(array(
                'Entidade' => array(
                    'ProvinciaNascimento', 'Genero'
                ), 'Curso'
            ));
            $aluno = $this->BolsaBolsa->Aluno->find('first', array('conditions' => array('Aluno.ano_ingresso' => $anoIngresso, 'Aluno.codigo' => $bolsa['BolsaTemporaria']['numero_estudante'])));
            if (!empty($aluno)) {
                $bolsas[$k]['Aluno'] = $aluno['Aluno'];
                $bolsas[$k]['Entidade'] = $aluno['Entidade'];
                $bolsas[$k]['Curso'] = $aluno['Curso'];
            }
        }


        $this->set(compact('bolsas'));
    }

    public function exportar_bolseiros_ano_ingresso_escolas($anoIngresso = null) {
        if ($anoIngresso == null) {
            $anoIngresso = Configure::read('OpenSGA.ano_lectivo');
        }

        $this->loadModel('BolsaTemporaria');
        $this->BolsaTemporaria->contain(array(
            'BolsaTipoBolsa', 'Candidatura' => array('Genero')
        ));
        $bolsas = $this->BolsaTemporaria->find('all');
        foreach ($bolsas as $k => $bolsa) {
            $this->BolsaBolsa->Aluno->contain(array(
                'Entidade' => array(
                    'ProvinciaNascimento', 'Genero'
                ), 'Curso'
            ));
            $aluno = $this->BolsaBolsa->Aluno->find('first', array('conditions' => array('Aluno.ano_ingresso' => $anoIngresso, 'Aluno.codigo' => $bolsa['BolsaTemporaria']['numero_estudante'])));
            if (!empty($aluno)) {
                unset($bolsas[$k]);
            }
        }


        $this->set(compact('bolsas'));
    }

    public function atribuir_bolsas() {
        $this->loadModel('Cidade');
        $this->loadModel('Aluno');
        $this->loadModel('BolsaTemporaria');
        $this->loadModel('Candidatura');
        $this->loadModel('Curso');
        $this->loadModel('Genero');
        //Requisicao de busca de dados...
        if ($this->request->is('POST')) {


            $numero_candidato = $this->request->data('numero');
            $nome_candidato = $this->request->data('nome');
            $apelido_candidato = $this->request->data('apelido');

            $conditions = array();

            if ($numero_candidato != '') {
                $conditions['Candidatura.numero_estudante'] = $numero_candidato;
            } else {
                $conditions['Candidatura.nomes LIKE'] = '%' . $nome_candidato . '%';
                $conditions['Candidatura.apelido LIKE'] = '%' . $apelido_candidato . '%';
            }


            // $conditions['Candidatura.estado_candidatura_id'] = array(2, 3);
            $conditions['Candidatura.ano_lectivo_admissao'] = 2015;
            $option = array('conditions' => $conditions);
            $candidatura = $this->Candidatura->find('first', $option);

            if (!empty($candidatura)) {


                //Buscando o curso
                $options_Curso = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $candidatura['Candidatura']['curso_id']));
                $curso = $this->Curso->find('first', $options_Curso);

                //Buscando cidade

                //Buscando o genero
                $options_Genero = array('conditions' => array('Genero.' . $this->Genero->primaryKey => $candidatura['Candidatura']['genero_id']));
                $genero = $this->Genero->find('first', $options_Genero);
                $genero1 = array();
                if (empty($genero)) {
                    $genero1 = array('Genero' => array('name' => 'Indefinido'));
                } else {
                    $genero1 = $genero;
                }

                $array = array('candidatos' => $candidatura, 'curso' => $curso, 'genero' => $genero1);
            } else {
                $array = array('invalido' => 'Invalido', 'candidatura' => $numero_candidato . ' ' . $nome_candidato . ' ' . $apelido_candidato);
            }


            return new CakeResponse(array('body' => json_encode($array)));

        }



       $this->BolsaTemporaria->contain('Curso');
        $cursos = $this->BolsaTemporaria->find('list', array('fields' => array('BolsaTemporaria.curso_id', 'Curso.name'), 'order' => 'Curso.name'));
        $bolsas = array();
        foreach ($cursos as $k => $v) {
            $this->BolsaTemporaria->contain('BolsaTipoBolsa');
            $bolsa = $this->BolsaTemporaria->find('all', array('conditions' => array('curso_id' => $k), 'order' => array('apelido', 'nomes')));
            $bolsas[$v] = $bolsa;
        }





        $bolsaTipoBolsa = $this->BolsaBolsa->BolsaTipoBolsa->find('all');
         $bolsaFonteBolsa = $this->BolsaBolsa->BolsaFonteBolsa->find('all');
        $cidade = $this->Cidade->find('all');

        $this->set(compact('bolsaFonteBolsa','bolsaTipoBolsa','cidade','bolsas'));

        
        
        
         
    }


    public function pedido_renovar_bolsas(){


        $this->loadModel('Aluno');
        $this->loadModel('Curso');
        $this->loadModel('Entidade');
        $this->loadModel('BolsaPedido');
        $this->loadModel('BolsaTipoBolsa');
        $this->loadModel('EstadoObjecto');

        $bolsaTipoBolsa = $this->BolsaTipoBolsa->find('all');
        $bolsaPedido = $this->BolsaPedido->find('all');


        foreach($bolsaPedido as $k => $pedidos){
            $aluno = $this->Aluno->find('first',array('conditions'=> array( 'Aluno.id' => $pedidos['BolsaPedido']['aluno_id']),'fields' => array('entidade_id')));
            if($aluno)
                $entidade = $this->Entidade->find('first',array('conditions' => array('Entidade.id'=>$aluno['Aluno']['entidade_id'])));

                $bolsa_tipo_actual = $this->BolsaTipoBolsa->find('first',array('conditions' => array('BolsaTipoBolsa.id'=>$pedidos['BolsaPedido']['tipo_bolsa_actual'])));
                $estado = $this->EstadoObjecto->find('first',array('conditions' => array('EstadoObjecto.id'=>$pedidos['BolsaPedido']['estado_objecto_id'])));
            $bolsaPedido[$k]['Entidade'] = $entidade['Entidade'];
          if($bolsa_tipo_actual)
            $bolsaPedido[$k]['BolsaTipoActual'] = $bolsa_tipo_actual['BolsaTipoBolsa'];

            $bolsaPedido[$k]['Estado'] = $estado['EstadoObjecto'];

        }
//
        $this->set(compact('bolsaTipoBolsa','bolsaPedido'));
    }

}
