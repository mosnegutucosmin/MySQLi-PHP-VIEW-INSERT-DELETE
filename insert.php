<?php
    include "db.php";

    //request
    $nume = mysqli_real_escape_string($conn, $_REQUEST['nume']); 
    $prenume = mysqli_real_escape_string($conn, $_REQUEST['prenume']);

    //insert db
    mysqli_query($conn,"INSERT INTO users (id, nume, prenume) VALUES ('NULL', '$nume', '$prenume')");

    //inapoi la index
    header('Location: index.php'); 
    exit;

?>