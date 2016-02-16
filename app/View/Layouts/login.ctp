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
    <title> <?php echo $title_for_layout; ?> - <?php echo __('Sistema Integrado de Gestão Académica') ?></title>
    <!-- end: META -->
    <?php
        echo $this->NewRelic->start();
        echo $this->Html->meta(
                'favicon.ico',
                '/favicon.ico',
                ['type' => 'icon']
        );
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
        echo $this->Html->meta(
                'favicon.ico',
                '/favicon.ico',
                ['type' => 'icon']
        );

    ?>
    <!--[if IE 7]>
    <?php echo $this->Html->css('/assets/plugins/font-awesome/css/font-awesome-ie7.min.css'); ?>

    <![endif]-->

    <!-- end: MAIN CSS -->
</head>
<body class="">
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
        ga('send', 'pageview');

    </script>
<?php endif; ?>
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top  hidden-xs">
    <!-- start: TOP NAVIGATION CONTAINER -->
    <div class="container">
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
            <?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>
            <div class="col-sm-9">

                <div class="row pull-right navbar-brand">
                    <div class="col-sm-6">
                        <?php echo $this->Form->input('username', [
                                'div'         => false,
                                'label'       => false,
                                'class'       => 'form-control',
                                'placeholder' => 'Nome de Usuario ou Email Institucional',
                        ]) ?>
                    </div>
                    <div class="col-sm-4">
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

            </div>
            <?= $this->Form->end(); ?>
        </div>
    </div>

</div>
<div class="main-container hidden-xs">
    <div class="navbar-content">
        <!-- start: SIDEBAR -->
        <div class="main-navigation navbar-collapse collapse">
            <!-- start: MAIN NAVIGATION MENU -->
            <div class="navigation-toggler">
                <i class="clip-chevron-left"></i>
                <i class="clip-chevron-right"></i>
            </div>
            <ul class="main-navigation-menu">
                <li><?php echo $this->Html->link(__('<i class="clip-home-3"></i>Pagina Inicial'),
                            '/', ['escape' => false]) ?></li>
                <li><?php echo $this->Html->link(__('<i class="clip-home-3"></i>Alumnis'),
                            '/pre_registo_alumnis', ['escape' => false]) ?></li>
                <li><?php echo $this->Html->link(__('<i class="clip-home-3"></i>Artigos'),
                            '/artigos', ['escape' => false]) ?></li>
                <li><?php echo $this->Html->link(__('<i class="clip-home-3"></i>Email Institucional'),
                            '/email_oficial_uem', ['escape' => false]) ?></li>
            </ul>
            <!-- end: MAIN NAVIGATION MENU -->
        </div>
        <!-- end: SIDEBAR -->
    </div>
    <div class="main-content">
        <div class="container">
            <!-- start: PAGE HEADER -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- start: PAGE TITLE & BREADCRUMB -->
                    <?php
                        echo $this->BreadCumbs->getCrumbList(['class' => 'breadcrumb'], [
                                'text'   => '<li>
                            <i class="clip-home-3"></i>
                            <a href="#">
                                Home
                            </a>
                        </li>',
                                'url'    => '/',
                                'escape' => false,
                        ]);
                    ?>
                    <?php if (isset($siga_page_title)) { ?>
                        <div class="page-header">
                            <h1><?php echo $siga_page_title ?>
                                <small><?php echo $siga_page_overview ?> </small>
                            </h1>
                        </div>
                    <?php } ?>
                    <!-- end: PAGE TITLE & BREADCRUMB -->
                </div>
            </div>
            <!-- end: PAGE HEADER -->
            <div class="row">
                <div class="col-sm-10 col-sm-offset-2">
                    <?php
                        $session_message = $this->Session->read('Message');
                        if (isset($session_message) and $session_message != null) {
                            foreach ($session_message as $k => $v) {
                                echo $this->Session->flash($k);
                            }
                        }
                    ?>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <h1 class="inlineBlock _3ma _6n _6s _6v"
                        style="padding: 0 0 24px; font-size: 28px; line-height: 36px">
                        Acesse o Sistema Integrado de Gestão Académica da Universidade Eduardo
                        Mondlane
                    </h1>

                    <div class="row">
                        <div class="col-sm-2">
                            <?php echo $this->Html->image('estudantes.png',
                                    ['style' => "vertical-align: middle"]); ?>
                        </div>
                        <div class="col-sm-10">
                            <h4><b>Estudantes</b> Consulte o Seu Perfil e Histórico Académico</h4>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <?php echo $this->Html->image('docentes.png',
                                    ['style' => "vertical-align: middle"]); ?>
                        </div>
                        <div class="col-sm-10">
                            <h4><b>Docentes</b> Faça a Gestão do seu Perfil e Turmas </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <?php echo $this->Html->image('funcionarios.png',
                                    ['style' => "vertical-align: middle"]); ?>
                        </div>
                        <div class="col-sm-10">
                            <h4><b>Funcionários</b> Faça a Gestão das suas actividades na
                                Universidade</h4>
                        </div>
                    </div>
                    <?php $artigos = $this->requestAction([
                            'controller' => 'artigos',
                            'action'     => 'artigos_recentes',
                            'plugin'     => 'artigos',
                            1,
                    ]);?>
                    <?= $this->element('Artigos.artigos_recentes', ['artigos'=>$artigos]); ?>
                </div>
                <div class="col-sm-4">
                    <div class="_6_ _74">
                        <h1 class="mbs _3ma _6n _6s _6v" style="font-size: 36px">Como Aceder?</h1>

                        <h2 class="mbl _3m9 _6o _6s _mf">Passos para aceder o SIGA.</h2>

                        <div>
                            <div>
                                <div class="_58mf">
                                    <h3>Estudantes</h3>

                                    <p>Para acessar o Sistema use o Seu email institucional. Caso esteja
                                        a
                                        acessar pela primeira vez, a sua senha inicial será o seu número
                                        de
                                        estudante</p>

                                    <h3>Docentes</h3>

                                    <p>Os seus dados de acesso serão fornecidos pelo Registo Académico
                                        da
                                        sua Unidade Orgânica</p>

                                    <h3>Funcionários</h3>

                                    <p>Os seus dados de acesso serão fornecidos pela Direcção de Registo
                                        Acadêmico</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer clearfix hidden-xs">
    <div class="footer-inner">
        <?php echo $this->Element('copyright') ?>
    </div>
    <div class="footer-items">
        <span class="go-top"><i class="clip-chevron-up"></i></span>
    </div>
