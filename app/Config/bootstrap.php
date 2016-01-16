<?php
    setlocale(LC_ALL, 'ptb');
    App::build(['Plugin' => [ROOT . DS . 'Plugin' . DS]]);
    require ROOT . DS . 'Vendor' . DS . 'autoload.php';

// Do plural pro singular
    Inflector::rules('singular', [
        'rules'       => [
            '/^(.*)(oes|aes|aos)$/i' => '\1ao',
            '/^(.*)(ns)$/i'          => '\1m',
            '/^(.*)(es)$/i'          => '\1e',
        ],
        'irregular'   => [

            'paes'   => 'pao',
            'perfis' => 'perfil'
        ],
        'uninflected' => []
    ]);

// Do singular pro plural
    Inflector::rules('plural', [
        'rules'       => [
            '/^(.*)ao$/i' => '\1oes',
            '/^(.*)ao$/i' => '\1aos',
            '/^(.*)m$/i'  => '\1ns',
            '/^(.*)e$/i'  => '\1es',
        ],
        'irregular'   => [

            'pao'    => 'paes',
            'perfil' => 'perfis'
        ],
        'uninflected' => []
    ]);

    CakePlugin::load('Auditable');
    CakePlugin::load('BoostCake');
    CakePlugin::load('DatabaseLog');
    CakePlugin::load('DebugKit');
    CakePlugin::load('AclExtras');
    CakePlugin::load('Migrations');
    CakePlugin::load('ReportManager', ['bootstrap' => true]);
    CakePlugin::load('Scheduler');
    CakePlugin::load('NewRelic');


    CakePlugin::load('Requisicoes', ['bootstrap' => false, 'routes' => false]);
    CakePlugin::load('CakeRabbit', ['bootstrap' => true]);
    CakePlugin::load('Api', ['bootstrap' => false, 'routes' => false]);
    CakePlugin::load('Cooperacao', ['bootstrap' => false, 'routes' => false]);

    App::uses('DatabaseReader', 'Lib');
    App::uses('CakeNumber', 'Utility');
    App::uses('ClassRegistry', 'Utility');
    App::uses('NotificationListener', 'Event');
    App::uses('CakeEventManager', 'Event');
    App::uses('CakeEventListener', 'Event');

    Configure::config('database', new DatabaseReader());
    Configure::load('bootstrap_siga');
    Configure::load('siga_constants');
    Configure::load('database', 'database');


    /**
     * Configure the Error handler used to handle errors for your application.  By default
     * ErrorHandler::handleError() is used.  It will display errors using Debugger, when debug > 0
     * and log errors with CakeLog when debug = 0.
     *
     * Options:
     *
     * - `handler` - callback - The callback to handle errors. You can set this to any callback type,
     *    including anonymous functions.
     * - `level` - int - The level of errors you are interested in capturing.
     * - `trace` - boolean - Include stack traces for errors in log files.
     *
     * @see ErrorHandler for more information on error handling and configuration.
     */
    Configure::write('Error', [
        'handler' => 'ErrorHandler::handleError',
        'level'   => E_ALL,
        'trace'   => true
    ]);


    /**
     * Configure the Exception handler used for uncaught exceptions.  By default,
     * ErrorHandler::handleException() is used. It will display a HTML page for the exception, and
     * while debug > 0, framework errors like Missing Controller will be displayed.  When debug = 0,
     * framework errors will be coerced into generic HTTP errors.
     *
     * Options:
     *
     * - `handler` - callback - The callback to handle exceptions. You can set this to any callback type,
     *   including anonymous functions.
     * - `renderer` - string - The class responsible for rendering uncaught exceptions.  If you choose a custom class you
     *   should place the file for that class in app/Error. This class needs to implement a render method.
     * - `log` - boolean - Should Exceptions be logged?
     *
     * @see ErrorHandler for more information on exception handling and configuration.
     */
    Configure::write('Exception', array(
        'handler' => 'ErrorHandler::handleException',
        'renderer' => 'ExceptionRenderer',
        'log' => true
    ));

    if(Configure::read('debug')!=0){
        CakePlugin::load('WhoopsCakephp', array('bootstrap' => true));
    }


    
    Configure::write('Dispatcher.filters', [
        'AssetDispatcher',
        'CacheDispatcher',
        'NewRelic.NewRelicFilter'
    ]);
    App::uses('CakeLog', 'Log');
    CakeLog::config('default', ['engine' => 'Database']);


    CakeNumber::addFormat(
        'MZN', [
            'before'        => 'MT',
            'after'         => false,
            'zero'          => 0,
            'places'        => 2,
            'thousands'     => '.',
            'wholeSymbol'   => ' MT',
            'wholePosition' => 'after',
            'decimals'      => ',',
            'negative'      => '()',
            'escape'        => true
        ]
    );




//$matricula = ClassRegistry::init('Matricula')
    $notifications = new NotificationListener();
    CakeEventManager::instance()->attach($notifications);


// PHP5.3 namespace loader for Cake2.x
    spl_autoload_register(function ($class) {
        foreach (App::path('Vendor') as $base) {
            $path = $base . str_replace('\\', DS, $class) . '.php';
            if (file_exists($path)) {
                include $path;

                return;
            }
        }
    });




    Configure::write('SchedulerShell.processTimeout',5*60);
    Configure::write('SchedulerShell.jobs', array(
       // 'CleanUp' => array('interval' => 'next day 5:00', 'task' => 'CleanUp'),// tomorrow at 5am
        //'Newsletters' => array('interval' => 'PT15M', 'task' => 'Newsletter') //every 15 minutes
        'Aniversario'=>array('interval'=>'next day 5:00','task'=>'Aniversarios')
    ));
    Configure::write('NewRelic.ignoreRoutes', array(
        //'/admin/:controller/:action/*',
        // '/users/import'
    ));


    /**
     * https://cakephp.lighthouseapp.com/projects/42880/docs-firecake
     *
     * @param  mixed $data     data to log
     * @param  string $logLevel log, info, warn, error
     * @param  string $label    give your data some label
     *
     */
    function fclog($data, $logLevel = 'log', $label = null) {
        if (Configure::read() > 0) {
            App::uses('FireCake', 'DebugKit.Lib');
            FireCake::$logLevel($data, $label);
        }
    }

CakePlugin::load('Cea', array('bootstrap' => false, 'routes' => false));
