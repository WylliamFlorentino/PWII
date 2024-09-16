<?php include "cabecario.php"; ?>
<h1>Página inicial do site</h1>
  
      <p>$inteira = 10</p>
      <p>$nome = "prof"</p>
      <p>$valor = 10.50</p>
      <p>$ativo = true</p>

      <pre> if($inteira == 10)
        {
            echo "o conteúdo é 10";
        }
        else if($inteira >= 11)
        {
            echo "maior ou igual a 11";
        }
        else
        {
            echo "menor que 10";
        }
      </pre>
        <?php
            $inteira = 10;
            if($inteira == 10){
                echo "<h2>A variável é igual a 10.</h2>";
            }
            else if($inteira >= 11){
                echo "<h2>A variável é maior ou igual a 11.</h2>";
            }
            else {
                echo "<h2>A variável é menor que 10.</h2>";
            }
        ?>
        <br>
      <p>
        As variáveis String podem ser contados os caracteres e usados no if.
      </p>
      <pre>
        if ( count($nome) > 10 )
        {
            echo "seu nome tem mais que 10 caracteres.";
        }
      </pre>
      <?php
        $nome = "Wylliam";
        if ( strlen($nome) > 5 ){
            echo "<h2>Seu nome tem mais que 5 caracteres quantidade é ".strlen($nome)."</h2>";
        }
      ?>
      <br>
      <p>
        Podemos verificar se a variável nome está vazia.
      </p>
      <pre>
        if(empty($nome))
        {
            echo "Sua variável está vazia.";
        }
      </pre>
      <?php
        $nome = "Wylliam";
        if(empty($nome)){
            echo "<h2>Sua variável está vazia.</h2>";
        }else {
            echo "<h2>Sua variável não está vazia.</h2>";
        }
      ?>
      <br>
      <p>
        Também podemos comparar strings normalmente.
      </p>
      <pre>
        if($nome == "Marcos")
        {
            echo "Nome igual";
        }
        else
        {
            echo "Nomes diferentes";
        }
      </pre>
      <?php
        $nome = "Wylliam";
        if($nome == "Marcola"){
            echo "<h2>Nomes iguais</h2>";
        }else{
            echo "<h2>Nomes diferentes</h2>";
        }
      ?>
      <br>
      <p>
        Podemos verificar se a variável é verdadeira ou falsa.
      </p>
      <pre>
        if($ativo)
        {
            echo "Verdadeiro";
        }
        else
        {
            echo "Falso";
        }
      </pre>
      <?php
        $ativo = 0;
        if($ativo){
            echo "<h2>Verdadeiro</h2>";
        }else{
            echo "<h2>Falso</h2>";
        }
      ?>
<?php include "rodape.php"; ?>

