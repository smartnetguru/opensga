<?php

/**
 * CakeResque configuration file
 *
 * Default settings for Resque workers and queues.
 *
 * PHP version 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author        Wan Qi Chen <kami@kamisama.me>
 * @copyright     Copyright 2012, Wan Qi Chen <kami@kamisama.me>
 * @link          http://cakeresque.kamisama.me
 * @package       CakeResque
 * @subpackage	  CakeResque.Config
 * @since         3.4.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Configure the default value for Resque
 *
 * ## Mandatory indexes :
 * Redis
 * 		Redis server settings
 * Worker
 * 		Workers default settings
 * Resque
 * 		Default values used to init the php-resque library path
 *
 * ## Optional indexes :
 * Queues
 * 		An array of queues to start with Resque::load()
 * 		Used when you have multiple queues, as you don't need
 * 		to start each queues individually each time you start Resque
 * Env
 * 		Additional environment variables to pass to Resque
 * Log
 * 		Log handler and its arguments, to save the log with Monolog
 *
 *
 * There are many ways to configure the plugin:
 *
 * 1. This file is automagically loaded by the bootstrapping process, when no 'CakeResque'
 * configuration key exists.
 *
 *   CakePlugin::load('CakeResque', array('bootstrap' => true));
 *
 * 2. If a 'CakeResque' configuration key already exists, the default configuration will not be loaded,
 * and the 'CakeResque' key is expected to contain all the values present in the default configuration.
 *
 *   Configure::load('my_cakeresque_config');
 *   CakePlugin::load('CakeResque', array('bootstrap' => true));
 *
 * 3. Another way to configure the plugin is to load it using a custom bootstrap file.
 *
 *   CakePlugin::load('CakeResque', array('bootstrap' => 'my_bootstrap'));
 *
 *   // APP/Plugin/CakeResque/Config/my_bootstrap.php
 *   require_once dirname(__DIR__) . DS . 'Lib' . DS . 'CakeResque.php';
 *   $config = array(); // Custom configuration
 *   CakeResque::init($config);
 *
 * @see CakeResque::init(), CakeResque::loadConfig().
 */
    require_once __DIR__.'/../vendor/autoload.php';
