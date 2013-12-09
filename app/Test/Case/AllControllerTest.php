<?php
class AllControllerTest extends PHPUnit_Framework_TestSuite {

    public static function suite() {
    $suite = new CakeTestSuite('All Controller related class tests');
    $suite->addTestDirectory(TESTS . 'Case' . DS . 'Controller');
    return $suite;
}
}