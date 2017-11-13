<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="header-title m-t-0">Calendario</h4>
        </div>
    </div> <!-- end row -->

    <div class="row">
        <div class="col-lg-12">

            <div class="m-t-10">
                <div class="row m-b-30">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a href="#" data-toggle="modal" data-target="#add-category" class="m-t-10 btn btn-lg btn-primary btn-block waves-effect m-t-20 waves-light">
                                    <i class="fa fa-plus"></i> Crear nuevo
                                </a>
                                <div id="external-events" class="m-t-20">
                                    <br>
                                    <p class="text-muted">Arrasta y suelta el evento dentro del calendario</p>
                                    <div class="external-event bg-success" data-class="bg-success">
                                        <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Contar inventario
                                    </div>
                                    <div class="external-event bg-info" data-class="bg-info">
                                        <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Despedir a Juan
                                    </div>
                                    <div class="external-event bg-warning" data-class="bg-warning">
                                        <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Junta con inversionistas
                                    </div>
                                    <div class="external-event bg-primary" data-class="bg-primary">
                                        <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Contratar a Juan
                                    </div>
                                </div>

                                <!-- checkbox -->
                                <div class="checkbox checkbox-custom m-t-30">
                                    <input id="drop-remove" type="checkbox">
                                    <label for="drop-remove">
                                        Remover después de soltar
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-md-9">
                        <div id="calendar"></div>
                    </div> <!-- end col -->
                </div>  <!-- end row -->
            </div>

            <!-- BEGIN MODAL -->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Crear evento</h4>
                        </div>
                        <div class="modal-body p-20"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Nuevo evento</h4>
                        </div>
                        <div class="modal-body p-20">
                            <form role="form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Nombre del evento</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Elegir un tema de color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->
        </div>
        <!-- end col-12 -->
    </div> <!-- end row -->

</div>