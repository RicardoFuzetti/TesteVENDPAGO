<?php

    require 'conectaBD.php';

    // Acesso ao BD
    $cpf = $_POST['cliente'];
    $data = $_POST['data'];


    // Faz Select na Base de Dados
    $sql = "INSERT INTO Locacao (cpf, id_video, data) VALUES ('$nome','$cpf', '$data')";

    if ($result = mysqli_query($conn, $sql)) {
        echo "<script language='JavaScript'>
        alert('Locação realizada com sucesso!');
        window.location = '/vendpago/php/index.php';
        </script>";
    } else {
        echo "Erro executando INSERT do cliente " . mysqli_error($conn);
    }

    mysqli_close($conn);  //Encerra conexao com o BD

?>