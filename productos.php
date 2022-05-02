<?php include "template/cabecera.php";?>

<?php
    include "administrador/config/bd.php";

    $sentenciaSQL = $conexion->prepare("SELECT * FROM libros;");
    $sentenciaSQL->execute();
    $listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaLibros as $libros) { ?>
    <div class="col-md-3">
        <div class="card">
            <!-- <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt=""> -->
            <img class="card-img-top" src="./img/<?php echo $libros['imagen']; ?>" alt="">            
            <div class="card-body">
                <h4 class="card-title"><?php echo $libros['nombre']; ?></h4>
                <!-- <p class="card-text">Text</p> -->
                <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
            </div>
        </div>
    </div>
<?php } ?>

<?php include "template/pie.php";?>