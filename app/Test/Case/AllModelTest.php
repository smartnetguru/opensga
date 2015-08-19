<?php
class AllModelTest extends PHPUnit_Framework_TestSuite {

    public static function suite() {
    $suite = new CakeTestSuite('All Model related class tests');
    $suite->addTestDirectory(TESTS . 'Case' . DS . 'Model');
    return $suite;
}
}