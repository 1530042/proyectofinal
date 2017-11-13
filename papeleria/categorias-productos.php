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

                    <?php include_once('php/categorias-productos-contenido.php')?>
                    
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
                Morris.Bar({
                    element: 'graph',
                    data: [
                        {x: 'Artículos de oficina', y: 3},
                        {x: 'Papeleria', y: 5},
                        {x: 'Artículos de computo', y: 10},
                        {x: 'Escolares', y: 7}
                    ],
                    xkey: 'x',
                    ykeys: ['y'],
                    labels: ['Cantidad'],
                    xLabelAngle: 0
                }).on('click', function(i, row){
                    console.log(i, row);
                });
            });    
        </script>   

    </body>
</html>