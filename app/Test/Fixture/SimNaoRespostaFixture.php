<?php

/**
 * SimNaoRespostaFixture
 *
 */
class SimNaoRespostaFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'sim_nao_respostas'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'SIM',
        ],
        [
            'id' => '2',
            'name' => 'NÃO',
        ],
    ];

}
