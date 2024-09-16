<?php include "cabecario.php"; ?>
        <h1>Variáveis em PHP</h1>
        <p>$numero = 10;//variavel inteiro</p>
        <p>$string = "10";</p>
        <p>$string1 = "Wylliam Camisa 10";</p>
        <p>$string2 = "Wylliam Camisa " .$numero;</p>
        <p>$numero = "Wylliam Camisa $numero";</p>
        <p>$valorDecimal = 10.50;</p>
        <p>$Ativo = true;</p>
        <p>/* Aqui é um bloco de comentario  */</p>
        
        <?php // tudo que esta dentro das  tag não parece na tela ?>

        <?php // A não ser que usemos a função echo com string ?>
        
        <?php 
            echo "Hello World !!"; 
            echo "<br>";
            $numero = 10;
            $nome = "Wylliam";
            $frase1 = "<p> $nome camisa $numero frase com paragrafo </p>";
            $frase2 = $nome. " camisa " .$numero; // Concatenação Antiga
            echo $frase1;
            echo "$frase2 é o que tem dentro da variavel";
        ?>
<?php include "rodape.php"; ?>
