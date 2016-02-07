<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3 Version: 1.2.3 Author: ClipTheme -->
<!--[if IE 8]>
<html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]>
<html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js" manifest="/cache.manifest">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title><?php echo __('Sistema Integrado de Gestao Academica'); ?> - <?php echo __('Login'); ?></title>
    <!-- start: META -->
    <meta charset="utf-8"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1"/><![endif]-->
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <?php
        echo $this->Html->css('/assets/plugins/bootstrap/css/bootstrap.min.css');
        echo $this->Html->css('/assets/plugins/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('/assets/fonts/style.css');
        echo $this->Html->css('/assets/css/main.css');
        echo $this->Html->css('/assets/css/main-responsive.css');
        echo $this->Html->css('/assets/plugins/iCheck/skins/all.css');
        echo $this->Html->css('/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css');
        echo $this->Html->css('/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css');
        echo $this->Html->css('/assets/css/theme_light.css');
        echo $this->Html->css('/assets/css/print.css', ['media' => 'print']);
    ?>

</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="login example2">
<?php
    $session_message = $this->Session->read('Message');
    if (isset($session_message) and $session_message != null) {
        foreach ($session_message as $k => $v) {
            echo $this->Session->flash($k);
        }
    }
?>
<?php echo $this->fetch('content'); ?>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->

<?php
    echo $this->Html->script(['libs/jquery-1.10.2']);

    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min']);
    echo $this->Html->script(['/assets/plugins/bootstrap/js/bootstrap.min']);
    echo $this->Html->script(['/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min']);
    echo $this->Html->script(['/assets/plugins/blockUI/jquery.blockUI']);
    echo $this->Html->script(['/assets/plugins/iCheck/jquery.icheck.min']);
    echo $this->Html->script(['/assets/plugins/perfect-scrollbar/src/jquery.mousewheel']);
    echo $this->Html->script(['/assets/plugins/less/less-1.5.0.min']);
    echo $this->Html->script(['/assets/plugins/perfect-scrollbar/src/perfect-scrollbar']);
    echo $this->Html->script(['/assets/plugins/jquery-cookie/jquery.cookie']);
    echo $this->Html->script(['/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette']);
    //echo $this->Html->script(array('libs/chosen.jquery.min'));
    echo $this->Html->script(['/assets/js/main']);
    echo $this->Html->script(['/assets/plugins/jquery-validation/dist/jquery.validate.min.js']);
    echo $this->Html->script(['/assets/js/login.js']);
?>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
    jQuery(document).ready(function () {
        Main.init();
        Login.init();
    });
</script>
</body>
<!-- end: BODY -->
</html>
