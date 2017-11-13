<!DOCTYPE html>
<html lang="en">
    
    <!--calendar css-->
    <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />
    
    <?php include_once('php/inc/head.php')?>
    
    <body>
        <div id="page-wrapper">
            <!-- Top Bar Start -->
            <?php include_once('php/inc/top-bar.php')?>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?php include_once('php/inc/sidebar.php')?>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <?php include_once('php/calendario-contenido.php')?>
                    
                    <!-- end container -->

                    <?php include_once('php/inc/footer.php') ?>

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <?php include_once('php/inc/librerias.php')?>
        
        <!-- Jquery-Ui -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>
        
        

    </body>
</html>