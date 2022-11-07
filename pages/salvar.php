<?php

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':

            $nome= $_POST["nome"];
            $sobreNome= $_POST["sobreNome"];
            $email= $_POST["email"];
            $celular= $_POST["celular"];
            $cpf= $_POST["cpf"];
            $dataNasc= $_POST["dataNasc"];

            $sql = "INSERT INTO clientes(nome, sobreNome, email, celular, cpf, dataNasc) VALUES ('$nome', '$sobreNome', '$email', '$celular', '$cpf', '$dataNasc')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Erro ao cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            
            break;
        
        case 'editar':
            $nome= $_POST["nome"];
            $sobreNome= $_POST["sobreNome"];
            $email= $_POST["email"];
            $celular= $_POST["celular"];
            $cpf= $_POST["cpf"];
            $dataNasc= $_POST["dataNasc"];

            $sql = "UPDATE clientes SET
                nome = '$nome',
                sobreNome = '$sobreNome',
                email = '$email',
                celular = '$celular',
                cpf = '$cpf',
                dataNasc = '$dataNasc' WHERE idCliente=".$_REQUEST["idCliente"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro ao editar, tente novamente!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;


        case 'excluir':
            $sql = "DELETE FROM clientes WHERE idCliente=".$_REQUEST["idCliente"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso!!!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Erro ao excluir, tente novamente!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }

?>