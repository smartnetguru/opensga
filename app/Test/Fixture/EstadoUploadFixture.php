<?php

/**
 * EstadoUploadFixture
 *
 */
class EstadoUploadFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'EstadoUpload'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Carregado',
        ],
        [
            'id' => '2',
            'name' => 'Em Processamento',
        ],
        [
            'id' => '3',
            'name' => 'Processado',
        ],
    ];

}
