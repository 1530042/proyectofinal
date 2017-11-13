<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">    
                    <div class="pull-left">
                         <h4 style="text-align: center; text-transform: uppercase; letter-spacing: 3px; font-size: 2rem; text-size-adjust: 100%;">Productos</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix" >
                    <div class="col-sm-6 col-xs-6">
                        <div class="pull-left">
                            <p class="text-muted">Agrega, visualiza o modifica tus productos en un sólo lugar.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="pull-right">
                            <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#nuevoProducto-Modal">Nuevo producto</button>
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
                        <th>Precio de costo</th>
                        <th>Precio de venta</th>
                        <th>Categoría</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1457880017</td>
                            <td>Laptop HP DELL 100 gb RAM</td>
                            <td>$12.50</td>
                            <td>$14.50</td>
                            <td>Computo</td>
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
                            <td>1127480017</td>
                            <td>Mouse inalámbrico DELL</td>
                            <td>$120.50</td>
                            <td>$200.00</td>
                            <td>Computo</td>
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
                            <td>$2.50</td>
                            <td>$5.00</td>
                            <td>Artículos de oficina</td>
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
                            <td>1247880012</td>
                            <td>Libreta tamaño carta 100 hojas</td>
                            <td>$10.50</td>
                            <td>$15.00</td>
                            <td>Escolares</td>
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
                            <td>1127480052</td>
                            <td>Carpeta color marrón</td>
                            <td>$1.50</td>
                            <td>$5.00</td>
                            <td>Escolares</td>
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
</div>

<div id="nuevoProducto-Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Nuevo producto</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-validation">
                    <div class="form-group row">

                        <div class="row center" style="margin-top:20px; margin-bottom:20px; text-align: center"> 
                            <h3 class="m-t-0 text-dark" id="total" >Información del producto</h3>
                        </div>

                        <div class="col-sm-4">
                            <label for="codigoBarras" class="form-control-label">Código de barras<span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="codigoBarras" placeholder="Código de barras">
                        </div>

                        <div class="col-sm-8">
                            <label for="descripcion" class="form-control-label">Descripción<span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="descripcion" placeholder="Descripción del producto">
                        </div>
                    </div>                

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="precioCosto" class="form-control-label">Precio de costo<span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="precioCosto" placeholder="" value="0.00">                            
                        </div>

                        <div class="col-sm-4">
                            <label for="ganancia" class="form-control-label">Porcentaje de ganancia</label>
                            <input type="number" parsley-type="change" class="form-control"
                                   id="ganancia" value="0" max="100" min="0">
                        </div>

                        <div class="col-sm-4">
                            <label for="inputEmail3" class="form-control-label">Precio de venta</label>
                            <input type="text" parsley-type="change" class="form-control"
                                   id="precioVenta" placeholder="" value="0.00">
                        </div>
                    </div>
                    
                    <div class="row center m-t-10 m-b-20" style="text-align: center"> 
                        <h3 class="text-dark" id="total" >Información sobre almacén</h3>
                    </div>
                    <div class="form-group row pull-center">
                        <div class="col-sm-8">
                            <label for="categoria" class="form-control-label">Categoría<span class="text-danger">*</span></label>
                            <select class="form-control select col-sm-12" id="categoria">
                                <option>Selecciona una categoria</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary waves-effect waves-light col-sm-12" style="margin-top: 25px">Nueva categoría</button>
                        </div>
                    </div>
                        
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label for="cantidadMinima" class="form-control-label">Cantidad mínima<span class="text-danger">*</span></label>
                            <input type="number" required parsley-type="change" class="form-control"
                                   id="cantidadMinima" value="0" min="0">
                        </div>
                    </div>


                    <div class="form-group row" style="margin-top: 50px;">

                            <div class="col-xs-3 col-sm-3"></div>
                            <div class="col-xs-6 col-sm-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light col-sm-12">Agregar producto</button>
                            </div>
                            <div class="col-xs-3 col-sm-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--
