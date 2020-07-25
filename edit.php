<?php
    include('db_connection.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT nombre, apellidos, email, fechanacimiento, salario FROM persona WHERE id='$id'";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellidos = $row['apellidos'];
            $email = $row['email'];
            $fechaNacimiento = $row['fechanacimiento'];
            $salario = $row['salario'];
        }
    }
?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="card card-body">
        <form action="edit_person.php?id=<?php echo $_GET['id']; 
        ?>" method="POST">
            <div class="row">
                <p class="col-lg-3">Nombre:</p>
                <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control col-lg-8" placeholder="Ingrese el nombre" autofocus>
            </div>
            <div class="row">
                <p class="col-lg-3">Apellidos:</p>
                <input type="text" name="apellidos" value="<?php echo $apellidos; ?>"class="form-control col-lg-8" placeholder="Ingrese los apellidos">
            </div>
            <div class="row">
                <p class="col-lg-3">Email:</p>
                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $email; ?>"class="form-control col-lg-8" placeholder="ejemplo@mail.com">
            </div>
            <div class="row">
                <p class="col-lg-3">Fecha de nacimiento:</p>
                <input type="date" name="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>"class="form-control col-lg-8">
            </div>
            <div class="row">
                <p class="col-lg-3">Salario:</p>
                <input type="number" name="salario" value="<?php echo $salario; ?>"class="form-control col-lg-8" placeholder="0.00">
            </div>
            <div class="container-btn">
                <button type="submit" class="button col-4" name="update_person">Actualizar</button>
                <a href="index.php" class="button1 col-4 float-right">Cancelar</a>
            </div>
        </form>
    </div>
</div>