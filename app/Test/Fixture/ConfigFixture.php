<?php

/**
 * ConfigFixture
 *
 */
class ConfigFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'Config'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'ano_lectivo',
            'value' => '2012',
            'autoload' => 1,
            'descricao' => null,
            'activo' => 0,
        ],
        [
            'id' => '2',
            'name' => 'semestre',
            'value' => '1',
            'autoload' => 1,
            'descricao' => null,
            'activo' => 0,
        ],
        [
            'id' => '3',
            'name' => 'anolectivo_id',
            'value' => '1',
            'autoload' => 1,
            'descricao' => null,
            'activo' => 0,
        ],
        [
            'id' => '4',
            'name' => 'semestrelectivo_id',
            'value' => '1',
            'autoload' => 1,
            'descricao' => null,
            'activo' => 0,
        ],
    ];

}
