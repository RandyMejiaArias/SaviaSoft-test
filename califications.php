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
                        <th>MATERIA</th>
                        <th>CALIFICACION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT nombre, apellidos, nombremateria, calificacion FROM persona, materia, calificaciones WHERE calificaciones.IDPERSONA = persona.ID AND calificaciones.IDMATERIA = materia.IDMATERIA";
                $result = mysqli_query($link, $query);
                while($row = mysqli_fetch_array($result))
                { ?>
                    <tr>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['apellidos']?></td>
                        <td><?php echo $row['nombremateria']?></td>
                        <td><?php echo $row['calificacion']?></td>
                        <td>
                            <a href="edit_calification.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-btn">
        <a href="add_calification.php" class="button">Agregar</a>
    </div>
</div>

<!---- HTML Footer ---->
<?php include("includes/footer.php") ?>