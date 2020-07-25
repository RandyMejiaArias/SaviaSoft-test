<!---- HTML Header ---->
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="card card-body">
        <form action="save_person.php" method="POST">
            <div class="row">
                <p class="col-lg-3">Nombre:</p>
                <input type="text" name="nombre" class="form-control col-lg-8" placeholder="Ingrese el nombre" autofocus>
            </div>
            <div class="row">
                <p class="col-lg-3">Apellidos:</p>
                <input type="text" name="apellidos" class="form-control col-lg-8" placeholder="Ingrese los apellidos" autofocus>
            </div>
            <div class="row">
                <p class="col-lg-3">Email:</p>
                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control col-lg-8" placeholder="ejemplo@mail.com" autofocus>
            </div>
            <div class="row">
                <p class="col-lg-3">Fecha de nacimiento:</p>
                <input type="date" name="fechaNacimiento" class="form-control col-lg-8" autofocus>
            </div>
            <div class="row">
                <p class="col-lg-3">Salario:</p>
                <input type="number" name="salario" class="form-control col-lg-8" placeholder="0.00" autofocus>
            </div>
            <div class="container-btn">
                <button type="submit" class="button col-4" name="save_person">Guardar</button>
                <a href="index.php" class="button1 col-4 float-right">Cancelar</a>
            </div>
        </form>
    </div>
</div>