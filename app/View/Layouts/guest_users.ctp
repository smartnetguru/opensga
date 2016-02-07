<?php echo $this->element('header'); ?>
    <!-- start: MAIN CONTAINER -->
    <div class="main-container">
        <div class="navbar-content">
            <!-- start: SIDEBAR -->
            <div class="main-navigation navbar-collapse collapse">
                <!-- start: MAIN MENU TOGGLER BUTTON -->
                <div class="navigation-toggler">
                    <i class="clip-chevron-left"></i>
                    <i class="clip-chevron-right"></i>
                </div>
                <!-- end: MAIN MENU TOGGLER BUTTON -->
                <!-- start: MAIN NAVIGATION MENU -->
                <ul class="main-navigation-menu">
                    <li class="active open">
                    <li><?php echo $this->Html->link('<i class="clip-home-3"></i>
                        <span class="title"> Pagina Inicial </span><span class="selected"></span>', '/',
                                ['escape' => false]) ?></li>
                    <a href="index.html">
                    </a>
                    </li>

                </ul>
                <!-- end: MAIN NAVIGATION MENU -->
            </div>
            <!-- end: SIDEBAR -->
        </div>
        <!-- start: PAGE -->
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
                <!-- start: PAGE CONTENT -->


                <?php
                    $session_message = $this->Session->read('Message');
                    if (isset($session_message) and $session_message != null) {
                        foreach ($session_message as $k => $v) {
                            echo $this->Session->flash($k);
                        }
                    }
                ?>
                <?php echo $this->fetch('content'); ?>

                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>