<?php

include 'config.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = " DELETE FROM results WHERE id=$id";
    $deleteData = mysqli_query($connection, $query);

    if($deleteData){
        header('location:index.php');
    }
    else{
        echo 'Failed to Delete Data';
    }
}

?>