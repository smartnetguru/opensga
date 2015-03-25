
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
        $this->BolsaBolsa->recursive = 0;
        $this->set('bolsaBolsas', $this->paginate());
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
                $this->Session->setFlash(__('The bolsa bolsa has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The bolsa bolsa could not be saved. Please, try again.'));
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

    //funcai para introducao de dados...
    public function atribuir_bolsas() {

        $this->loadModel('Aluno');

        if ($this->request->is('post')) {
            $this->loadModel('Candidatura');
            $this->loadModel('Curso');
            $this->loadModel('Genero');
            $dis = $this->request->data('discritivo');


            //Recuperando o canditado atraves do numero_do estudante

            $array = array();
            $candidato = $this->Candidatura->findByNumeroEstudante($dis);
            if (!empty($candidato)) {
                $options = array('conditions' => array('Candidatura.' . $this->Candidatura->primaryKey => $candidato['Candidatura']['id'], 'Candidatura.ano_lectivo_admissao' => 2015));
                $candidatura = $this->Candidatura->find('first', $options);

                //Buscando o curso
                $options_Curso = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $candidatura['Candidatura']['curso_id']));
                $curso = $this->Curso->find('first', $options_Curso);
                
                //Buscando o genero
                $options_Genero = array('conditions' => array('Genero.' . $this->Genero->primaryKey => $candidatura['Candidatura']['genero_id']));
               $genero = $this->Genero->find('first', $options_Genero);
               $genero1 = array();
               if(empty($genero)){
                   $genero1 = array('Genero' => array('name'=>'Indefinido'));
               }else{
                   $genero1 = $genero;
               }

                $array = array('candidatos' => $candidatura, 'curso' => $curso, 'genero'=> $genero1);
            } else {
                $array = array('invalido' => 'Invalido', 'candidatura' => $dis);
            }




            return new CakeResponse(array('body' => json_encode($array)));
            
        }
        
        
        $bolsaTipoBolsa = $this->BolsaBolsa->BolsaTipoBolsa->find('all');
         $bolsaFonteBolsa = $this->BolsaBolsa->BolsaFonteBolsa->find('all');
         $this->set(compact('bolsaFonteBolsa','bolsaTipoBolsa'));
        
        
        
         
    }

}
