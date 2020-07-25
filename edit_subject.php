<?php
    include('db_connection.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT nombremateria FROM materia WHERE idmateria='$id'";
        $result = mysqli_query($link, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombreMateria = $row['nombremateria'];
        }
    }
?>


<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="card card-body">
        <form action="update_subject.php?id=<?php echo $_GET['id']; 
        ?>" method="POST">
            <div class="row">
                <p class="col-lg-3">Materia:</p>
                <input type="text" name="nombreMateria" value="<?php echo $nombreMateria; ?>" class="form-control col-lg-8" placeholder="Ingrese el nombre" autofocus>
            </div>
            <div class="container-btn">
                <button type="submit" class="button col-4" name="update_subject">Actualizar</button>
                <a href="subject.php" class="button1 col-4 float-right">Cancelar</a>
            </div>
        </form>
    </div>
</div>