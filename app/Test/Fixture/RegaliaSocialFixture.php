<?php

/**
 * RegaliaSocialFixture
 *
 */
class RegaliaSocialFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['model' => 'RegaliaSocial'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Nenhuma',
        ],
        [
            'id' => '2',
            'name' => 'Bolsa Completa',
        ],
        [
            'id' => '3',
            'name' => 'Isenção',
        ],
        [
            'id' => '4',
            'name' => 'Redução',
        ],
    ];

}
