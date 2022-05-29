<?php
    include 'database.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM `crud` WHERE id = $id";

    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: display.php');
    }

?>