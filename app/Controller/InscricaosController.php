<?php

/**
 * Controller inscrições
 *
 * Controller para o processamento das inscrições dos alunos
 * Executa todos os detalhes relacionados ás inscrições dos alunos no sistema
 * A maior parte das validações e filtragens de dados ocorrem aqui
 *
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.inscricoes
 * @since         OpenSGA v 0.1.0
 * @version       OpenSGA v 0.5.0
 *
 *
 * @property Inscricao $Inscricao
 */
class InscricaosController extends AppController
{

    var $name = 'Inscricaos';

    public function faculdade_apagar_inscricao($inscricao_id)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Inscricao->id = $inscricao_id;
        $inscricao = $this->Inscricao->read();

        if (!$this->Inscricao->exists()) {
            throw new NotFoundException(__('Inscricao Invalida'));
        }
        if ($this->Inscricao->delete()) {
            $this->Session->setFlash(__('Inscricao Apagada com Sucesso'), 'default', array('class' => 'alert success'));
            $this->redirect(array('action' => 'ver_inscricoes_aluno', $inscricao['Inscricao']['aluno_id'], 'faculdade' => true));
        }
        $this->Session->setFlash(__('Problemas ao apagar a inscricao. Tente novamente'), 'default', array('class' => 'alert error'));
        $this->redirect(array('action' => 'ver_inscricoes_aluno', $inscricao['Inscricao']['aluno_id'], 'faculdade' => true));

