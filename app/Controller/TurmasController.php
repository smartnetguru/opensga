<?php

ini_set('memory_limit', "2048M");

/**
 * Controller de turmas do OpenSGA
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.turmas
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0

 *
 * @todo No futuro criar uma tabela docentes_turmas vai ajudar a manter o historico completo das turmas
 *
 */
class TurmasController extends AppController {

	var $name = 'Turmas';

	function add() {
		//App::Import('Model','Logmv');
		//$logmv = new Logmv;
		if (!empty($this->data)) {

			$this->Turma->create();

			$this->data["Turma"]["estado"] = '1';

			if (
					$this->Turma->save($this->data)) {
				$this->Session->setFlash('** Dados Cadastrados com Sucesso **', 'flashok');
				$this->redirect(array('action' => 'add_disciplinas', $this->Turma->getLastInsertID()));
			} else {
				$this->Session->setFlash(sprintf(__('Erro ao gravar dados. Por favor tente de novo.', true), 't0010turma'));
			}
		}
		$estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');


		$anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
		$anolectivos = $this->Turma->AnoLectivo->find('list');
		$cursos = $this->Turma->Curso->find('list', array('order' => array('name ASC')));

		$planoestudos = $this->Turma->PlanoEstudo->find('list');

		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$funcionarios = $this->Turma->Funcionario->find('list');
		$disciplinas = array();
		$this->set('disciplinas', $disciplinas);
		$this->set(compact('anolectivos', 'estados', 'anosemestrecurr', 't0003cursos', 't0005planoestudos', 'turnos', 't0004disciplinas', 'funcionarios'));
	}

	/**
	 * Adiciona docente e assistente a turma passada pelo id
	 * @param int $turma_id
	 *
	 * @todo no futuro apenas mostrar docentes capacitado a dar a turma em questao, de acordo com o perfil
	 */
	public function adicionar_docente($turma_id) {
		$this->Turma->id = $turma_id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Turma Invalida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			if ($this->Turma->adicionaDocente($this->request->data)) {
				$this->Session->setFlash('Os docentes desta turma foram actualizados com sucesso', 'default', array
					('class' => 'alert alert-success'));
				$this->redirect(array('controller' => 'turmas', 'action' => 'ver_turma', $turma_id));
			} else {
				$this->Session->setFlash('Problemas ao adicionar a turma', 'default', array('class' => 'alert alert-danger'));
			}
		}


		$turma = $this->Turma->findById($turma_id);
		$this->Turma->DocenteTurma->Docente->contain(array(
			'Entidade'
		));
		$docentes = $this->Turma->DocenteTurma->Docente->find('list', array('fields' => array('Entidade.name')));
		$tipoDocenteTurmas = $this->Turma->DocenteTurma->TipoDocenteTurma->find('list');

