<?php

/**
 * Controller para plano de estudos
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.pedagogia
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0

 * 
 */
App::uses('Hash', 'Utility');

/**
 * 
 * @todo Ver bem a tabela de precedencias. O nome nao parece consistente
 */
class PlanoestudosController extends AppController {

    var $name = 'Planoestudos';

    function index() {
        $this->Planoestudo->recursive = 0;
        $this->set('planoestudos', $this->Planoestudo->find('all'));
    }

    function view($id = null) {
        App::Import('Model', 'Planoestudoano');
        App::Import('Model', 'Disciplina');
        //App::Import('Model','Logmv');
        //$logmv =new Logmv;
        $planoestudoanos = new Planoestudoano;
        $disciplina = new Disciplina;

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('planoestudo', $this->Planoestudo->read(null, $id));
        if (empty($this->data)) {
            $this->data = $this->Planoestudo->read(null, $id);
            //var_dump($this->data);
            ////////$logmv->logview(5,$this->Session->read('Auth.User.id'),$this->data["Planoestudo"]["id"],$this->data["Planoestudo"]["name"]);
        }

        $disciplinas = $this->Planoestudo->getAllDisciplinasByPlanoEstudo($id);


        $disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($id, 1, 1);
        $this->set('pdisciplina', $disciplinas_precedencia);
        $this->set('plano_id', $id);
        $cursos = $this->Planoestudo->Curso->find('list');
        $this->set(compact('cursos', 'disciplinas', 'anos', 'semestres', 'disciplinas', 'pobrigatorias', 'popcionais'));
    }

