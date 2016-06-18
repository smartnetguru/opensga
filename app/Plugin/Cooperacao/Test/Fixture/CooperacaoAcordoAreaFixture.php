<?php

/**
 * CooperacaoAcordoAreaFixture
 *
 */
class CooperacaoAcordoAreaFixture extends CakeTestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'cooperacao_acordo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'cooperacao_area_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
        'created_by' => array('type' => 'integer', 'null' => true, 'default' => null),
        'modified_by' => array('type' => 'integer', 'null' => true, 'default' => null),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => 1),
            'cooperacao_acordo_areas_acordos_idx' => array('column' => 'cooperacao_acordo_id', 'unique' => 0),
            'cooperacao_acordos_areas_areas_idx' => array('column' => 'cooperacao_area_id', 'unique' => 0)
        ),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id' => 1,
            'cooperacao_acordo_id' => 1,
            'cooperacao_area_id' => 1,
            'created' => '2013-11-18 09:13:02',
            'modified' => '2013-11-18 09:13:02',
            'created_by' => 1,
            'modified_by' => 1
        ),
    );

}
