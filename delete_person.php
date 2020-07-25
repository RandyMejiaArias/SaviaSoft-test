<?php
    include('db_connection.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM persona WHERE id='$id'";
        $result = mysqli_query($link, $query);
        if(!$result) {
            die("Query failed!");
        }

        $_SESSION['message'] = 'Eliminado satisfactoriamente.';
        $_SESSION['message_type'] = 'success';
        header("Location: index.php");
    }
?>