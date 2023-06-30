<?php
    include "db.php";
    
    //get id
    $id = $_GET['id'];//ss

    //delete
    mysqli_query($conn,"DELETE from users WHERE id='$id'");

    //inapoi la index
    header('Location: index.php');
    exit;
?>