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
                <?php echo $this->fetch('main-navigation'); ?>
            </div>
            <!-- end: SIDEBAR -->
        </div>
        <!-- start: PAGE -->
        <div class="main-content">

            <!-- start: PAGE HEADER -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- start: PAGE TITLE & BREADCRUMB -->
                    <?php echo $this->element('page_header'); ?>
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
                    <div id="siga-content" class="col-sm-12 top-buffer">
                        <?php echo $this->fetch('content'); ?>
                    </div>
                    <!-- end: PAGE CONTENT-->
                </div>
            </div>
            <!-- end: PAGE -->
        </div>
    </div>
    <!-- end: MAIN CONTAINER -->
<?php echo $this->element('footer'); ?>