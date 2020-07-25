<!---- Connection to DB ---->
<?php include("db_connection.php") ?>

<!---- HTML Header ---->
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="card card-body">
        <form action="save_calification.php" method="POST">
            <div class="row">
                <p class="col-lg-3">Nombre:</p>
                <input type="text" name="nombre" class="form-control col-lg-8" placeholder="Ingrese el nombre" autofocus>
            </div>
            <div class="row">
                <p class="col-lg-3">Apellidos:</p>
                <input type="text" name="apellidos" class="form-control col-lg-8" placeholder="Ingrese los apellidos">
            </div>
            <div class="row">
                <p class="col-lg-3">Materia:</p>
                <input type="text" name="materia" class="form-control col-lg-8" placeholder="Materia">
            </div>
            <div class="row">
                <p class="col-lg-3">Calificación:</p>
                <input type="number" name="calificacion" class="form-control col-lg-8" placeholder="0.00" autofocus>
            </div>
            <div class="container-btn">
                <button type="submit" class="button col-4" name="save_person">Guardar</button>
                <a href="index.php" class="button1 col-4 float-right">Cancelar</a>
            </div>
        </form>
    </div>
</div>