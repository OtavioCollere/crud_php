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
    <section class="body-sec">
        <main>
            <div class="left-content">
                <img src="../images/privacy-policy-animate.svg" alt="" id="img-register">
            </div>
            <div class="right-content">
                <h2>Cadastro de Clientes</h2>
                <div class="card-form">
                    <form method="POST" action="?page=salvar">
                        <input type="hidden" name="acao" value="cadastrar">
                        <div class="input-group">
                            <div class="input-box">
                                <span>
                                    <label for="nome">Primeiro Nome</label>
                                    <input type="text" name="nome" placeholder="Digite o primeiro nome">
                                </span>
                                <span>
                                    <label for="sobreNome">Sobrenome</label>
                                    <input type="text" name="sobreNome" placeholder="Digite o sobrenome">
                                </span>
                            </div>
                            <div class="input-box">
                                <span>
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" placeholder="Digite o melhor E-mail">
                                </span>
                                <span>
                                    <label for="celular">Celular</label>
                                    <input type="text" name="celular" placeholder="(xx)-(xxxx-xxxx)">
                                </span>
                            </div>
                            <div class="input-box">
                                <span>
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" placeholder="Digite o CPF">
                                </span>
                                <span>
                                    <label for="dataNasc">Data de Nascimento</label>
                                    <input type="date" name="dataNasc" placeholder="Digite a data de Nascimento">
                                </span>
                            </div>
                        </div>
                        <div class="input-box">
                            <button type="submit" class="button-index">Cadastrar</button>
                        </div>

                </div>
                </form>
            </div>
        </main>
    </section>
</body>

</html>