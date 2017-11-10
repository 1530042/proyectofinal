<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">
                    <div class="pull-left">
                        <img src="./assets/images/logo5.png" alt="" height="40">
                    </div>
                    <div class="pull-right">
                         <h4 style="text-align: right; text-transform: uppercase; letter-spacing: 3px; font-size: 2rem; text-size-adjust: 100%;">Venta de productos</h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 col-xs-12"> 
                        <div class="m-t-30">
                            <label for="inputEmail3" class="col-sm-2 form-control-label">Buscar productos</label>
                            <div class="col-sm-6">
                                <input type="text" name="codigoProducto" parsley-trigger="change" required
                                   placeholder="Ingresa el código de barras o nombre" class="form-control" id="codigoProducto">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary col-sm-12 waves-effect waves-light ">
                                    <i class="mdi mdi-barcode-scan"></i>
                                    Agregar a carrito
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row p-t-50">
                    <div class="col-sm-12">
                        <div class="m-b-20 table-responsive">
                            <table id="datatable-fixed-col" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Código de barras</th>
                                        <th>Nombre o descripción del producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Importe</th>
                                        <th>Opciones</th>
                                    </tr>    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1457880017</td>
                                        <td>Laptop HP DELL 100 gb RAM</td>
                                        <td>$14.50</td>
                                        <td>61</td>
                                        <td>$320,800</td>
                                        <td>
                                            <button type="submit" class="btn btn-danger col-sm-12 waves-effect waves-light ">
                                                <i class="mdi mdi-delete"></i>
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>1457880017</td>
                                        <td>Laptop HP DELL 100 gb RAM</td>
                                        <td>$14.50</td>
                                        <td>61</td>
                                        <td>$320,800</td>
                                        <td>
                                            <button type="submit" class="btn btn-danger col-sm-12 waves-effect waves-light ">
                                                <i class="mdi mdi-delete"></i>
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="row">
                    
                    <div class="col-sm-6 col-xs-6">
                        <div class="m-t-0 pull-left">
                            <p><small><strong>Fecha de venta: </strong></small> Jan 17, 2017</p>
                            <p><small><strong>ID de venta: </strong></small> #123456</p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-2">
                        <div class="pull-right">
                            <p id="importe"><b>Sub-total:</b>  $10.50</p>
                            <p id="iva"><b>IVA:</b> $10.50</p>
                            <h4 id="total">TOTAL: <b>$10.50</b></h4>
                        </div>
                    </div>
                </div>

                <div class="hidden-print m-t-30 m-b-30">
                    <div class="col-xs-4"></div>
                        <button type="submit" class="btn btn-custom btn-bordered col-xs-4">
                        <i class=" mdi mdi-basket-fill"></i>
                        Cobrar
                        </button>
                    <div class="col-xs-4"></div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4"></div>
                    
                    
                </div>
                
            </div>
        </div>
    </div>
    <!--end row -->    
</div>