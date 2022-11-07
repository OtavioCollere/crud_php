<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK System Solutions</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="../css/index.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>

<body>
    <div class="menu-lateral">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="bi bi-list branco"></i>
        </label>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Cadastrar Cliente</a></li>
                <li><a href="">Editar Cliente</a></li>
                <li><a href="">Excluir Cliente</a></li>
            </ul>
        </nav>
    </div>

    <?php

        $sql = "SELECT * FROM clientes WHERE idCliente=".$_REQUEST["idCliente"];

        $res = $conn->query($sql);

        $row = $res->fetch_object();


    ?>

    <section class="editar-content">
        <main id="main-editar">
            <div class="editar-layout">
                <h2>Editar Cliente</h2>
                <div class="card-form">
                    <form method="POST" action="?page=salvar">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="idCliente" value="<?php print $row->idCliente;?>">

                        <div class="input-group">
                            <div class="input-box">
                                <span>
                                    <label for="nome">Primeiro Nome</label>
                                    <input type="text" name="nome" placeholder="Digite seu primeiro nome" value="<?php print $row->nome; ?>">
                                </span>
                                <span>
                                    <label for="sobreNome">Sobrenome</label>
                                    <input type="text" name="sobreNome" placeholder="Digite seu sobrenome" value=" <?php print $row->sobreNome; ?>">
                                </span>
                            </div>
                            <div class="input-box">
                                <span>
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" placeholder="Digite seu melhor E-mail" value="<?php print $row->email; ?>">
                                </span>
                                <span>
                                    <label for="celular">Celular</label>
                                    <input type="text" name="celular" placeholder="(xx)-(xxxx-xxxx)" value="<?php print $row->celular; ?>">
                                </span>
                            </div>
                            <div class="input-box">
                                <span>
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" placeholder="Digite seu CPF" value="<?php print $row->cpf; ?>">
                                </span>
                                <span>
                                    <label for="dataNasc">Data de Nascimento</label>
                                    <input type="date" name="dataNasc" placeholder="Digite seu dataNasc" value="<?php print $row->dataNasc; ?>">
                                </span>
                            </div>
                        </div>
                        <div class="input-box">
                            <button type="submit" class="button-index">Editar</button>
                        </div>

                </div>
                </form>
            </div>
        </main>
    </section>
</body>

</html>