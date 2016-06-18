<?php

/**
 * EstadoObjectoFixture
 *
 */
class EstadoObjectoFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'EstadoObjecto'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Activo',
        ],
        [
            'id' => '2',
            'name' => 'Inactivo',
        ],
        [
            'id' => '3',
            'name' => 'Removido',
        ],
    ];

}
