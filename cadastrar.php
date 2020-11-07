<?php

include_once "connection.php";

try{

    $name = filter_var($_POST['name']);
    $login = filter_var($_POST['login']);

    $insert = $conn->prepare("INSERT INTO login (name, login) VALUES (:name, :login)");
    $insert->bindParam(':name', $name);
    $insert->bindParam(':login', $login);
    $insert->execute();

    header("index.php");

} catch(PDOException $e){

    echo 'Erro: ' . $e->getMessage();

}