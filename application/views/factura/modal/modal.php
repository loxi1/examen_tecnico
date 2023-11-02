<div class="modal fade" id="crear_" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><b>Factura Agregar</b></h4>
            </div>
            
            <form class="form-horizontal" id="form_">
                <input type="hidden" name="id_producto" id="id_producto">
                <div class="form-group">
                    <label for="codigo" class="control-label col-md-4 col-sm-4 col-xs-12">Código</label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" name="codigo" id="codigo" class="form-control">
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="nombre" class="control-label col-md-4 col-sm-4 col-xs-12">Sub Módulo :</label>
                        
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="precio" class="control-label col-md-4 col-sm-4 col-xs-12">Precio :</label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" name="precio" id="precio" class="form-control">
                    </div>
                </div>

            </form>
            <div class="btn-toolbar alineado">
               
                <div class="btn-group pull-right">
                    <button type="" class="btn btn-primary btn-submit btn-sm">&nbsp;<i class="fa fa-search"></i><span class="hide-on-phones"></span>&nbsp;Guardar</button>
                </div>
                <div class="btn-group pull-right">
                    <a class="btn btn-danger btn-sm" href="">
                    <span class="fa fa-ban"></span>
                    <span class="hide-on-phones">Cancelar</span>
                    </a>
                </div>
                 

            </div>
        </div>

    </div>
</div> 