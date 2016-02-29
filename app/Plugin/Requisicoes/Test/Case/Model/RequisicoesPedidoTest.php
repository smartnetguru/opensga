<?php
App::uses('RequisicoesPedido', 'Requisicoes.Model');

/**
 * RequisicoesPedido Test Case
 *
 */
class RequisicoesPedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.requisicoes.requisicoes_pedido',
		'app.aluno',
		'app.entidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequisicoesPedido = ClassRegistry::init('Requisicoes.RequisicoesPedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequisicoesPedido);

		parent::tearDown();
	}

	public function testGravaRequisicao(){
		$data = array(
			'RequisicoesPedido' => array(
				'aluno_id' => '2',
				'curso_id' => '49',
				'numero_pedido' => '',
				'requisicoes_tipo_pedido_id' => '2',
				'novo_tipo_requisicao' => '',
				'requisicoes_estado_pedido_id' => '1',
				'data_pedido' => '2016-02-29 01:25:56',
				'estudante_bolseiro' => '0',
				'funcionario_id'=>1
			)
		);

		$resultado = $this->RequisicoesPedido->gravaRequisicao($data);
		$this->assertTrue($resultado);
	}

}
