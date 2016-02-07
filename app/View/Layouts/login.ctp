<!DOCTYPE html>
<html id="facebook" class="" lang="en">
<head>
    <?php echo $this->NewRelic->start(); ?>
    <?php
        echo $this->Html->meta(
                'favicon.ico',
                '/favicon.ico',
                ['type' => 'icon']
        );
    ?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="google-site-verification" content="ljmJ-ygf8VVfKZs11OOKbkUr3SMMQRST_2FruT3Lpss"/>
    <?php
        echo $this->Html->css('/assets/plugins/bootstrap/css/bootstrap.min.css', ['media' => 'screen']);
        echo $this->Html->css('/assets/css/login_fb.css');
    ?>
    <title id="pageTitle">SIGA-Sistema Integrado de Gestão Académica</title>
</head>
<body class="fbIndex UIPage_LoggedOut _2gsg gecko Locale_en_US" dir="ltr">
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
<div class="_li hidden-xs">
    <div id="pagelet_bluebar">
        <div id="blueBarDOMInspector" class="_21mm">
            <div id="blueBarNAXAnchor" class="_4f7n _xxp">
                <div>
                    <div class="loggedout_menubar_container">
                        <div class="clearfix loggedout_menubar">
                            <a class="lfloat _ohe" href="#" title="SIGA">
                                <?php echo $this->Html->image('logo_siga_uem.png'); ?><i class="fb_logo img sp_9vUokIDmpP8
                                sx_15c231"><u>SIGA logo</u></i>
                            </a>

                            <div class="menu_login_container rfloat _ohf">

                                <?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>
                                <table cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <td class="html7magic">
                                            <label for="email"> Numero de Estudante ou Email Institucional</label>
                                        </td>
                                        <td class="html7magic">
                                            <label for="pass">Senha de Acesso</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $this->Form->input('username', [
                                                    'div'         => false,
                                                    'label'       => false,
                                                    'class'       => 'inputtext',
                                                    'placeholder' => 'Nome de Usuario ou Email Institucional',
                                            ]) ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Form->input('password', [
                                                    'div'         => false,
                                                    'label'       => false,
                                                    'class'       => 'inputtext',
                                                    'placeholder' => 'Senha',
                                            ]) ?>

                                        </td>
                                        <td>
                                            <label class="uiButton uiButtonConfirm" id="loginbutton" for="u_0_n">
                                                <?php echo $this->Form->end([
                                                        'label'  => __('Entrar'),
                                                        'class'  => false,
                                                        'escape' => false,
                                                ]) ?>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="login_form_label_field" colspan="2">
                                            <?php
                                                $session_message = $this->Session->read('Message');
                                                if (isset($session_message) and $session_message != null) {
                                                    foreach ($session_message as $k => $v) {
                                                        echo $this->Session->flash($k);
                                                    }
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="globalContainer" class="uiContextualLayerParent">
        <div id="content" class="fb_content clearfix">
            <div>
                <div class="_50dz">

                    <style type="text/css"> .product_desc {
                            width: 440px;
                        } </style>
                    <div style="background: #edf0f5">
                        <div class="pvl" style="width: 980px; margin: 0 auto">
                            <div class="_7d _6_ _76">
                                <h1 class="inlineBlock _3ma _6n _6s _6v"
                                    style="padding: 42px 0 24px; font-size: 28px; line-height: 36px">
                                    Acesse o Sistema Integrado de Gestão Académica da Universidade Eduardo
                                    Mondlane
                                </h1>

                                <div class="mtl pbm">
                                    <div class="_6a _6b mrl" style="text-align: center; width: 55px">
                                        <?php echo $this->Html->image('estudantes.png',
                                                ['style' => "vertical-align: middle"]); ?>
                                    </div>
                                    <div class="_6a _6b product_desc">
                                        <span class="mtl _3ma _6p _6s _6v"> Estudantes </span>
                                        <span class="mlm _6q _6t _mf"> Consulte o Seu Perfil e Histórico Académico
                                        </span>
                                    </div>
                                </div>
                                <div class="mtl pbm">
                                    <div class="_6a _6b mrl" style="text-align: center; width: 55px">
                                        <?php echo $this->Html->image('docentes.png',
                                                ['style' => "vertical-align: middle"]); ?>
                                    </div>
                                    <div class="_6a _6b product_desc">
                                        <span class="mtl _3ma _6p _6s _6v"> Docentes </span>
                                        <span class="mlm _6q _6t _mf"> Faça a Gestão do seu Perfil e Turmas </span>
                                    </div>
                                </div>
                                <div class="mtl pbm">
                                    <div class="_6a _6b mrl" style="text-align: center; width: 55px">
                                        <?php echo $this->Html->image('funcionarios.png',
                                                ['style' => "vertical-align: middle"]); ?>
                                    </div>
                                    <div class="_6a _6b product_desc">
                                        <span class="mtl _3ma _6p _6s _6v"> Funcionários </span>
                                        <span class="mlm _6q _6t _mf"> Faça a Gestão das suas actividades na
                                            Universidade</span>
                                    </div>
                                </div>
                            </div>
                            <div class="_6_ _74">
                                <h1 class="mbs _3ma _6n _6s _6v" style="font-size: 36px">Como Aceder?</h1>

                                <h2 class="mbl _3m9 _6o _6s _mf">Passos para aceder o SIGA.</h2>

                                <div>
                                    <div>
                                        <div class="_58mf">
                                            <h3>Estudantes</h3>

                                            <p>Para acessar o Sistema use o Seu email institucional. Caso esteja a
                                                acessar pela primeira vez, a sua senha inicial será o seu número de
                                                estudante</p>

                                            <h3>Docentes</h3>

                                            <p>Os seus dados de acesso serão fornecidos pelo Registo Académico da
                                                sua Unidade Orgânica</p>

                                            <h3>Funcionários</h3>

                                            <p>Os seus dados de acesso serão fornecidos pela Direcção de Registo
                                                Acadêmico</p>
                                        </div>
                                        <h1 class="mbs _3ma _6n _6s _6v" style="font-size: 36px">Dúvidas?</h1>

                                        <h2 class="mbl _3m9 _6o _6s _mf">Contacte: siga-uem@googlegroups.com</h2>
                                        <h2 class="mbl _3m9 _6o _6s _mf">Contacte:
                                            https://groups.google.com/forum/#!forum/siga-uem</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pageFooter" data-referrer="page_footer">
            <div id="contentCurve"></div>
            <div role="contentinfo" aria-label="Facebook site links">
                <table class="uiGrid _51mz navigationGrid" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr class="_51mx">
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('A Universidade', 'http://uem.mz') ?>
                        </td>
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Candidaturas', '#') ?>
                        </td>
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Alumnis', '/pre_registo_alumni') ?>

                        </td>
                    </tr>
                    <tr class="_51mx">
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Sobre', '#') ?>
                        </td>
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Desenvolvedores', '#') ?>
                        </td>
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Oportunidades', '#') ?>
                        </td>
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Privacidade', '#') ?>
                        </td>
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Termos', '#') ?>
                        </td>
                        <td class="_51m- hLeft plm">
                            <?php echo $this->Html->link('Ajuda', '#') ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="mvl copyright">
                <div class="fsm fwn fcg">
                    <?php echo $this->Element('copyright') ?>
                </div>
            </div>
        </div>
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
<?php echo $this->NewRelic->end(); ?>
</body>
</html>
