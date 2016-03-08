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
        echo $this->Html->css('/assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min');

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
<body class="login example1">
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
<div class="main-login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
    <div class="logo">SIGA<i class="clip-clip"></i>UEM
    </div>
    <!-- start: LOGIN BOX -->
    <div class="box-login" style="display:block">
        <h3>Autenticacao de Aplicativo Externo</h3>
        <p>
            Por Favor, Introduza o seu Email Institucional e a sua senha do SIGA para ter acesso ao seguinte aplicativo:
            <br />SISTEMA DE GESTAO DE BIBLIOTECA
        </p>
        <form class="form-login" action="http://infomoz.net/autenticacao/sucesso.php" method="post">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> Erro na Autenticacao.
            </div>
            <fieldset>
                <div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="username" placeholder="Email Institucional">
								<i class="fa fa-user"></i> </span>
                    <!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
                    <!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
                </div>
                <div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Senha do SIGA">
								<i class="fa fa-lock"></i>
								<a class="forgot" href="?box=forgot">
                                    Esqueci a minha Senha
                                </a> </span>
                </div>
                <div class="form-actions">

                    <button type="submit" class="btn btn-bricky pull-right">
                        Autenticar <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
    <?= $this->element('copyright')?>
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
