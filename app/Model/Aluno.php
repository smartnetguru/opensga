<?php

App::uses('AppModel', 'Model');
App::uses('SessionComponent', 'Controller/Component');

/**
 * Classe Model do Aluno
 *
 * @copyright     Copyright (C) 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.estudantes
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0

 *
 * @property User $User
 * @property Matricula $Matricula
 * @property Inscricao $Inscricao
 * @property FinanceiroPagamento $FinanceiroPagamento
 *
 *
 */
class Aluno extends AppModel {

    var $name = 'Aluno';
    //var $recursive = 0;
    //The Associations below have been created with all possible keys, those that are not needed can be removed



    public $hasOne = array(
        'AlunoNivelMedio' => array(
            'className' => 'AlunoNivelMedio',
            'dependent' => true
        )
    );
    var $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Entidade' => array(
            'className' => 'Entidade',
            'foreignKey' => 'entidade_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Curso' => array(
            'className' => 'Curso',
            'foreignKey' => 'curso_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Areatrabalho' => array(
            'className' => 'Areatrabalho',
            'foreignKey' => 'areatrabalho_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'EstadoAluno' => array(
            'className' => 'EstadoAluno',
            'foreignKey' => 'estado_aluno_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Planoestudo' => array(
            'className' => 'Planoestudo',
            'foreignKey' => 'planoestudo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
    );
    var $hasMany = array(
        'Matricula' => array(
            'className' => 'Matricula',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => 'data',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Inscricao' => array(
            'className' => 'Inscricao',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'FinanceiroPagamento' => array(
            'className' => 'FinanceiroPagamento',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'RequisicoesPedido' => array(
            'className' => 'Requisicoes.RequisicoesPedido',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'HistoricoCurso' => array(
            'className' => 'HistoricoCurso',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'MudancaCurso' => array(
            'className' => 'MudancaCurso',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'AlunoEstado' => array(
            'className' => 'AlunoEstado',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'HistoricoCurso' => array(
            'className' => 'HistoricoCurso',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'CandidatoGraduacao' => array(
            'className' => 'CandidatoGraduacao',
            'foreignKey' => 'aluno_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
   
    public $validate = array(
        'curso_id' => array(
            'loginRule-3'=>array(
                'rule'=>'notEmpty',
                'required'=>'create',
                'message'=>'O Usermane não pode estar vazio'
            )
        ),
        'codigo'=> array(
            'codigoRule-1'=> array(
                'rule'=>'isUnique',
                'required'=>'create',
                'message' => 'Não podem existir dois estudantes com mesmo código'
            ),
            'codigoRule-2'=>array(
                'rule'=>'notEmpty',
                'message'=>'Todo estudante deve ter um código atribuido'
            )
        )
    );

    /**
     * Retorna o plano de estudos activo do aluno
     * @param int $id
     * @return int
     */
    function getPlanoEstudoCorrente($id) {
        App::import('Model', 'Matricula');
        $matriculas = new Matricula;
        $matriculas->recursive = -1;

        $matricula = $matriculas->find('first', array('conditions' => array('estadomatricula_id' => 1, 'Aluno_id' => $id)));

        $plano_estudo = $matricula['Matricula']['planoestudo_id'];
        return $plano_estudo;
    }

    /**
     * Retorna as cadeiras em que o aluno esta inscrito actualmente
     * @return array com ID das disciplinas activas do aluno
     */
    public function getAllInscricoesActivas($aluno_id) {

        $this->Inscricao->contain('Turma');
        $inscricoes = $this->Inscricao->find('all', array('conditions' => array('Inscricao.estadoinscricao_id' => 1, 'Inscricao.aluno_id' => $aluno_id), 'recursive' => 0, 'fields' => array('Turma.disciplina_id')));

        $disciplinas = Hash::extract($inscricoes, '{n}.Turma.disciplina_id');
        return $disciplinas;
    }

    /**
     * Retorna todas as cadeiras que o aluno ja aprovou para a inscricao
     * @return type
     */
    public function getAllInscricoesActivasAndAprovadasForInscricao($aluno_id) {
        $this->Inscricao->contain('Turma');
        $inscricoes = $this->Inscricao->find('all', array('conditions' => array('Inscricao.estadoinscricao_id' => array(1, 2), 'Inscricao.aluno_id' => $aluno_id), 'recursive' => 0, 'fields' => array('Turma.disciplina_id')));

        $disciplinas = Hash::extract($inscricoes, '{n}.Turma.disciplina_id');
        return $disciplinas;
    }

    /**
     * Funcao generica para retornar todas as turmas de um aluno com base no estado da turma
     * @Todo Testar :-)
     */
    function getAllTurmasByEstado($aluno, $estado = 1) {
        App::import('Model', 'Turma');
        App::import('Model', 'Inscricao');
        App::import('Model', 'Matricula');

        $turma = new Turma;
        $inscricao = new Inscricao;
        $Matricula = new Matricula;

        $plano_estudo = $this->query("Select planoestudo_id from matriculas where aluno_id = {$aluno}");
        $turma->recursive = -1;

        $turmas = $turma->getAllTurmasActivasByPlanoEstudo($plano_estudo[0]['matriculas']['planoestudo_id']);

        return $turmas;
    }

    function getAllTurmasByAluno($aluno_id, $estado = 1) {
        App::import('Model', 'Turma');
        App::import('Model', 'Inscricao');
        App::import('Model', 'Matricula');

        $turma = new Turma;
        $inscricao = new Inscricao;
        $Matricula = new Matricula;

        $plano_estudo = $this->query("Select planoestudo_id from matriculas where aluno_id = {$aluno}");
        $turma->recursive = -1;
        $turmas = $turma->getAllTurmasByAluno($plano_estudo[0]['matriculas']['planoestudo_id']);
        return $turmas;
    }

    // function getAllTurmasCompletas

    function geraCodigo() {
        $ano = date('Y');
        $this->recursive = -1;
        $id = $this->find('count', array('conditions' => array('Aluno.codigo LIKE' => '%' . $ano . '%'), 'order' => array('Aluno.created DESC'), 'fields' => 'id'));
        $id_for = str_pad($id + 1, 4, "0", STR_PAD_LEFT);
        $codigo = $ano . $id_for;

        return $codigo;
    }

    /**
     * Retorna a conta do aluno
     * @param type $aluno_id
     */
    public function getContaByAlunoId($aluno_id) {
        $this->id = $aluno_id;
        $entidade_id = $this->field('entidade_id');

        $this->Entidade->FinanceiroConta->recursive = -1;
        $conta = $this->Entidade->FinanceiroConta->findByEntidadeId($entidade_id);

        return $conta;
    }

    /**
     * Retorna o Id da conta do aluno
     * @param type $aluno_id
     */
    public function getContaIdByAlunoId($aluno_id) {
        $conta = $this->getContaByAlunoId($aluno_id);
        return $conta['FinanceiroConta']['id'];
    }

    /**
     * Devolve todas as turmas que o aluno pode se inscrever, baseado nas cadeiras feitas e precedencias
     * @Todo por enquanto as precedencias e cadeiras feitas nao sao processadas
     *
     *
     * @todo falta isso
     */
    function getAllTurmasForInscricao() {
        
    }

    public function getAllTurmasNormaisForInscricao($aluno_id) {


        //Primeiro, pegar a ultima matricula deste aluno, se nao for deste ano, mandar matricular
        if (!$matricula = $this->getMatriculaCorrente($aluno_id)) {
            return false;
        }

        $this->Inscricao->contain(array(
            'Turma'
        ));
        $turmas_aprovadas = $this->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id)));

        //$matricula -
        debug($turmas_aprovadas);
    }

    public function getMatriculaCorrente($aluno_id) {
        return $this->Matricula->find('first', array('conditions' => array('Matricula.aluno_id' => $aluno_id, 'Matricula.anolectivo_id' => Configure::read('OpenSGA.ano_lectivo_id'), 'Matricula.estadomatricula_id' => 1), 'recursive' => -1));
    }

    /**
     * Retorna o nivel academico mais elevado que o aluno ja frequentou.
     * Esta funcao é importante para se verificar o que sao cadeiras normais e o que sao cadeiras em atraso
     *
     * @FIXME Pode nao dar certos em instituicoes que permitem puxar cadeiras
     * @todo Implementar e testar
     * @param type $aluno_id
     */
    public function getNivelAcademicoElevado($aluno_id) {
        $this->Inscricao->contain('Turma');
        $todas_inscricoes = $this->Inscricao->find('all', array('conditions' => array('aluno_id' => $aluno_id)));
        // debug($todas_inscricoes);
    }

    /**
     * Retorna o Nivel Academico Real do aluno em questao, tendo em conta os criterios da universidade para a definicao de nivel academico
     *
     * @todo implementar e testar
     * @param type $aluno_id
     */
    public function getNivelAcademicoReal($aluno_id) {
        
    }

    /**
     * Regista os dados do Aluno no Sistema e faz a primeira matricula
     * @param array $data
     * @return type
     */
    public function cadastraAluno(array $data) {
        $dataSource = $this->getDataSource();

        $dataSource->begin();

        $data_matricula = array();
        if ($data['Aluno']['numero_estudante'] == '') {
            $data['Aluno']['codigo'] = $this->geraCodigo();
        } else {
            if ($data['Aluno']['codigo'] == '' || $data['Aluno']['codigo'] == NULL)
                $data['Aluno']['codigo'] = $data['Aluno']['numero_estudante'];
            $data['Aluno']['numero_estudante_antigo'] = $data['Aluno']['numero_estudante'];
        }

        if (!isset($data['Entidade']['name'])) {
            $data['Entidade']['name'] = $data['Entidade']['nomes'] . " " . $data['Entidade']['apelido'];
        }

        //Grava os dados do Usuario
        $this->User->create();
        $data['User']['username'] = $this->User->geraEmailUem($data['Entidade']['apelido'], $data['Entidade']['nomes']);
        $data['User']['password'] = Security::hash($data['Aluno']['codigo'], 'blowfish');
        $data['User']['codigocartao'] = $data['Aluno']['codigo'];
        $data['User']['name'] = $data['Entidade']['name'];
        $data['User']['group_id'] = 3;
        if ($this->User->save($data)) {
            //Grava os dados da Entidade
            $data['Aluno']['user_id'] = $this->User->getLastInsertID();
            $data['Entidade']['user_id'] = $this->User->getLastInsertID();
            $this->Entidade->create();
            if ($this->Entidade->save($data)) {

                //Grava os dados do Aluno
                $data['Aluno']['entidade_id'] = $this->Entidade->getLastInsertID();

                $planoestudo = $this->Curso->getPlanoEstudoRecente($data['Aluno']['curso_id']);

                $data['Aluno']['planoestudo_id'] = $planoestudo['Planoestudo']['id'];
                $data['Aluno']['estado_aluno_id'] = 1;
                $this->create();
                if ($this->save($data)) {
                    //Grava os dados de Identificacao

                    $identificacao = array('EntidadeIdentificacao' => $data['EntidadeIdentificacao']);
                    $identificacao['EntidadeIdentificacao']['entidade_id'] = $this->Entidade->getLastInsertID();
                    $identificacao['EntidadeIdentificacao']['estado_objecto_id'] = 1;

                    $this->Entidade->EntidadeIdentificacao->create();
                    $this->Entidade->EntidadeIdentificacao->save($identificacao);


                    //Grava os dados de Morada e Contactos

                    $contactos = $data['EntidadeContacto'];
                    foreach ($contactos as $k => $v) {
                        $this->Entidade->EntidadeContacto->create();
                        $this->Entidade->EntidadeContacto->save(
                                array(
                                    'EntidadeContacto' => array(
                                        'entidade_id' => $this->Entidade->getLastInsertID(),
                                        'tipo_contacto_id' => $k,
                                        'valor' => $v,
                                        'estado_objecto_id' => 1
                                    )
                                )
                        );
                    }


                    $aluno_nivel_medio = array(
                        'AlunoNivelMedio' => $data['AlunoNivelMedio']
                    );
                    //Grava os dados do Nivel Medio
                    if ($data['AlunoNivelMedio']['nova_escola_anterior'] != '') {
                        $array_nova_escola = array(
                            'name' => $data['AlunoNivelMedio']['nova_escola_anterior'],
                            'pais_id' => $data['AlunoNivelMedio']['EscolaNivelMedio']['pais_id'],
                            'provincia_id' => $data['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id'],
                            'distrito_id' => $data['AlunoNivelMedio']['EscolaNivelMedio']['distrito_id']
                        );

                        $this->AlunoNivelMedio->EscolaNivelMedio->create();
                        $this->AlunoNivelMedio->EscolaNivelMedio->save(array('EscolaNivelMedio' => $array_nova_escola));
                        $aluno_nivel_medio['AlunoNivelMedio']['escola_nivel_medio_id'] = $this->AlunoNivelMedio->EscolaNivelMedio->id;
                    }


                    $aluno_nivel_medio['AlunoNivelMedio']['provincia_id'] = $data['AlunoNivelMedio']['EscolaNivelMedio']['provincia_id'];
                    $aluno_nivel_medio['AlunoNivelMedio']['aluno_id'] = $this->id;

                    $this->AlunoNivelMedio->create();
                    $this->AlunoNivelMedio->save($aluno_nivel_medio);


                    /**
                     * @fixme desactivamos temporariamente o o turno e o regime e o nivel
                     */
                    //Pega os dados da matricula e realiza a matricula
                    $data_matricula['aluno_id'] = $this->getInsertID();
                    $data_matricula['curso_id'] = $data['Aluno']['curso_id'];
                    $data_matricula['planoestudo_id'] = $data['Aluno']['planoestudo_id'];
                    $data_matricula['estadomatricula_id'] = 1;
                    $data_matricula['data'] = date('Y-m-d');
                    $data_matricula['user_id'] = $data['Matricula']['user_id'];
                    $data_matricula['anolectivo_id'] = Configure::read('OpenSGA.ano_lectivo_id');
                    // $data_matricula['turno_id'] = $data['Aluno']['turno_id'];
                    //$data_matricula['nivel'] = $data['Aluno']['nivel'];
                    $data_matricula['tipo_matricula_id'] = 1;
                    if (Configure::read('OpenSGA.matriculas.regimes' == 2)) {
                        //     $data_matricula['regimelectivo_id'] = $data['Aluno']['regimelectivo_id'];
                    }

                    $matricula_gravar = array('Matricula' => $data_matricula);
                    $this->Matricula->create();
                    if ($this->Matricula->save($matricula_gravar)) {

                        $historico_array = array(
                            'aluno_id' => $this->id,
                            'curso_id' => $data['Aluno']['curso_id'],
                            'ano_ingresso' => $data['Aluno']['ano_ingresso'],
                            'ano_lectivo_ingresso' => Configure::read('OpenSGA.ano_lectivo_id')
                        );
                        $this->HistoricoCurso->create();
                        $this->HistoricoCurso->save($historico_array);
                        return $dataSource->commit();
                    }
                }
            }
        }


        $dataSource->rollback();
    }

    public function isBolseiro($aluno_id, $ano_lectivo_id = null) {

        //$this->BolsaBolsa->find('first');
        return TRUE;
    }

    /**
     * Verifica se o aluno esta matriculado
     * Estar matriculado significa que possui pelo menos uma matricula na tabela matriculas, e nao exactamente que renovou matricula no ano lectivo corrente
     */
    public function isMatriculado($aluno_id, $anolectivo_id) {
        $matricula = $this->Matricula->find('first', array('conditions' => array('aluno_id' => $aluno_id), 'recursive' => -1));
        return $matricula;
    }

    public function setNovaMatricula($data) {
        if (empty($data['Matricula']['anolectivo_id'])) {
            $data['Matricula']['anolectivo_id'] = $data['Sessao']['anolectivo_id'];
        }

        $data['Matricula']['user_id'] = $data['Sessao']['user_id'];
        $data['Matricula']['aluno_id'] = $this->id;
        if ($this->isMatriculado($this->id, $data['Matricula']['user_id'])) {
            return false;
        }
        if ($this->Matricula->save($data)) {
            return true;
        }
        return false;
    }

    public function getPerfilAluno() {
        
    }

    /**
     * Retorna o numero de estudantes por faculdade
     */
    public function getEstudantesByFaculdade() {
        $alunos_faculdade = $this->find('all', array('conditions' => array(), 'group' => 'faculdade_ingresso_id', 'fields' => array('Count(*) as total', 'Faculdade.name')));
        return $alunos_faculdade;
    }

    public function getTotalEstudantesPorCurso() {
        $this->contain('Curso');
        $alunos_curso = $this->find('all', array('conditions' => array(), 'group' => 'Curso.name', 'fields' => array('Count(*) as total', 'Curso.name')));


        return $alunos_curso;
    }

    public function getTotalAlunosActivosPorCurso() {
        $this->Matricula->contain(array('Curso', 'Anolectivo'));
        $total_alunos = $this->Matricula->find('all', array('conditions' => array('Anolectivo.ano' => 2013), 'group' => 'Curso.name', 'fields' => array('Count(Matricula.curso_id) as total', 'Curso.name')));

        return $total_alunos;
    }

    public function getTotalAlunosActivos() {
        return $this->find('count',array('conditions'=>array('estado_aluno_id'=>array(1,11))));
    }

    /**
     * Verifica se o aluno possui foto no Sistema
     * @param type $codigo
     */
    public function hasFoto($codigo) {
        App::uses('File', 'Utility');

        $path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS;
        $file = new File($path . $codigo . '.jpg');
        if (!$file->exists()) {
            return false;
        }
        return true;
    }

    /**
     * Verifica se um determinado aluno é regular. Para tal, basta verificar se todas as matriculas foram renovadas ate ao presente ano, verificar a situacao da conclusao e o status na tabela alunos
     * @param type $id_aluno
     * @return array Um array contendo o status e o motivo
     */
    function isRegular($aluno_id) {
        $this->contain('EstadoAluno');
        $aluno = $this->findById($aluno_id);

        $this->AlunoEstado->contain('MotivoEstadoAluno');
        $aluno_estado = $this->AlunoEstado->find('first', array('conditions' => array('aluno_id' => $aluno['Aluno']['id'], 'estado_actual' => $aluno['Aluno']['estado_aluno_id']), 'order' => 'data_mudanca DESC'));

        $irregularidades = array();
        if ($aluno['Aluno']['estado_aluno_id'] == 1) {
            $renovacoes = $this->Matricula->getStatusRenovacao($aluno_id);
            if (empty($renovacoes)) {
                $irregularidades[] = array("estado" => 1, "mensagem" => 'Estudante Regular', "regular" => true);
            } else {
                $string_retorno = __("Não renovou matricula nos seguintes anos: ");
                foreach ($renovacoes as $renovacao) {
                    $string_retorno.=$renovacao['Anolectivo']['ano'] . ", ";
                }
                $irregularidades[] = array("estado" => 2, "mensagem" => $string_retorno, "regular" => false);
            }
        } elseif ($aluno['Aluno']['estado_aluno_id'] == 3) {
            $renovacoes = $this->Matricula->getStatusRenovacao($aluno_id);
            if (empty($renovacoes)) {
                $irregularidades[] = array("estado" => 3, "mensagem" => 'Concluiu o Nivel', "regular" => true);
            } else {
                $string_retorno = __("Concluiu o nível, mas não renovou matricula nos seguintes anos: ");
                foreach ($renovacoes as $renovacao) {
                    $string_retorno.=$renovacao['Anolectivo']['ano'] . ", ";
                }
                $irregularidades[] = array("estado" => 4, "mensagem" => $string_retorno, "regular" => false);
            }
        } else {

            $irregularidades[] = array("estado" => 5, "mensagem" => $aluno['EstadoAluno']['name'] . " (" . $aluno_estado['MotivoEstadoAluno']['name'] . ")", "regular" => false);
        }


        return $irregularidades;
    }

    public function processaContacto($aluno_id) {
        $entidade_id = $this->field('entidade_id', array('id' => $aluno_id));

        $telefone = $this->Entidade->EntidadeContacto->field('valor', array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 4, 'estado_objecto_id' => 1));
        $telemovel = $this->Entidade->EntidadeContacto->field('valor', array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 2, 'estado_objecto_id' => 1));
        $distrito_id = $this->Entidade->EntidadeContacto->field('valor', array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 9, 'estado_objecto_id' => 1));
        $distrito = $this->Entidade->CidadeNascimento->field('name', array('id' => $distrito_id));
        $rua = $this->Entidade->EntidadeContacto->field('valor', array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 5, 'estado_objecto_id' => 1));
        $numero = $this->Entidade->EntidadeContacto->field('valor', array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 8, 'estado_objecto_id' => 1));
        $quarteirao = $this->Entidade->EntidadeContacto->field('valor', array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 7, 'estado_objecto_id' => 1));
        $bairro = $this->Entidade->EntidadeContacto->field('valor', array('entidade_id' => $entidade_id, 'tipo_contacto_id' => 6, 'estado_objecto_id' => 1));
        $telemovel_emergencia = $this->field('telemovel_emergencia', array('id' => $aluno_id));

        $contactos = array(
            'telefone' => $telefone,
            'telemovel' => $telemovel,
            'distrito' => $distrito,
            'rua' => $rua,
            'numero' => $numero,
            'quarteirao' => $quarteirao,
            'bairro' => $bairro,
            'telemovel_emergencia' => $telemovel_emergencia
        );
        return $contactos;
    }

    public function alteraStatus($data) {
        $datasource = $this->getDataSource();
        $datasource->begin();
        $this->contain();
        $aluno = $this->findById($data['aluno_id']);
        $array_estado = array(
            'AlunoEstado' => array(
                'aluno_id' => $aluno['Aluno']['id'],
                'estado_anterior' => $aluno['Aluno']['estado_aluno_id'],
                'estado_actual' => $data['estado_actual'],
                'motivo_estado_aluno_id' => $data['motivo_estado_aluno_id'],
                'observacao' => $data['observacao'],
                'data_mudanca' => $data['data_mudanca'],
                // 'anexo_url'=>$data['anexo_url'],
                'funcionario_id' => $data['funcionario_id']
            )
        );

        $this->AlunoEstado->create();
        $this->AlunoEstado->save($array_estado);

        $this->id = $data['aluno_id'];
        $this->set('estado_aluno_id', $data['estado_actual']);
        $this->save();
        return $datasource->commit();
    }

    public function mudaCurso($data) {
        $datasource = $this->getDataSource();
        $datasource->begin();

        $funcionario_id = $data['Aluno']['funcionario_id'];
        
        $mudanca_array = array(
            'MudancaCurso' => array(
                'aluno_id' => $data['Aluno']['aluno_id'],
                'curso_antigo' => $data['Aluno']['curso_antigo'],
                'curso_novo' => $data['Aluno']['curso_id'],
                'data_mudanca' => $data['Aluno']['data_mudanca'],
                'funcionario_id' => $funcionario_id,
                'observacao' => $data['Aluno']['observacao']
            )
        );
        if ($data['Aluno']['mudanca_via_exame'] == 1) {
            $mudanca_array['MudancaCurso']['forma_mudanca_id'] = 1;
            $this->contain();
            $aluno_bloquear = $this->findByCodigo($data['Aluno']['numero_estudante_atribuido']);
            $data_estado = array(
                'aluno_id' => $aluno_bloquear['Aluno']['id'],
                'estado_anterior' => $aluno_bloquear['Aluno']['estado_aluno_id'],
                'estado_actual' => 10,
                'motivo_estado_aluno_id' => 5,
                'observacao' => $data['Aluno']['observacao'],
                'data_mudanca' => $data['Aluno']['data_mudanca'],
                // 'anexo_url' => $data['anexo_url'],
                'funcionario_id' => $funcionario_id
            );
            $this->alteraStatus($data_estado);
        } else {
            $mudanca_array['MudancaCurso']['forma_mudanca_id'] = 2;
        }
        $data_ano = DateTime::createFromFormat("Y-m-d", $data['Aluno']['data_mudanca']);
        //Finaliza o historico
        $historico_actual = $this->HistoricoCurso->find('first', array('conditions' => array('aluno_id' => $data['Aluno']['aluno_id'], 'curso_id' => $data['Aluno']['curso_antigo'], 'ano_fim' => null)));
        if (!empty($historico_actual)) {
            $this->HistoricoCurso->id = $historico_actual['HistoricoCurso']['id'];

            $this->HistoricoCurso->set('ano_fim', $data_ano->format("Y"));
            $this->HistoricoCurso->save();
        }


        $this->Matricula->Anolectivo->contain();
        $anolectivo = $this->Matricula->Anolectivo->findByAno($data_ano->format("Y"));
        //Cria Novo Historico
        $planoestudo = $this->Curso->getPlanoEstudoRecente($data['Aluno']['curso_id']);
        if (empty($planoestudo)) {
            $planoestudo_id = 0;
        } else {
            $planoestudo_id = $planoestudo['Planoestudo']['id'];
        }
        $array_novo_historico = array(
            'HistoricoCurso' => array(
                'aluno_id' => $data['Aluno']['aluno_id'],
                'curso_id' => $data['Aluno']['curso_id'],
                'ano_ingresso' => $data_ano->format("Y"),
                'ano_lectivo_ingresso' => $anolectivo['Anolectivo']['id'],
                'funcionario_id' => $funcionario_id,
                'planoestudo_id' => $planoestudo_id
            )
        );

        $this->HistoricoCurso->create();
        $this->HistoricoCurso->save($array_novo_historico);

        $this->id = $data['Aluno']['aluno_id'];
        $this->set('curso_id', $data['Aluno']['curso_id']);
        $this->set('planoestudo_id', $planoestudo_id);
        $this->save();
        $this->MudancaCurso->create();
        $this->MudancaCurso->save($mudanca_array);

        return $datasource->commit();
    }

    public function concluirNivel($data) {

        $datasource = $this->getDataSource();
        $datasource->begin();
        if ($data['HistoricoCurso']['ano_fim'] == '' || $data['HistoricoCurso']['nota_final'] == '' || $data['HistoricoCurso']['data_conclusao'] == '') {
            return false;
        }
        $this->contain();
        $aluno = $this->findById($data['Aluno']['aluno_id']);
        $this->HistoricoCurso->contain();
        $historico_curso = $this->HistoricoCurso->find('first', array('conditions' => array('aluno_id' => $data['Aluno']['aluno_id'], 'curso_id' => $data['Aluno']['curso_id'], 'ano_fim' => null)));
        if (empty($historico_curso)) {
            //Nao tem historico, vamos registrar novo


            $this->Matricula->Anolectivo->contain();
            $ano_lectivo = $this->Matricula->Anolectivo->findByAno($aluno['Aluno']['ano_ingresso']);
            $historico_array = array(
                'aluno_id' => $aluno['Aluno']['id'],
                'curso_id' => $aluno['Aluno']['curso_id'],
                'ano_ingresso' => $aluno['Aluno']['ano_ingresso'],
                'ano_lectivo_ingresso' => $ano_lectivo['Anolectivo']['id']
            );
            $this->HistoricoCurso->create();
            $this->HistoricoCurso->save(array('HistoricoCurso' => $historico_array));
            $this->HistoricoCurso->contain();
            $historico_curso = $this->HistoricoCurso->find('first', array('conditions' => array('aluno_id' => $data['Aluno']['aluno_id'], 'curso_id' => $data['Aluno']['curso_id'], 'ano_fim' => null)));
        }

        $this->HistoricoCurso->id = $historico_curso['HistoricoCurso']['id'];
        $this->HistoricoCurso->set('ano_fim', $data['HistoricoCurso']['ano_fim']);
        $this->HistoricoCurso->set('nota_final', $data['HistoricoCurso']['nota_final']);
        $this->HistoricoCurso->set('data_conclusao', $data['HistoricoCurso']['data_conclusao']);
        $this->HistoricoCurso->set('funcionario_id', $data['HistoricoCurso']['ano_fim']);
        $this->HistoricoCurso->save();

        $data_estado = array(
            'aluno_id' => $aluno['Aluno']['id'],
            'estado_anterior' => $aluno['Aluno']['estado_aluno_id'],
            'estado_actual' => 3,
            'motivo_estado_aluno_id' => 20,
            'observacao' => $data['Aluno']['observacao'],
            'data_mudanca' => $data['HistoricoCurso']['data_conclusao'],
            'anexo_url' => $data['Aluno']['anexo_url'],
            'funcionario_id' => $data['HistoricoCurso']['funcionario_id']
        );
        $this->alteraStatus($data_estado);
        return $datasource->commit();
    }

}
