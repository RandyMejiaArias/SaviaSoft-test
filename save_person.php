<?php
    include('db_connection.php');
    
    if(isset($_POST['save_person'])){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $salario = $_POST['salario'];
        $query = "INSERT INTO persona(nombre, apellidos, email, fechanacimiento, salario) VALUES ('$nombre', '$apellidos', '$email', '$fechaNacimiento', '$salario')";
        $result = mysqli_query($link, $query);
        if(!$result) {
            die("Query failed!");
        }

        $_SESSION['message'] = 'Agregado correctamente.';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }
?>