</div>
<div class="main-login col-sm-4 col-sm-offset-4 visible-xs">
    <div class="logo">SIGA<i class="clip-clip"></i>UEM
    </div>
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>Aceda Ao Sistema Integrado de Gestão Academica da UEM</h3>
        <p>
            Por favor introduza seus dados para se autenticar
        </p>
        <?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>
        <fieldset>
            <div class="form-group">
							<span class="input-icon">
                                <?php echo $this->Form->input('username', [
                                        'div'         => false,
                                        'label'       => false,
                                        'class'       => 'form-control',
                                        'placeholder' => 'Nome de Usuario ou Email Institucional',
                                ]) ?>

                                <i class="fa fa-user"></i> </span>
            </div>
            <div class="form-group form-actions">
							<span class="input-icon">
                                <?php echo $this->Form->input('password', [
                                        'div'         => false,
                                        'label'       => false,
                                        'class'       => 'form-control password',
                                        'placeholder' => 'Senha',
                                ]) ?>

                                <i class="fa fa-lock"></i>
								<a class="forgot" href="#">
                                    Não Sabe como Aceder? Clique Aqui
                                </a> </span>
            </div>
            <div class="form-actions">

                <?php echo $this->Form->end([
                        'label'  => __('Entrar'),
                        'class'  => 'btn btn-bricky pull-right',
                        'escape' => false,
                ]) ?>

            </div>

            <div class="new-account">
                <?php
                    $session_message = $this->Session->read('Message');
                    if (isset($session_message) and $session_message != null) {
                        foreach ($session_message as $k => $v) {
                            echo $this->Session->flash($k);
                        }
                    }
                ?>
            </div>
        </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->

</div>
<?php if (Configure::read('environment') == 'prod'): ?>
    <script type="text/javascript">
        window.$zopim || (function (d, s) {
            var z = $zopim = function (c) {
                z._.push(c)
            }, $ = z.s =
                    d.createElement(s), e = d.getElementsByTagName(s)[0];
            z.set = function (o) {
                z.set._.push(o)
            };
            z._ = [];
            z.set._ = [];
            $.async = !0;
            $.setAttribute("charset", "utf-8");
            $.src = "//v2.zopim.com/?3WnXWSTZHxq02GapZvrf8igf2fk66CfB";
            z.t = +new Date;
            $.type = "text/javascript";
            e.parentNode.insertBefore($, e)
        })(document, "script");
    </script>
    <script>

        $zopim(function () {
            $zopim.livechat.setLanguage('pt');
            $zopim.livechat.setGreetings({
                'online': 'Converse Conosco',
                'offline': 'Deixe uma Mensagem'
            });
        });

    </script>
<?php endif; ?>
<?php echo $this->NewRelic->end(); ?>
</body>
</html>
