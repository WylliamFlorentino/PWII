<?php include "cabecario.php"; ?>

<h1>Recuperação</h1>
<hr>
<h1>Exercico 1 </h1>
    <?php
        $nome = "Wylliam";
        $idade = "29";
        echo "Meu nome é ".$nome." e tenho ".$idade." anos.";
    ?>
<hr>
<h1>Exercico 2 </h1>
    <?php
        $numero = 0;
        $numero = rand(54,185);
        if($numero %2 == 0){
            echo "O Numero é ".$numero." e é Par.";
        }else{
            echo "O Numero é ".$numero." e é Impar.";
        }
            
    ?>
<hr>
<h1>Exercico 3 </h1>
    <?php
        $numeroMaximo = 1970;    

        for($i = 584; $i < $numeroMaximo ; $i++ ){
            if($i%2 ==0 ){
                echo "Numero ".$i." Par ";
            }else{
                echo "Numero ".$i." Impar ";
            }
        }
        
    ?>
<hr>
<h1>Exercico 4 </h1>
    <?php
        
    ?>

<?php include "rodape.php"; ?>