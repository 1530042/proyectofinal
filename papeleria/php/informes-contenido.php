<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">    
                    <div class="pull-left">
                         <h4 style="text-align: center; text-transform: uppercase; letter-spacing: 3px; font-size: 2rem; text-size-adjust: 100%;">Informes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="clearfix">
                    <div class="col-sm-12">
                        <div class="pull-left">
                            <p class="text-muted">Visualiza el estado actual de tu tienda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row p-t-25" >
        <div class="col-lg-6 col-sm-12 pull-center">
            <h5 class="m-t-10">Ventas por mes</h5>
            <p class="text-muted font-13 m-b-30">
                Esto es lo que has vendido durante al año.
            </p>

            <div id="graph" style="heigh: 200px; text-aling:center"></div>
            
        </div>
        
        <div class="m-t-20 col-lg-6 col-sm-12">
            
            <div class="card-box">
                <h4 class="m-t-0 text-dark">Ganancia por día</h4>
                <h2 class="text-primary text-center m-b-30 m-t-30">$<span data-plugin="counterup">2,570</span></h2>
                <p class="text-muted m-b-0">Total del mes: $20,506 <span class="pull-right"><i class="fa fa-caret-up text-primary m-r-5"></i>10.25%</span></p>
            </div>
            
        </div>
        
        <div class="m-t-20 col-lg-6 col-sm-12">
            <div class="card-box text-center">
                <h4 class="m-t-0 text-dark">Total de ventas del día</h4>
                <h3><i class="text-custom mdi mdi-black-mesa"></i> <b data-plugin="counterup">341</b></h3>
            </div>
            
        </div>
    </div> 
    
    <div class="row p-t-50">
        <div class="col-sm-12">
            <div class="panel-body">
                <h4 class="m-t-0">Productos más vendidos</h4>
                
                <div class="col-sm-12">
                    <div class="m-b-20 table-responsive">

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
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div> <!-- end col -->
    </div>
</div>