<?php

/**
 * MotivoEstadoAlunoFixture
 *
 */
class MotivoEstadoAlunoFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'motivo_estado_alunos'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Falta Certificado de Habilitacoes',
        ],
        [
            'id' => '2',
            'name' => 'Falta BI',
        ],
        [
            'id' => '3',
            'name' => 'Falta certificado de equivalência',
        ],
        [
            'id' => '4',
            'name' => 'Reingresso, usar o numero anterior',
        ],
        [
            'id' => '5',
            'name' => 'Mudança de curso, usar o número anterior',
        ],
        [
            'id' => '6',
            'name' => 'Certificado do nivel anterior com irregularidades',
        ],
        [
            'id' => '7',
            'name' => 'Expulso de outra instituicao de ensino superior ',
        ],
        [
            'id' => '8',
            'name' => 'Processo fisico original nao achado',
        ],
        [
            'id' => '9',
            'name' => 'Mudou de curso a maneira antiga',
        ],
        [
            'id' => '10',
            'name' => 'Ingresso Fraudulento',
        ],
    ];

}
