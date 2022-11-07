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
                <li><a href="?page=novo">Cadastrar Cliente</a></li>
                <li><a href="?page=listar">Listar Cliente</a></li>
                <li><a href="">Excluir Cliente</a></li>
            </ul>
        </nav>
    </div>

    <?php

        include("connection.php");
        switch (@$_REQUEST["page"]){
            case "novo":
                include("cadastro.php");
                break;

            case "salvar":
                include("salvar.php");
                break;

            case "listar":
                include("listar.php");
                break;

            case "editar":
                include("editar.php");
                break;
        }

    ?>

</body>

</html>