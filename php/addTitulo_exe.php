<?php

require 'conectaBD.php';

// Acesso ao BD
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];


// Faz insert na Base de Dados
$sql = "INSERT INTO Video (titulo, genero) VALUES ('$titulo','$genero')";

if ($result = mysqli_query($conn, $sql)) {
    echo "<script language='JavaScript'>
        alert('Titulo cadastrado com sucesso!');
        window.location = '/vendpago/php/index.php';
        </script>";
} else {
    echo "Erro executando INSERT do titulo " . mysqli_error($conn);
}

mysqli_close($conn);  //Encerra conexao com o BD
