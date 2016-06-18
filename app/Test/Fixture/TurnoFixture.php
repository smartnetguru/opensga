<?php

/**
 * TurnoFixture
 *
 */
class TurnoFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'Turno'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Diúrno',
            'pagamento_mensalidade' => null,
        ],
        [
            'id' => '2',
            'name' => 'Pós-Laboral',
            'pagamento_mensalidade' => null,
        ],
        [
            'id' => '3',
            'name' => 'Ensino á Distância',
            'pagamento_mensalidade' => null,
        ],
    ];

}
