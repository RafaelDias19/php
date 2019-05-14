<?php

    $conn = new mysqli("localhost","root","","dbphp7");

    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");

    $stmt->bind_param("ss",$login,$pass);

    $login="user1";
    $pass="12345";

    $stmt->execute();

    $login="user2";
    $pass="54321";

    $stmt->execute();

?>