<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha="";
    $banco ="PW_BD";

    $script="
        CREATE DATABASE PW_BD;
        USE PW_BD;
        CREATE TABLE PRODUTOS (
            ID INT PRIMARY KEY AUTO_INCREMENT,
            DESCRICAO VACHAR(150) NOT NULL,
            CODIGO_BARRAS VARCHAR(30) NOT NULL,
            VALOR DECIMAL(10,2) NOT NULL, 
            IMAGEM VARCHAR(50),
            ATIVO BIT NOT NUL
        )
    ";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if($conexao -> connect_error){
        die("Falha na conexão:".$conexao->connect_error);
    }
?>