<?php

require 'conectaBD.php';

// Acesso ao BD
$cpf = $_POST['cliente'];
$id = $_POST['filme'];
$dataRetirada = $_POST['dataRetirada'];
$dataEntrega = $_POST['dataEntrega'];


// Faz insert na Base de Dados
$sql = "INSERT INTO Locacao (cpf, id_video, dataretirada, dataentrega) VALUES ('$cpf','$id', '$dataRetirada', '$dataEntrega')";

if ($result = mysqli_query($conn, $sql)) {
    echo "<script language='JavaScript'>
        alert('Locação realizada com sucesso!');
        window.location = '/vendpago/php/index.php';
        </script>";
} else {
    echo "Erro executando INSERT do cliente " . mysqli_error($conn);
}

mysqli_close($conn);  //Encerra conexao com o BD
