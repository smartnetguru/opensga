<?php
class AllTest extends PHPUnit_Framework_TestSuite {

    public static function suite() {
    $suite = new CakeTestSuite('All Model related class tests');
    $suite->addTestFile(TESTS . 'Case' . DS .'AllModelTest.php');
	$suite->addTestFile(TESTS . 'Case' . DS .'AllControllerTest.php');
    return $suite;
}
}