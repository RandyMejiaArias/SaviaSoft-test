<?php
    include('db_connection.php');
    
    if(isset($_POST['update_subject'])){
        $id = $_GET['id'];
        $nombreMateria = $_POST['nombreMateria'];
        $query = "UPDATE materia SET nombremateria = '$nombreMateria' WHERE idmateria='$id'";
        mysqli_query($link, $query);

        $_SESSION['message'] = 'Actualizado correctamente';
        $_SESSION['message_type'] = 'primary';
        header("Location: subject.php");
    }
?>