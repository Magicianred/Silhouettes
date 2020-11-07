<?php

include_once "connection.php";
try{
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $name = filter_var($_POST['name']);
    $login = filter_var($_POST['login']);

    $update = $conn->prepare("UPDATE login SET name = :name, login = :login WHERE id = :id");
    $update->bindParam(':id', $id);
    $update->bindParam(':name', $name);
    $update->bindParam(':login', $login);
    $update->execute();

    header("location: index.php");

}catch(PDOException $e){

    echo 'Error ' . $e->getMessage();

}
