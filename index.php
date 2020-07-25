<!---- Connection to DB ---->
<?php include("db_connection.php") ?>

<!---- HTML Header ---->
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>EMAIL</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>SALARIO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT id, nombre, apellidos, email, fechanacimiento, salario FROM persona";
                $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_array($result))
                { ?>
                    <tr>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['apellidos']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['fechanacimiento']?></td>
                        <td><?php echo $row['salario']?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                            <a href="delete_person.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-btn">
        <a href="add_person.php" class="button">Agregar</a>
    </div>
</div>

<!---- HTML Footer ---->
<?php include("includes/footer.php") ?>