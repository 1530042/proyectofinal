<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">    
                    <div class="pull-left">
                         <h4 style="text-align: center; text-transform: uppercase; letter-spacing: 3px; font-size: 2rem; text-size-adjust: 100%;">Inventario</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">
                    <div class="col-sm-6 col-xs-6">
                        <div class="pull-left">
                            <p class="text-muted">Actualiza tu inventario de una manera fácil y rápida.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="pull-right">
                            <!--<button type="button" class="btn btn-primary btn-rounded"></button>-->
<!--                            <button type="button" class="btn btn-primary btn-rounded">Modificar producto</button>-->
                            <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#busqueda-Modal">Agregar a inventario</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row p-t-25">
        <div class="col-sm-12">
            <div class="m-b-20 table-responsive">

                <h5>Listado de productos</h5>

                <table id="datatable-responsive"
                       class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Nombre o descripción del producto</th>
                        <th>Cantidad mínima</th>
                        <th>Cantidad actual</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1127480017</td>
                            <td>Mouse inalámbrico DELL</td>
                            <td>3</td>
                            <td>12</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-custom waves-effect waves-light ">
                                    <i class=" mdi mdi-backup-restore"></i>
                                </button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light ">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>1237880012</td>
                            <td>Boligrafo punto fino</td>
                            <td>3</td>
                            <td>10</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-custom waves-effect waves-light ">
                                    <i class=" mdi mdi-backup-restore"></i>
                                </button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light ">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
    
   
    
    <div class="row m-t-10">
        <div class="col-sm-6 pull-center">
            <h5 class="m-t-10">Productos más vendidos</h5>
            <p class="text-muted font-13 m-b-30">
                Aquí visualizarás cuáles son los productos que más has vendido.
            </p>

            <div id="graph" style="heigh: 200px; text-aling:center"></div>
        </div>
        
        <div class="col-sm-6">
            <div class="m-b-20 table-responsive">

                 <h5 class="m-t-10">Productos bajos en stock</h5>
                <p class="text-muted font-13 m-b-30">
                    Visualiza los productos bajos en stock.
                </p>

                <table id="datatable-responsive"
                       class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Nombre o descripción del producto</th>
                        <th>Cantidad actual</th>
                        <th>Cantidad mínima</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>


<div id="busqueda-Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Agregar a inventario</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-validation" id="busquedaProducto">
                    <div class="form-group row">

                        <div class="row center" style="margin-top:20px; margin-bottom:20px; text-align: center"> 
                            <h3 class="m-t-0 text-dark" id="total" >Buscar producto</h3>
                        </div>

                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <label for="codigoBarrasB" class="form-control-label">Código de barras<span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="codigoBarrasB" placeholder="Código de barras">
                        </div>
                        <div class="col-sm-3"></div>

                    </div>

                    <div class="form-group row">
                        <div class="col-xs-4 col-sm-4"></div>
                        <div class="col-xs-4 col-sm-4">
                            <button type="submit" class="btn btn-primary col-xs-12 waves-effect waves-light">Buscar producto</button>
                        </div>
                        <div class="col-xs-4 col-sm-4"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!--
<div class="container">
    <div class="m-b-20 p-t-50">
        <h4 class="header-title">Inventario</h4>
        <form role="form" class="form-validation" id="busquedaProducto">
            <div class="form-group row">

                <div class="row center" style="margin-top:20px; margin-bottom:20px; text-align: center"> 
                    <h3 class="m-t-0 text-dark" id="total" >Buscar producto</h3>
                </div>

                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <label for="codigoBarrasB" class="form-control-label">Código de barras<span class="text-danger">*</span></label>
                    <input type="text" required parsley-type="change" class="form-control"
                           id="codigoBarrasB" placeholder="Código de barras">
                </div>
                <div class="col-sm-4"></div>

            </div>

            <div class="form-group row">
                <div class="col-xs-4 col-sm-4"></div>
                <div class="col-xs-4 col-sm-4">
                    <button type="submit" class="btn btn-primary col-xs-12 waves-effect waves-light">Buscar producto</button>
                </div>
                <div class="col-xs-4 col-sm-4"></div>
            </div>
        </form>
    </div>
</div>
-->


