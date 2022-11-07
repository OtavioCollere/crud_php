<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK System Solutions</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="../css/lista.css">


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="../css/all.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>

<body>
    <div class="menu-lateral">
        <input type="checkbox" id="check">
        <label for="check">
            <i class="bi bi-list branco">Menu</i>
        </label>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Cadastrar Cliente</a></li>
                <li><a href="">Listar Cliente</a></li>
                <li><a href="">Excluir Cliente</a></li>
            </ul>
        </nav>
    </div>
    <header>
        <h2>Lista de Clientes</h2>
    </header>
    <main id="main">
            <?php
                    $sql = "SELECT * FROM clientes";

                    $res = $conn->query($sql);

                    $qtd = $res->num_rows;


                    if($qtd>0){
                        print "<table>";
                        print "<thead>";
                            print "<tr>";
                                print "<th class='id'>IdCliente</th>";
                                print "<th class='nome'>Nome</th>";
                                print "<th class='sobreNome'>Sobre Nome</th>";
                                print "<th class='email'>E-mail</th>";
                                print "<th class='celular'>Celular</th>";
                                print "<th class='cpf'>CPF</th>";
                                print "<th>Ações</th>";
                            print "</tr>";
                        print "</thead>";
                        while($row = $res->fetch_object()){
                            print "<tbody>";
                                print "<tr>";
                                    print "<td class='id'>".$row->idCliente."</td>";
                                    print "<td class='nome'>".$row->nome."</td>";
                                    print "<td class='sobreNome'>".$row->sobreNome."</td>";
                                    print "<td class='email'>".$row->email."</td>";
                                    print "<td class='celular'>".$row->celular."</td>";
                                    print "<td class='cpf'>".$row->cpf."</td>";
                                    print "<td class='acoes'>
                                            <button class='editar-btn' onclick=\"location.href='?page=editar&idCliente=".$row->idCliente."';\">Editar</button>
                                            <button class='excluir-btn' onclick=\"if(confirm('Tem certeza que deseja excluir??')){location.href='?page=salvar&acao=excluir&idCliente=".$row->idCliente."';} else{false;}\">Excluir</button>
                                    </td>";
                                print "</tr>";
                            print "</tbody>";
                        }
                        print "</table>";
                        
                    } else { print "Não encontrou nenhum resultado...";}
                ?>
    </main>
</body>

</html>