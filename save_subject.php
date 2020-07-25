<?php
    include('db_connection.php');
    
    if(isset($_POST['save_subject'])){
        $nombreMateria = $_POST['nombreMateria'];
        $query = "INSERT INTO materia(nombreMateria) VALUES ('$nombreMateria')";
        $result = mysqli_query($link, $query);
        if(!$result) {
            die("Query failed!");
        }

        $_SESSION['message'] = 'Agregado correctamente.';
        $_SESSION['message_type'] = 'success';
        header("Location: subject.php");
    }
?>