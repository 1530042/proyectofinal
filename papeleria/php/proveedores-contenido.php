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
                            <p class="text-muted">Agrega, visualiza o modifica tus productos en un sólo lugar.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="pull-right">
                            <!--<button type="button" class="btn btn-primary btn-rounded"></button>-->
<!--                            <button type="button" class="btn btn-primary btn-rounded">Modificar producto</button>-->
                            <button class="btn btn-primary btn-rounded waves-effect waves-light" data-toggle="modal" data-target="#nuevoProducto-Modal">Nuevo producto</button>
                            <button class="btn btn-primary btn-rounded waves-effect waves-light p-t-25" data-toggle="modal" data-target="#">Administrar categorías</button>
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
                        <th>Departamento</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
</div>