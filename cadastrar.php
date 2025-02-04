<?php
    include("conexao.php");
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    /*echo $usuario;
    echo $senha;
    echo $senha2;*/
    $sql = "INSERT INTO usuario (usuario, senha)
    VALUES ('$usuario', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();



?>