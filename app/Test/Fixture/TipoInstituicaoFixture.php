<?php

/**
 * TipoInstituicaoFixture
 *
 */
class TipoInstituicaoFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'TipoInstituicao'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Publica',
        ],
        [
            'id' => '2',
            'name' => 'Privada',
        ],
    ];

}
