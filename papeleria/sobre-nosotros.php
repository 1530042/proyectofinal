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

                    <?php include_once('php/sobre-nosotros-contenido.php')?>
                    
                    <!-- end container -->

                    <?php include_once('php/inc/footer.php') ?>

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->
        

        <?php include_once('php/inc/librerias.php')?>
        
        <script>
            function myMap() {
                var myCenter = new google.maps.LatLng(23.7421803,-99.167324);
                var mapCanvas = document.getElementById("mapa");
                var mapOptions = {center: myCenter, zoom: 18};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
                
                
                var infowindow = new google.maps.InfoWindow({
                    content: "¡Aquí estamos!"
                });
                infowindow.open(map,marker);
            }
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgPd58hgivN7sVn5w83a2Te43ACsAuMQc&callback=myMap"></script>
        


    </body>
</html>