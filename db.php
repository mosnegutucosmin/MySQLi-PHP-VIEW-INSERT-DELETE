<?php    
    $conn = mysqli_connect('localhost', 'root', ''); //conectare sql
    mysqli_query($conn,"CREATE DATABASE cosmindb"); //creare baza
    $db = mysqli_select_db($conn, 'cosmindb');//selectare baza
    mysqli_query($conn,"CREATE TABLE users (id int primary key auto_increment, nume varchar(50), prenume varchar(50))");//creare tabel
?>