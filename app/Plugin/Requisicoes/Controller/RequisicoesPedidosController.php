<?php

	App::uses('RequisicoesAppController', 'Requisicoes.Controller');

	/**
	 * RequisicoesPedidos Controller
	 *
	 * @property RequisicoesPedido $RequisicoesPedido
	 */
	class RequisicoesPedidosController extends RequisicoesAppController
	{

		/**
		 * index method
		 *
		 * @return void
		 */
		public function index()
		{
			$this->paginate = [
				'order'   => [
					'RequisicoesPedido.data_pedido' => 'desc',
				],
				'contain' => [
					'Aluno' => [
						'Entidade',
						'Curso',
					],
					'Entidade',
					'RequisicoesTipoPedido',
					'RequisicoesEstadoPedido',
				],
			];
			$this->set('requisicoesPedidos', $this->paginate());
		}

		/**
		 * view method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function view($id = null)
		{
			$this->RequisicoesPedido->id = $id;
			if (!$this->RequisicoesPedido->exists()) {
				throw new NotFoundException(__('Invalid requisicoes pedido'));
			}
			$this->set('requisicoesPedido', $this->RequisicoesPedido->read(null, $id));
		}

		/**
		 * add method
		 *
		 * @return void
		 */
		public function add()
		{
			if ($this->request->is('post')) {
				$this->RequisicoesPedido->create();
				if ($this->RequisicoesPedido->save($this->request->data)) {
					$this->Session->setFlash(__('The requisicoes pedido has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The requisicoes pedido could not be saved. Please, try again.'));
				}
			}
			$alunos = $this->RequisicoesPedido->Aluno->find('list');
			$entidades = $this->RequisicoesPedido->Entidade->find('list');
			$cursos = $this->RequisicoesPedido->Curso->find('list');
			$requisicoesTipoPedidos = $this->RequisicoesPedido->RequisicoesTipoPedido->find('list');
			$requisicoesEstadoPedidos = $this->RequisicoesPedido->RequisicoesEstadoPedido->find('list');
			$funcionarios = $this->RequisicoesPedido->Funcionario->find('list');
			$this->set(compact('alunos', 'entidades', 'cursos', 'requisicoesTipoPedidos', 'requisicoesEstadoPedidos',
				'funcionarios'));
		}

		/**
		 * edit method
		 *
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function edit($id = null)
		{
			$this->RequisicoesPedido->id = $id;
			if (!$this->RequisicoesPedido->exists()) {
				throw new NotFoundException(__('Invalid requisicoes pedido'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->RequisicoesPedido->save($this->request->data)) {
					$this->Session->setFlash(__('The requisicoes pedido has been saved'));
					$this->redirect(['action' => 'index']);
				} else {
					$this->Session->setFlash(__('The requisicoes pedido could not be saved. Please, try again.'));
				}
			} else {
				$this->request->data = $this->RequisicoesPedido->read(null, $id);
			}
			$alunos = $this->RequisicoesPedido->Aluno->find('list');
			$entidades = $this->RequisicoesPedido->Entidade->find('list');
			$cursos = $this->RequisicoesPedido->Curso->find('list');
			$requisicoesTipoPedidos = $this->RequisicoesPedido->RequisicoesTipoPedido->find('list');
			$requisicoesEstadoPedidos = $this->RequisicoesPedido->RequisicoesEstadoPedido->find('list');
			$funcionarios = $this->RequisicoesPedido->Funcionario->find('list');
			$this->set(compact('alunos', 'entidades', 'cursos', 'requisicoesTipoPedidos', 'requisicoesEstadoPedidos',
				'funcionarios'));
		}

		/**
		 * delete method
		 *
		 * @throws MethodNotAllowedException
		 * @throws NotFoundException
		 * @param string $id
		 * @return void
		 */
		public function delete($id = null)
		{
			if (!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->RequisicoesPedido->id = $id;
			if (!$this->RequisicoesPedido->exists()) {
				throw new NotFoundException(__('Invalid requisicoes pedido'));
			}
			if ($this->RequisicoesPedido->delete()) {
				$this->Session->setFlash(__('Requisicoes pedido deleted'));
				$this->redirect(['action' => 'index']);
			}
			$this->Session->setFlash(__('Requisicoes pedido was not deleted'));
			$this->redirect(['action' => 'index']);
		}

		/**
		 * Mostra a Pagina para seleccionar a pessoa que está a fazer o pedido
		 */
		public function nova_requisicao()
		{
			if ($this->request->is('post')) {
				if ($this->request->data['RequisicaoPedido']['tipo_pesquisa'] == 'estudante') {
					//Procura estudante pelos dados fornecidos
					if ($this->request->data['RequisicaoPedido']['codigo'] != '') {
						$estudante = $this->RequisicoesPedido->Aluno->find('first',
							['conditions' => ['Aluno.codigo' => $this->request->data['RequisicaoPedido']['codigo']]]);
						if (!empty($estudante)) {
							$this->Session->setFlash(__('Registe a Requisição para Este Estudante'), 'default',
								['class' => 'alert alert-info']);
							$this->redirect(['action' => 'registar_requisicao_estudante', $estudante['Aluno']['id']]);
						} else {
							$this->Session->setFlash("Estudante nao encontrado", 'default',
								['class' => 'alert alert-danger']);
						}
					} else {
						$this->RequisicoesPedido->Aluno->contain([
							'Entidade',
							'Curso',
						]);
						$estudantes = $this->RequisicoesPedido->Aluno->find('all', [
							'conditions' => [
								'Entidade.apelido LIKE' => '%' . $this->request->data['RequisicaoPedido']['apelido'] . '%',
								'Entidade.nomes LIKE'   => '%' . $this->request->data['RequisicaoPedido']['nomes'] . '%',
							],
						]);
						if (count($estudantes) == 1) {
							$this->Session->setFlash(__('Registe a Requisição para Este Estudante'), 'default',
								['class' => 'alert info']);
							$this->redirect([
								'action' => 'registar_requisicao_estudante',
								$estudantes[0]['Aluno']['id'],
							]);
						} elseif (empty($estudantes)) {
							$this->Session->setFlash("Estudante nao encontrado");
						} else {
							$resultado_estudantes = 1;
							$this->set(compact('estudantes', 'resultado_estudantes'));
						}
					}
				} else {
					if ($this->request->data['RequisicaoPedido']['codigo'] != '') {
						$entidade = $this->RequisicoesPedido->Entidade->findByCodigo($this->request->data['RequisicaoPedido']['codigo']);
						if (!empty($entidade)) {
							$this->Session->setFlash(__('Registe a Requisição para Esta Entidade'), 'default',
								['class' => 'alert alert-info']);
							$this->redirect(['action' => 'registar_requisicao_entidade', $entidade['Entidade']['id']]);
						} else {
							$this->Session->setFlash("Entidade nao encontrada", 'default',
								['class' => 'alert alert-danger']);
						}
					} elseif ($this->request->data['RequisicaoPedido']['documento_identificacao_numero'] != '') {
						$entidade = $this->RequisicoesPedido->Entidade->findByDocumentoIdentificacaoNumero($this->request->data['RequisicaoPedido']['documento_identificacao_numero']);
						if (!empty($entidade)) {
							$this->Session->setFlash(__('Registe a Requisição para Esta Entidade'), 'default',
								['class' => 'alert alert-info']);
							$this->redirect(['action' => 'registar_requisicao_entidade', $entidade['Entidade']['id']]);
						} else {
							$this->Session->setFlash("Entidade nao encontrada", 'default',
								['class' => 'alert alert-danger']);
						}
					} else {
						$this->RequisicoesPedido->Entidade->contain();
						$entidades = $this->RequisicoesPedido->Entidade->find('all', [
							'conditions' => [
								'Entidade.apelido LIKE' => '%' . $this->request->data['RequisicaoPedido']['apelido'] . '%',
								'Entidade.nomes LIKE'   => '%' . $this->request->data['RequisicaoPedido']['nomes'] . '%',
							],
						]);
						if (count($entidades) == 1) {
							$this->Session->setFlash(__('Registe a Requisição para Este Estudante'), 'default',
								['class' => 'alert info']);
							$this->redirect([
								'action' => 'registar_requisicao_entidade',
								$entidades[0]['Entidade']['id'],
							]);
						} elseif (empty($entidades)) {
							$this->Session->setFlash("Entidade nao encontrada", 'default',
								['class' => 'alert alert-danger']);
						} else {
							$resultado_entidades = 1;
							$this->set(compact('entidades', 'resultado_entidades'));
						}
					}
				}
			}
		}

		/**
		 *
		 * Regista uma requisicao de um estudante da UEM
		 * @param type $aluno_id
		 *
		 * @todo Ver a questao do id do funcionario, nos casos em que é o super administrador a registar
		 * @todo ver para onde é redireccionado apos um pedido com sucesso. O ideal é para a pagina de impressao do recibo
		 */
		public function registar_requisicao_estudante($alunoId)
		{
			if ($this->request->is('post')) {

				$this->RequisicoesPedido->Aluno->contain('Entidade');


				$aluno = $this->RequisicoesPedido->Aluno->findById(
					$this->request->data['RequisicoesPedido']['aluno_id']);


				debug($this->request->data);


				$this->request->data['RequisicoesPedido']['data_pedido'] = date('Y-m-d H:i:s');
				$this->request->data['RequisicoesPedido']['entidade_id'] = $entidade['id'];
				$this->request->data['RequisicoesPedido']['nome_requerente'] = $entidade['name'];
				//$this->request->data['RequisicoesPedido']['curso_id'] = $aluno['Aluno']['curso_id'];
				$funcionario = $this->RequisicoesPedido->Funcionario->getByUserId($this->Session->read('Auth.User.id'));


				if (!empty($funcionario)) {
					$this->request->data['RequisicoesPedido']['funcionario_id'] = $funcionario['Funcionario']['id'];
				} else {

				}
				if ($this->request->data['RequisicoesPedido']['novo_tipo_requisicao'] != null) {
					$tipo_requisicao_existe = $this->RequisicoesPedido->RequisicoesTipoPedido->findByName($this->request->data['RequisicoesPedido']['novo_tipo_requisicao']);
					if (empty($tipo_requisicao_existe)) {
						$array_tipo_requisicao = [
							'RequisicoesTipoPedido' => [
								"name" => $this->request->data['RequisicoesPedido']['novo_tipo_requisicao'],
							],
						];
						$this->RequisicoesPedido->RequisicoesTipoPedido->create();
						$this->RequisicoesPedido->RequisicoesTipoPedido->save($array_tipo_requisicao);
						$this->request->data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $this->RequisicoesPedido->RequisicoesTipoPedido->id;
					} else {

						$this->request->data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $tipo_requisicao_existe['RequisicoesTipoPedido']['name'];

					}
				}
				$this->RequisicoesPedido->create();
				if ($this->RequisicoesPedido->save($this->request->data)) {
					$this->RequisicoesPedido->set('numero_pedido', $this->RequisicoesPedido->id);
					$this->RequisicoesPedido->save();

					$this->Session->setFlash(__('Requisição Registada com Sucesso'), 'default',
						['class' => 'alert success']);
					$this->redirect([
						'plugin'     => false,
						'controller' => 'alunos',
						'action'     => 'perfil_estudante',
						$this->request->data['RequisicoesPedido']['aluno_id'],
					]);
				}
			}

			$aluno = $this->RequisicoesPedido->Aluno->getAlunoForAction($alunoId);
			$requisicoesTipoPedidos = $this->RequisicoesPedido->RequisicoesTipoPedido->find('list');
			$requisicoesEstadoPedidos = $this->RequisicoesPedido->RequisicoesEstadoPedido->find('list');

			$this->set(compact('aluno', 'requisicoesTipoPedidos', 'requisicoesEstadoPedidos'));
		}


		public function registar_requisicao_entidade($entidadeId)
		{

			//Pega a entidade pela ID do post
			$entidade = false;

			if ($this->request->is('post')) {


				if (isset($this->request->data['Entidade']['nova_entidade'])) {

					$entidade_array = $this->request->data['Entidade'];

					unset($entidade_array['nova_entidade']);


					//Obtem o ultimo codigo de entidade registado no sistema
					$mysql_results =
						$this->RequisicoesPedido->Entidade->query(
							'SELECT max(codigo) as uc from entidades ');

					$ultimo_codigo_entidade = $mysql_results[0][0]['uc'];

					//Novo codigo de entidade = ultimo codigo de entidade + 1
					$codigo_nova_entidade = $ultimo_codigo_entidade + 1;
					$entidade_array['codigo'] = $codigo_nova_entidade;

					//Guarda a nova entidade
					$this->RequisicoesPedido->Entidade->create();
					$this->RequisicoesPedido->Entidade->save($entidade_array);
					$entidadeID = $this->RequisicoesPedido->Entidade->id;


					//Redirecciona para action de registo de requisicao
					$this->redirect([
						'controller' => 'RequisicoesPedidos',
						'action'     => 'registar_requisicao_entidade',
						$entidadeID,
					]);


				}

				$entidade_id = ($this->request->data['RequisicoesPedido']['entidade_id']);


				//Pega a entidade pela ID do post
				$entidade = $this->RequisicoesPedido->Entidade->findById($entidade_id);


				debug($this->request->data);

				$this->request->data['RequisicoesPedido']['data_pedido'] = date('Y-m-d H:i:s');
				$this->request->data['RequisicoesPedido']['entidade_id'] = $entidade['Entidade']['id'];
				$this->request->data['RequisicoesPedido']['nome_requerente'] =
					$entidade['Entidade']['name'];


				//Obtem o funcionario logado no sistema
				$funcionario = $this->RequisicoesPedido->Funcionario->getByUserId(
					$this->Session->read('Auth.User.id'));


				if (!empty($funcionario)) {

					//Existe algum funcionario logado no sistema

					$this->request->data['RequisicoesPedido']
					['funcionario_id'] = $funcionario['Funcionario']['id'];


				} else {


				}


				if ($this->request->data['RequisicoesPedido']['novo_tipo_requisicao'] != null) {

					//Verifica se existe o novo tipo de requisicao
					$tipo_requisicao_existe =
						$this->RequisicoesPedido->RequisicoesTipoPedido->findByName(
							$this->request->data['RequisicoesPedido']['novo_tipo_requisicao']);


					//Ainda nao existe este tipo de requisicao
					if (empty($tipo_requisicao_existe)) {
						$array_tipo_requisicao = [
							'RequisicoesTipoPedido' => [
								"name" =>
									$this->request->data['RequisicoesPedido']['novo_tipo_requisicao'],
							],
						];

						//Cria o novo tipo de requisicao
						$this->RequisicoesPedido->RequisicoesTipoPedido->create();
						$this->RequisicoesPedido->RequisicoesTipoPedido->save($array_tipo_requisicao);

						//Obtem a id do novo tipo de requisiao
						$this->request->data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $this->RequisicoesPedido->RequisicoesTipoPedido->id;


					} else {


						$this->request->data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $tipo_requisicao_existe['RequisicoesTipoPedido']['name'];

					}
				}


				//Cria a nova requisicao
				$this->RequisicoesPedido->create();


				if ($this->RequisicoesPedido->save($this->request->data)) {

					//Define o numero do pedido
					$this->RequisicoesPedido->set('numero_pedido', $this->RequisicoesPedido->id);
					$this->RequisicoesPedido->save();

					$this->Session->setFlash(__('Requisição Registada com Sucesso'), 'default',
						['class' => 'alert success']);


					$this->redirect(
						[
							'plugin'     => false,
							'controller' => 'requisicoes',
							'action'     => 'requisicoes_pedidos',
						]);

				}
			} else {


				//Obtem a entidade pela ID
				$entidade = $this->RequisicoesPedido->Entidade->findById($entidadeId);


			}

			//Obtem todos os tipos de pedidos
			$requisicoesTipoPedidos = $this->RequisicoesPedido->RequisicoesTipoPedido->find('list');

			//Obtem todos estados de pedidos
			$requisicoesEstadoPedidos =
				$this->RequisicoesPedido->RequisicoesEstadoPedido->find('list');

			$this->set(compact('entidade', 'requisicoesTipoPedidos', 'requisicoesEstadoPedidos'));

		}


		public function registar_requisicao_entidade_backup($alunoId)
		{

			if ($this->request->is('post')) {
				//$this->RequisicoesPedido->Aluno->contain('Entidade');
				$aluno = $this->RequisicoesPedido->Aluno->findById($this->request->data['RequisicoesPedido']['aluno_id']);

				debug($this->request->data);


				$this->request->data['RequisicoesPedido']['data_pedido'] = date('Y-m-d H:i:s');
				$this->request->data['RequisicoesPedido']['entidade_id'] = $aluno['Aluno']['entidade_id'];
				$this->request->data['RequisicoesPedido']['nome_requerente'] = $aluno['Entidade']['name'];
				$this->request->data['RequisicoesPedido']['curso_id'] = $aluno['Aluno']['curso_id'];

				$funcionario = $this->RequisicoesPedido->Funcionario->getByUserId($this->Session->read('Auth.User.id'));
				if (!empty($funcionario)) {
					$this->request->data['RequisicoesPedido']['funcionario_id'] = $funcionario['Funcionario']['id'];
				} else {

				}
				if ($this->request->data['RequisicoesPedido']['novo_tipo_requisicao'] != null) {
					$tipo_requisicao_existe = $this->RequisicoesPedido->RequisicoesTipoPedido->findByName($this->request->data['RequisicoesPedido']['novo_tipo_requisicao']);
					if (empty($tipo_requisicao_existe)) {
						$array_tipo_requisicao = [
							'RequisicoesTipoPedido' => [
								"name" => $this->request->data['RequisicoesPedido']['novo_tipo_requisicao'],
							],
						];
						$this->RequisicoesPedido->RequisicoesTipoPedido->create();
						$this->RequisicoesPedido->RequisicoesTipoPedido->save($array_tipo_requisicao);
						$this->request->data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $this->RequisicoesPedido->RequisicoesTipoPedido->id;
					} else {
						$this->request->data["RequisicoesPedido"]['requisicoes_tipo_pedido_id'] = $tipo_requisicao_existe['RequisicoesTipoPedido']['name'];
					}
				}
				$this->RequisicoesPedido->create();
				if ($this->RequisicoesPedido->save($this->request->data)) {
					$this->RequisicoesPedido->set('numero_pedido', $this->RequisicoesPedido->id);
					$this->RequisicoesPedido->save();

					$this->Session->setFlash(__('Requisição Registada com Sucesso'), 'default',
						['class' => 'alert success']);
					$this->redirect([
						'plugin'     => false,
						'controller' => 'alunos',
						'action'     => 'perfil_estudante',
						$this->request->data['RequisicoesPedido']['aluno_id'],
					]);
				}
			}

			$aluno = $this->RequisicoesPedido->Aluno->getAlunoForAction($alunoId);
			$requisicoesTipoPedidos = $this->RequisicoesPedido->RequisicoesTipoPedido->find('list');
			$requisicoesEstadoPedidos = $this->RequisicoesPedido->RequisicoesEstadoPedido->find('list');

			$this->set(compact('aluno', 'requisicoesTipoPedidos', 'requisicoesEstadoPedidos'));

		}

		public function registar_requisicao_nova_entidade($entidade_id = null)
		{


		}


		public function entregar_cartao_novo_ingresso($aluno_id)
		{
			if ($this->request->is('post')) {
				if ($this->request->data['RequisicoesPedido']['registrar_envio'] == 1) {
					$this->RequisicoesPedido->contain();
					$requisicao = $this->RequisicoesPedido->find('first', [
						'conditions' => [
							'aluno_id'                   => $this->request->data['RequisicoesPedido']['aluno_id'],
							'requisicoes_tipo_pedido_id' => 6,
						],
					]);
					$this->RequisicoesPedido->id = $requisicao['RequisicoesPedido']['id'];
					$this->RequisicoesPedido->set('requisicoes_estado_pedido_id', 6);
					$this->RequisicoesPedido->save();
					$this->Session->setFlash(__('O Envio do Cartão de Estudante foi Registado com Sucesso. Por Favor Registe o Proximo'),
						'default', ['class' => 'alert success']);
					$this->redirect([
						'plugin'     => false,
						'controller' => 'alunos',
						'action'     => 'pesquisa_aluno_action',
						'entregar_cartao_novo_ingresso',
						'requisicoes_pedidos',
						'requisicoes',
					]);
				}
			}
			$aluno = $this->RequisicoesPedido->Aluno->findById($aluno_id);
			$is_regular = $this->RequisicoesPedido->Aluno->isRegular($aluno_id);

			if (count($is_regular) == 1 && $is_regular[0]['regular'] == true) {
				if ($is_regular[0]['estado'] == 1) {
					$classe_estado = "alert note no-margin";
				} else {
					$classe_estado = "alert success";
				}
			} else {
				$classe_estado = "alert error";
			}
			$requisicoesTipoPedidos = $this->RequisicoesPedido->RequisicoesTipoPedido->find('list');
			$requisicoesEstadoPedidos = $this->RequisicoesPedido->RequisicoesEstadoPedido->find('list');


			$this->set(compact('aluno', 'requisicoesTipoPedidos', 'requisicoesEstadoPedidos', 'is_regular',
				'classe_estado'));
		}

		public function print_cartoes_enviados()
		{

			$this->RequisicoesPedido->contain([
				'RequisicoesTipoPedido',
				'RequisicoesEstadoPedido',
				'Aluno' => [
					'Entidade',
					'Curso' => ['UnidadeOrganica'],
				],
			]);
			$requisicoes = $this->RequisicoesPedido->find('first',
				['conditions' => ['requisicoes_tipo_pedido_id' => 6, 'requisicoes_estado_pedido_id' => 6]]);
			$this->render('index');
		}

		public function print_pedido_cartoes_pendentes()
		{

		}

		public function cartao_estudantes()
		{
			$this->RequisicoesPedido->contain([
				'RequisicoesTipoPedido',
				'RequisicoesEstadoPedido',
				'Aluno' => [
					'Entidade',
					'Curso' => ['UnidadeOrganica'],
				],
			]);
			$this->Paginate = [
				'contain'    => [
					'RequisicoesTipoPedido',
					'RequisicoesEstadoPedido',
					'Aluno' => [
						'Entidade',
						'Curso' => ['UnidadeOrganica'],
					],
				],
				'conditions' => [
					'requisicoes_tipo_pedido_id' => 6,
				],
			];

			$pedidoCartoes = $this->paginate();
			$this->set(compact('pedidoCartoes'));
		}


		public function actualizar_estado_requisicao($requisicaoID)
		{


			if ($this->request->is('post')) {


				//Obtem o funcionario
				$funcionario = $this->RequisicoesPedido->Funcionario->getByUserId(
					$this->Session->read('Auth.User.id'));


				$funcionario_id = $funcionario['id'];

				$requisicaoID = $this->request->data['RequisicoesPedido']['requisicao_id'];
				$requisicao_novo_estado = $this->request->data['RequisicoesPedido']['requisicoes_estado_pedido_id'];

				$this->RequisicoesPedido->contain('Funcionario');

				$requisicao = $this->RequisicoesPedido->findById($requisicaoID)['RequisicoesPedido'];

				$requisicao_estado_actual = $requisicao['requisicoes_estado_pedido_id'];

				$entidadeID = $requisicao['entidade_id'];

				//Actualiza o estado do pedido
				$this->RequisicoesPedido->id = $requisicaoID;
				$this->RequisicoesPedido->saveField('requisicoes_estado_pedido_id',
					$requisicao_novo_estado);


				//Regista a actualizacao de estado da requisicao
				$log = [
					'requisicoes_pedido_id' => $requisicaoID,
					'funcionario_id'        => $funcionario_id,
					'estado_anterior'       => $requisicao_estado_actual,
					'estado_actual'         => $requisicao_novo_estado,
					'data_mudanca'          => date('Y-m-d H:i:s'),
				];

				$this->RequisicoesPedido->RequisicoesPedidoLog->create();
				$this->RequisicoesPedido->RequisicoesPedidoLog->save($log);

				//Estado da requisicao
				$epd =
					$this->RequisicoesPedido->RequisicoesEstadoPedido->findById($requisicao_novo_estado);

				$nome_estado_requisicao = $epd['RequisicoesEstadoPedido']['name'];

				//Dados da entidade que fez a requisicao
				$entidade = $this->RequisicoesPedido->Entidade->findById($entidadeID);

				$telemovel_entidade = $entidade['Entidade']['telemovel'];


				//Telemovel valido
				if (trim($telemovel_entidade) != '') {


					//SMS A enviar
					$sms_text = "Actualizacao de estado da requisicao
                 $requisicaoID :  $nome_estado_requisicao. \nSIGA-UEM";

					//Envia SMS para entidade
					$this->loadModel('SmsEnviada');
					$this->SmsEnviada->sendSMS(trim($telemovel_entidade), $sms_text);

				}


				//Redireccionar para pagina de pedidos
				$this->redirect(['controller' => 'requisicoes_pedidos', 'action' => 'index']);


			} else {

				//Obtem todos os tipos de pedidos
				$requisicoesTipoPedidos = $this->RequisicoesPedido->RequisicoesTipoPedido->find('list');

				//Obtem todos estados de pedidos
				$requisicoesEstadoPedidos =
					$this->RequisicoesPedido->RequisicoesEstadoPedido->find('list');

				//Obtem os dados da requisicao pela ID
				$requisicao_array = $this->RequisicoesPedido->findById($requisicaoID);

				if (count($requisicao_array > 0)) {


					$requisicao = $requisicao_array['RequisicoesPedido'];
					$entidadeID = $requisicao['entidade_id'];

					$entidade = $this->RequisicoesPedido->Entidade->findById($entidadeID);


					$this->set(compact([
						'requisicao',
						'entidade',
						'requisicoesTipoPedidos',
						'requisicoesEstadoPedidos',
					]));

				}

			}

		}

	}
