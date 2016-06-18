<?php

/**
 * Role Fixture
 */
class RoleFixture extends CakeTestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = [
        'id' => [
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'unsigned' => false,
            'key' => 'primary',
        ],
        'name' => [
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 100,
            'collate' => 'utf8_general_ci',
            'charset' => 'utf8',
        ],
        'created' => ['type' => 'datetime', 'null' => true, 'default' => null],
        'modified' => ['type' => 'datetime', 'null' => true, 'default' => null],
        'created_by' => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
        'modified_by' => ['type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false],
        'estado_objecto_id' => [
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'length' => 4,
            'unsigned' => false,
        ],
        'indexes' => [
            'PRIMARY' => ['column' => 'id', 'unique' => 1],
        ],
        'tableParameters' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'],
    ];

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-08-31 12:47:49',
            'modified' => '2015-08-31 12:47:49',
            'created_by' => 1,
            'modified_by' => 1,
            'estado_objecto_id' => 1,
        ],
    ];

}
