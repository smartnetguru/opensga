<?php

/**
 * RequisicoesEstadoPedidoFixture
 *
 */
class RequisicoesEstadoPedidoFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'requisicoes_estado_pedidos'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Pendente',
        ],
        [
            'id' => '2',
            'name' => 'Processamento',
        ],
        [
            'id' => '3',
            'name' => 'Despacho',
        ],
        [
            'id' => '4',
            'name' => 'Pronto',
        ],
        [
            'id' => '5',
            'name' => 'Entregue',
        ],
        [
            'id' => '6',
            'name' => 'Enviado á Faculdade',
        ],
    ];

}