<div class="row">
    <div class="col-lg-12">
        
            <ul class="nav nav-tabs tabs-bordered">
                <li class="active">
                    <a href="#nuevo" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Nuevo</span>
                    </a>
                </li>
                <li class="">
                    <a href="#modificar" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs">Modificar o eliminar</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="nuevo">
                    <form role="form" class="form-validation">
                        <div class="form-group row">
                            
                            <div class="row center" style="margin-top:20px; margin-bottom:20px; text-align: center"> 
                                <h3 class="m-t-0 text-dark" id="total" >Información del producto</h3>
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="codigoBarras" class="form-control-label">Código de barras<span class="text-danger">*</span></label>
                                <input type="text" required parsley-type="change" class="form-control"
                                       id="codigoBarras" placeholder="Código de barras">
                            </div>

                            <div class="col-sm-8">
                                <label for="descripcion" class="form-control-label">Descripción<span class="text-danger">*</span></label>
                                <input type="text" required parsley-type="change" class="form-control"
                                       id="descripcion" placeholder="Descripción del producto">
                            </div>
                        </div>                

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="precioCosto" class="form-control-label">Precio de costo<span class="text-danger">*</span></label>
                                <input type="text" required parsley-type="change" class="form-control"
                                       id="precioCosto" placeholder="" value="0.00">                            
                            </div>

                            <div class="col-sm-4">
                                <label for="ganancia" class="form-control-label">Porcentaje de ganancia</label>
                                <input type="number" parsley-type="change" class="form-control"
                                       id="ganancia" value="0" max="100" min="0">
                            </div>

                            <div class="col-sm-4">
                                <label for="inputEmail3" class="form-control-label">Precio de venta</label>
                                <input type="text" parsley-type="change" class="form-control"
                                       id="precioVenta" placeholder="" value="0.00">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="row center" style="margin-top:20px; margin-bottom:20px; text-align: center"> 
                                <h3 class="m-t-0 text-dark" id="total" >Información sobre almacén</h3>
                            </div>
                            
                            
                            <div class="col-sm-4">
                                <label for="departamento" class="form-control-label">Departamento<span class="text-danger">*</span></label>
                                <select class="form-control select2" id="departamento">
                                    <option>Selecciona un departamento</option>
                                </select>
                            </div>
                            
                            
                            <div class="col-sm-4">
                                <label for="cantidadActual" class="form-control-label">Cantidad actual</label>
                                <input type="number" parsley-type="change" class="form-control"
                                       id="cantidadActual" value="0" min="0">                            
                            </div>

                            <div class="col-sm-4">
                                <label for="cantidadMinima" class="form-control-label">Cantidad mínima<span class="text-danger">*</span></label>
                                <input type="number" required parsley-type="change" class="form-control"
                                       id="cantidadMinima" value="0" min="0">
                            </div>

                        </div>


                        <div class="form-group row" style="margin-top: 50px;">
                            
                                <div class="col-xs-3 col-sm-3"></div>
                                <div class="col-xs-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Agregar producto</button>
                                </div>
                                <div class="col-xs-3 col-sm-3">
                                    <button type="reset" class="btn btn-default waves-effect">Cancelar</button>
                                </div>
                                <div class="col-xs-3 col-sm-3"></div>
                            
                        </div>
                    </form>          
                </div>
                <div class="tab-pane" id="modificar">
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
                    
                    <form role="form" class="form-validation" id="modProductoInfo">
                        <div class="form-group row">
                            
                            <div class="row center" style="margin-top:20px; margin-bottom:20px; text-align: center"> 
                                <h3 class="m-t-0 text-dark" id="total" >Información del producto</h3>
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="codigoBarras" class="form-control-label">Código de barras<span class="text-danger">*</span></label>
                                <input type="text" required parsley-type="change" class="form-control"
                                       id="codigoBarras" placeholder="Código de barras">
                            </div>

                            <div class="col-sm-8">
                                <label for="descripcion" class="form-control-label">Descripción<span class="text-danger">*</span></label>
                                <input type="text" required parsley-type="change" class="form-control"
                                       id="descripcion" placeholder="Descripción del producto">
                            </div>
                        </div>                

                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="precioCosto" class="form-control-label">Precio de costo<span class="text-danger">*</span></label>
                                <input type="text" required parsley-type="change" class="form-control"
                                       id="precioCosto" placeholder="" value="0.00">                            
                            </div>

                            <div class="col-sm-4">
                                <label for="ganancia" class="form-control-label">Porcentaje de ganancia</label>
                                <input type="number" parsley-type="change" class="form-control"
                                       id="ganancia" value="0" max="100" min="0">
                            </div>

                            <div class="col-sm-4">
                                <label for="inputEmail3" class="form-control-label">Precio de venta</label>
                                <input type="text" parsley-type="change" class="form-control"
                                       id="precioVenta" placeholder="" value="0.00">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="row center" style="margin-top:20px; margin-bottom:20px; text-align: center"> 
                                <h3 class="m-t-0 text-dark" id="total" >Información sobre almacén</h3>
                            </div>
                            
                            
                            <div class="col-sm-4">
                                <label for="departamento" class="form-control-label">Departamento<span class="text-danger">*</span></label>
                                <select class="form-control select2" id="departamento">
                                    <option>Selecciona un departamento</option>
                                </select>
                            </div>
                            
                            
                            <div class="col-sm-4">
                                <label for="cantidadActual" class="form-control-label">Cantidad actual</label>
                                <input type="number" parsley-type="change" class="form-control"
                                       id="cantidadActual" value="0" min="0">                            
                            </div>

                            <div class="col-sm-4">
                                <label for="cantidadMinima" class="form-control-label">Cantidad mínima<span class="text-danger">*</span></label>
                                <input type="number" required parsley-type="change" class="form-control"
                                       id="cantidadMinima" value="0" min="0">
                            </div>

                        </div>


                        <div class="form-group row" style="margin-top: 50px;">
                            
                                <div class="col-xs-1 col-sm-3"></div>
                                <div class="col-xs-5 col-sm-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Modificar producto</button>
                                </div>
                                <div class="col-xs-5 col-sm-3">
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Eliminar producto</button>
                                </div>
                                <div class="col-xs-1 col-sm-3"></div>
                            
                        </div>
                        
                        <div class="form-group row" style="margin-top: 50px;">
                            <button type="reset" class="btn btn-default waves-effect">Cancelar</button>
                        </div>
                    </form>          
                </div>
                
            </div>
        
    </div>
</div>-->
