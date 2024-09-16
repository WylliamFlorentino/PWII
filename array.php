<?php include "cabecario.php"; ?>
      <h1>Array</h1>
      <hr>
      <p>As Variaves do tipo Array são muito ultilizados quando 
        vamos listas coisas.
        Os Array em php são lista de qualquer tipo de Dados.
      </p>
      <pre>
            $array = [];
            $array =  Array();
            $array[0] = "OI";
            $array[2] = 10;
            $array["wylliam"] = "Aluno";
            $array[$array[10]] = "Teste";
      </pre>
      <?php         //  0    1    2      3      4    5
        $array = array("OI",10,"aluno","teste",1.99,true);
        echo "<h2>Como saber se deu certo?</h2>";
        var_dump($array);
        
        echo"<pre>";
        print_r($array);
        echo"</pre>";

        echo"<pre>";
        var_dump($array);
        echo"</pre>";

        for($i=0; $i<count($array); $i++)
        {
            echo"$array[$i]  <br>";
        }
      ?>
        <br><p>Existem diversas formas de criar uma variavel Array.</p>
        <pre>
           array(
                    chave  => valor,
                    chave2 => valor2,
                    chave3 => valor3,
                    ...
                )
        </pre>
        <p>Este tipo de Array(chave Valor ) Funciona da mesma fotma porem 
            não existem mais os indece com números passando a usar string como chave
            para valores.</p>

      <?php
            $array = array(
                "foo" => "bar",
                "bar" => "foo",
            );

            // Utilizando a sintaxe curta
            $array = [
                "foo" => "bar",
                "bar" => "foo",
            ];

            echo"<pre>";
            print_r($array);
            echo"</pre>";

            $resultados = [
                "Id" => 1,
                "Nome" => "Wylliam",
                "Idade" => 29,
                "salario" => 6345.87,
                "Desenvolvedor" => true
            ];
            echo"<pre>";
            print_r($resultados);
            echo"</pre>";

           echo $resultados["Nome"];
        ?>

        <p>Para varrer todo o array de chave e valore 
            precisamos de um laço de repetição exclusivo chamado
            foreach()</p>
        <pre>
            foreach($array as $CHAVE => $VALOR)
            {
                echo $array[$CHAVE];
                //ou
                echo $VALOR;
            }
        </pre>
        <?php    //  Variavel Array  Chave   valor
            foreach($resultados as $CHAVE => $VALOR)
            {
                echo "Valor pela Chave:".$resultados[$CHAVE]."<br>";
                //ou
                echo "Apenas Valor: ".$VALOR."<br>";
                echo "Apenas Chave: ".$CHAVE."<br>";
            }
        ?>
 <?php include "rodape.php"; ?>