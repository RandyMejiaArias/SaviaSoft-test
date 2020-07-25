<?php
    include('db_connection.php');
    
    if(isset($_POST['update_person'])){
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $salario = $_POST['salario'];

        $query = "UPDATE persona SET nombre = '$nombre', apellidos = '$apellidos', email = '$email', fechanacimiento='$fechaNacimiento', salario='$salario' WHERE id='$id'";
        mysqli_query($link, $query);

        $_SESSION['message'] = 'Actualizado correctamente';
        $_SESSION['message_type'] = 'primary';
        header("Location: index.php");
    }
?>