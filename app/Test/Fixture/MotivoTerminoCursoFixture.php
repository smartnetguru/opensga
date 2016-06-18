<?php

/**
 * MotivoTerminoCursoFixture
 *
 */
class MotivoTerminoCursoFixture extends CakeTestFixture
{

    /**
     * Import
     *
     * @var array
     */
    public $import = ['table' => 'motivo_termino_cursos'];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '1',
            'name' => 'Concluiu',
        ],
        [
            'id' => '2',
            'name' => 'Mudou de Curso',
        ],
        [
            'id' => '3',
            'name' => 'Cancelou Matricula',
        ],
        [
            'id' => '4',
            'name' => 'Desistiu',
        ],
        [
            'id' => '5',
            'name' => 'Expulso',
        ],
        [
            'id' => '6',
            'name' => 'Fora do Tempo de Estudos',
        ],
    ];

}
