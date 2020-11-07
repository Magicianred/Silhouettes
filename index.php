<?php

include_once "connection.php";

try {
    //executando consulta
    $conn = $conn->query('SELECT * FROM login');

    echo "<a href='formCadastro.php'>Novo Cadastro</a><br><br>Listagem de usuários";

    echo "<table border='1'><tr><td>Name</td><td>Login</td><td>Ações</td></tr>";
    
    while ($linha = $conn->fetch(PDO::FETCH_ASSOC)) {

        echo "<tr><td>$linha[name]</td><td>$linha[login]</td><td><a href='formEditar.php?id=$linha[id]'>EDITAR</a> - <a href='excluir.php?id=$linha[id]'>EXCLUIR</a></td></tr>";
    }

    echo "</table>";

    echo $conn->rowCount() . 'Registros Exibidos';

} catch(PDOException $e){

    echo $e->getMessage();

}