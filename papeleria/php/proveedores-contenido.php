<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">    
                    <div class="pull-left">
                         <h4 style="text-align: center; text-transform: uppercase; letter-spacing: 3px; font-size: 2rem; text-size-adjust: 100%;">Proveedores</h4>
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
                            <p class="text-muted">Administra la información de tus proveedores fácilmente.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="pull-right">
                            <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#nuevoProducto-Modal">Agregar nuevo proveedor</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row p-t-25">
        <div class="col-sm-12">
            <div class="m-b-50 table-responsive">

                <h5>Listado de productos</h5>

                <table id="datatable-responsive"
                       class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th>RFC</th>
                        <th>Nombre del proveedor</th>
                        <th>Fecha de incorporación</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1234567891234</td>
                            <td>El papelero, S.A. de C.V.</td>
                            <td>10/08/2017</td>
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
                            <td>1234567891234</td>
                            <td>Venta de electrónicos, S.A. de C.V.</td>
                            <td>10/08/2017</td>
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
                <h4 class="modal-title">Nuevo proveedor</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-validation">
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label for="codigoBarras" class="form-control-label">Nombre <span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="codigoBarras" placeholder="Ej. 'Juan'">
                        </div>

                        <div class="col-sm-6">
                            <label for="apellidos" class="form-control-label">Apellidos <span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="apellidos" placeholder="Ej. 'de la Cruz'">
                        </div>
                    </div>                

                    <div class="form-group row">
                        <div class="col-sm-4">
                            <label for="precioCosto" class="form-control-label">RFC<span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="precioCosto" placeholder="Escribe tu RFC" value="">                            
                        </div>

                        <div class="col-sm-4">
                            <label for="ganancia" class="form-control-label">Número telefónico <span class="text-danger">*</span></label>
                            <input type="text" parsley-type="change" class="form-control"
                                   id="ganancia" placeholder="(834) 213 - 76 - 38" >
                        </div>

                        <div class="col-sm-4">
                            <label for="inputEmail3" class="form-control-label">Fecha nacimiento</label>
                            
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                            </div><!-- input-group -->
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="precioCosto" class="form-control-label">Ciudad<span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="precioCosto" placeholder="Ej. 'Ciudad Victoria'"value="">                            
                        </div>

                        <div class="col-sm-6">
                            <label for="ganancia" class="form-control-label">Estado <span class="text-danger">*</span></label>
                            <input type="text" parsley-type="change" class="form-control"
                                   id="ganancia" placeholder="Ej. 'Tamaulipas'" >
                        </div>

                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label for="precioCosto" class="form-control-label">Calle <span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="precioCosto" placeholder="Ej. 'México'"value="">                            
                        </div>

                        <div class="col-sm-5">
                            <label for="ganancia" class="form-control-label">Colonia <span class="text-danger">*</span></label>
                            <input type="text" parsley-type="change" class="form-control"
                                   id="ganancia" placeholder="Ej. 'Lázaro Cárdenas'" >
                        </div>
                        
                        <div class="col-sm-2">
                            <label for="ganancia" class="form-control-label">Número <span class="text-danger">*</span></label>
                            <input type="text" parsley-type="change" class="form-control"
                                   id="ganancia" placeholder="Ej. '87030'" >
                        </div>

                    </div>
                    
                    
                    <div class="form-group row" style="margin-top: 50px;">

                            <div class="col-xs-3 col-sm-3"></div>
                        
                            <div class="col-xs-6 col-sm-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light col-sm-12">
                                    Guardar proveedor
                                </button>
                            </div>
                        
                            <div class="col-xs-3 col-sm-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>