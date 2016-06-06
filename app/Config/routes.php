<?php

    /**
     * Routes configuration
     *
     * In this file, you set up routes to your controllers and their actions.
     * Routes are very important mechanism that allows you to freely connect
     * different urls to chosen controllers and their actions (functions).
     *
     * PHP 5
     *
     * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
     * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
     *
     * Licensed under The MIT License
     * Redistributions of files must retain the above copyright notice.
     *
     * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
     * @link          http://cakephp.org CakePHP(tm) Project
     * @package       app.config
     * @since         CakePHP(tm) v 0.2.9
     * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
     */
    /**
     * Here, we are connecting '/' (base path) to controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, /app/View/Pages/home.ctp)...
     */
    Router::connect('/', ['controller' => 'pages', 'action' => 'home']);

    Router::connect('/azgo', ['controller' => 'alunos', 'action' => 'get_estudante_azgo']);
    Router::connect('/webmail', ['controller' => 'pages', 'action' => 'webmail']);
    Router::connect('/email', ['controller' => 'pages', 'action' => 'email']);
    Router::connect('/email_oficial_da_uem', ['controller' => 'pages', 'action' => 'email']);
    Router::connect('/pre_registo_alumni', ['controller' => 'alumni_candidato_alumnis', 'action' => 'cadastro_alumni']);
    Router::connect('/docente', ['controller' => 'pages', 'action' => 'home', 'docente' => true]);
    Router::connect('/estudante', ['controller' => 'pages', 'action' => 'home', 'estudante' => true]);
    Router::connect('/opauth-complete/*', ['controller' => 'users', 'action' => 'opauth_complete']);
    Router::connect('/graduacao', ['controller' => 'candidato_graduacaos', 'action' => 'graduacao']);
    Router::connect('/googlelogin', array('controller' => 'users', 'action' => 'googlelogin'));
    Router::connect('/googlelogincallback', array('controller' => 'users', 'action' => 'google_login'));
    //Router::connect('/manual', 'http://siga.uem.mz/manual/');
    /**
     * ...and connect the rest of 'Pages' controller's urls.
     */
    Router::connect('/pages/*', ['controller' => 'pages', 'action' => 'display']);

    Router::connect(
        '/:controller/:id', ['action' => 'view'], ['id' => '[0-9]+']
    );
    Router::setExtensions(['json'], true);
    Router::parseExtensions('html', 'rss', 'pdf', 'json', 'xml');

    /**
     * Load all plugin routes.  See the CakePlugin documentation on
     * how to customize the loading of plugin routes.
     */
    CakePlugin::routes();

    /**
     * Load the CakePHP default routes. Remove this if you do not want to use
     * the built-in default routes.
     */
    require CAKE . 'Config' . DS . 'routes.php';
