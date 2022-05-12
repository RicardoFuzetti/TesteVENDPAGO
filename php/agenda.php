<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/agenda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Ricardo Fuzetti</title>
</head>

<body>
    <header>
        <h1>Agenda de Locações</h1>
        <a href="index.php"> Votlar </a>
    </header>

    <main class="container">
        <table>

            <?php
            require 'conectaBD.php';

            // Faz Select na Base de Dados
            $locacao = "SELECT cpf, id_video, dataretirada, dataentrega FROM Locacao";

            if ($resultLocacao = mysqli_query($conn, $locacao)) {
                $total = mysqli_num_rows($resultLocacao);
                if ($total === 0) {
                    echo '<div class="centro">';
                    echo '<h3>Não há filmes locados</h3>';
                    echo '</div>';
                } else {
                    echo "<tr>";
                    echo "<th width='20%'>Cliente</th>";
                    echo "<th width='20%'>Filme</th>";
                    echo "<th width='10%'>Data de Retirada</th>";
                    echo "<th width='10%'>Data de Entrega</th>";
                    echo "<th width='1%'></th>";
                    echo "<th width='1%'></th>";
                    echo "</tr>";

                    while ($rowLocacao = mysqli_fetch_assoc($resultLocacao)) {
                        echo "<tr class='border'>";
                        $cpf = $rowLocacao["cpf"];
                        $id = $rowLocacao["id_video"];

                        $dataR = explode('-', $rowLocacao["dataretirada"]);
                        $anoR = $dataR[0];
                        $mesR = $dataR[1];
                        $diaR = $dataR[2];
                        $dataRetirada = $diaR . '/' . $mesR . '/' . $anoR;

                        $dataE = explode('-', $rowLocacao["dataentrega"]);
                        $anoE = $dataE[0];
                        $mesE = $dataE[1];
                        $diaE = $dataE[2];
                        $dataEntrega = $diaE . '/' . $mesE . '/' . $anoE;

                        $cliente = "SELECT nome FROM Cliente WHERE cpf = $cpf";
                        $filme = "SELECT titulo FROM Video WHERE id = $id";

                        if ($resultCLiente = mysqli_query($conn, $cliente)) {

                            if ($resultFilme = mysqli_query($conn, $filme)) {

                                while ($rowCliente = mysqli_fetch_assoc($resultCLiente)) {
                                    $nome = $rowCliente["nome"];
                                    echo "<th> $nome</th>";
                                }

                                while ($rowFilme = mysqli_fetch_assoc($resultFilme)) {
                                    $titulo = $rowFilme["titulo"];
                                    echo "<th> $titulo </th>";
                                }
                            }
                        }
                        echo "<th>$dataRetirada</th>";
                        echo "<th>$dataEntrega</th>";

                        $hoje = date('d/m/Y');
                        if ($hoje > $dataEntrega) {
                            echo "<th> <button disabled class='multa'>MULTA</button> </th>";
                        }

                        echo "<th> <button class='devolver'>Devolver</button> </th>";
                    }
                }
            }

            echo "</tr>";
            ?>

        </table>
    </main>
</body>

</html>