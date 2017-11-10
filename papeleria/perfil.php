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
        </script>
        
        

    </body>
</html>