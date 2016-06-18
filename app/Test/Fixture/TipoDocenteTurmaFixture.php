<?php

/**
 * TipoDocenteTurmaFixture
 *
 */
class TipoDocenteTurmaFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'tipo_docente_turmas'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Regente',
        ],
        [
            'id' => '2',
            'name' => 'Assistente',
        ],
        [
            'id' => '3',
            'name' => 'Monitor',
        ],
    ];

}
