<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'clinica_estetica';


    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if($conn->error){
        die("Erro ao conectar ao Banco de Dados: " .$conn->error);
    }

?>