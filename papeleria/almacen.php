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

                    <?php include_once('php/almacen-contenido.php')?>
                    
                    <!-- end container -->

                    <?php include_once('php/inc/footer.php') ?>

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->
        
        <?php include_once('php/inc/librerias.php')?>
        
        <script type="text/javascript">
            $( document ).ready(function() {
                Morris.Donut({
                  element: 'graph',
                  data: [
                    {value: 70, label: 'foo'},
                    {value: 15, label: 'bar'},
                    {value: 10, label: 'baz'},
                    {value: 5, label: 'A really really long label'}
                  ],
                  formatter: function (x) { return x + "%"}
                }).on('click', function(i, row){
                  console.log(i, row);
                });
            });    
        </script>   
        
        
    </body>
</html>