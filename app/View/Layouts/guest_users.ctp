<?php echo $this->element('header'); ?>
    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
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
                    </div>
                <div class="row">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>

    </div>
    <!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>