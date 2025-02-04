<?php
$servidorbd = "sql303.infinityfree.com";
$usuariobd = "if0_38204599";
$senhabd = "vM7Sr04wq6K";
$basededados = "if0_38204599_db";

// Create connection
$conn = mysqli_connect($servidorbd, $usuariobd, $senhabd, $basededados);

// Check connection
if (!$conn) {
    die("Conexão Falhou: " . mysqli_connect_error());
}
echo "Conectado com Sucesso";




?>