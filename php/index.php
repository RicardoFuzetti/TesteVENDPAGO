<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/main.css">
    <link rel="stylesheet" href="../style/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Locadora Ricardo Fuzetti</title>
</head>

<body>
    <main class="container">
        <div class="box">
            <h1>Bem Vindo!</h1>
            <span>Selecione o que deseja</span>

            <div class="buttons">
                <button onclick="ModalTitulo.open()">Cadastrar título</button>
                <button onclick="ModalCliente.open()">Cadastrar cliente</button>
                <button>Agenda</button>
            </div>

        </div>

    </main>

    <div class="modal-overlay-cliente">

        <div class="modal-erro-cliente">
            <p>Preencha todos os campos!</p>
        </div>

        <div class="modal">

            <h2>Cadastrar Cliente</h2>
            <form action="addCliente_exe.php" method="post">
                <div class="divInputs">
                    <input id="inputNome" name="nome" type="text" placeholder="Nome" required> 
                </div>

                <div class="divInputs">
                    <input id="inputCPF" name="cpf" type="text" placeholder="CPF" required>
                </div>

                <div class="divButtonModal">
                    <button class="bCancelar" onclick="ModalCliente.close()">Cancelar</button>
                    <button class="bCadastrar" onclick="ModalCliente.validarCampo()">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    

    <div class="modal-overlay-titulo">

        <div class="modal-erro-titulo">
            <p>Preencha todos os campos!</p>
        </div>

        <div class="modal">

            <h2>Cadastrar título</h2>
            <form action="addTitulo_exe.php" method="post">
                <div class="divInputs">
                    <input id="inputTitulo" name="titulo" type="text" placeholder="Título">
                </div>

                <div class="divSelect">
                <label>Selecione o gênero do filme</label>
                    <select name="genero">
                        <option value="Ação">Ação</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Drama">Drama</option>
                        <option value="Comédia">Comédia</option>
                        <option value="Romance">Romance</option>
                        <option value="Terror">Terror</option>
                    </select required>
                </div>

                <div class="divButtonModal">
                    <button class="bCancelar" onclick="ModalTitulo.close()">Cancelar</button>
                    <button class="bCadastrar" onclick="ModalTitulo.validarCampo()">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

<script src="../js/script.js"></script>