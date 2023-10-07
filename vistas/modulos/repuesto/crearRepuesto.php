<form id="miFormulario" role="form" method="POST" enctype="multipart/form-data">
    <div class="box-body">

        <div class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">SUBIR FOTO</h3>
                </div>
                <div class="panel-body">
                    <input type="file" class="nuevaFotoCliente" name="nuevaFotoCliente">
                    <p class="help-block">Peso máximo de la foto: 2MB</p>
                    <div class="text-center">
                        <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="descripcion"><i class="fa fa-info-circle"></i> Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="6" placeholder="Ingrese la descripción del repuesto"></textarea>
        </div>


        <div class="form-group">
            <label for="cantidad"><i class="fa fa-sort-numeric-up"></i> Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese la cantidad de repuestos">
        </div>
        <div class="form-group">
            <label for="precio"><i class="fa fa-dollar-sign"></i> Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del repuesto">
        </div>
        <div class="form-group">
            <label for="fechaIngreso"><i class="fa fa-calendar-alt"></i> Fecha de Ingreso:</label>
            <input type="text" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="Ingrese la fecha de ingreso del repuesto">
        </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Repuesto</button>
        <button type="reset" class="btn btn-secondary"><i class="fa fa-undo"></i> Limpiar</button>
    </div>
</form>
