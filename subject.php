<!---- Connection to DB ---->
<?php include("db_connection.php") ?>

<!---- HTML Header ---->
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-5">
            <div class="card card-body">
                <form action="save_subject.php" method="POST">
                    <div class="row">
                        <p class="col-lg-3">Materia:</p>
                        <input type="text" name="nombreMateria" class="form-control col-lg-8" placeholder="Ingrese el nombre" autofocus>
                    </div>
                    <div class="container-btn">
                        <button type="submit" class="button col-4" name="save_subject">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>MATERIA</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT idmateria, nombremateria FROM materia";
                    $result = mysqli_query($link, $query);
                    while($row = mysqli_fetch_array($result))
                    { ?>
                        <tr>
                            <td><?php echo $row['nombremateria']?></td>
                            <td>
                                <a href="edit_subject.php?id=<?php echo $row['idmateria'] ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                <a href="delete_subject.php?id=<?php echo $row['idmateria'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>