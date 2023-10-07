<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Administrar marcas
        </h1>
        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administrar marca</li>
        </ol>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <section class="content">
                    <div class="box">
                        <div class="box-header with-border">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMarca">
                                Agregar marcas
                            </button>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Marcas</th>
                                    <th>ACCION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $item = null;
                                $valor = null;
                                $marcas = ControladorMarcas::ctrMostrarMarcas($item, $valor);
                                foreach ($marcas as $key => $value) {
                                    echo '<tr>
                              <td>' . ($key + 1) . '</td>
                              <td>' . $value["Marca"] . '</td>
                              <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning btnEditarMarca" data-toggle="modal" data-target="#modalEditarMarca" idMarca="' . $value["IDMarca"] . '"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btnEliminarMarca" idMarca="' . $value["IDMarca"] . '"><i class="fa fa-times"></i></button>
                                </div>
                              </td>
                            </tr>';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>


<!-- Modal para agregar marca -->
<div class="modal fade" id="modalAgregarMarca" tabindex="-1" role="dialog" aria-labelledby="modalAgregarMarcaLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Marca</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombreMarca">Nombre de la Marca</label>
                        <input type="text" class="form-control" id="nombreMarca" name="nombreMarca" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Marca
                    </button>
                    <button type="reset" class="btn btn-secondary"><i class="fa fa-undo"></i> Limpiar</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i
                                class="fa fa-sign-out"></i> Salir
                    </button>
                </div>
                <?php
                $crearmarca = new ControladorMarcas();
                $crearmarca -> ctrCrearMarcas();
                ?>
            </form>
        </div>
    </div>
</div>

<!-- Modal para editar marca -->
<div class="modal fade" id="modalEditarMarca" tabindex="-1" role="dialog" aria-labelledby="modalEditarMarcaLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Editar Marca</h4>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar los campos necesarios para editar una marca -->
                    <!-- Por ejemplo, un campo de entrada de texto para el nombre de la marca -->
                    <div class="form-group">
                        <label for="editarNombreMarca">Nombre de la Marca</label>
                        <input type="text" class="form-control" id="editarNombreMarca" name="editarNombreMarca" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Marca
                    </button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i
                                class="fa fa-sign-out"></i> Salir
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    function formatName(inputId) {
        var input = document.getElementById(inputId);
        var inputValue = input.value;

        if (inputValue.length > 0) {
            // Dividir el valor en palabras
            var words = inputValue.split(' ');

            // Capitalizar la primera letra de cada palabra y convertir el resto en minúsculas
            var formattedWords = words.map(function (word) {
                return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
            });

            // Unir las palabras nuevamente con espacios
            var formattedValue = formattedWords.join(' ');

            // Actualizar el valor del campo
            input.value = formattedValue;
        }
    }

    document.getElementById('nombreMarca').addEventListener('input', function () {
        formatName('nombreMarca');
    });

    document.getElementById('editarNombreMarca').addEventListener('input', function () {
        formatName('editarNombreMarca');
    });
</script>
