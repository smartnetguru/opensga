<?php

/**
 * EstadoInscricaoFixture
 *
 */
class EstadoInscricaoFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'EstadoInscricao'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Activa',
        ],
        [
            'id' => '2',
            'name' => 'Admitido ao Exame',
        ],
        [
            'id' => '3',
            'name' => 'Admitido a Recorrencia',
        ],
        [
            'id' => '4',
            'name' => 'Dispensado',
        ],
        [
            'id' => '5',
            'name' => 'Aprovado no Exame',
        ],
        [
            'id' => '6',
            'name' => 'Aprovado na Recorrencia',
        ],
        [
            'id' => '7',
            'name' => 'Excluido',
        ],
        [
            'id' => '8',
            'name' => 'Desistido',
        ],
        [
            'id' => '9',
            'name' => 'Anulado',
        ],
        [
            'id' => '10',
            'name' => 'Reprovado',
        ],
    ];

}
