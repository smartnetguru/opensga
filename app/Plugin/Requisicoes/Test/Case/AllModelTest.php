<?php

    class AllModelTest extends PHPUnit_Framework_TestSuite
    {

        public static function suite()
        {
            $suite = new CakeTestSuite('All Model related class tests');
            $suite->addTestDirectory(dirname(__FILE__)  . DS . 'Model');

            return $suite;
        }
    }