<!-- start: FOOTER -->
<div class="footer clearfix">
    <div class="footer-inner">
        <?php echo $this->Element('copyright') ?>
    </div>
    <div class="footer-items">
        <span class="go-top"><i class="clip-chevron-up"></i></span>
    </div>
</div>
<!-- end: FOOTER -->
<?php //echo $this->Element('right_sidebar') ?>
<?php echo $this->Element('whats_new') ?>
<!-- start: MAIN JAVASCRIPTS -->


<!--[if lt IE 9]>
<?php
echo $this->Html->script(['/assets/plugins/respond.min']);
echo $this->Html->script(['/assets/plugins/excanvas.min']);
?>
<![endif]-->
<?= $this->AssetCompress->addScript('jquery-combined'); ?>

<?php
    echo $this->Html->script(['/assets/plugins/jquery-2.0.3.min']);
    echo $this->Html->script(['/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min']);
    echo $this->Html->script(['/assets/plugins/bootstrap/js/bootstrap.min']);
    echo $this->Html->script(['/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min']);
    echo $this->Html->script(['/assets/plugins/blockUI/jquery.blockUI']);
    echo $this->Html->script(['/assets/plugins/iCheck/jquery.icheck.min']);
    echo $this->Html->script(['/assets/plugins/perfect-scrollbar/src/jquery.mousewheel']);
    echo $this->Html->script(['/assets/plugins/less/less-1.5.0.min']);
    echo $this->Html->script(['/assets/plugins/perfect-scrollbar/src/perfect-scrollbar']);
    echo $this->Html->script(['/assets/plugins/jquery-cookie/jquery.cookie']);
    echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min',
            ['block' => 'scriptBottom']);
    echo $this->Html->script('/assets/plugins/select2/dist/js/select2.min');
    echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker');
    echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min');
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min');
    echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker');
    echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput');
    echo $this->Html->script('/assets/plugins/jquery-maskmoney/jquery.maskMoney');
    echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min');

    echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min');
    echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput');
    echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min');
    echo $this->Html->script('/assets/plugins/summernote/build/summernote.min');
    echo $this->Html->script('/assets/plugins/ckeditor/ckeditor');
    echo $this->Html->script('/assets/plugins/ckeditor/adapters/jquery');


    echo $this->Html->script(['/assets/js/main']);
    echo $this->Html->script(['/assets/js/opensga']);
?>
<script>
    $(document).ready(function () {

        Main.init();
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-green',
            radioClass: 'iradio_minimal',
            increaseArea: '20%' // optional
        });
    });

</script>
<?php echo $this->fetch('scriptBottom'); ?>

<!-- end scripts-->

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	 chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload', function () {
    CFInstall.check({mode: 'overlay'})
})</script>
<![endif]-->


<?php
    echo $this->Js->writeBuffer();
?>
<?php if (Configure::read('environment') == 'prod'): ?>
    <!--Start of Zopim Live Chat Script-->
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
            $zopim.livechat.setName('<?= $this->Session->read('Auth.User.name')?>');
            $zopim.livechat.setEmail('<?= $this->Session->read('Auth.User.username')?>');
            $zopim.livechat.setLanguage('pt');
            $zopim.livechat.setGreetings({
                'online': 'Converse Conosco',
                'offline': 'Deixe uma Mensagem'
            });
        });

    </script>

    <script type="text/javascript">
        var ua = navigator.userAgent.toLowerCase(),
                platform = navigator.platform.toLowerCase();
        platformName = ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0],
                isMobile = /ios|android|webos/.test(platformName);

        if (isMobile) {

            $zopim.livechat.addTags('Mobile');

        }
    </script>
    <!--End of Zopim Live Chat Script-->
<?php endif; ?>
<!-- end: MAIN JAVASCRIPTS -->
<?php echo $this->NewRelic->end(); ?>

</body>
<!-- end: BODY -->
</html>