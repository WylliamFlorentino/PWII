<?php include "cabecario.php"; ?>
<h1>Laço de Repetição For: </h1>
      <p>Esse laço de repetição é mais utilizado e mais prático. </p>
      <pre>
        for($i = 0; $i < 10; $i++) {
            echo"$i";
        }
      </pre>
        <?php
          for($i = 0; $i < 3; $i++) 
            {
                echo "<b>Oiii</b><br>";

            }
          
          echo "<hr>";
          
          for($i = 0; $i < 3; $i++) 
            {
             ?>
               <b>Oiii</b><br>
             <?php
            }
        ?>
<?php include "rodape.php"; ?>