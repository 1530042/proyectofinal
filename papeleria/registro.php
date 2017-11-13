<!DOCTYPE html>
<html lang="en">
    <?php include_once('php/inc/head.php')?>
    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.html" class="text-success">
                                            <span><img src="assets/images/logo5.png" alt="" height="30"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form role="form" class="form-validation">
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="usuario" class="form-control-label">Usuario <span class="text-danger">*</span></label>
                                                <input type="text" required parsley-type="change" class="form-control"
                                                       id="codigoBarras" placeholder="Ej. 'juan123'">
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="nombre" class="form-control-label">Nombre <span class="text-danger">*</span></label>
                                                <input type="text" required parsley-type="change" class="form-control"
                                                       id="apellidos" placeholder="Ej. 'Juan'">
                                            </div>
                                        </div>  
                                        
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="apellidoP" class="form-control-label">Apellido Paterno <span class="text-danger">*</span></label>
                                                <input type="text" required parsley-type="change" class="form-control"
                                                       id="codigoBarras" placeholder="Ej. 'Matínez'">
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="apellidoM" class="form-control-label">Apellido materno</label>
                                                <input type="text" parsley-type="change" class="form-control"
                                                       id="apellidoM" placeholder="Ej. 'de la Cruz'">
                                            </div>
                                        </div>                

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label for="precioCosto" class="form-control-label">Coreo electrónico <span class="text-danger">*</span></label>
                                                <input type="email" required parsley-type="change" class="form-control"
                                                       id="email" placeholder="Ej. 'juan@correo.com'" value="">                            
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="ganancia" class="form-control-label">Contraseña <span class="text-danger">*</span></label>
                                                <input type="password" required parsley-type="change" class="form-control"
                                                       id="contrasena">
                                            </div>

                                            
                                        </div>


                                        <div class="form-group row" style="margin-top: 50px;">

                                                <div class="col-xs-3 col-sm-3"></div>

                                                <div class="col-xs-6 col-sm-6">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light col-sm-12">
                                                        Registrar
                                                    </button>
                                                </div>

                                                <div class="col-xs-3 col-sm-3"></div>
                                        </div>
                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">¿Ya tienes una cuenta?  <a href="./index.php" class="text-dark m-l-5">Inicia sesión</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>