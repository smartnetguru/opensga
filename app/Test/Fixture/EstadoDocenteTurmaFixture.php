<?php

/**
 * EstadoDocenteTurmaFixture
 *
 */
class EstadoDocenteTurmaFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'EstadoDocenteTurma'];

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
            'name' => 'Transferido',
        ],
        [
            'id' => '3',
            'name' => 'Demitido',
        ],
        [
            'id' => '4',
            'name' => 'Substituido',
        ],
    ];

}
