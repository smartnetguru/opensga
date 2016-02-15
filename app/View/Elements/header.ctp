<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3 Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]>
<html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]>
<html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js" manifest="/cache.manifest">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <?php echo $this->NewRelic->start(); ?>
    <?php
        echo $this->Html->meta(
                'favicon.ico',
                '/favicon.ico',
                ['type' => 'icon']
        );
    ?>
    <title> <?php echo $title_for_layout; ?> - <?php echo __('Sistema Integrado de Gestão Académica') ?></title>
    <!-- start: META -->
    <meta charset="utf-8"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1"/><![endif]-->
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description"/>
    <meta content="Elisio Leonardo" name="author"/>
    <meta name="google-site-verification" content="ljmJ-ygf8VVfKZs11OOKbkUr3SMMQRST_2FruT3Lpss"/>
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <?php
        echo $this->Html->css('/assets/plugins/bootstrap/css/bootstrap.min.css', ['media' => 'screen']);
        echo $this->Html->css('/assets/plugins/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('/assets/fonts/style.css');
        echo $this->Html->css('/assets/css/main.css');
        echo $this->Html->css('/assets/css/lists.css');
        echo $this->Html->css('/assets/css/main-responsive.css');
        echo $this->Html->css('/assets/plugins/iCheck/skins/all.css');
        echo $this->Html->css('/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css');
        echo $this->Html->css('/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min'); //<link rel="stylesheet" href="css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
        echo $this->Html->css('/assets/css/theme_green.css');
        echo $this->Html->css('/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min');

        echo $this->Html->css('/assets/css/opensga.css');
        echo $this->Html->css('/assets/plugins/select2/dist/css/select2.css');
        echo $this->Html->css('/assets/plugins/select2/dist/css/select2-bootstrap.min');

    ?>
    <!--[if IE 7]>
    <?php echo $this->Html->css('/assets/plugins/font-awesome/css/font-awesome-ie7.min.css'); ?>

    <![endif]-->

    <!-- end: MAIN CSS -->

    <?php
        echo $this->Html->meta(
                'favicon.ico',
                '/favicon.ico',
                ['type' => 'icon']
        );


        $userId = $this->Session->read('Auth.User.id');
        $userName = $this->Session->read('Auth.User.username');
        $userName = str_replace('@', '.', $userName);
        $stringGA = 'ga' . $userId . $userName;
    ?>
    <?php echo $this->fetch('scriptTop'); ?>
    <script type='text/javascript'>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        (function () {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') +
                    '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>

    <script type='text/javascript'>
        googletag.cmd.push(function () {
            googletag.defineSlot('/1036552/opensga_home_728', [[320, 50], [300, 10], [400, 90], [728, 90]], 'div-gpt-ad-1448402480620-0').addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="footer-fixed">
<?php if (Configure::read('environment') == 'prod'): ?>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42847981-1', 'auto');
        ga('set', '&uid', '<?php echo $stringGA?>'); // Set the user ID using signed-in user_id.
        ga('send', 'pageview');

    </script>
<?php endif; ?>
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <!-- start: TOP NAVIGATION CONTAINER -->
    <div class="container">
        <?php if ($this->Session->read('Auth.User.id')) { ?>
            <div class="navbar-header">
                <!-- start: RESPONSIVE MENU TOGGLER -->
                <!-- start: LOGO -->
                <?php echo $this->Html->link('SIGA<i class="clip-clip"></i>' . Configure::read('OpenSGA.instituicao.sigla_logo'),
                        '/',
                        ['class' => 'navbar-brand', 'escape' => false]) ?>
                <!-- end: LOGO -->
            </div>
            <div class="navbar-tools">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                    <?php
                        $userGroups = $this->Session->read('Auth.User.Groups');
                        $groupId = CakeSession::read('Auth.User.group_id');
                        if (isset($userGroups)) {
                            echo '<li class="dropdown current-user">';
                            echo $this->Form->create('User', [
                                    'url'   => ['controller' => 'users', 'action' => 'changeLoginProfile'],
                                    'class' => 'dropdown-toggle',
                            ]);
                            echo $this->Form->input('group_id',
                                    [
                                            'options'  => $userGroups,
                                            'label'    => false,
                                            'selected' => $groupId,
                                            'onchange' => 'this.form.submit()',
                                    ]);
                            echo $this->Form->end();
                            echo '</li>';
                        }
                    ?>

                    <?php if (isset($totalTarefasPendentes)): ?>
                        <!-- start: TO-DO DROPDOWN -->

                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="clip-list-5"></i>

                                <?php if (!empty($totalTarefasPendentes)) { ?>
                                    <span class="badge">
                                    <?php echo $totalTarefasPendentes; ?>
                                    </span>
                                <?php } ?>

                            </a>
                            <ul class="dropdown-menu todo">
                                <li>
                                    <span class="dropdown-menu-title"> VOce tem <?php echo $totalTarefasPendentes; ?>
                                        tarefas pendentes</span>
                                </li>
                                <li>
                                    <div class="drop-down-wrapper">
                                        <ul>

                                        </ul>
                                    </div>
                                </li>
                                <li class="view-all">
                                    <a href="javascript:void(0)">
                                        Ver todas as tarefas <i class="icon-circle-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <!-- end: TO-DO DROPDOWN-->
                    <?php if (isset($totalNotificacoesPendentes)): ?>
                        <!-- start: NOTIFICATION DROPDOWN -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle"
                               data-close-others="true" href="#">
                                <i class="clip-notification-2"></i>

                                <?php if (!empty($totalNotificacoesPendentes)) { ?>
                                    <span class="badge">
                                    <?php echo $totalNotificacoesPendentes; ?>
                                    </span>
                                <?php } ?>

                            </a>
                            <ul class="dropdown-menu notifications">
                                <li>
                                    <span class="dropdown-menu-title"> Voce tem <?php echo $totalNotificacoesPendentes; ?>
                                        notificacoes</span>
                                </li>
                                <li>
                                    <div class="drop-down-wrapper">
                                        <ul>

                                        </ul>
                                    </div>
                                </li>
                                <li class="view-all">
                                    <a href="javascript:void(0)">
                                        Ver todas as notificacoes <i class="icon-circle-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: NOTIFICATION DROPDOWN -->
                    <?php endif ?>
                    <?php if (isset($totalMensagensPendentes)): ?>
                        <!-- start: MESSAGE DROPDOWN -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-close-others="true" data-hover="dropdown"
                               data-toggle="dropdown" href="#">
                                <i class="clip-bubble-3"></i>

                                <?php if (!empty($totalMensagensPendentes)) { ?>
                                    <span class="badge">
                                    <?php echo $totalMensagensPendentes; ?>
                                </span>
                                <?php } ?>

                            </a>
                            <ul class="dropdown-menu posts">
                                <li>
                                    <span class="dropdown-menu-title"> Voce tem <?php $totalMensagensPendentes ?>
                                        mensagens novas</span>
                                </li>
                                <li>
                                    <div class="drop-down-wrapper">
                                        <ul>
                                            <?php foreach ($headerMessages as $message): ?>
                                                <li>
                                                    <a href="<?= $this->Html->url([
                                                            'controller' => 'messages',
                                                            'action'     => 'ver_mensagem',
                                                            $message['Message']['id'],
                                                    ]) ?>">
                                                        <div class="clearfix">
                                                            <div class="thread-image">
                                                                <img alt=""
                                                                     src="<?= $message['Message']['User']['profile_picture_url'] ?>">
                                                            </div>
                                                            <div class="thread-content">
                                                                <span class="author"><?= $message['Message']['User']['username'] ?></span>
                                                                <span class="preview"><?= $message['Message']['assunto'] ?></span>
                                                                <span class="time"> <?= $message['Message']['data_envio'] ?></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </li>
                                <li class="view-all">
                                    <?php echo $this->Html->link('Ver todas as mensagens <i class="icon-circle-arrow-right"></i>',
                                            ['controller' => 'messages', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                            </ul>
                        </li>
                        <!-- end: MESSAGE DROPDOWN -->
                    <?php endif; ?>
                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">

                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <?php

                                if (Configure::read('environment') == 'prod'):
                                    //$file = '/Fotos/Estudantes/' . $aluno['Aluno']['ano_ingresso'] . '/' . $aluno['Aluno']['codigo'] . '.jpg';
                                    $file = '/Fotos/profile2.png';
                                    if (!$signedUrl = $this->AmazonS3->getSignedUrl($file)) {

                                        $file = '/Fotos/profile2.png';
                                        $signedUrl = $this->AmazonS3->getSignedUrl($file);
                                    }
                                    ?>
                                    <?php echo $this->Html->image($signedUrl,
                                        ['style' => 'max-width:30px;max-height:30px']); ?>
                                <?php endif; ?>
                            <span class="username"><?php echo $this->Session->read('Auth.User.name'); ?></span>
                            <i class="clip-chevron-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <?php echo $this->Html->link('<i class="clip-user-2"></i> Meu Perfil',
                                        ['controller' => 'users', 'action' => 'perfil'], ['escape' => false]) ?>

                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="clip-calendar"></i> Minha Agenda <span class="badge badge-danger"> Brevemente </span>',
                                        ['controller' => 'users', 'action' => 'calendario'], ['escape' => false]) ?>
                            <li>
                                <?php echo $this->Html->link('<i class="clip-bubble-4"></i> Mensagens <span class="badge badge-danger"> Brevemente </span>',
                                        ['controller' => 'messages', 'action' => 'index'], ['escape' => false]) ?>
                            </li>
                            <li class="divider"></li>
                            <!--<li>
                                <a href="utility_lock_screen.html"><i class="clip-locked"></i>
                                    &nbsp;Bloquear tela </a>
                            </li>-->
                            <li><?php echo $this->Html->link('<i class="clip-exit"></i>
										&nbsp;Sair do Sistema', [
                                        'controller' => 'users',
                                        'action'     => 'logout',
                                        'plugin'     => false,
                                ], ['escape' => false]) ?>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER DROPDOWN -->
                    <!-- start: PAGE SIDEBAR TOGGLE -->
                    <li>
                        <a class="sb-toggle" href="#"
                           onclick="ga('send', 'event', 'Links', 'chat Aberto', 'Aberto');"><i
                                    class="fa fa-outdent"></i></a>
                    </li>
                    <!-- end: PAGE SIDEBAR TOGGLE -->
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        <?php } else{ ?>
            <div class="row">
                <div class="col-sm-3">
                    <div class="navbar-header">
                        <!-- start: LOGO -->
                        <?php echo $this->Html->link('SIGA<i class="clip-clip"></i>' . Configure::read('OpenSGA.instituicao.sigla_logo'),
                                '#',
                                ['class' => 'navbar-brand', 'escape' => false]) ?>
                        <!-- end: LOGO -->
                    </div>
                </div>
                <div class="col-sm-9">
                    <?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>
                    <div class="row pull-right navbar-brand">
                        <div class="col-sm-7">
                            <?php echo $this->Form->input('username', [
                                    'div'         => false,
                                    'label'       => false,
                                    'class'       => 'form-control',
                                    'placeholder' => 'Nome de Usuario ou Email Institucional',
                            ]) ?>
                        </div>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('password', [
                                    'div'         => false,
                                    'label'       => false,
                                    'class'       => 'form-control',
                                    'placeholder' => 'Senha',
                            ]) ?>
                        </div>
                        <div class="col-sm-2">
                            <?php echo $this->Form->submit('Entrar', ['class' => 'btn btn-green', 'div' => false]) ?>
                        </div>
                    </div>
                    <?= $this->Form->end(); ?>
                </div>
            </div>
        <?php }?>
    </div>
    <!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->