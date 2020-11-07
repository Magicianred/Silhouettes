<?php

include_once "connection.php";

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $conn = $conn->query("SELECT * FROM login where id = '$id' ");
    $linha = $conn->fetch(PDO::FETCH_ASSOC);

?>

<form action="editar.php" method="post">
    Name: <input type="text" name="name" value="<?php echo $linha['name']?>" id="name"/><br>
    Login: <input type="text" name="login" value="<?php echo $linha['login']?>" id="login"/><br>

    <input type="hidden" name="id" value="<?php echo $linha[''] ?>"> 
    <input type="hidden" name="id" value="Cadastrar"> 

</form>