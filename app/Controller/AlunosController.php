<?php

ini_set('memory_limit', "6048M");
set_time_limit(3000);
App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');

/**
 * Controller de alunos
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0
 *
 * @property Aluno $Aluno
 * @property Matricula $Matricula
 *
 */
class AlunosController extends AppController {

	public $name = 'Alunos';

	/**
	 * Cadastro do aluno
	 *
	 * Registra os dados do aluno, faz a matricula inicial
	 * @Todo Resolver o problema da foto do aluno
	 * @todo garantir que a escola numca seja null
	 * @todo testar bem a funcao que gera codigo
	 * @todo criar manual de utilizador
	 * @todo Nas listagens apenas devem aparecer codificadores e opcoes activas
	 */
	function adicionar_estudante() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Aluno']['codigo'] = $this->request->data['Aluno']['numero_estudante'];
			$this->request->data['Matricula']['user_id'] = $this->Session->read('Auth.User.id');
			$this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
			if ($this->Aluno->cadastraAluno($this->request->data)) {
				$this->Session->setFlash("Aluno Registrado com Sucesso", 'default', array('class' => 'alert success'));
				$this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->Aluno->id));
			} else {
				$this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default', array('class' => 'alert error'));
			}
		}


		$cursos = $this->Aluno->Curso->find('list');
		$unidadeOrganicas = $this->Aluno->Curso->UnidadeOrganica->find('list');
		$planoestudos = $this->Aluno->Matricula->PlanoEstudo->find('list');

		$paises = $this->Aluno->Entidade->PaisNascimento->find('list');
		$escolaNivelMedios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
		$cidadeNascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
		$provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
		$proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
		$documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
		$areatrabalhos = $this->Aluno->AreaTrabalho->find('list');
		$generos = $this->Aluno->Entidade->Genero->find('list');
		$turnos = $this->Aluno->Matricula->Turno->find('list');
		$estadoCivil = $this->Aluno->Entidade->EstadoCivil->find('list');
		$cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$grauParentescos = $this->Aluno->GrauParentesco->find('list');
		$naturalidade = '';
		$this->loadModel('SimNaoResposta');
		$simNaoRespostas = $this->SimNaoResposta->find('list');
		$this->set(compact('grauParentescos', 'simNaoRespostas', 'naturalidade', 'nacionalidades', 'cursos', 'planoestudos', 'unidadeOrganicas', 'paises', 'cidadeNascimentos', 'provincias', 'documento_identificacaos', 'areatrabalhos', 'generos', 'cidadenascimentos', 'proveniencianomes', 'provenienciacidades', 'turnos', 'escolaNivelMedios', 'estadoCivil'));
	}

	public function alterar_nome($alunoId) {
		if ($this->request->is('post')) {
			$dados = $this->request->data['Aluno'];
			if ($this->Aluno->Entidade->alteraNome($dados['entidade_id'], $dados['apelido'], $dados['nomes'])) {
				$this->Session->setFlash(__('Nome Alterado com Sucesso'), 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'perfil_estudante', $this->request->data['Aluno']['aluno_id']));
			}
		}
		$aluno = $this->Aluno->getAlunoForAction($alunoId);
		$this->set(compact('aluno'));
	}

	public function alterar_status($alunoId) {
		if ($this->request->is('post')) {

			if ($this->Aluno->alteraStatus($this->request->data['Aluno'])) {
				$this->Session->setFlash(__('Status do Aluno Alterado Com Sucesso'), 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'perfil_estudante', $this->request->data['Aluno']['aluno_id']));
			} else {
				$this->Session->setFlash(__('Problemas ao alterar Status do Estudante'), 'default', array('class' => 'alert alert-danger'));
			}
		}

		$aluno = $this->Aluno->getAlunoForAction($alunoId);
		$funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.Id'));
		$estadoAlunos = $this->Aluno->EstadoAluno->find('list');
		$motivoEstadoAlunos = $this->Aluno->AlunoEstado->MotivoEstadoAluno->find('list');
		$this->set(compact('aluno', 'cursos', 'funcionario', 'estadoAlunos', 'motivoEstadoAlunos'));
	}

	public function anular_matricula($aluno_id) {

	}

	public function atribuir_bolsa_candidato($candidato_id) {
		$this->loadModel('Candidatura');
		$candidato = $this->Candidatura->findById($candidato_id);
		if ($this->request->is('post')) {
			$this->loadModel('BolsaTemporaria');
			if ($this->request->data['BolsaTemporaria']['bolsa_tipo_bolsa_id'] != 5) {
				$this->request->data['BolsaTemporaria']['doador'] = 'OE';
			} else {
				$this->request->data['BolsaTemporaria']['doador'] = 'N';
			}
			$this->request->data['BolsaTemporaria']['apelido'] = $candidato['Candidatura']['apelido'];
			$this->request->data['BolsaTemporaria']['nomes'] = $candidato['Candidatura']['nomes'];

			$bolsa_existe = $this->BolsaTemporaria->findByCandidaturaId($this->request->data['BolsaTemporaria']['candidatura_id']);
			if (!$bolsa_existe) {
				$this->BolsaTemporaria->create();
				$this->BolsaTemporaria->save($this->request->data);
				$this->Session->setFlash('Bolsa Atribuida com Sucesso', 'default', array('class' => 'alert success'));
				$this->redirect(array('action' => 'pesquisar_candidato'));
			} else {
				$this->BolsaTemporaria->id = $bolsa_existe['BolsaTemporaria']['id'];
				$this->BolsaTemporaria->save($this->request->data);
				$this->Session->setFlash('Bolsa Actualizada com Sucesso', 'default', array('class' => 'alert success'));
				$this->redirect(array('action' => 'pesquisar_candidato'));
			}
		}



		$tipo_bolsas = $this->Candidatura->BolsaTipoBolsa->find('list');
		$this->set(compact('candidato', 'tipo_bolsas'));
	}

	/**
	 * Auto Complete Para alunos
	 */
	public function autocomplete() {
		if ($this->request->is('ajax')) {
			$this->autoRender = false;
			$this->layout = 'ajax';

			$this->Aluno->contain(array(
				'Entidade', 'Curso'
			));
			$this->Aluno->virtualFields['auto_complete'] = 'CONCAT(Aluno.codigo," - ",Entidade.name)';
			$conditions = array(
				'Aluno.codigo LIKE ' => '%' . $this->request->query['term'] . '%'
			);
			if ($this->Aluno->Entidade->User->isFromFaculdade($this->Session->read('Auth.User.id'))) {
				$conditions['Curso.unidade_organica_id'] = $this->Session->read('Auth.User.unidade_organica_id');
			}
			$results = $this->Aluno->find('all', array('fields' => array('Aluno.auto_complete'),
				'conditions' => $conditions,
				'group' => array('Aluno.codigo'), 'limit' => 20
			));
			$codigos = Set::extract('../Aluno/auto_complete', $results);

			echo json_encode($codigos);
		}
	}

	function beforeRender() {
		parent::beforeRender();
		$this->set('current_section', 'estudantes');
	}

	public function busca_candidato() {

		if ($this->request->is('post')) {
			$this->loadModel('Candidatura');
			$candidato = $this->Candidatura->findByNumeroEstudanteAndEstadoCandidaturaId($this->request->data['Candidatura']['numero_estudante'], 2);
			if (!empty($candidato)) {
				$this->redirect(array('action' => 'matricular_candidato', $candidato['Candidatura']['id']));
			} else {
				$this->Session->setFlash(__('Candidato Invalido'));
			}
		}
	}

	public function busca_candidatos_action($action_seguinte) {
		if ($this->request->is('post')) {
			$this->loadModel('Candidatura');
			$candidato = $this->Candidatura->findByNumeroEstudante($this->request->data['Candidatura']['numero_estudante']);
			if (!empty($candidato)) {
				$this->redirect(array('action' => $action_seguinte, $candidato['Candidatura']['id']));
			} else {
				$this->Session->setFlash(__('Candidato Invalido'));
			}
		}
	}

	public function capturar_foto($aluno_id) {
		$this->Aluno->id = $aluno_id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException(__('Aluno Invalido'));
		}
		$entidade = $this->Aluno->findById($aluno_id);
		$this->Session->write('SGATemp.entidade_id_4_foto', $entidade['Entidade']['id']);
		$this->redirect(array('controller' => 'users', 'action' => 'captura_foto'));
	}

	/**
	 * Inscreve aluno para a cerimonia de graduacao.
	 *
	 * @todo Passar toda a logica do Model para o Modelo :(
	 * @param type $aluno_id
	 */
	public function cerimonia_graduacao($aluno_id) {
		if ($this->request->is('post')) {
			$this->Aluno->CandidatoGraduacao->create();
			$this->request->data['CandidatoGraduacao']['estado_candidatura_id'] = 1;
			$this->request->data['CandidatoGraduacao']['estado_objecto_id'] = 1;
			$this->Aluno->CandidatoGraduacao->save($this->request->data);

			$this->Aluno->contain(array(
				'Entidade' => array(
					'Genero'
				),
				'Curso' => array(
					'UnidadeOrganica'
				)
			));
			$aluno = $this->Aluno->findById($this->request->data['CandidatoGraduacao']['aluno_id']);

			$this->Aluno->Entidade->id = $aluno['Aluno']['entidade_id'];
			$this->Aluno->Entidade->set('data_nascimento', $this->request->data['CandidatoGraduacao']['data_nascimento']);
			$this->Aluno->Entidade->set('estado_civil', $this->request->data['CandidatoGraduacao']['estado_civil_id']);
			$this->Aluno->Entidade->set('genero_id', $this->request->data['CandidatoGraduacao']['genero_id']);
			$this->Aluno->Entidade->set('pais_nascimento', $this->request->data['CandidatoGraduacao']['pais_nascimento']);
			$this->Aluno->Entidade->set('provincia_nascimento', $this->request->data['CandidatoGraduacao']['provincia_nascimento']);
			$this->Aluno->Entidade->set('cidade_nascimento', $this->request->data['CandidatoGraduacao']['distrito_nascimento']);
			if ($aluno['Entidade']['telemovel'] != $this->request->data['CandidatoGraduacao']['telemovel']) {
				$this->Aluno->Entidade->set('telemovel', $this->request->data['CandidatoGraduacao']['telemovel']);
				$novo_contacto = array('EntidadeContacto' => array(
						'entidade_id' => $aluno['Aluno']['entidade_id'],
						'tipo_contacto_id' => 2,
						'valor' => $this->request->data['CandidatoGraduacao']['telemovel']
				));

				$this->Aluno->Entidade->EntidadeContacto->create();
				$this->Aluno->Entidade->EntidadeContacto->save($novo_contacto);
			}
			if ($this->Aluno->Entidade->save()) {
				$this->Session->setFlash(__('Aluno Inscrito com Sucesso'), 'default', array('class' => 'alert success'));
				$this->redirect(array('controller' => 'cerimonia_graduacaos', 'action' => 'ver_detalhes', $this->request->data['CandidatoGraduacao']['cerimonia_graduacao_id']));
			}
		}
		$this->Aluno->contain(array(
			'Entidade' => array(
				'Genero'
			),
			'Curso' => array(
				'UnidadeOrganica'
			)
		));
		$aluno = $this->Aluno->findById($aluno_id);



		$is_regular = $this->Aluno->isRegular($aluno_id);


		if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
			if ($is_regular[0]['estado'] == 1) {
				$classe_estado = "alert note no-margin";
			} else {
				$classe_estado = "alert success";
			}
		} else {
			$classe_estado = "alert error";
		}

		$paises = $this->Aluno->Entidade->PaisNascimento->find('list');

		$cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
		$celular = $this->Aluno->Entidade->getCellNumber($aluno['Aluno']['entidade_id']);
		$funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.id'));
		$generos = $this->Aluno->Entidade->Genero->find('list');
		$estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
		$regaliaSocials = $this->Aluno->CandidatoGraduacao->RegaliaSocial->find('list');
		$regimeEstudos = $this->Aluno->CandidatoGraduacao->RegimeEstudo->find('list');
		$cerimoniaGraduacaos = $this->Aluno->CandidatoGraduacao->CerimoniaGraduacao->find('list');
		if (!$celular) {
			$this->Session->setFlash(__("Este Estudante não Possui nenhum Numero de Celular Associado"), 'default', array('class' => 'alert error'));
		}
		$this->set(compact('aluno', 'is_regular', 'classe_estado', 'celular', 'funcionario', 'paises', 'cidades', 'provincias', 'regaliaSocials', 'regimeEstudos', 'generos', 'estado_civil', 'cerimoniaGraduacaos'));
	}

	public function concluir_nivel($aluno_id) {

		if ($this->request->is('post')) {
			if ($this->Aluno->concluirNivel($this->request->data)) {
				$this->Session->setFlash(__('Conclusão Registrada com Sucesso'), 'default', array('class' => 'alert success'));
				$this->redirect(array('action' => 'perfil_estudante', $this->request->data['Aluno']['aluno_id']));
			} else {
				$this->Session->setFlash(__('Problemas ao registrar a Conclusão de Nivel'), 'default', array('class' => 'alert error'));
			}
		}

		$this->Aluno->contain(array(
			'Entidade' => array(
				'Genero'
			),
			'Curso' => array(
				'UnidadeOrganica'
			)
		));
		$aluno = $this->Aluno->findById($aluno_id);
		$funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.Id'));
		$is_regular = $this->Aluno->isRegular($aluno_id);


		if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
			if ($is_regular[0]['estado'] == 1) {
				$classe_estado = "alert note no-margin";
			} else {
				$classe_estado = "alert success";
			}
		} else {
			$classe_estado = "alert error";
		}

		$this->set(compact('aluno', 'is_regular', 'classe_estado'));
		$this->set(compact('aluno', 'is_regular', 'classe_estado', 'cursos', 'funcionario'));
	}

    public function docente_index($alunoId) {
        $userId = $this->Session->read('Auth.User.id');

        $docente = $this->Aluno->Inscricao->Turma->DocenteTurma->Docente->getByUserID($userId);
        if (empty($docente)) {
            throw new NotFoundException('Docente Invalido ou tentativa de Fraude');
        }

        $turmasDocente = $this->Aluno->Inscricao->Turma->DocenteTurma->find('all',
            array('conditions' => array('DocenteTurma.docente_id' => $docente['Docente']['id'], 'DocenteTurma.estado_docente_turma_id' => 1)));
        $turmaIds = Hash::extract($turmasDocente, '{n}.DocenteTurma.turma_id');

        $inscricaos = $this->Aluno->Inscricao->find('all',array('conditions'=>array('Inscricao.turma_id'=>$turmaIds)));
        $alunoIds = Hash::extract($inscricaos,'{n}.Inscricao.aluno_id');
        $conditions = array('Aluno.id'=>$alunoIds);
        if ($this->request->is('post')) {
            if ($this->request->data['Aluno']['codigo'] != '') {
                $conditions['Aluno.codigo'] = $this->request->data['Aluno']['codigo'];
            } else {
                $conditions['Entidade.nomes LIKE'] = '%' . $this->request->data['Aluno']['nomes'] . '%';
                $conditions['Entidade.apelido LIKE'] = '%' . $this->request->data['Aluno']['apelido'] . '%';
            }
        }
        $this->paginate = array(
            'conditions' => $conditions,
            'contain' => array('Entidade', 'Curso', 'EstadoAluno'),
        );
        $alunos = $this->paginate('Aluno');
        if (count($alunos) == 1) {
            $this->redirect(array('action' => 'perfil_estudante', $alunos[0]['Aluno']['id']));
        }

        $this->set('alunos', $alunos);
    }

    public function docente_perfil_estudante($alunoId) {
        $this->Aluno->id = $alunoId;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException('Este aluno não existe no Sistema');
        }
        $this->Aluno->contain(array(
            'Matricula' => array(
                'PlanoEstudo', 'Turno'
            ),
            'Curso', 'Entidade' => array(
                'ProvinciaNascimento', 'CidadeNascimento', 'PaisNascimento', 'Genero', 'DocumentoIdentificacao', 'User'
            ),
            'AlunoNivelMedio' => array(
                'EscolaNivelMedio' => array('Provincia', 'Distrito')
            )
        ));
        $aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $alunoId)));

        $this->Aluno->Inscricao->contain(array(
                'Turma' => array(
                    'fields' => array(
                        'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
                    'Disciplina' => array(
                        'fields' => array('id', 'name')
                    )
                ),
                'Matricula' => array(
                    'fields' => array('id', 'ano_lectivo_id'),
                    'AnoLectivo' => array(
                        'fields' => array('id', 'ano')
                    )
                )
            )
        );
        $inscricoes_activas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id'
                                                                                               => $alunoId,
                                                                                               'Inscricao.estado_inscricao_id' => 1)));

        $this->Aluno->Inscricao->contain(array(
                'Turma' => array(
                    'fields' => array(
                        'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
                    'Disciplina' => array(
                        'fields' => array('id', 'name')
                    )
                ),
                'Matricula' => array(
                    'fields' => array('id', 'ano_lectivo_id'),
                    'AnoLectivo' => array(
                        'fields' => array('id', 'ano')
                    )
                )
            )
        );
        $todas_inscricoes = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' =>
                                                                                                 $alunoId),
                                                                       'order' => array(
                                                                           'Turma.ano_curricular',
                                                                           'Turma.semestre_curricular'
                                                                       )));

        $this->Aluno->Inscricao->contain(array(
                'Turma' => array(
                    'fields' => array(
                        'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
                    'Disciplina' => array(
                        'fields' => array('id', 'name')
                    )
                ),
                'Matricula' => array(
                    'fields' => array('id', 'ano_lectivo_id'),
                    'AnoLectivo' => array(
                        'fields' => array('id', 'ano')
                    )
                )
            )
        );
        $cadeiras_aprovadas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id'
                                                                                               => $alunoId)));



        if ($this->Aluno->isMatriculado($alunoId, Configure::read('OpenSGA.ano_lectivo_id'))) {
            $this->set('is_matriculado', 1);
        } else {
            $this->set('is_matriculado', 0);
        }

        $is_bolseiro = $this->Aluno->isBolseiro($alunoId) ? 1 : 0;
        $is_regular = $this->Aluno->isRegular($alunoId);

        if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
            if ($is_regular[0]['estado'] == 1) {
                $classe_estado = "alert note";
            } else {
                $classe_estado = "alert success";
            }
        } else {
            $classe_estado = "alert error";
        }
        //Requisicoes

        $requisicoes = $this->Aluno->RequisicoesPedido->getAllRequisicoesPedidoByEstudante($alunoId);


        $this->Aluno->FinanceiroPagamento->contain(array(
            'FinanceiroTipoPagamento'
        ));
        $pagamentos = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento
        .aluno_id' => $alunoId)));
        //debug($pagamentos);
        $this->set('aluno', $aluno);
        $is_bolseiro = $this->Aluno->isBolseiro($alunoId, $this->Session->read('SGAConfig.ano_lectivo_id'));

        $this->set(compact('inscricoes_activas', 'todas_inscricoes', 'cadeiras_aprovadas', 'pagamentos', 'is_bolseiro', 'is_regular', 'classe_estado', 'requisicoes'));
    }

	/**
	 * Edita os dados de perfil do estudante
	 * @todo Funciona sim, mas falta usar transacoes :)
	 */
	function editar_estudante($id = null) {
		$this->Aluno->id = $id;

		if (!$this->Aluno->exists()) {
			$this->Session->setFlash('Este Aluno não existe', 'default', array('class' => 'alert_error'));

			$this->redirect(array('action' => 'index'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			//Grava os dados do usuario

			$this->Aluno->Entidade->id = $this->request->data['Aluno']['entidade_id'];
			$this->Aluno->Entidade->save($this->request->data);
			$this->Aluno->AlunoNivelMedio->id = $this->request->data['Aluno']['aluno_nivel_medio_id'];
			$this->Aluno->AlunoNivelMedio->save($this->request->data);

			$this->Session->setFlash(__('Dados do Aluno Actualizados com Sucesso'), 'default', array('class' => 'alert success'));
			$this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->request->data['Aluno']['aluno_id']));
		}


		$cursos = $this->Aluno->Curso->find('list');

		$planoestudos = $this->Aluno->Matricula->PlanoEstudo->find('list');
		$users = $this->Aluno->Entidade->User->find('list');

		$paises = $this->Aluno->Entidade->PaisNascimento->find('list');
		$escolaNivelMedios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
		$cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
		$provenienciacidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
		$proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
		$documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
		$areatrabalhos = $this->Aluno->AreaTrabalho->find('list');
		$generos = $this->Aluno->Entidade->Genero->find('list');
		$turnos = $this->Aluno->Matricula->Turno->find('list');
		$estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
		$cidadenascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$this->Aluno->contain(array('Entidade', 'AlunoNivelMedio' => array('EscolaNivelMedio'), 'Curso' => array('UnidadeOrganica')));
		$aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $id)));
		$this->request->data = $aluno;

		$this->set(compact('aluno', 'nacionalidades', 'cursos', 'planoestudos', 'users', 'paises', 'cidades', 'provincias', 'documento_identificacaos', 'areatrabalhos', 'generos', 'cidadenascimentos', 'proveniencianomes', 'provenienciacidades', 'turnos', 'escolaNivelMedios', 'estado_civil'));

		$this->layout = 'default';
	}

	public function enviar_sms($aluno_id) {
		$this->Aluno->contain(array(
			'Entidade' => array(
				'Genero'
			),
			'Curso' => array(
				'UnidadeOrganica'
			)
		));
		$aluno = $this->Aluno->findById($aluno_id);
		if ($this->request->is('post')) {
			$this->loadModel('SmsEnviada');
			$celular = $this->Aluno->Entidade->getCellNumber($aluno['Aluno']['entidade_id']);
			$sms_enviada = $this->SmsEnviada->sendSMS($celular, $this->request->data['Aluno']['mensagem'], $aluno['Aluno']['entidade_id'], 1, $this->Session->read('Auth.User.id'));
			if ($sms_enviada == 1) {
				$this->Session->setFlash(__('SMS Enviada com Sucesso'), 'default', array('class' => 'alert success'));
				$this->redirect(array('action' => 'perfil_estudante', $this->request->data['Aluno']['aluno_id']));
			} else {
				$this->Session->setFlash(__('Problemas no envio da SMS'), 'default', array('class' => 'alert error'));
			}
		}
		$is_regular = $this->Aluno->isRegular($aluno_id);


		if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
			if ($is_regular[0]['estado'] == 1) {
				$classe_estado = "alert note no-margin";
			} else {
				$classe_estado = "alert success";
			}
		} else {
			$classe_estado = "alert error";
		}

		$celular = $this->Aluno->Entidade->getCellNumber($aluno['Aluno']['entidade_id']);
		$funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.id'));
		if (!$celular) {
			$this->Session->setFlash(__("Este Estudante não Possui nenhum Numero de Celular Associado"), 'default', array('class' => 'alert error'));
		}
		$this->set(compact('aluno', 'is_regular', 'classe_estado', 'celular', 'funcionario'));
	}


    public function exportar_alunos_autenticidades($anoIngresso=null){
        $alunos = $this->Aluno->getAllAlunosForAutenticidades($anoIngresso);

        $this->set(compact('alunos'));
    }
    /**
     * Função para docentes enviarem SMS para estudantes.
     *
     * @fixme Colocar validação docente-Estudante(Um docente so pode enviar sms para seus proprios estudantes)
     * @param $alunoId
     */
    public function docente_enviar_sms($alunoId) {
        $this->Aluno->contain(array(
            'Entidade' => array(
                'Genero'
            ),
            'Curso' => array(
                'UnidadeOrganica'
            )
        ));
        $aluno = $this->Aluno->findById($alunoId);
        if ($this->request->is('post')) {
            $this->loadModel('SmsEnviada');
            $celular = $this->Aluno->Entidade->getCellNumber($aluno['Aluno']['entidade_id']);
            $sms_enviada = $this->SmsEnviada->sendSMS($celular, $this->request->data['Aluno']['mensagem'], $aluno['Aluno']['entidade_id'], 1, $this->Session->read('Auth.User.id'));
            if ($sms_enviada == 1) {
                $this->Session->setFlash(__('SMS Enviada com Sucesso'), 'default', array('class' => 'alert success'));
                $this->redirect(array('action' => 'perfil_estudante', $this->request->data['Aluno']['aluno_id']));
            } else {
                $this->Session->setFlash(__('Problemas no envio da SMS'), 'default', array('class' => 'alert error'));
            }
        }
        $is_regular = $this->Aluno->isRegular($alunoId);


        if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
            if ($is_regular[0]['estado'] == 1) {
                $classe_estado = "alert note no-margin";
            } else {
                $classe_estado = "alert success";
            }
        } else {
            $classe_estado = "alert error";
        }

        $celular = $this->Aluno->Entidade->getCellNumber($aluno['Aluno']['entidade_id']);
        $funcionario = $this->Aluno->User->getFuncionarioActivoId($this->Session->read('Auth.User.id'));
        if (!$celular) {
            $this->Session->setFlash(__("Este Estudante não Possui nenhum Numero de Celular Associado"), 'default', array('class' => 'alert error'));
        }
        $this->set(compact('aluno', 'is_regular', 'classe_estado', 'celular', 'funcionario'));
    }

    public function estudante_editar_perfil() {
		$userId = $this->Session->read('Auth.User.id');
		$this->Aluno->contain(array(
			'Entidade' => array(
				'EntidadeContacto', 'Bairro', 'Rua'
			)
		));
		$aluno = $this->Aluno->find('first', array('conditions' => array('Entidade.user_id' => $userId)));
		if (empty($aluno)) {
			throw new NotFoundException('Este aluno não existe no Sistema');
		}

		if ($this->request->is('post')) {
			if ($this->Aluno->actualizaContactos($this->request->data)) {
				$this->Session->setFlash(__('Seus dados de contacto foram actualizados com sucesso'), 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('action' => 'perfil', 'estudante' => true));
			} else {
				$this->Session->setFlash(__('Seus dados de contacto foram actualizados com sucesso'), 'default', array('class' => 'alert alert-success'));
			}
		}
		$morada = $this->Aluno->Entidade->getMorada($aluno['Entidade']['id']);
		$paises = $this->Aluno->Entidade->PaisNascimento->find('list');
		$cidades = $this->Aluno->Entidade->CidadeNascimento->find('list');
		$provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
		$grauParentescos = $this->Aluno->GrauParentesco->find('list');
		$this->set(compact('aluno', 'morada', 'paises', 'provincias', 'cidades', 'grauParentescos'));
	}

	public function estudante_perfil() {
		$userId = $this->Session->read('Auth.User.id');
		$this->Aluno->contain(array(
			'Entidade'
		));
		$aluno = $this->Aluno->find('first', array('conditions' => array('Entidade.user_id' => $userId)));
		if (empty($aluno)) {
			throw new NotFoundException('Este aluno não existe no Sistema');
		}
		$aluno = $this->Aluno->getAlunoForPerfil($aluno['Aluno']['id']);
		$matriculas = $this->Aluno->Matricula->getAllMatriculasByAluno($aluno['Aluno']['id']);

		$inscricoesActivas = $this->Aluno->Inscricao->getAllInscricoesByAlunoAndEstado($aluno['Aluno']['id'], 1);
		$cadeirasAprovadas = $this->Aluno->Inscricao->getAllInscricoesByAlunoAndEstado($aluno['Aluno']['id']);
		$todasInscricoes = $this->Aluno->Inscricao->getAllInscricoesByAlunoAndEstado($aluno['Aluno']['id']);

		if ($this->Aluno->isMatriculado($aluno['Aluno']['id'], Configure::read('OpenSGA.ano_lectivo_id'))) {
			$this->set('is_matriculado', 1);
		} else {
			$this->set('is_matriculado', 0);
		}
		$is_bolseiro = $this->Aluno->isBolseiro($aluno['Aluno']['id']) ? 1 : 0;
		$is_regular = $this->Aluno->isRegular($aluno['Aluno']['id']);

		if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
			if ($is_regular[0]['estado'] == 1) {
				$classe_estado = "alert alert-info";
			} else {
				$classe_estado = "alert alert-success";
			}
		} else {
			$classe_estado = "alert alert-danger";
		}
		//Requisicoes

		$requisicoes = $this->Aluno->RequisicoesPedido->getAllRequisicoesPedidoByEstudante($aluno['Aluno']['id']);

		$this->Aluno->FinanceiroPagamento->contain(array(
			'FinanceiroTipoPagamento'
		));
		$pagamentos = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento.aluno_id' => $aluno['Aluno']['id'])));
		//debug($pagamentos);
		$is_bolseiro = $this->Aluno->isBolseiro($aluno['Aluno']['id'], $this->Session->read('SGAConfig.ano_lectivo_id'));

		$this->set(compact('aluno', 'inscricoes_activas', 'todas_inscricoes', 'cadeiras_aprovadas', 'pagamentos', 'is_bolseiro', 'is_regular', 'classe_estado', 'requisicoes', 'matriculas'));
	}

	public function exportar_alunos() {
		set_time_limit(1800);
		if ($this->request->is('post')) {
			$conditions = array();
			if ($this->request->data['Aluno']['ano_ingresso'] != '') {
				$conditions['Aluno.ano_ingresso'] = $this->request->data['Aluno']['ano_ingresso'];
			}
			if ($this->request->data['Aluno']['curso_id'] != '') {
				$conditions['Aluno.curso_id'] = $this->request->data['Aluno']['curso_id'];
			}
			if ($this->request->data['Aluno']['estado_aluno_id'] != '') {
				$conditions['Aluno.estado_aluno_id'] = $this->request->data['Aluno']['estado_aluno_id'];
			}
			if ($this->request->data['Curso']['unidade_organica_id'] != '') {
				$conditions['Aluno.unidade_organica_id'] = $this->request->data['Aluno']['unidade_organica_id'];
			}

			$this->Aluno->contain(array(
				'Curso' => array(
					'UnidadeOrganica'
				), 'EstadoAluno', 'Entidade' => array(
					'Genero'
				),
			));
			$alunos = $this->Aluno->find('all', array('conditions' => $conditions));

			$this->set(compact('alunos'));
			$this->render('exportar_alunos_excel');
		}
		$anolectivos = $this->Aluno->Matricula->AnoLectivo->find('list', array('order' => 'ano DESC', 'fields' => 'ano'));
		$cursos = $this->Aluno->Curso->find('list', array('order' => 'name'));
		$unidadeOrganicas = $this->Aluno->Curso->UnidadeOrganica->find('list', array('order' => 'name', 'fields' => 'nome_codigo'));
		$estadoAlunos = $this->Aluno->EstadoAluno->find('list');
		$this->set(compact('anolectivos', 'cursos', 'unidadeOrganicas', 'estadoAlunos'));
	}

	public function exportar_alunos_excel() {

	}

	function faculdade_index() {

		$conditions = array();
		if ($this->request->is('post')) {
			if ($this->request->data['Aluno']['codigo'] != '') {
				$conditions['Aluno.codigo'] = $this->request->data['Aluno']['codigo'];
			} else {
				$conditions['Entidade.nomes LIKE'] = '%' . $this->request->data['Aluno']['nomes'] . '%';
				$conditions['Entidade.apelido LIKE'] = '%' . $this->request->data['Aluno']['apelido'] . '%';
			}
		}
		$unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
		$unidadeOrganicas = $this->Aluno->Curso->UnidadeOrganica->find('all', array('conditions' => array('parent_id' => $unidade_organica_id)));

		if ($unidadeOrganicas) {
			$unidades_organicas = Hash::extract($unidadeOrganicas, '{n}.UnidadeOrganica.id');

			$unidades_organicas[] = $unidade_organica_id;

			$conditions['Curso.unidade_organica_id'] = $unidades_organicas;
		} else {
			$conditions['Curso.unidade_organica_id'] = $unidade_organica_id;
		}


		$this->paginate = array(
			'conditions' => $conditions,
			'contain' => array('Entidade', 'Curso', 'EstadoAluno'),
		);

		$alunos = $this->paginate('Aluno');

		if (count($alunos) == 1) {
			$this->redirect(array('action' => 'perfil_estudante', $alunos[0]['Aluno']['id']));
		}

		$this->set('alunos', $alunos);
	}

	public function faculdade_matricula_novo_ingresso_sucesso($aluno_id) {

		$this->Aluno->contain(array('Entidade' => array('User'), 'Curso'));
		$this->Aluno->id = $aluno_id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException('Aluno nao Encontrado');
		}
		$aluno = $this->Aluno->read();
		$this->set(compact('aluno'));

		//$this->layout = 'clipone_default';
	}

	public function faculdade_matricular_candidato($candidatoId) {
		$this->Aluno->Candidatura->id = $candidatoId;
		if (!$this->Aluno->Candidatura->exists()) {
			throw new NotFoundException('Candidato Nao encontrado');
		}
		$candidato = $this->Aluno->Candidatura->findByIdAndEstadoCandidaturaId($candidatoId, 2);
		if (!$candidato) {
			$this->Session->setFlash(__('Este candidato nao tem permissao para matricular ou ja esta matriculado'));
			$this->redirect(array('action' => 'index'));
		}
		$alunoExiste = $this->Aluno->findByCodigo($candidato['Candidatura']['numero_estudante']);
		if (!empty($alunoExiste)) {
			$this->Session->setFlash(__('Este candidato já está matriculado'));
			$this->redirect(array('action' => 'perfil_estudante', $alunoExiste['Aluno']['id']));
		}

		if ($this->request->is('post')) {
			$this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
			$this->request->data['Dados']['user_id'] = $this->Session->read('Auth.User.id');
			$this->request->data['Dados']['numero_candidato'] = $candidatoId;
			$this->request->data['Aluno']['estado_aluno_id'] = 14;
			if ($this->Aluno->matriculaNovoIngresso($this->request->data)) {
				$this->Session->setFlash("Aluno Registrado com Sucesso. Os dados foram submetidos ao Registo Academico Central para Validacao", 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->Aluno->id));
			} else {
				$this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$cursos = $this->Aluno->Curso->find('list');
		$paises = $this->Aluno->Entidade->PaisNascimento->find('list');
		$escolaNivelMedios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
		$provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
		$cidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
		$proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
		$documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
		$areatrabalhos = $this->Aluno->AreaTrabalho->find('list');
		$generos = $this->Aluno->Entidade->Genero->find('list');
		$turnos = $this->Aluno->Matricula->Turno->find('list');
		$estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
		$cidadeNascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list', array(
			'conditions' => array(
				'provincia_id' => $candidato['Candidatura']['provincia_nascimento']
			)
				)
		);
		$grauParentescos = $this->Aluno->GrauParentesco->find('list');
		$this->loadModel('SimNaoResposta');
		$simNaoRespostas = $this->SimNaoResposta->find('list');

		$naturalidade = '';
		$this->set(compact('candidato', 'cursos', 'paises', 'provincias', 'documento_identificacaos', 'areatrabalhos', 'generos', 'cidadeNascimentos', 'proveniencianomes', 'cidades', 'turnos', 'escolaNivelMedios', 'estado_civil', 'naturalidade', 'grauParentescos', 'simNaoRespostas'));

		$this->set('siga_page_title', 'Matriculas');
		$this->set('siga_page_overview', 'Formulario de Matricula de Novos Ingressos');
		//$this->layout = 'clipone_default';
	}

	public function faculdade_mostrar_foto($codigo) {
		$this->viewClass = 'Media';
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$this->Aluno->contain();
		$aluno = $this->Aluno->findByCodigo($codigo);
		if (!empty($aluno)) {
			App::uses('File', 'Utility');
			$path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;

			$file_path = $path . $codigo . '.jpg';
			$folder_novo = new Folder($path);

			$file = new File($file_path);

			if (!$file->exists()) {
				$codigo = 'default_profile_picture';
				$path = WWW_ROOT . DS . 'img' . DS;
			}


			$params = array(
				'id' => $codigo . '.jpg',
				'name' => 'fotografia',
				'extension' => 'jpg',
				'mimeType' => array(
					'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
				),
				'path' => $path
			);
			$this->set($params);
		} else {
			throw new NotFoundException('Estudante não encontrado. Mostrar foto');
		}
	}

	/**
	 * @Todo Optimizar esta pagina
	 * @Todo Colocar os links para as opcoes do estudante
     * @fixme Dolocar restrições de acesso por faculdade
	 * @param type $id
	 */
	public function faculdade_perfil_estudante($id = null) {
		$this->Aluno->id = $id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException('Este aluno não existe no Sistema');
		}
		$this->Aluno->contain(array(
			'Matricula' => array(
				'PlanoEstudo', 'Turno'
			),
			'Curso', 'Entidade' => array(
				'ProvinciaNascimento', 'CidadeNascimento', 'PaisNascimento', 'Genero', 'DocumentoIdentificacao', 'User'
			),
			'AlunoNivelMedio' => array(
				'EscolaNivelMedio' => array('Provincia', 'Distrito')
			)
		));
		$aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $id)));

		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				)
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			)
				)
		);
		$inscricoes_activas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id, 'Inscricao.estado_inscricao_id' => 1)));

		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				)
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			)
				)
		);
		$todas_inscricoes = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id),
			'order' => array(
				'Turma.ano_curricular',
				'Turma.semestre_curricular'
		)));

		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				)
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			)
				)
		);
		$cadeiras_aprovadas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $id)));



		if ($this->Aluno->isMatriculado($id, Configure::read('OpenSGA.ano_lectivo_id'))) {
			$this->set('is_matriculado', 1);
		} else {
			$this->set('is_matriculado', 0);
		}

		$is_bolseiro = $this->Aluno->isBolseiro($id) ? 1 : 0;
		$is_regular = $this->Aluno->isRegular($id);

		if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
			if ($is_regular[0]['estado'] == 1) {
				$classe_estado = "alert note";
			} else {
				$classe_estado = "alert success";
			}
		} else {
			$classe_estado = "alert error";
		}
		//Requisicoes

		$requisicoes = $this->Aluno->RequisicoesPedido->getAllRequisicoesPedidoByEstudante($id);


		$this->Aluno->FinanceiroPagamento->contain(array(
			'FinanceiroTipoPagamento'
		));
		$pagamentos = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento.aluno_id' => $id)));
		//debug($pagamentos);
		$this->set('aluno', $aluno);
		$is_bolseiro = $this->Aluno->isBolseiro($id, $this->Session->read('SGAConfig.ano_lectivo_id'));

		$this->set(compact('inscricoes_activas', 'todas_inscricoes', 'cadeiras_aprovadas', 'pagamentos', 'is_bolseiro', 'is_regular', 'classe_estado', 'requisicoes'));
	}

	/**
	 * Pesquisa um aluno e Redirecciona para uma accao especifica.
	 *
	 * Tambem verifica se o aluno encontrado pertence a unidadde Organica do Usuario actualmente no sistema.
	 *
	 * @param type $action_seguinte
	 * @param type $controller
	 * @param type $plugin
	 */
	public function faculdade_pesquisa_aluno_action($actionSeguinte, $controller = null, $plugin = null) {
		$unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');
		if ($this->request->is('post')) {
			$this->Aluno->contain('Curso');
			$aluno = $this->Aluno->findByCodigo($this->request->data['Aluno']['codigo']);
			if (!empty($aluno)) {
				if ($aluno['Curso']['unidade_organica_id'] != $unidade_organica_id) {
					$this->Session->setFlash(__('Este Aluno Nao pertence a Sua Unidade Organica'), 'default', array('class' => 'alert error'));

					$this->redirect(array('controller' => 'pages', 'action' => 'home', 'faculdade' => true));
				}
				if ($plugin != null) {
					$this->redirect(array('plugin' => $plugin, 'controller' => $controller, 'action' => $actionSeguinte, $aluno['Aluno']['id']));
				} elseif ($controller != NULL) {
					$this->redirect(array('controller' => $controller, 'action' => $actionSeguinte, $aluno['Aluno']['id']));
				} else {
					$this->redirect(array('action' => $actionSeguinte, $aluno['Aluno']['id']));
				}
			} else {
				$this->Session->setFlash(__('Estudante não encontrado'), 'default', array('class' => 'alert error'));
			}
		}
		$codigos = '';
		$this->set(compact('actionSeguinte', 'codigos'));
	}

	public function faculdade_pesquisa_candidatos_action($actionSeguinte) {
		if ($this->request->is('post')) {
			$this->loadModel('Candidatura');
			$candidato = $this->Candidatura->findByNumeroEstudante($this->request->data['Candidatura']['numero_estudante']);
			if (!empty($candidato)) {
				$cursoId = $candidato['Candidatura']['curso_id'];
				$curso = $this->Candidatura->Curso->findById($cursoId);
				$unidadeOrganicaUser = $this->Session->read('Auth.User.unidade_organica_id');
				$unidadeOrganicas = $this->Candidatura->Curso->UnidadeOrganica->getWithChilds($unidadeOrganicaUser);

				if (!in_array($curso['Curso']['unidade_organica_id'], $unidadeOrganicas)) {
					$this->Session->setFlash('Este Candidato nao Pertence a nenhum curso da sua faculdade');
				} else {
					$this->redirect(array('action' => $actionSeguinte, $candidato['Candidatura']['id']));
				}
			} else {
				$this->Session->setFlash(__('Candidato Invalido'));
			}
		}
	}

	public function ficha_cadastro($aluno_id) {
		$this->pdfConfig['orientation'] = 'landscape';

		$this->Aluno->id = $aluno_id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException('Esta aluno não existe no Sistema');
		}

		$this->Aluno->contain(array(
			'Matricula' => array(
				'PlanoEstudo', 'Turno'
			),
			'Curso',
			'Entidade' => array(
				'ProvinciaNascimento', 'CidadeNascimento', 'PaisNascimento', 'Genero', 'DocumentoIdentificacao', 'EstadoCivil'
			),
			'AlunoNivelMedio' => array(
				'EscolaNivelMedio'
			)
		));
		$aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $aluno_id)));

		if ($aluno['Entidade']['apelido'] == null) {
			$aluno['Entidade']['apelido'] = $this->Aluno->Entidade->getApelidoFromName($aluno['Entidade']['name']);
		}
		if ($aluno['Entidade']['nomes'] == null) {
			$aluno['Entidade']['nomes'] = $this->Aluno->Entidade->getNomesFromName($aluno['Entidade']['name']);
		}
		if ($aluno['Aluno']['ano_ingresso'] == null) {
			$aluno['Aluno']['ano_ingresso'] = date('Y', strtotime($aluno['Aluno']['dataingresso']));
		}

		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular', 'ano_lectivo_id'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				),
				'AnoLectivo'
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			),
			'Avaliacao' => array()
				)
		);
		$inscricaos = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $aluno_id), 'order' => array('Turma.ano_curricular,Turma.semestre_curricular')));

		$this->set('has_foto_entidade', $this->Aluno->hasFoto($aluno['Aluno']['codigo']));
		Configure::write('debug', 0);

		$this->set(compact('aluno', 'inscricaos'));
	}

	public function index() {
		$conditions = array();
		if ($this->request->is('post')) {
			if ($this->request->data['Aluno']['codigo'] != '') {
				$conditions['Aluno.codigo'] = $this->request->data['Aluno']['codigo'];
			} else {
				$conditions['Entidade.nomes LIKE'] = '%' . $this->request->data['Aluno']['nomes'] . '%';
				$conditions['Entidade.apelido LIKE'] = '%' . $this->request->data['Aluno']['apelido'] . '%';
			}
		}
		$this->paginate = array(
			'conditions' => $conditions,
			'contain' => array('Entidade', 'Curso', 'EstadoAluno'),
		);
		$alunos = $this->paginate('Aluno');

		if (count($alunos) == 1) {
			$this->redirect(array('action' => 'perfil_estudante', $alunos[0]['Aluno']['id']));
		}

		$this->set('alunos', $alunos);
	}

    public function manutencao(){

    }

	public function matricula_novo_ingresso_sucesso($aluno_id) {

		$this->Aluno->contain(array('Entidade' => array('User'), 'Curso'));
		$this->Aluno->id = $aluno_id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException('Aluno nao Encontrado');
		}
		$aluno = $this->Aluno->read();
		$this->set(compact('aluno'));

		//$this->layout = 'clipone_default';
	}

	public function matricula_simples($aluno_id) {
		$this->Aluno->Id = $aluno_id;
		if (!$this->Aluno->exists()) {

		}
		$aluno = $this->Aluno->find('first', array('conditions' => array('Aluno.id' => $aluno_id)));
		if ($this->request->is('post') || $this->request->is('put')) {

			//Grava os dados da Entidade
			$this->Aluno->Entidade->id = $aluno['Entidade']['id'];
			$this->Aluno->Entidade->save($this->request->data);

			//Grava os dados dos Alunos
			$this->Aluno->id = $aluno['Aluno']['id'];
			$this->Aluno->save($this->request->data);
		}


		$cursos = $this->Aluno->Curso->find('list');

		$turnos = $this->Aluno->Matricula->Turno->find('list');

		$documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');

		$generos = $this->Aluno->Entidade->Genero->find('list');

		$this->set(compact('aluno', 'cursos', 'turnos', 'documento_identificacaos', 'generos'));
	}

	public function matricular($aluno_id) {
		$this->Aluno->id = $aluno_id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException(__('Aluno Invalido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Sessao']['ano_lectivo_id'] = $this->Session->read('SGAConfig.ano_lectivo_id');
			$this->request->data['Sessao']['user_id'] = $this->Session->read('Auth.User.id');
			if ($this->Aluno->setNovaMatricula($this->request->data)) {
				$this->Session->setFlash('Aluno Matriculado com sucesso', 'default', array('alert success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Problemas ao matricular aluno. Verifique se o aluno ainda nao esta matriculado', 'default', array('alert_error'));
				$this->redirect(array('action' => 'index'));
			}
		}


		$cursos = $this->Aluno->Matricula->Curso->find('list');
		$planoestudos = $this->Aluno->Matricula->PlanoEstudo->find('list');
		$anolectivos = $this->Aluno->Matricula->AnoLectivo->find('list');
		$turnos = $this->Aluno->Matricula->Turno->find('list');

		$this->set(compact('cursos', 'planoestudos', 'anolectivos', 'turnos'));
	}

	public function matricular_candidato($candidato_id) {

		$this->Aluno->Candidatura->id = $candidato_id;
		if (!$this->Aluno->Candidatura->exists()) {
			throw new NotFoundException('Candidato Nao encontrado');
		}

		$candidato = $this->Aluno->Candidatura->findByIdAndEstadoCandidaturaId($candidato_id, 2);

		if (!$candidato) {
			$this->Session->setFlash(__('Este candidato nao tem permissao para matricular'));
			$this->redirect('/');
		}

		$aluno_existe = $this->Aluno->findByCodigo($candidato['Candidatura']['numero_estudante']);
		if (!empty($aluno_existe)) {
			$this->Session->setFlash(__('Este candidato já está matriculado'));
			$this->redirect(array('action' => 'perfil_estudante', $aluno_existe['Aluno']['id']));
		}

		if ($this->request->is('post')) {

			$this->request->data['Entidade']['name'] = $this->request->data['Entidade']['nomes'] . ' ' . $this->request->data['Entidade']['apelido'];
			$this->request->data['Dados']['user_id'] = $this->Session->read('Auth.User.id');
			$this->request->data['Dados']['numero_candidato'] = $candidato_id;
			if ($this->Aluno->matriculaNovoIngresso($this->request->data)) {
				$this->Session->setFlash("Aluno Registrado com Sucesso", 'default', array('class' => 'alert alert-success'));
				$this->redirect(array('controller' => 'alunos', 'action' => 'perfil_estudante', $this->Aluno->id));
			} else {
				$this->Session->setFlash('Problemas ao registrar os dados do Aluno', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$cursos = $this->Aluno->Curso->find('list');
		$paises = $this->Aluno->Entidade->PaisNascimento->find('list');
		$escolaNivelMedios = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->find('list');
		$provincias = $this->Aluno->Entidade->ProvinciaNascimento->find('list');
		$cidades = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Distrito->find('list');
		$proveniencianomes = $this->Aluno->AlunoNivelMedio->EscolaNivelMedio->Provincia->find('list');
		$documento_identificacaos = $this->Aluno->Entidade->DocumentoIdentificacao->find('list');
		$areatrabalhos = $this->Aluno->AreaTrabalho->find('list');
		$generos = $this->Aluno->Entidade->Genero->find('list');
		$turnos = $this->Aluno->Matricula->Turno->find('list');
		$estado_civil = $this->Aluno->Entidade->EstadoCivil->find('list');
		$cidadeNascimentos = $this->Aluno->Entidade->CidadeNascimento->find('list', array(
			'conditions' => array(
				'provincia_id' => $candidato['Candidatura']['provincia_nascimento']
			)
				)
		);
		$grauParentescos = $this->Aluno->GrauParentesco->find('list');
		$this->loadModel('SimNaoResposta');
		$simNaoRespostas = $this->SimNaoResposta->find('list');

		$naturalidade = '';
		$this->set(compact('candidato', 'cursos', 'paises', 'provincias', 'documento_identificacaos', 'areatrabalhos', 'generos', 'cidadeNascimentos', 'proveniencianomes', 'cidades', 'turnos', 'escolaNivelMedios', 'estado_civil', 'naturalidade', 'grauParentescos', 'simNaoRespostas'));

		$this->set('siga_page_title', 'Matriculas');
		$this->set('siga_page_overview', 'Formulario de Matricula de Novos Ingressos');
		//$this->layout = 'clipone_default';
	}

	public function mostrar_foto($codigo) {
		$this->viewClass = 'Media';
		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$this->Aluno->contain();
		$aluno = $this->Aluno->findByCodigo($codigo);
		if (!empty($aluno)) {
			App::uses('File', 'Utility');
			$path = APP . 'Assets' . DS . 'Fotos' . DS . 'Estudantes' . DS . $aluno['Aluno']['ano_ingresso'] . DS;

			$file_path = $path . $codigo . '.jpg';
			$folder_novo = new Folder($path);

			$file = new File($file_path);

			if (!$file->exists()) {
				$codigo = 'default_profile_picture';
				$path = WWW_ROOT . DS . 'img' . DS;
			}


			$params = array(
				'id' => $codigo . '.jpg',
				'name' => 'fotografia',
				'extension' => 'jpg',
				'mimeType' => array(
					'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
				),
				'path' => $path
			);
			$this->set($params);
		} else {
			throw new NotFoundException('Estudante não encontrado. Mostrar foto');
		}
	}

	public function mudanca_curso($alunoId) {
		$this->Aluno->id = $alunoId;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException('Este aluno não existe no Sistema');
		}

		if ($this->request->is('post')) {
			if ($this->Aluno->mudaCurso($this->request->data)) {
				$this->Session->setFlash(__('Mudança de Curso efectuada com sucesso'), 'default', array('class' => 'alert alert-success'));
				$this->set('mudancaSucesso', 1);
				$this->set('mudancaCursoId', $this->Aluno->MudancaCurso->id);
			}
		} else {
			$this->set('mudancaSucesso', 0);
		}

		$aluno = $this->Aluno->getAlunoForAction($alunoId);
		$cursos = $this->Aluno->Curso->find('list');
		//$isRegular = $this->Aluno->isRegular($alunoId);

		$this->set(compact('aluno', 'is_regular', 'classe_estado', 'cursos', 'funcionario'));
	}

	public function pagar_factura($aluno_id, $pagamento_id) {
		$this->Aluno->id = $aluno_id;
		$this->Aluno->Pagamento->id = $pagamento_id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException('Este Aluno não existe');
		}
		if (!$this->Aluno->exists()) {
			throw new NotFoundException('Este pagamento não existe');
		}
		App::uses('CakeTime', 'Utility');
		$CakeTime = new CakeTime();
		$this->set('aluno', $this->Aluno->read(null, $aluno_id));
		$this->Aluno->Pagamento->contain(array('Aluno' => array('Entidade'), 'Tipopagamento', 'AnoLectivo'));
		$pagamento = $this->Aluno->Pagamento->read(null, $pagamento_id);
		$data_limite = $CakeTime->toUnix($pagamento['Pagamento']['data_limite']);
		$data_hoje = $CakeTime->toUnix(date('Y-m-d'));
		$dias_atraso = $data_hoje - $data_limite;

		$dias_atraso_k = $dias_atraso / 60 / 60 / 24 / 7;

		$multa = $pagamento['Pagamento']['valor'] + ($pagamento['Pagamento']['valor'] * 0.1 * $dias_atraso_k);
		$multa_2 = $pagamento['Pagamento']['valor'] * 0.1 * $dias_atraso_k;

		$this->set(compact('dias_atraso_k', 'multa', 'multa_2'));
		$this->set('pagamento', $pagamento);
	}

	/**
	 * @Todo Optimizar esta pagina
	 * @Todo Colocar os links para as opcoes do estudante
	 * @param type $id
	 */
	function perfil_estudante($alunoId = null) {
		$aluno = $this->Aluno->getAlunoForPerfil($alunoId);
		if (!$aluno) {
			throw new NotFoundException('Este aluno não existe no Sistema');
		}
		$matriculas = $this->Aluno->Matricula->getAllMatriculasByAluno($alunoId);

		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				)
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			)
				)
		);
		$inscricoes_activas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $alunoId, 'Inscricao.estado_inscricao_id' => 1)));

		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				)
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			)
				)
		);
		$todas_inscricoes = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $alunoId),
			'order' => array(
				'Turma.ano_curricular',
				'Turma.semestre_curricular'
		)));

		$this->Aluno->Inscricao->contain(array(
			'Turma' => array(
				'fields' => array(
					'id', 'disciplina_id', 'ano_curricular', 'semestre_curricular'),
				'Disciplina' => array(
					'fields' => array('id', 'name')
				)
			),
			'Matricula' => array(
				'fields' => array('id', 'ano_lectivo_id'),
				'AnoLectivo' => array(
					'fields' => array('id', 'ano')
				)
			)
				)
		);
		$cadeiras_aprovadas = $this->Aluno->Inscricao->find('all', array('conditions' => array('Inscricao.aluno_id' => $alunoId)));

		if ($this->Aluno->isMatriculado($alunoId, Configure::read('OpenSGA.ano_lectivo_id'))) {
			$this->set('is_matriculado', 1);
		} else {
			$this->set('is_matriculado', 0);
		}

		$is_bolseiro = $this->Aluno->isBolseiro($alunoId) ? 1 : 0;
		$is_regular = $this->Aluno->isRegular($alunoId);

		if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
			if ($is_regular[0]['estado'] == 1) {
				$classe_estado = "alert alert-info";
			} else {
				$classe_estado = "alert alert-success";
			}
		} else {
			$classe_estado = "alert alert-danger";
		}
		//Requisicoes

		$requisicoes = $this->Aluno->RequisicoesPedido->getAllRequisicoesPedidoByEstudante($alunoId);


		$this->Aluno->FinanceiroPagamento->contain(array(
			'FinanceiroTipoPagamento'
		));
		$pagamentos = $this->Aluno->FinanceiroPagamento->find('all', array('conditions' => array('FinanceiroPagamento.aluno_id' => $alunoId)));
		$is_bolseiro = $this->Aluno->isBolseiro($alunoId, $this->Session->read('SGAConfig.ano_lectivo_id'));

		$this->set(compact('aluno', 'inscricoes_activas', 'todas_inscricoes', 'cadeiras_aprovadas', 'pagamentos', 'is_bolseiro', 'is_regular', 'classe_estado', 'requisicoes', 'matriculas'));
	}

	public function pesquisa_aluno_action($actionSeguinte, $controller = null, $plugin = null) {
		if ($this->request->is('post')) {
			$aluno = $this->Aluno->findByCodigo($this->request->data['Aluno']['codigo']);
			if (!empty($aluno)) {
				if ($plugin != null) {
					$this->redirect(array('plugin' => $plugin, 'controller' => $controller, 'action' => $actionSeguinte, $aluno['Aluno']['id']));
				} elseif ($controller != null) {
					$this->redirect(array('controller' => $controller, 'action' => $actionSeguinte, $aluno['Aluno']['id']));
				} else {
					$this->redirect(array('action' => $actionSeguinte, $aluno['Aluno']['id']));
				}
			} else {
				$this->Session->setFlash(__('Estudante não encontrado'), 'default', array('class' => 'alert error'));
			}
		}
		$codigos = '';
		$this->set(compact('actionSeguinte', 'codigos'));
	}

	public function pesquisar_candidato() {
		$conditions = array();
		if ($this->request->is('post')) {
			if ($this->request->data['Candidatura']['numero_candidato'] != '') {
				$conditions['Candidatura.numero_estudante'] = $this->request->data['Candidatura']['numero_candidato'];
			} else {
				$conditions['Candidatura.nomes LIKE'] = '%' . $this->request->data['Candidatura']['nomes'] . '%';
				$conditions['Candidatura.apelido LIKE'] = '%' . $this->request->data['Candidatura']['apelido'] . '%';
			}
		}

		$conditions['Candidatura.estado_candidatura_id'] = array(2, 3);
		$this->paginate = array(
			'conditions' => $conditions,
			'limit' => 50,
			'contain' => array('Curso', 'BolsaTemporaria' => array(
					'BolsaTipoBolsa'
				))
		);
		$candidatos = $this->paginate('Candidatura');


		$this->set('candidatos', $candidatos);
	}

	public function print_alunos_sem_certificado() {

	}

	public function print_alunos_sem_smo() {

	}

	public function print_bolsas_novo_ingresso() {
		$this->loadModel('BolsaTemporaria');
		//primeiro_pegamos todos cursos, para paginacao
		$this->BolsaTemporaria->contain('Curso');
		$cursos = $this->BolsaTemporaria->find('list', array('fields' => array('BolsaTemporaria.curso_id', 'Curso.name'), 'order' => 'Curso.name'));
		$bolseiros = array();
		foreach ($cursos as $k => $v) {
			$this->BolsaTemporaria->contain('BolsaTipoBolsa');
			$bolsas = $this->BolsaTemporaria->find('all', array('conditions' => array('curso_id' => $k), 'order' => array('apelido', 'nomes')));
			$bolseiros[$v] = $bolsas;
		}

		$this->set(compact('bolseiros'));
	}

	public function print_comprovativo_mudanca_curso($mudanca_curso_id) {

		$this->Aluno->MudancaCurso->contain(array(
			'Aluno' => array(
				'Entidade'
			),
			'CursoNovo' => array(
				'UnidadeOrganica'
			),
			'CursoAntigo'
		));

		$mudanca = $this->Aluno->MudancaCurso->findById($mudanca_curso_id);
		$this->Aluno->Entidade->Funcionario->contain('Entidade');
		$funcionario = $this->Aluno->Entidade->Funcionario->find('first', array('conditions' => array('Entidade.user_id' => $mudanca['MudancaCurso']['created_by'])));
		$mudanca['Funciocario'] = $funcionario['Funcionario'];
		$mudanca['Funcionario']['Entidade'] = $funcionario['Entidade'];

		if ($mudanca['CursoNovo']['UnidadeOrganica']['tipo_unidade_organica_id'] > 1) {
			$this->Aluno->Curso->UnidadeOrganica->contain();
			$unidadeMae = $this->Aluno->Curso->UnidadeOrganica->findById($mudanca['CursoNovo']['UnidadeOrganica']['parent_id']);
			$mudanca['CursoNovo']['UnidadeOrganica'] = $unidadeMae['UnidadeOrganica'];
		}



		$this->set(compact('mudanca', 'funcionario'));
	}

    public function report_estudantes_fora_tempo_estudos(){

    }

	public function report_estudantes_sem_certificado() {

	}

	public function report_estudantes_sem_smo() {

	}

}