		$this->set('siga_page_title', 'Adicionar Docente a Turma');
		$this->set('siga_page_overview', '');
		$this->set(compact('turma', 'docentes', 'tipoDocenteTurmas', 'turma_id'));
	}

	public function docente_criar_avaliacao($turmaId) {
		$this->Turma->id = $turmaId;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Turma Inválida'));
		}

		$this->Turma->contain(array(
			'Turno', 'PlanoEstudo', 'AnoLectivo', 'EstadoTurma', 'Curso' => array
				(
				'UnidadeOrganica'
			), 'Disciplina', 'AnoLectivo'
		));
		$turma = $this->Turma->read(null, $turmaId);

		$docente = $this->Turma->DocenteTurma->Docente->getByUserId($this->Session->read('Auth.User.id'));

		if (!$this->Turma->isDocente($turmaId, $docente['Docente']['id'])) {
			$this->Session->SetFlash('Nao tem permissao para aceder a pagina anterior');
			$this->redirect(array('action' => 'index'));
		}

		if ($this->request->is('post')) {
			$this->Turma->TurmaTipoAvaliacao->create();
			if ($this->Turma->TurmaTipoAvaliacao->save($this->request->data)) {
				$this->Session->setFlash('Avaliacao Criada com Sucesso');
				$this->redirect(array('action' => 'ver_turma', $turmaId));
			}
		}
		$tipoAvaliacaos = $this->Turma->TurmaTipoAvaliacao->TipoAvaliacao->find('list');

		$this->set(compact('tipoAvaliacaos', 'turma', 'docente'));
	}

	public function docente_fechar_turma($turmaId) {

	}

	public function docente_importar_pauta($turmaId) {
		$this->loadModel('Upload');
		if ($this->request->is('post')) {

			$type = $this->request->data['Upload']['file']['type'];
			if ($type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {

				$upload_sucesso = $this->Upload->uploadFiles('uploads', array($this->request->data['Upload']['file']), 'pautas');
				if (isset($upload_sucesso['urls'])) {


					$this->request->data['Upload']['name'] = $this->request->data['Upload']['file']['name'];
					$this->request->data['Upload']['size'] = $this->request->data['Upload']['file']['size'];
					$this->request->data['Upload']['file_url'] = $upload_sucesso['urls'][0];
					$this->request->data['Upload']['tipo_upload_id'] = 2;
					$this->Upload->create();
					$this->Upload->save($this->request->data);

					$processado = $this->Turma->processaPauta($upload_sucesso['urls'][0], $turmaId);
					if ($processado) {
						$this->Session->setFlash(__('Pauta Processada com Sucesso'), 'default', array('class' => 'alert alert-success'));
						$this->redirect(array('action' => 'ver_turma', $turmaId));
					}
				}
			} else {
				$this->Session->setFlash(__('Tentou carregar um ficheiro no formato errado.'), 'default', array('class' => 'alert error'));
			}
		}
	}

	/**
	 * Lista de turmas atribuidas a um dado docente
	 */
	public function docente_index() {
		$userId = $this->Session->read('Auth.User.id');

		$docente = $this->Turma->DocenteTurma->Docente->getByUserID($userId);
		if (empty($docente)) {
			throw new NotFoundException('Docente Invalido ou tentativa de Fraude');
		}

		$turmasDocente = $this->Turma->DocenteTurma->find('all', array('conditions' => array('DocenteTurma.docente_id' => $docente['Docente']['id'], 'DocenteTurma.estado_docente_turma_id' => 1)));
		$turmaIds = Hash::extract($turmasDocente, '{n}.DocenteTurma.turma_id');


		$conditions['Turma.estado_turma_id'] = 1;
		$conditions['Turma.id'] = $turmaIds;
		$this->paginate = array(
			'conditions' => $conditions,
			'contain' => array(
				'Disciplina', 'AnoLectivo', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
			),
			'limit' => 20,
			'order' => 'Turma.created DESC'
		);

		$this->set('turmas', $this->paginate());
	}

	/**
	 * Mostra detalhes da turma de um dado docente.
	 * FIXME So deve mostrar turmas as quais o docente em questao foi atribuido. Um docente nao pode ver detalhes das turmas dos outros nem com esperteza :D
	 * @param type $id
	 * @throws NotFoundException
	 */

	public function docente_print_lista_estudantes($turmaId) {
		$this->Turma->Inscricao->contain(array(
			'EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade' => array(
						'User'
					)
				)
			),
			'Turma' => array(
				'Curso' => array(
					'UnidadeOrganica'
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));
		$inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $turmaId, 'Inscricao.estado_inscricao_id' => 1)));
		$this->set(compact('inscricaos'));
	}

	public function docente_print_pauta($turmaId) {
		$this->Turma->id = $turmaId;
		$turma = $this->Turma->read();

		$todasTurmas = $this->Turma->find('list', array('conditions' => array('Turma.curso_id' => $turma['Turma']['curso_id'], 'Turma.disciplina_id' => $turma['Turma']['disciplina_id'], 'Turma.ano_lectivo_id' => $turma['Turma']['ano_lectivo_id'])));
		$todasTurmasIds = array_keys($todasTurmas);

		$this->Turma->Inscricao->contain(array(
			'EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade' => array(
					)
				)
			),
			'Turma' => array(
				'Curso' => array(
					'fields' => array('name')
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));
		$inscricaos2 = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $todasTurmasIds, 'Inscricao.estado_inscricao_id' => 1)));
		$inscricaos = Hash::sort($inscricaos2, '{n}.Matricula.Aluno.Entidade.apelido', 'asc');

		$faculdade = $this->Turma->Curso->getFaculdadeByCursoId($inscricaos[0] ['Turma']['curso_id']);
		$this->set(compact('inscricaos', 'faculdade'));
	}

	public function docente_ver_turma($turmaId = null) {
		$this->Turma->id = $turmaId;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Turma Inválida'));
		}

		if (empty($this->data)) {
			$this->Turma->contain(array(
				'Turno', 'PlanoEstudo', 'AnoLectivo', 'EstadoTurma', 'Curso' => array
					(
					'UnidadeOrganica'
				), 'Disciplina', 'AnoLectivo'
			));
			$this->data = $this->Turma->read(null, $turmaId);
		}
		$docente = $this->Turma->DocenteTurma->Docente->getByUserId($this->Session->read('Auth.User.id'));

		if (!$this->Turma->isDocente($turmaId, $docente['Docente']['id'])) {
			$this->Session->SetFlash('Nao tem permissao para aceder a pagina anterior');
			$this->redirect(array('action' => 'index'));
		}

		$this->Turma->Inscricao->contain(array(
			'EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade' => array(
						'User'
					)
				)
			),
			'Turma' => array(
				'Curso' => array(
					'fields' => array('name')
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));
		$inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $turmaId)));


		$this->Turma->TurmaTipoAvaliacao->contain(array(
			'TipoAvaliacao'
		));
		$turmaTipoAvaliacaos = $this->Turma->TurmaTipoAvaliacao->find('all', array('conditions' => array('turma_id' => $this->data['Turma']['id'])));
		$estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');
		$anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
		$anolectivos = $this->Turma->AnoLectivo->find('list');
		$cursos = $this->Turma->Curso->find('list');
		$planoestudos = $this->Turma->PlanoEstudo->find('list');
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$regente = $this->Turma->getRegente($turmaId);
		$assistentes = $this->Turma->getAllAssistentes($turmaId);

		$this->set('turma', $this->data);
		$this->set(compact('inscricaos', 'turmaTipoAvaliacaos', 'anolectivos', 'estados', 'mediaTurma', 'anosemestrecurr', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes', 'ano_curricular', 'regente', 'assistentes'));
	}

	public function faculdade_adicionar_docente($turmaId) {
		$this->Turma->id = $turmaId;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Turma Invalida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			if ($this->Turma->adicionaDocente($this->request->data)) {
				$this->Session->setFlash('Os docentes desta turma foram actualizados com sucesso', 'default', array
					('class' => 'alert alert-success'));
				$this->redirect(array('controller' => 'turmas', 'action' => 'ver_turma', $turmaId));
			} else {
				$this->Session->setFlash('Problemas ao adicionar a turma', 'default', array('class' => 'alert alert-danger'));
			}
		}

		$turma = $this->Turma->findById($turmaId);
		$this->Turma->DocenteTurma->Docente->contain(array(
			'Entidade', 'UnidadeOrganica'
		));
		$docentes = $this->Turma->DocenteTurma->Docente->find('list', array('fields' => array("Entidade.name")));
		$tipoDocenteTurmas = $this->Turma->DocenteTurma->TipoDocenteTurma->find('list');

		$this->set('siga_page_title', 'Adicionar Docente a Turma');
		$this->set('siga_page_overview', '');
		$this->set(compact('turma', 'docentes', 'tipoDocenteTurmas', 'turmaId'));
	}

	public function faculdade_criar_avaliacao() {

	}

	public function faculdade_fechar_turma($turmaId) {

	}

	public function faculdade_importar_pauta($turmaId) {
		$this->loadModel('Upload');
		if ($this->request->is('post')) {

			$type = $this->request->data['Upload']['file']['type'];
			debug($type);
			if ($type == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {

				$uploadSucesso = $this->Upload->uploadFiles('uploads', array($this->request->data['Upload']['file']), 'pautas_pendentes');
				if (isset($uploadSucesso['urls'])) {
					$this->request->data['Upload']['name'] = $this->request->data['Upload']['file']['name'];
					$this->request->data['Upload']['size'] = $this->request->data['Upload']['file']['size'];
					$this->request->data['Upload']['file_url'] = $uploadSucesso['urls'][0];
					$this->request->data['Upload']['tipo_upload_id'] = 2;
					$this->Upload->create();
					$this->Upload->save($this->request->data);

					$pautaPath = Configure::read('OpenSGA.Pautas.save_path');
					if (!is_dir($pautaPath)) {
						mkdir($pautaPath, 0777, true);
						chmod($pautaPath, 0755);
					}
					CakeResque::enqueue(
							'default', 'TurmaShell', array('processaPauta', $turmaId, $this->Upload->id, $uploadSucesso['urls'][0])
					);
					$this->Session->setFlash(__('Pauta Carregada com Sucesso. A Pauta Sera processada dentro de alguns minutos'), 'default', array('class' => 'alert alert-info'));
					$this->redirect(array('action' => 'ver_turma', $turmaId));
				}
			} else {
				$this->Session->setFlash(__('Tentou carregar um ficheiro no formato errado.'), 'default', array('class' => 'alert error'));
			}
		}
	}

	function faculdade_index() {

		$this->Turma->contain(array(
			'AnoLectivo', 'Disciplina', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
		));

		$unidade_organica_id = $this->Session->read('Auth.User.unidade_organica_id');

		$conditions = array();
		$paginationOptions = array();
		if ($this->request->is('post')) {

			if ($this->request->data['Turma']['codigo'] != '') {
				$conditions['Turma.codigo'] = $this->request->data['Turma']['codigo'];
			}
			if ($this->request->data['Turma']['name'] != '') {
				$conditions['Turma.name LIKE'] = '%' . $this->request->data['Turma']['name'] . '%';
			}
			if ($this->request->data['AnoLectivo']['ano'] != '') {
				$conditions['AnoLectivo.ano'] = $this->request->data['AnoLectivo']['ano'];
				$paginationOptions['url']['ano_lectivo'] = $this->request->data['AnoLectivo']['ano'];
			}
		}
		if ($this->request->is('ajax')) {
			if (isset($this->request->params['named']['ano_lectivo'])) {
				$conditions['AnoLectivo.ano'] = $this->request->params['named']['ano_lectivo'];
			}
		}
		$conditions['Turma.estado_turma_id'] = 1;
		$conditions['Curso.unidade_organica_id'] = $unidade_organica_id;

		$this->paginate = array(
			'conditions' => $conditions,
			'contain' => array(
				'AnoLectivo', 'Disciplina', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica'),'Inscricao'=>array(
                    'conditions'=>array(
                        'estado_inscricao_id'=>1
                    )
                )
			),
			'limit' => 20,
			'order' => 'Turma.created DESC'
		);

		$turmas = $this->paginate('Turma');
		$this->set(compact('turmas', 'paginationOptions'));
	}

	public function faculdade_print_lista_estudantes($turma_id) {
		$this->Turma->Inscricao->contain(array(
			'EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade' => array(
						'User'
					)
				)
			),
			'Turma' => array(
				'Curso' => array(
					'UnidadeOrganica'
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));
		$inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $turma_id, 'Inscricao.estado_inscricao_id' => 1)));
		//debug($inscricaos);
		//debug();

		$this->set(compact('inscricaos'));
	}

	public function faculdade_print_pauta($turmaId) {
		$this->Turma->id = $turmaId;
		$turma = $this->Turma->read();

        //primeiro vamos ver se nenhuma pauta foi gerada previamente
        $pautaFile = new File($turma['Turma']['pauta_path']);
        if($pautaFile->exists()){
               $this->response->file($pautaFile,array('name'=>Inflector::slug($turma['Turma']['name']),'download'=>true));
            return $this->response;
        } else{
            CakeResque::enqueue(
                'default', 'TurmaShell', array('geraPauta', $turmaId)
            );
            $todasTurmas = $this->Turma->find('list', array('conditions' => array('Turma.curso_id' => $turma['Turma']['curso_id'], 'Turma.disciplina_id' => $turma['Turma']['disciplina_id'], 'Turma.ano_lectivo_id' => $turma['Turma']['ano_lectivo_id'])));
            $todasTurmasIds = array_keys($todasTurmas);

            $this->Turma->Inscricao->contain(array(
                'EstadoInscricao',
                'Matricula' => array(
                    'Aluno' => array(
                        'Entidade' => array(
                        )
                    )
                ),
                'Turma' => array(
                    'Curso' => array(
                        'fields' => array('name')
                    ), 'Disciplina', 'Turno', 'AnoLectivo'
                )
            ));
            $inscricaos2 = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' =>
                                                                                                $todasTurmasIds,
                                                                                            'Inscricao
                                                                                            .estado_inscricao_id' =>
                                                                                                1,
                'Inscricao.data >'=>'2014-06-01')));
            $inscricaos = Hash::sort($inscricaos2, '{n}.Matricula.Aluno.Entidade.apelido', 'asc');
            $faculdade = $this->Turma->Curso->getFaculdadeByCursoId($inscricaos[0] ['Turma']['curso_id']);
            $this->set(compact('inscricaos', 'faculdade'));
        }
	}

	public function faculdade_ver_turma($id = null) {
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Turma Inválida'));
		}

		if (empty($this->data)) {
			$this->Turma->contain(array(
				'Turno', 'PlanoEstudo', 'AnoLectivo', 'EstadoTurma', 'Curso' => array
					(
					'UnidadeOrganica'
				), 'Disciplina', 'AnoLectivo'
			));
			$this->data = $this->Turma->read(null, $id);
		}
		$unidadeOrganicaTurma = $this->data['Curso'] ['unidade_organica_id'];
		$unidadeOrganicaUser = $this->Session->read('Auth.User.unidade_organica_id');
		if ($unidadeOrganicaTurma != $unidadeOrganicaUser) {
			$this->Session->SetFlash('Nao tem permissao para aceder a pagina anterior');
			$this->redirect(array('action' => 'index'));
		}

		$this->Turma->Inscricao->contain(array(
			'EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade' => array(
						'User'
					)
				)
			),
			'Turma' => array(
				'Curso' => array(
					'fields' => array('name')
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));
		$inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $id)));

		$this->Turma->TurmaTipoAvaliacao->contain(array(
			'TipoAvaliacao'
		));
		$turmaTipoAvaliacaos = $this->Turma->TurmaTipoAvaliacao->find('all', array('conditions' => array('turma_id' => $this->data['Turma']['id'])));
		$estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');
		$anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
		$anolectivos = $this->Turma->AnoLectivo->find('list');
		$cursos = $this->Turma->Curso->find('list');
		$planoestudos = $this->Turma->PlanoEstudo->find('list');
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$regente = $this->Turma->getRegente($id);
		$assistentes = $this->Turma->getAllAssistentes($id);

		$this->set('turma', $this->data);
		$this->set(compact('inscricaos', 'turmaTipoAvaliacaos', 'anolectivos', 'estados', 'mediaTurma', 'anosemestrecurr', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes', 'ano_curricular', 'regente', 'assistentes'));
	}

	public function fechar_todas_turmas($semestre) {
		$this->Turma->fecharTodasTurmas($semestre);

		$this->redirect(array('action'
			=> 'index'));
	}

	/**
	 * Esta funcao fecha uma determinada turma. Mas so fecha se a turma nao tiver avaliacoes abertas
	 * @param type $id
	 */
	public function fechar_turma($id) {
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException('Turma Não Existente');
		}
		if (!$this->request->is('post') && !$this->request->is('put')) {

			$this->Session->setFlash(__('Não Possui Permissão para aceder esta página'), 'default', array('class' => 'alert error'
			));
			$this->redirect($this->referer());
		}

		if (!$this->Turma->hasAvaliacoesAbertas($id)) {

		} else {
			$this->Session->setFlash(__('Esta Turma Possui Avaliações Abertas por isso não pode ser fechada'), 'default', array('class' => 'alert error'));
		}
	}

	/**
	 * Gera todas as turmas em funcao do plano de estudos.
	 * @todo Garantir que isso funciona
	 */
	function gerar_turmas() {
		if (!empty($this->request->data)) {
			/**
			 * @todo Verificar o ajuste do anolectivo ao regime antes de enviar para o modelo
			 */
			$this->Turma->criarTurmas(29);

			$this->Session->setFlash('As Turmas foram Geradas com Sucesso', 'flashok');
			//$this->redirect(array('action' => 'index'));
		}


		$anolectivos = $this->Turma->AnoLectivo->find('list');
		$planoestudos = $this->Turma->PlanoEstudo->find('list');
		$semestrelectivos = $this->Turma->SemestreLectivo->find('list');
		$RegimeLectivos = $this->Turma->AnoLectivo->RegimeLectivo->find('list');
		$turnos = $this->Turma->Turno->find('list');

		$this->set(compact('anolectivos', 'planoestudos', 'semestrelectivos', 'RegimeLectivos', 'turnos'));
	}

	/**
	 * Lista de turmas activas no Sistema.
	 * @todo remover o filtro de docentes
	 * @todo adicionar o filtro de unidades organicas
	 */
	function index() {

		$this->Turma->contain(array(
			'AnoLectivo', 'Disciplina', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
		));



		$conditions = array();
		if ($this->request->is('post')) {

			if ($this->request->data['Turma']['codigo'] != '') {
				$conditions['Turma.codigo'] = $this->request->data['Turma']['codigo'];
			} elseif ($this->request->data['Turma']['name'] != '') {
				$conditions['Turma.name LIKE'] = '%' . $this->request->data['Turma']['name'] . '%';
			} elseif ($this->request->data['AnoLectivo']['ano'] != '') {
				$conditions['AnoLectivo.ano'] = $this->request->data['AnoLectivo']['ano'];
			}
		}
		//$conditions['Turma.estado_turma_id'] = array(null,1);

		$this->paginate = array(
			'conditions' => $conditions,
			'contain' => array(
				'AnoLectivo', 'Disciplina', 'PlanoEstudo', 'Curso' => array('UnidadeOrganica')
			)
		);

		$turmas = $this->paginate('Turma');

		$this->set('turmas', $turmas);
	}

	public function print_lista_estudantes($turma_id) {
		$this->Turma->Inscricao->contain(array(
			'EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade' => array(
						'User'
					)
				)
			),
			'Turma' => array(
				'Curso' => array(
					'UnidadeOrganica'
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));

		$inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $turma_id, 'Inscricao.estado_inscricao_id' => 1)));

		$this->set(compact('inscricaos'));
	}

	public function print_pauta($turmaId) {

		$this->Turma->id = $turmaId;
		$turma = $this->Turma->read();
		debug($turma);
		die();
		$this->Turma->Inscricao->contain(array(
			'EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade' => array(
					)
				)
			),
			'Turma' => array(
				'Curso' => array(
					'fields' => array('name')
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));


		$inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $turmaId, 'Inscricao.estado_inscricao_id' => 1)));
		$inscricaos = Hash::sort($inscricaos, '{n}.Matricula.Aluno.Entidade.apelido', 'asc');

		$this->set(compact('inscricaos'));
	}

	function ver_turma($id = null) {
		$this->Turma->id = $id;
		if (!$this->Turma->exists()) {
			throw new NotFoundException(__('Turma Inválida'));
		}

		if (empty($this->data)) {
			$this->Turma->contain(array(
				'Turno',
				'PlanoEstudo', 'AnoLectivo', 'EstadoTurma', 'Curso' => array(
					'UnidadeOrganica'
				), 'Disciplina', 'AnoLectivo'
			));
			$this->data = $this->Turma->read(null, $id);
		}

		$this->Turma->Inscricao->contain(array('EstadoInscricao',
			'Matricula' => array(
				'Aluno' => array(
					'Entidade'
				)
			),
			'Turma' => array(
				'Curso' => array(
					'fields' => array('name')
				), 'Disciplina', 'Turno', 'AnoLectivo'
			)
		));
		$inscricaos = $this->Turma->Inscricao->find('all', array('conditions' => array('turma_id' => $id)));

		$this->Turma->TurmaTipoAvaliacao->contain(array(
			'TipoAvaliacao'
		));
		$TurmaTipoAvaliacaos = $this->Turma->TurmaTipoAvaliacao->find('all', array('conditions' => array('turma_id' => $this->data['Turma']['id'])));
		$estados = array('1' => 'Activa', '2' => 'Cancelada', '3' => 'Fechada');
		$anosemestrecurr = array('1' => '1', '2' => '2', '3' => '3', '4' => '4');
		$anolectivos = $this->Turma->AnoLectivo->find('list');
		$cursos = $this->Turma->Curso->find('list');
		$planoestudos = $this->Turma->PlanoEstudo->find('list');
		$turnos = $this->Turma->Turno->find('list');
		$disciplinas = $this->Turma->Disciplina->find('list');
		$regente = $this->Turma->getRegente($id);

		$this->set('turma', $this->data);
		$this->set(compact('inscricaos', 'TurmaTipoAvaliacaos', 'anolectivos', 'estados', 'mediaTurma', 'anosemestrecurr', 'cursos', 'planoestudos', 'turnos', 'disciplinas', 'docentes', 'ano_curricular', 'regente'));
	}

}

?>