    function add() {
        //App::Import('Model','Logmv');
        //$logmv =new Logmv;
        if (!empty($this->data)) {
            $this->Planoestudo->create();
            if ($this->Planoestudo->save($this->data)) {
                //////$logmv->logInsert(5,$this->Session->read('Auth.User.id'),$this->Planoestudo->getLastInsertID(),$this->data["Planoestudo"]["name"]);
                $this->Session->setFlash('Adicione os grupos de disciplinas deste plano. ', 'flashok');
                //var_dump($this->Planoestudo->id);
                $this->redirect(array('action' => 'adicionar_disciplinas', $this->Planoestudo->id));
            } else {
                $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'flasherror');
            }
        }
        $cursos = $this->Planoestudo->Curso->find('list');
        $this->set(compact('cursos'));
    }

    /**
     * Adiciona disciplinas precedentes. 
     * 
     * @todo remover queris daki
     * @todo nao pode listar disciplinas do mesmo semestre
     */
    function adicionar_precedencias($plano_id = null, $disc_id = null) {
        App::Import('Model', 'Planoestudoano');
        App::Import('Model', 'Disciplina');
        App::Import('Model', 'Grupodisciplina');
        //App::Import('Model','Logmv');
        //$logmv =new Logmv;
        $planoestudoanos = new Planoestudoano;
        $disciplina = new Disciplina;
        $grupodisciplina = new Grupodisciplina;



        if (!empty($this->data)) {

            if (!empty($this->data['pobrigatorias'])) {
                foreach ($this->data['pobrigatorias'] as $po) {
                    $grupod = array('planoestudo_id' => $this->data['Planoestudo']['plano_id'], 'tipo' => 'O', 'disciplina_id' => $this->data['Planoestudo']['disc_id'], 'grupodisciplinasprec' => $po);
                    $grupodp = array('Grupodisciplina' => $grupod);
                    $grupodisciplina->create();
                    $grupodisciplina->save($grupodp);
                }
            }
            if (!empty($this->data['paconselhadas'])) {
                foreach ($this->data['paconselhadas'] as $po) {
                    $grupod = array('planoestudo_id' => $this->data['Planoestudo']['plano_id'], 'tipo' => 'A', 'disciplina_id' => $this->data['Planoestudo']['disc_id'], 'grupodisciplinasprec' => $po);
                    $grupodp = array('Grupodisciplina' => $grupod);
                    $grupodisciplina->create();
                    $grupodisciplina->save($grupodp);
                }
            }
            $this->Session->setFlash(__('Dado Registado com Sucesso.Adicione Mais disciplinas.'), 'default', array('class' => 'alert success'));
            $this->redirect(array('action' => 'adicionar_disciplinas', $this->data['Planoestudo']['plano_id']));
        }



        $disciplinas_p = $this->Planoestudo->getAllDisciplinasForPrecedencia($disc_id, $plano_id);
        $precedencias = $disciplinas_p;


        $this->set('precedencias', $precedencias);
        $this->set('plano_id', $plano_id);
        $this->set('disc_id', $disc_id);
    }

    function adicionar_disciplinas($plano_id, $ano_c = 1, $semestre_c = 1) {
        App::Import('Model', 'Planoestudoano');
        App::Import('Model', 'Disciplina');

        $planoestudoanos = new Planoestudoano;
        $disciplina = new Disciplina;

        //die(var_dump($this->Planoestudo->id));

        if (!empty($this->data)) {

            $dados = $this->data;
            $dados['Planoestudoano']['planoestudo_id'] = $plano_id;

            //Calcula o Semestre Sequencial
            if ($dados['Planoestudoano']['semestre'] == 1) {
                $dados['Planoestudoano']['semestre_sequencial'] = $dados['Planoestudoano']['ano'] * ($dados['Planoestudoano']['semestre'] + 1) - 1;
            }
            if ($dados['Planoestudoano']['semestre'] == 2) {
                $dados['Planoestudoano']['semestre_sequencial'] = $dados['Planoestudoano']['ano'] * $dados['Planoestudoano']['semestre'];
            }




            if ($planoestudoanos->save($dados)) {



                //Se forem cadeiras inicias, pula as precedencias
                if ($dados['Planoestudoano']['semestre_sequencial'] > 1) {
                    $this->Session->setFlash('Dado Registado com Sucesso.Seleccione as Precedencias desta disciplina, Ou clique em voltar se nao tiver precedencias', 'default', array('class' => 'alert success'));
                    $this->redirect(array('action' => 'adicionar_precedencias', $dados['Planoestudoano']['planoestudo_id'], $dados['Planoestudoano']['disciplina_id']));
                } else {
                    $this->Session->setFlash('Dado Registado com Sucesso.Adicione Mais disciplinas.', 'default', array('class' => 'alert success'));
                    $this->redirect(array('action' => 'adicionar_disciplinas', $dados['Planoestudoano']['planoestudo_id']));
                }
            } else {
                $this->Session->setFlash('Erro ao gravar dados. Por favor tente de novo.', 'flasherror');
            }
        }

        $plano_estudo = $this->Planoestudo->findById($plano_id);

        $this->request->data['Planoestudo'] = $plano_estudo['Planoestudo'];





        $cursos = $this->Planoestudo->Curso->find('list');

        $disciplinas_adicionadas = $this->Planoestudo->getAllDisciplinas($plano_id);

        
        $disciplinas_excluir = Set::extract('{n}.Disciplina.id', $disciplinas_adicionadas);

        
        $disciplinas = $disciplina->find('list', array('conditions' => array('NOT' => array('id' => $disciplinas_excluir)), 'order' => array('name ASC')));

        $anos = array();
        for ($i = 1; $i <= $plano_estudo['Planoestudo']['duracao']; $i++) {
            $anos[$i] = $i;
        }
        for ($i = 1; $i <= $plano_estudo['Planoestudo']['semestresano']; $i++) {
            $semestres[$i] = $i;
        }


        $disciplinas2 = $disciplinas_adicionadas;
        
        $disciplina1 = array_keys($disciplinas);
        //$precedencias = $this->Planoestudo->getAllPrecedenciasByDisciplina($disciplina1[0], $plano_id);

        //$disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($plano_id, 1, 1);

        //$this->set('pdisciplina', $disciplinas_precedencia);
        $this->set('plano_id', $plano_id);
        $this->set(compact('cursos', 'disciplinas2', 'anos', 'semestres', 'disciplinas', 'pobrigatorias', 'popcionais'));
    }

    function update_disciplinas_precedencia($plano_id, $accao) {

        App::Import('Model', 'Planoestudoano');
        $planoestudoanos = new Planoestudoano;
        $ano = $this->data['Planoestudoano']['ano'];
        $disciplinas_precedencia = $planoestudoanos->findDisciplinasByPrecendencia($plano_id, $ano, 1);
        $this->set('pdisciplina', $disciplinas_precedencia);

        $this->layout = 'ajax';
    }

    function edit($id = null) {
        $this->Planoestudo->id = $id;
        if (!$this->Planoestudo->exists()) {
            throw new NotFoundException(__('Plano de Estudos Invalido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Planoestudo->save($this->request->data)) {
                $this->Session->setFlash('Dados Registados com Sucesso', 'flasherror');
                $this->redirect(array('action' => 'adicionar_disciplinas', $id));
            } else {
                $this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
            }
        }
        if (empty($this->request->data)) {
            $this->data = $this->Planoestudo->read(null, $id);
        }
        $cursos = $this->Planoestudo->Curso->find('list');
        $this->set(compact('cursos'));
    }

    function delete($id = null) {
        App::Import('Model', 'Planoestudo');
        $planoestudos = new Planoestudo;
        if (!$id) {
            $this->Session->setFlash('Invalido codigo para %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }
        $dados = $planoestudos->getAllMatriculasByPlanoEstudo($id);

        //var_dump($dados);

        if (empty($dados)) {
            //////$logmv->logDelete(5,$this->Session->read('Auth.User.id'),$id,$this->data["Planoestudo"]["name"]);
            $planoestudoano = $planoestudos->deleteAllDisciplinasByPlanoEstudo($id);
            $planoestudogruposdisc = $planoestudos->deleteAllGrupoDiscByPlanoEstudo($id);
            if ($this->Planoestudo->delete($id)) {
                $this->Session->setFlash('Dados deletados com sucesso ', 'flashok');
                $this->redirect(array('action' => 'index'));
            }
        }
        $this->Session->setFlash('Nao e possivel apagar. Matriculas Associadas', 'flasherror');
        $this->redirect(array('action' => 'index'));
    }

    function remove_disc($plano_id, $disc_id, $plano_retorno) {
        App::Import('Model', 'Planoestudoano');
        App::Import('Model', 'Disciplina');

        $planoestudoanos = new Planoestudoano;
        $disciplina = new Disciplina;

        $planoestudoanos->query("delete from planoestudoanos where id={$plano_id}");

        $planoestudoanos->query("delete from grupodisciplinas where disciplina_id={$disc_id}");
        $this->Session->setFlash('Dados deletedos com sucesso ', 'flashok');
        $this->redirect(array('action' => 'add_grupodisciplinas', $plano_retorno));
    }

    function beforeRender() {
        $this->set('current_section', 'pedagogica');
    }

    function pdf_index() {
        Configure::write('debug', 0); // Otherwise we cannot use this method while developing
        $planoestudo = $this->Planoestudo->find('all');
        $listas = array();
        foreach ($planoestudo as $m) {
            $lista = array();
            $lista[] = $m["Planoestudo"]["id"];
            $lista[] = $m["Planoestudo"]["name"];
            $lista[] = $m["Curso"]["name"];
            $lista[] = $m["Planoestudo"]["duracao"];
            $lista[] = $m["Planoestudo"]["semestresano"];
            $listas[] = $lista;
        }
        // $this->set('cursos',$this->Curso->find('all'));
        $this->set('lista', $listas);
        $this->layout = 'pdf'; //this will use the pdf.ctp layout
        $this->render();
    }

    function pdf_index_planoestudo($id = null) {
        // quando queremos visualizar as variaveis temos de comentar a funcao abaixo : nota bem
        Configure::write('debug', 0); // Otherwise we cannot use this method while developing
        $planoestudo = $this->Planoestudo->findById($id); // quando quer trazer dados por id
        //$cursos = $this->Planoestudo->Curso->find('list',array('conditions'=>array('')));
        $disciplinas = $this->Planoestudo->getAllDisciplinasByPlanoEstudo($id);
        $this->set(compact('cursos', 'disciplinas', 'planoestudo'));
        //var_dump($disciplinas);
        //var_dump($planoestudo);
        $listas = array();
        $teste = array();
        $teste[] = $id;
        $teste[] = $planoestudo['Planoestudo']['name'];
        $teste[] = $planoestudo['Curso']['name'];
        foreach ($disciplinas as $m) {
            $lista = array();
            $lista[] = $m['d']['codigo'];
            $lista[] = $m['d']['name'];
            $lista[] = $m['p']['ano'];
            $lista[] = $m['p']['semestre'];
            $lista[] = $m['p']['cargahorariateoricas'];
            $lista[] = $m['p']['cargahorariapraticas'];
            $listas[] = $lista;
        }




        // $teste[] = $this->data['Planoestudoano']["name"];

        $this->set('teste1', $teste);
        $this->set('lista', $listas);
        $this->layout = 'pdf'; //this will use the pdf.ctp layout,comenta quando quer visualizar as variaveis
        //$this->render('/t0005planoestudos/pdf_teste');
        $this->render(); // comenta quando quer visualizar as variaveis
    }

    function ajax_add_obr() {
        App::import('Model', 'Grupodisciplina');
        $grupodisciplina = new Grupodisciplina;

        //$nova_disciplina =

        $a = array();
        $a["codigo"] = null;
        $a["tipo"] = "O";
        $a["disciplina_id"] = $this->data["Planoestudoano"]["disciplina_id"];
        $a["grupodisciplinasprec"] = $this->data["Planoestudoano"]["pdisciplina"];
        $precedencia = array('Grupodisciplina' => $a);

        $grupodisciplina->save($precedencia);

        $precedencias = $grupodisciplina->find('all', array('conditions' => array('disciplina_id' => $a["disciplina_id"])));

        $this->set('precedencias', $precedencias);



        //var_dump($precedencias);
        $this->layout = 'ajax';
    }

    function _getAllPrecedencias() {
        
    }

    public function getByCurso() {
        foreach ($this->request->data as $k => $v) {
            $curso_id = $v['curso_id'];
        }
        //$curso_id = $this->request->data['Aluno']['curso_id'];
        $planoestudos = $this->Planoestudo->find('list', array('conditions' => array('curso_id' => $curso_id)));
        $this->set(compact('planoestudos'));
        $this->layout = 'ajax';
    }

}

?>