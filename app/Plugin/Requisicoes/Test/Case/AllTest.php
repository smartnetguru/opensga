<?php

    class AllTest extends PHPUnit_Framework_TestSuite
    {

        public static function suite()
        {
            $suite = new CakeTestSuite('All Tests');
            $suite->addTestFile(dirname(__FILE__)  . DS . 'AllModelTest.php');
            $suite->addTestFile(dirname(__FILE__)  . DS . 'AllControllerTest.php');

            return $suite;
        }
    }