<!DOCTYPE html>
<html lang="en">
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

                    <?php include_once('php/dashboard-contenido.php')?>
                    
                    <!-- end container -->

                    <?php include_once('php/inc/footer.php') ?>

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->

        <?php include_once('php/inc/librerias.php') ?>
        
        <script type="text/javascript">
            // This crosses a DST boundary in the UK.
            Morris.Area({
              element: 'graph',
              data: [
                {x: '2013-03-30 22:00:00', y: 3, z: 3},
                {x: '2013-03-31 00:00:00', y: 2, z: 0},
                {x: '2013-03-31 02:00:00', y: 0, z: 2},
                {x: '2013-03-31 04:00:00', y: 4, z: 4}
              ],
              xkey: 'x',
              ykeys: ['y', 'z'],
              labels: ['Y', 'Z']
            });
        </script>
        
    </body>
</html>