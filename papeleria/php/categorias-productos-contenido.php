<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">    
                    <div class="pull-left">
                         <h4 style="text-align: center; text-transform: uppercase; letter-spacing: 3px; font-size: 2rem; text-size-adjust: 100%;">Categorías</h4>
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
                            <p class="text-muted">Administra las categorías de tus productos.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="pull-right">
                            <!--<button type="button" class="btn btn-primary btn-rounded"></button>-->
<!--                            <button type="button" class="btn btn-primary btn-rounded">Modificar producto</button>-->
                            <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#nuevaCategoria-Modal">Nueva categoría</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row p-t-25">
        <div class="col-lg-6 col-sm-12 pull-center">
            <h5 class="m-t-10">Cantidad de productos por categoría</h5>
            <p class="text-muted font-13 m-b-30">
                Visualiza facilmente cuántos productos tienes registrados por categoría.
            </p>

            <div id="graph" style="heigh: 200px; text-aling:center"></div>
        </div>
        <div class="col-sm-6">
            <div class="m-b-20 table-responsive">

                <h5>Listado de categorías</h5>

                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"                       width="100%">
                    <thead>
                    <tr>
                        <th>Nombre de categoría</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>Artículos de oficina</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-custom waves-effect waves-light ">
                                    <i class="mdi mdi-autorenew"></i>
                                </button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light ">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Papelería</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-custom waves-effect waves-light ">
                                    <i class="mdi mdi-autorenew"></i>
                                </button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light ">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Artículos de computo</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-custom waves-effect waves-light ">
                                    <i class="mdi mdi-autorenew"></i>
                                </button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light ">
                                    <i class="mdi mdi-delete"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Escolares</td>
                            <td class="text-center">
                                <button type="submit" class="btn btn-custom waves-effect waves-light ">
                                    <i class="mdi mdi-autorenew"></i>
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

<div id="nuevaCategoria-Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Nueva categoría</h4>
            </div>
            
            <div class="modal-body">
                <form role="form" class="form-validation">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label for="nombre" class="form-control-label">Nombre de categoría<span class="text-danger">*</span></label>
                            <input type="text" required parsley-type="change" class="form-control"
                                   id="nombre" placeholder="Ej. 'Productos de oficina' ">
                        </div>
                    </div>                

                    <div class="form-group row" style="margin-top: 10px;">
                            <div class="col-xs-3 col-sm-3"></div>
                            <div class="col-xs-6 col-sm-6">
                                <button type="submit" class="btn btn-primary waves-effect waves-light col-sm-12">Agregar categoría</button>
                            </div>
                            <div class="col-xs-3 col-sm-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>