        debug($this->request->data);
    }

    /**
     *
     * @param type $inscricaoId
     * @throws MethodNotAllowedException
     * @todo Ver a questao de 30 dias para anulacao da Inscricao
     */
    public function faculdade_anular_inscricao($inscricaoId)
    {
        if ($this->request->is('post')) {
            $this->Inscricao->id = $inscricaoId;
            $this->Inscricao->set('estado_inscricao_id', 9);
            $this->Inscricao->save();
            $this->Session->setFlash(__('Inscricao Anulada com Sucesso'), 'default', array('class' => 'alert alert-success'));
            //$alunoId = $this->Inscricao->field('aluno_id');
            $this->redirect($this->referer());
        } else {
            throw new MethodNotAllowedException('Erro no Sistema');
        }
    }

    function index()
    {
        if ($this->request->is('post') || $this->request->is('put')) {

            $this->Pagamento->Aluno->contain(array('Entidade', 'Curso', 'Matricula'));
            $alunos = $this->Pagamento->Aluno->find('all', array('conditions' => array('OR' => array(array('Entidade.name LIKE' => '%' . $this->request->data['Aluno']['name'] . '%'), array('Aluno.codigo LIKE' => $this->request->data['Aluno']['codigo'])))));

            $this->set(compact('alunos'));
            $this->set('mostrar_resultado', true);
        }
    }

    function faculdade_index()
    {

        $unidadeOrganicaId = $this->Session->read('Auth.User.unidade_organica_id');
        $conditions = array();
        $this->Inscricao->Turma->contain('Curso');
        $cursosFaculdade = $this->Inscricao->Turma->Curso->find('list',array(
            'conditions'=>array(
                'Curso.unidade_organica_id'=>$unidadeOrganicaId,
                //'Curso.estado_objecto_id NOT'=>2
            )
        ));
        $turmasFaculdade = $this->Inscricao->Turma->find('list',array(
            'conditions'=>array(
                'Curso.unidade_organica_id' =>$unidadeOrganicaId,
                'Turma.estado_turma_id' =>1
            )
        ));
        $turmasFilter = array_keys($turmasFaculdade);
        $conditions['Inscricao.turma_id'] = $turmasFilter;

        if ($this->request->is('post') || $this->request->is('put')) {
            if($this->request->data['Inscricao']['curso_id']!=''){
                $conditions['Turma.curso_id'] = $this->request->data['Inscricao']['curso_id'];
                $turmasFaculdade = $this->Inscricao->Turma->find('list',array(
                    'conditions'=>array(
                        'Turma.curso_id' =>$this->request->data['Inscricao']['curso_id'],
                        'Turma.estado_turma_id' =>1
                    )
                ));
            }
            if($this->request->data['Inscricao']['turma_id']!=''){
                $conditions['Inscricao.turma_id'] = $this->request->data['Inscricao']['turma_id'];
            }
            if($this->request->data['Inscricao']['numero_estudante']!=''){
                $conditions['Aluno.codigo'] = $this->request->data['Inscricao']['numero_estudante'];
            }
        }


        $this->paginate = array(
            'conditions'=>$conditions,
            'contain'=>array(
                'Aluno'=>array(
                    'Entidade'
                ),'Turma'=>array(
                    'Curso','Disciplina','AnoLectivo','SemestreLectivo'
                ),
                'EstadoInscricao'
            ),
            'order'=>'Inscricao.modified Desc'
        );
        $inscricaos = $this->paginate();
        $this->set(compact('inscricaos','turmasFaculdade','cursosFaculdade'));
    }

    function view($id = null)
    {
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;
        App::Import('Model', 'Matricula');
        $matriculas = new Matricula;

        App::Import('Model', 'Turma');
        $turma = new Turma;

        if (!$id) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }
        //	$this->set('t0013inscricao', $this->Inscricao->read(null, $id));
        if (empty($this->data)) {
            $this->data = $this->Inscricao->read(null, $id);
            //$logmv->logview(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
        }

        //var_dump($this->data);
        $alunos = $this->Inscricao->Aluno->find('list');
        $turmas = $this->Inscricao->Turma->find('list');
        $EpocaAvaliacaos = $this->Inscricao->EpocaAvaliacao->find('list');
        //$notafrequencia = $this->data['Inscricao']['notafrequencia'];


        $estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');

        $curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
        $curso1 = $curso[0]['tc']['name'];

        $docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
        $docente1 = $docente[0]['tf']['name'];

        $assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
        $assistente1 = $assistente[0]['tf']['name'];

        $plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
        $plano1 = $plano[0]['tp']['name'];

        $turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
        $turma1 = $turma[0]['tt']['name'];

        $turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
        $turno1 = $turno[0]['ttu']['name'];

        $anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
        $anoCurricular1 = $anoCurricular[0]['tt']['ano_curricular'];

        $semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
        $semestreCurricular1 = $semestreCurricular[0]['tt']['semestre_curricular'];

        $anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
        $anoLectivo1 = $anoLectivo[0]['tal']['codigo'];


        $this->set(compact('Alunos', 'turmas', 'EpocaAvaliacaos', 'tg0020estadoinscricao', 'funcionarios', 'curso1', 'docente1', 'assistente1', 'plano1', 'turma1', 'turno1', 'anoCurricular1', 'semestreCurricular1', 'anoLectivo1'));
    }

    /**
     * Adiciona novas cadeiras a um aluno que ja fez inscricao num dado semestre, e recalcula as mensalidades
     *
     * @param type $aluno_id
     * @param type $matricula_id
     *
     * @todo Implementar essa cena :(
     */
    public function faculdade_adicionar_cadeiras_inscricao($alunoId, $matriculaId)
    {
        $this->loadModel('Turma');
        $this->loadModel('Aluno');
        $this->loadModel('FinanceiroPagamento');
        $this->loadModel('Matricula');

        $unidadeOrganicaId = $this->Session->read('Auth.User.unidade_organica_id');

        $this->Inscricao->Aluno->contain(array(
            'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
        ));
        $aluno = $this->Inscricao->Aluno->findById($alunoId);

        if ($aluno['Curso']['unidade_organica_id'] != $unidadeOrganicaId) {
            $this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
            $this->redirect($this->referer());
        }


        if ($this->request->is('post') || $this->request->is('put')) {

            $alunoId = $this->request->data['Inscricao']['aluno_id'];
            $matricula_id = $this->request->data['Inscricao']['matricula_id'];
            $inscricao_nova = array();

            if (isset($this->request->data['disciplinas'])) {
                foreach ($this->request->data['disciplinas'] as $k => $v) {
                    if ($v > 0) {
                        $inscricao_nova[] = $v;
                    }
                }
            }

            $this->Session->write('OpenSGA.inscricao.cadeiras', $inscricao_nova);
            $this->Session->write('OpenSGA.inscricao.matricula_id', $matriculaId);
            $this->Session->write('OpenSGA.inscricao.aluno_id', $alunoId);
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
        }


        $disciplinas = $this->Inscricao->getAllDisciplinasForInscricao($alunoId);
        $this->set('aluno_id', $alunoId);
        $this->set('matricula_id', $matriculaId);
        $this->set(compact( 'disciplinas'));
    }

    /**
     *
     * Imprime o Comprovativo de inscricao
     * @param type $aluno_id
     * @param type $anolectivo_ano
     *
     * @throws NotFoundException
     */
    public function faculdade_print_comprovativo_inscricao($alunoId, $anolectivoAno = null)
    {
        if ($anolectivoAno == null) {
            $anoLectivo = $this->Inscricao->Turma->AnoLectivo->findByAno(Configure::read('OpenSGA.ano_lectivo'));
        } else {
            $anoLectivo = $this->Inscricao->Turma->AnoLectivo->findByAno($anolectivoAno);
        }

        $this->Inscricao->Aluno->contain(array(
            'Entidade' => array(
                'User'
            )
        ));
        $aluno = $this->Inscricao->Aluno->findById($alunoId);
        $matricula = $this->Inscricao->Aluno->Matricula->findByAlunoIdAndAnoLectivoId($alunoId, $anoLectivo['AnoLectivo']['id']);

        //Pegamos todas inscricoes activas
        $this->Inscricao->contain(array(
            'Turma' => array(
                'Disciplina' => array(
                    'DisciplinaPlanoEstudo' => array(
                        'conditions' => array(
                            'plano_estudo_id' => $matricula['Matricula']['plano_estudo_id']
                        )
                    )
                ), 'Curso' => array(
                    'UnidadeOrganica'
                ), 'PlanoEstudo', 'Turno'
            ), 'TipoInscricao'
        ));
        $inscricoesActivas = $this->Inscricao->find('all', array('conditions' => array('estado_inscricao_id' => 1, 'aluno_id' => $alunoId, 'Turma.ano_lectivo_id' => $anoLectivo['AnoLectivo']['id'],'Inscricao.data >'=>'2014-06-01')));


        if (empty($inscricoesActivas)) {
            $this->Session->setFlash(__('Este estudante nao possui inscricoes para este ano'), 'default', array('class' => 'alert alert-warning'));
            $this->redirect(array('action' => 'ver_inscricoes_aluno', 'faculdade' => true, $alunoId));
        }

        $this->loadModel('Funcionario');
        $this->Funcionario->contain('Entidade');
        $funcionario = $this->Funcionario->getByUserId($inscricoesActivas[0]['Inscricao']['created_by']);

        $this->set(compact('inscricoesActivas', 'aluno', 'anoLectivo', 'funcionario'));
    }

    function faculdade_editar_inscricao($inscricao_id = null)
    {
        $this->Inscricao->id = $id;
        if (!$this->Inscricao->exists()) {
            throw new NotFoundException('Inscricao Invalida');
        }

        App::Import('Model', 'Turma');
        $turma = new Turma;
        //App::Import('Model','Logmv');
        //$logmv = new Logmv;

        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Invalido %s', 'flasherror');
            $this->redirect(array('action' => 'index'));
        }

        if (!empty($this->data)) {
            if ($this->Inscricao->save($this->data)) {
                $this->Session->setFlash('Dado Editados com sucesso', 'flashok');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Erro ao editar dados. Por favor tente de novo.', 'flasherror');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Inscricao->read(null, $id);
            //$logmv->logUpdate(11,$this->Session->read('Auth.User.id'),$id,$this->data["Inscricao"]["Aluno_id"]);
        }

        //var_dump($this->data);
        $alunos = $this->Inscricao->Aluno->find('list');
        $turmas = $this->Inscricao->Turma->find('list');
        $EpocaAvaliacaos = $this->Inscricao->EpocaAvaliacao->find('list');
        //$notafrequencia = $this->data['Inscricao']['notafrequencia'];

        $estadoinscricao = $this->Inscricao->Estadoinscricao->find('list');

        $curso = $turma->getCursoAluno($this->data['Inscricao']['t0010turma_id']);
        $curso1 = $curso[0]['tc']['name'];

        $docente = $turma->getDocente($this->data['Inscricao']['t0010turma_id']);
        $docente1 = $docente[0]['tf']['name'];

        $assistente = $turma->getAssistente($this->data['Inscricao']['t0010turma_id']);
        $assistente1 = $assistente[0]['tf']['name'];

        $plano = $turma->getPlanoEstudo($this->data['Inscricao']['t0010turma_id']);
        $plano1 = $plano[0]['tp']['name'];

        $turma = $turma->getTurma($this->data['Inscricao']['t0010turma_id']);
        $turma1 = $turma[0]['tt']['name'];

        $turno = $turma->getTurno($this->data['Inscricao']['t0010turma_id']);
        $turno1 = $turno[0]['ttu']['name'];

        $anoCurricular = $turma->getAnoCurricular($this->data['Inscricao']['t0010turma_id']);
        $anoCurricular1 = $anoCurricular[0]['tt']['ano_curricular'];

        $semestreCurricular = $turma->getSemestreCurricular($this->data['Inscricao']['t0010turma_id']);
        $semestreCurricular1 = $semestreCurricular[0]['tt']['semestre_curricular'];

        $anoLectivo = $turma->getAnoLectivo($this->data['Inscricao']['t0010turma_id']);
        $anoLectivo1 = $anoLectivo[0]['tal']['codigo'];


        $this->set(compact('Alunos', 't0010turmas', 'EpocaAvaliacaos', 'tg0020estadoinscricao', 'funcionarios', 'curso1', 'docente1', 'assistente1', 'plano1', 'turma1', 'turno1', 'anoCurricular1', 'semestreCurricular1', 'anoLectivo1'));
    }

    /**
     * Inscreve alunos depois da primeira matricula
     * @param type $aluno_id
     * @param type $matricula_id
     *
     *
     * @todo garantir que so se inscreve quem nao tem dividas no semestre anterior
     * @todo A lista de disciplinas deve ter em consideracao  a tabela de precedencias
     * @todo Deve existir possibilidade de inscricao condicional
     */
    public function faculdade_inscrever($alunoId, $matriculaId)
    {
        $this->loadModel('Turma');
        $this->loadModel('Aluno');
        $this->loadModel('FinanceiroPagamento');
        $this->loadModel('Matricula');

        $unidadeOrganicaId = $this->Session->read('Auth.User.unidade_organica_id');

        $isRegular = $this->Inscricao->Aluno->isRegular($alunoId);
        if (!$isRegular[0]['regular'] == true) {
            $this->Session->setFlash(__('So pode fazer Inscricoes depois de renovar a matricula para o ano lectivo actual'), 'default', array('class' => 'alert error'));
            $this->redirect($this->referer());
        }
        $this->Inscricao->Aluno->contain(array(
            'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
        ));
        $aluno = $this->Inscricao->Aluno->findById($alunoId);

        if ($aluno['Curso']['unidade_organica_id'] != $unidadeOrganicaId) {
            $this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
            $this->redirect($this->referer());
        }


        //Primeiro vemos se ainda nao se matriculou no ano lectivo em questao

        $this->Inscricao->contain(array(
            'Turma'
        ));
        $inscricoesActivas = $this->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $alunoId, 'Turma.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'), 'Turma.semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'))));
        if (!empty($inscricoesActivas)) {
            $this->Session->setFlash(__('Este Aluno já fez inscrições neste ano. As cadeiras seguintes serão adicionadas ás inscrições anteriores, e o valor da inscrição será recalculado'), 'default', array('class' => 'alert info'));
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'adicionar_cadeiras_inscricao', $alunoId, $matriculaId));
        }
        if ($this->request->is('post') || $this->request->is('put')) {


            $alunoId = $this->request->data['Inscricao']['aluno_id'];
            $matriculaId = $this->request->data['Inscricao']['matricula_id'];
            $inscricaoNova = array();

            foreach ($this->request->data['disciplinas'] as $k => $v) {
                if ($v > 0) {
                    $inscricaoNova[] = $v;
                }
            }


            $this->Session->write('OpenSGA.inscricao.cadeiras', $inscricaoNova);
            $this->Session->write('OpenSGA.inscricao.matricula_id', $matriculaId);
            $this->Session->write('OpenSGA.inscricao.aluno_id', $alunoId);
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
        }


        $disciplinas = $this->Inscricao->getAllDisciplinasForInscricao($alunoId);

        $this->set('aluno_id', $alunoId);
        $this->set('matricula_id', $matriculaId);
        $this->set(compact( 'disciplinas'));
    }

    public function faculdade_inscrever2($aluno_id, $matricula_id)
    {
        $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
        $anoLectivoAno = Configure::read('OpenSGA.ano_lectivo');
        $anoLectivo = $this->Inscricao->Turma->AnoLectivo->findByAno($anoLectivoAno);
        $semestreLectivoSemestre = Configure::read('OpenSGA.semestre_lectivo');
        $semestreLectivo = $this->Inscricao->Turma->SemestreLectivo->findByAnoLectivoIdAndSemestre($anoLectivo['AnoLectivo']['id'], $semestreLectivoSemestre);

        $is_regular = $this->Inscricao->Aluno->isRegular($aluno_id);
        if (!$is_regular[0]['regular'] == true) {
            $this->Session->setFlash(__('So pode fazer Inscricoes depois de renovar a matricula para o ano lectivo actual'), 'default', array('class' => 'alert error'));
            $this->redirect($this->referer());
        }
        $this->Inscricao->Aluno->contain(array(
            'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
        ));
        $aluno = $this->Inscricao->Aluno->findById($aluno_id);

        if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
            $this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
            $this->redirect($this->referer());
        }

        $matricula = $this->Inscricao->Matricula->findById($matricula_id);

        //Primeiro vemos se ainda nao se inscreveu no ano lectivo em questao

        $this->Inscricao->contain(array(
            'Turma'
        ));
        $inscricoes_activas = $this->Inscricao->find('all', array(
                'conditions' => array(
                    'Inscricao.aluno_id' => $aluno_id,
                    'Turma.ano_lectivo_id' => $anoLectivo['AnoLectivo']['id'],
                    'Turma.semestre_lectivo_id' => $semestreLectivo['SemestreLectivo']['id']
                )
            )
        );
        if (!empty($inscricoes_activas)) {
            $this->Session->setFlash(__('Este Aluno já fez inscrições neste ano. As cadeiras seguintes serão adicionadas ás inscrições anteriores, e o valor da inscrição será recalculado'), 'default', array('class' => 'alert info'));
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'adicionar_cadeiras_inscricao', $aluno_id, $matricula_id));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $aluno_id = $this->request->data['Inscricao']['aluno_id'];
            $matricula_id = $this->request->data['Inscricao']['matricula_id'];


            foreach ($this->request->data['disciplina'] as $planoEstudoId => $disciplinas) {
                $planoEstudo = $this->Inscricao->Turma->PlanoEstudo->findById($planoEstudoId);
                foreach ($disciplinas as $k => $v) {
                    if ($v > 0) {
                        $turmaExiste = $this->Inscricao->Turma->find('first', array(
                                'conditions' => array(
                                        'disciplina_id' => $v,
                                        'ano_lectivo_id' => $anoLectivo['AnoLectivo']['id'],
                                        'semestre_lectivo_id' => $semestreLectivo['SemestreLectivo']['id'],
                                        'curso_id' => $planoEstudo['PlanoEstudo']['id'],
                                        'plano_estudo_id' =>$planoEstudo['PlanoEstudo']['id']
                            )

                        ));
                        if (empty($turmaExiste)) {
                            $this->Inscricao->Turma->PlanoEstudo->DisciplinaPlanoEstudo->contain('Disciplina');
                            $disciplinaPlanoEstudo = $this->Inscricao->Turma->PlanoEstudo->DisciplinaPlanoEstudo->find('first', array(
                                'disciplina_id' => $v,
                                'plano_estudo_id' => $planoEstudoId
                            ));

                            $turma = array();

                            $turma['ano_lectivo_id'] = $anoLectivo['AnoLectivo']['id'];
                            $turma['ano_curricular'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['ano_curricular'];
                            $turma['semestre_curricular'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['semestre_curricular'];
                            $turma['curso_id'] = $planoEstudo['PlanoEstudo']['curso_id'];
                            $turma['escola_id'] = 1;
                            $turma['plano_estudo_id'] = $planoEstudoId;
                            $turma['disciplina_id'] = $disciplinaPlanoEstudo['DisciplinaPlanoEstudo']['disciplina_id'];
                            $turma['estado_turma_id'] = 1;
                            $turma['semestre_lectivo_id'] = $semestreLectivo['SemestreLectivo']['id'];
                            $nome = $disciplinaPlanoEstudo['Disciplina']['name'] . " - " . $planoEstudo['PlanoEstudo']['name'];
                            $turma['name'] = $nome;

                            $this->Inscricao->Turma->create();
                            $this->Inscricao->Turma->save(array('Turma' => $turma));
                            $inscricao_nova[] = $this->Inscricao->Turma->id;
                        } else {
                            $inscricao_nova[] = $turmaExiste['Turma']['id'];
                        }

                    }
                }

            }
            $this->Session->write('OpenSGA.inscricao.cadeiras', $inscricao_nova);
            $this->Session->write('OpenSGA.inscricao.matricula_id', $matricula_id);
            $this->Session->write('OpenSGA.inscricao.aluno_id', $aluno_id);
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
        }
        $planoEstudos = $this->Inscricao->Turma->getAllDisciplinasForInscricao($aluno_id);

        $this->set('aluno_id', $aluno_id);
        $this->set('matricula_id', $matricula_id);
        $this->set(compact('turmas', 'disciplinas', 'turmas2', 'planoEstudos'));
    }

    /**
     * Inscreve alunos depois da primeira matricula
     * @param type $aluno_id
     * @param type $matricula_id
     *
     *
     * @todo garantir que so se inscreve quem nao tem dividas no semestre anterior
     * @todo A lista de disciplinas deve ter em consideracao  a tabela de precedencias
     * @todo Deve existir possibilidade de inscricao condicional
     */
    public function faculdade_inscrever_aluno($aluno_id, $matricula_id)
    {
        $this->loadModel('Turma');
        $this->loadModel('Aluno');
        $this->loadModel('FinanceiroPagamento');
        $this->loadModel('Matricula');

        $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');

        $is_regular = $this->Inscricao->Aluno->isRegular($aluno_id);
        if (!$is_regular[0]['regular'] == true) {
            $this->Session->setFlash(__('So pode fazer Inscricoes depois de renovar a matricula para o ano lectivo actual'), 'default', array('class' => 'alert error'));
            $this->redirect($this->referer());
        }
        $this->Inscricao->Aluno->contain(array(
            'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
        ));
        $aluno = $this->Inscricao->Aluno->findById($aluno_id);

        if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
            $this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
            $this->redirect($this->referer());
        }


        $matricula = $this->Inscricao->Matricula->findById($matricula_id);

        //Primeiro vemos se ainda nao se matriculou no ano lectivo em questao

        $this->Inscricao->contain(array(
            'Turma'
        ));
        $inscricoes_activas = $this->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id, 'Turma.ano_lectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'), 'Turma.semestre_lectivo_id' => Configure::read('OpenSGA.semestre_lectivo_id'))));
        if (!empty($inscricoes_activas)) {
            $this->Session->setFlash(__('Este Aluno já fez inscrições neste ano. As cadeiras seguintes serão adicionadas ás inscrições anteriores, e o valor da inscrição será recalculado'), 'default', array('class' => 'alert info'));
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'adicionar_cadeiras_inscricao', $aluno_id, $matricula_id));
        }
        if ($this->request->is('post') || $this->request->is('put')) {


            $aluno_id = $this->request->data['Inscricao']['aluno_id'];
            $matricula_id = $this->request->data['Inscricao']['matricula_id'];
            $inscricao_nova = array();

            foreach ($this->request->data['disciplinas'] as $k => $v) {
                if ($v > 0) {
                    $inscricao_nova[] = $v;
                }
            }
            foreach ($this->request->data['disciplinas2'] as $k => $v) {
                if ($v > 0) {
                    $inscricao_nova[] = $v;
                }
            }


            $this->Session->write('OpenSGA.inscricao.cadeiras', $inscricao_nova);
            $this->Session->write('OpenSGA.inscricao.matricula_id', $matricula_id);
            $this->Session->write('OpenSGA.inscricao.aluno_id', $aluno_id);
            $this->redirect(array('controller' => 'inscricaos', 'action' => 'valida_inscricao'));
        }


        $turmas = $this->Turma->getAllByAlunoForInscricao($aluno_id);

        $turmas2 = $this->Turma->getAllByPlanoEstudoAntigo($aluno_id);

        $this->set('aluno_id', $aluno_id);
        $this->set('matricula_id', $matricula_id);
        $this->set(compact('turmas', 'disciplinas', 'turmas2'));
    }

    /**
     * Verifica se esta tudo bem com a inscricao e o pagamento
     */
    public function faculdade_valida_inscricao()
    {


        $unidadeOrganicaId = $this->Session->read('Auth.User.unidade_organica_id');
        $alunoId = $this->Session->read('OpenSGA.inscricao.aluno_id');

        $this->Inscricao->Aluno->contain(array(
            'Entidade', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
        ));
        $aluno = $this->Inscricao->Aluno->findById($alunoId);

        if ($aluno['Curso']['unidade_organica_id'] != $unidadeOrganicaId) {
            $this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
            $this->redirect($this->referer());
        }

        $this->Inscricao->Turma->PlanoEstudo->DisciplinaPlanoEstudo->contain([
            'Disciplina'
        ]);
        $disciplinaPlanoEstudos = $this->Inscricao->Turma->PlanoEstudo->DisciplinaPlanoEstudo->find('all',[
            'conditions'=>[
                'DisciplinaPlanoEstudo.id'=>$this->Session->read('OpenSGA.inscricao.cadeiras')
            ],
            'order'=>[
                'DisciplinaPlanoEstudo.ano_curricular','DisciplinaPlanoEstudo.semestre_curricular'
            ]
        ]);
        $this->Inscricao->Turma->contain(array(
            'Disciplina'
        ));
       // $turmas = $this->Inscricao->Turma->find('all', array('conditions' => array('Turma.id' => $this->Session->read('OpenSGA.inscricao.cadeiras')), ));

        $this->loadModel('FinanceiroPagamento');

        $pagamento_normal = $this->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(44);
        $pagamento_atraso = $this->FinanceiroPagamento->FinanceiroTipoPagamento->findByCodigo(45);
        $total_normal = 0;
        $total_atraso = 0;
        $cadeiras_atraso = 0;
        $cadeiras_normais = 0;
        $turmas_normais = array();
        $turmas_atraso = array();
        $turmas_tipo = array();
        $ano_maior = $disciplinaPlanoEstudos[0]['DisciplinaPlanoEstudo']['ano_curricular']; /* @todo verificar isso. Esta a pegar ano menor*/
        $semestre_maior = $disciplinaPlanoEstudos[0]['DisciplinaPlanoEstudo']['semestre_curricular'];
        foreach ($disciplinaPlanoEstudos as $disciplina) {
            if ($disciplina['DisciplinaPlanoEstudo']['ano_curricular'] == $ano_maior and $disciplina['DisciplinaPlanoEstudo']['semestre_curricular'] == $semestre_maior) {
                $turmas_normais[] = $disciplina;
                $total_normal = $total_normal + $pagamento_normal['FinanceiroTipoPagamento']['valor'];
                $turmas_tipo[$disciplina['DisciplinaPlanoEstudo']['id']] = 1;
            } else {
                $turmas_atraso[] = $disciplina;
                $total_atraso = $total_atraso + $pagamento_atraso['FinanceiroTipoPagamento']['valor'];
                $turmas_tipo[$disciplina['DisciplinaPlanoEstudo']['id']] = 2;
            }
        }


        $matriculaId = $this->Session->read('OpenSGA.inscricao.matricula_id');

        $imprimir = false;

        if ($this->request->is('post') || $this->request->is('put')) {

            debug($this->request->data);
            $this->request->data['disciplinas'] = $this->Session->read('OpenSGA.inscricao.cadeiras');
            $total_normal = 0;
            $total_atraso = 0;
            foreach ($this->request->data['Disciplina'] as $disciplina) {

                $turmas_tipo[$disciplina['id']] = $disciplina['tipo'];
                if ($disciplina['tipo'] == 1) {
                    $total_normal = $total_normal + $pagamento_normal['FinanceiroTipoPagamento']['valor'];
                    $cadeiras_normais += 1;
                } else {
                    $total_atraso = $total_atraso + $pagamento_atraso['FinanceiroTipoPagamento']['valor'];
                    $cadeiras_atraso += 1;
                }
            }

            $this->request->data['total_normal'] = $total_normal;
            $this->request->data['total_atraso'] = $total_atraso;
            $this->request->data['aluno_id'] = $alunoId;
            $this->request->data['matricula_id'] = $matriculaId;
            $this->request->data['turmas_tipo'] = $turmas_tipo;

            if ($cadeiras_atraso > 3 && $cadeiras_normais >= 1) {
                //Nao pode fazer cadeiras normais com mais de 3 cadeiras em atraso
                $this->Session->setFlash(__('Não pode fazer cadeiras normais com mais de 3 cadeiras em atraso'), 'default', array('class' => 'alert_error'));
                //    $this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno_id));
            }

            $this->request->data['cadeiras_normais'] = $cadeiras_normais;
            $this->request->data['cadeiras_atraso'] = $cadeiras_atraso;

            $inscricao = $this->Inscricao->inscreveAluno($this->request->data);
            if ($inscricao) {
                $this->Session->setFlash(sprintf(__('O Aluno  Foi inscrito com sucesso', true)), 'default', array('class' => 'alert alert-success'));

                $imprimir = true;
            } else {
                $this->Session->setFlash(sprintf(__('O Aluno  nao foi inscrito', true)), 'default', array('class' => 'alert alert-danger'));

                //$this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $aluno_id));
            }
        }
        $this->set(compact('disciplinas', 'turmas_normais', 'turmas_atraso', 'total_normal', 'total_atraso', 'matriculaId', 'alunoId', 'imprimir', 'aluno'));
    }

    /**
     *
     * @param type $aluno_id
     *
     * @fixme esta matricula nao eh consistente para casos em que aluno muda de curso,etc
     */
    public function faculdade_ver_inscricoes_aluno($aluno_id)
    {
        $unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');

        $this->Inscricao->Aluno->contain(array(
            'Entidade' => array('User'), 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
        ));
        $aluno = $this->Inscricao->Aluno->findById($aluno_id);

        if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
            $this->Session->setFlash(__('Nao Possui permissao para aceder a pagina anterior'));
            $this->redirect($this->referer());
        }
        //Pegamos todas inscricoes activas
        $this->Inscricao->contain(array(
            'Turma' => array(
                'Disciplina', 'AnoLectivo'
            ), 'TipoInscricao'
        ));
        $inscricoes_activas = $this->Inscricao->find('all', array('conditions' => array('estado_inscricao_id' => 1, 'aluno_id' => $aluno_id), 'order' => 'Inscricao.id DESC'));

        $anoLectivo = $this->Inscricao->Matricula->AnoLectivo->findByAno(Configure::read('OpenSGA.ano_lectivo'));

        $matricula = $this->Inscricao->Matricula->findByAlunoIdAndCursoIdAndAnoLectivoId($aluno_id, $aluno['Aluno']['curso_id'], $anoLectivo['AnoLectivo']['id']);

        $cadeiras_pendentes = $this->Inscricao->Turma->getAllByAlunoForInscricao($aluno_id);
        $isRegular = $this->Inscricao->Aluno->isRegular($aluno_id);

        if (count($isRegular) == 1 && $isRegular[0]['regular'] == true) {
            if ($isRegular[0]['estado'] == 1) {
                $classeEstado = "alert alert-info";
            } else {
                $classeEstado = "alert alert-success";
            }
        } else {
            $classeEstado = "alert alert-danger";
        }


        $this->set(compact('inscricoes_activas', 'cadeiras_pendentes', 'aluno', 'matricula', 'isRegular', 'classeEstado'));
    }

}

?>