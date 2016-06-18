<?php

/**
 * GeneroFixture
 *
 */
class GeneroFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'Genero'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Masculino',
        ],
        [
            'id' => '2',
            'name' => 'Feminino',
        ],
    ];

}
