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
      insert into produtos(DESCRICAO,CODIGO_BARRAS,VALOR,ATIVO) VALUES ('Amendoin Verde', '78987286400069',5.50,1)      
      insert into produtos(DESCRICAO,CODIGO_BARRAS,VALOR,ATIVO) VALUES ('Goiabinha Saborosa', '7898045700725',1.50,1)      
    ";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if($conexao -> connect_error){
        die("Falha na conexão:".$conexao->connect_error);
    }
?>