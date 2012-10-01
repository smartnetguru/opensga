<?php

Configure::load('Config-Default');
Configure::load('Config-DEMO');
        
setlocale (LC_ALL, 'ptb');

// Enable the Dispatcher filters for plugin assets, and
// CacheHelper.
Configure::write('Dispatcher.filters', array(
    'AssetDispatcher',
    'CacheDispatcher'
));

// Add logging configuration.
CakeLog::config('debug', array(
    'engine' => 'FileLog',
    'types' => array('notice', 'info', 'debug'),
    'file' => 'debug',
));
CakeLog::config('error', array(
    'engine' => 'FileLog',
    'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
    'file' => 'error',
));


//CakePlugin::load('Financeiro', array('bootstrap' => false, 'routes' => false));
//CakePlugin::load('Tdd');
 //CakePlugin::load('Acl', array('bootstrap' => true));
 CakePlugin::load('DebugKit');
 CakePlugin::load('AclExtras');
 CakePlugin::load('Migrations');
 CakePlugin::load('Auditable');
 CakePlugin::load('ApiGenerator');
// CakePlugin::load('AclCaching');
CakePlugin::load('CakePdf', array('bootstrap' => true, 'routes' => true));
Configure::write('Pdf', array(
	'engine' => 'CakePdf.Tcpdf',
    
));



App::uses( 'CakeNumber', 'Utility' );

CakeNumber::addFormat( 
    'MZN', 
    array(
       'before' => 'MT', 'after' => FALSE, 
       'zero' => 0, 'places' => 2, 'thousands' => '.','wholeSymbol'=>' MT','wholePosition'=>'after',
       'decimals' => ',', 'negative' => '()', 'escape' => true
    ) 
);
