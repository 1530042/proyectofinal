<!DOCTYPE html>
<html lang="en">
    <!-- Summernote css -->
    <link href="./assets/plugins/summernote/summernote.css" rel="stylesheet" />
    
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

                    <?php include_once('php/perfil-contenido.php')?>
                    <!-- end container -->

                    <?php include_once('php/inc/footer.php') ?>

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->

        
        <?php include_once('php/inc/librerias.php') ?>
        
        <script src="./assets/plugins/summernote/summernote.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });

            var day_data = [
              {"elapsed": "Enero", "value": 34},
              {"elapsed": "Febrero", "value": 24},
              {"elapsed": "Marzo", "value": 3},
              {"elapsed": "Abril", "value": 12},
              {"elapsed": "Mayo", "value": 13},
              {"elapsed": "Junio", "value": 22},
              {"elapsed": "Agosto", "value": 5},
              {"elapsed": "Septiembre", "value": 26},
              {"elapsed": "Octubre", "value": 12},
              {"elapsed": "Noviembre", "value": 19},
                {"elapsed": "Diciembre", "value": 29}
            ];
            Morris.Line({
                element: 'graph',
                data: day_data,
                xkey: 'elapsed',
                ykeys: ['value'],
                labels: ['value'],
                xLabelAngle: 60,
                parseTime: false
            });
        </script>
        
        

    </body>
</html>