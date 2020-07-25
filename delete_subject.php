<?php
    include('db_connection.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM materia WHERE idmateria='$id'";
        $result = mysqli_query($link, $query);
        if(!$result) {
            die("Query failed!");
        }

        $_SESSION['message'] = 'Eliminado satisfactoriamente.';
        $_SESSION['message_type'] = 'success';
        header("Location: subject.php");
    }
?>