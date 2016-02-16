<?php
    $this->extend('/Common/Layouts/default');
?>
<?php $this->start('main-navigation') ?>
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
<?php $this->end(); ?>

<?php echo $this->fetch('content');?>