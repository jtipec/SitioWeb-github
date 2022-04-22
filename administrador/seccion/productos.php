<?php include('../template/cabecera.php'); ?>

<?php 
print_r($_POST);
?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos de Libro
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"> <!-- NOTA: sino colocas enctype="" no reconoce archivos -->
                <div class = "form-group">
                    <label for="txtID">ID</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>

                <div class = "form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
                </div>

                <div class = "form-group">
                    <label for="txtImagen">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Seleccione imagen">
                </div>
                
                <br>
                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="cancelar" class="btn btn-info">Cancelar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>


<div class="col-md-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende PHP</td>
                <td>imagen.jpg</td>
                <td>Seleccionar | Borrar</td></td>
            </tr>

        </tbody>
    </table>
    
</div>

<?php include('../template/pie.php'); ?>