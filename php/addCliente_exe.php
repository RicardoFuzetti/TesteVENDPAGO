<?php

require 'conectaBD.php';

// Acesso ao BD
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];


// Faz insert na Base de Dados
$sql = "INSERT INTO Cliente (nome, cpf) VALUES ('$nome','$cpf')";

if ($result = mysqli_query($conn, $sql)) {
    echo "<script language='JavaScript'>
        alert('Cliente cadastrado com sucesso!');
        window.location = '/vendpago/php/index.php';
        </script>";
} else {
    echo "Erro executando INSERT do cliente " . mysqli_error($conn);
}

mysqli_close($conn);  //Encerra conexao com o BD
