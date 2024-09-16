<?php include "cabecario.php"; ?>
        <h1>Laço de repetiçã While</h1>
        <p>O laço de repetição While necessita de 3 itens para se tornoar um loop: </p>
        <ol>
            <li>Variável Controladora</li>
            <li>Condição de Continuação</li>
            <li>Incremento da Variavel Controladora</li>
        </ol>
        <pre>
            $i =0; //Declaração da Variável Controladora
            while($i ,10)
            {
                //Executo esse bloco de codigo.
                
                //Incrementando a Variavel de Controle
                $i= i + 1;
                $i++
                $i ++ 1;

            }
        </pre>
        <p>A derivação DO WHILE obrigatoriamente executa uma vez no minimo o bloco de codigo</p>
        <pre>
            $i=0;
            do{
                $i++;
            }while($i< 10); 
        </pre>
            <?php
                $i = 1;
                while($i < 20)
                { echo "<h1> $i ° h1</h1>";
                    $i++;
                }
            ?>
        <p>Outra forma de Inplementação é:</p>    
            <?php
                $i = 1;
                do{   
                    ?>
                      <h2>HTML NORMAL</h2>
                      <p><?php echo $i;?> </p>

                    <?php       
                  $i++;
                }while($i <5);
            ?>
<?php include "rodape.php"; ?>
