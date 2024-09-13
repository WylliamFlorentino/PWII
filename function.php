<h1> Funções Nativas</h1>
<p>Funções nativas são funções que o proprio PHP 
    nos fornece. como por exemplo: 
        a função isset(), // Verifica de exsite a variavel, 
        a função empty(), // Verifica se a varialvel está vazia
        a função count(), // conta quantos itens tem no Array
        a função include "", //Inclui um arquivo dentro do outros
        a função echo "", //Impreime na Tela
        a função strelen(), //Conta quantos caracteres tem uma String
        a função explode(), //cria um array a partir de frase
        a função replace(),// Troca caracteres dentro de uma String

        <?php
            date_default_timezone_set('Europe/London');
            echo"<h1>";
            echo date("H:i:s");  
            echo"</h1>";  
        ?>
        <?php
            echo"<h1>";
            echo date("Y-m-d");  
            echo"</h1>";  
        ?>

    Função getdate()
    <?php
            echo "<pre>";
            print_r(getdate());  
            echo"</pre>";  
        ?>
    <?php
            echo "<h1>";
            $array_date = getdate();
            echo $array_date["mday"]." de ".$array_date["month"]." de ".$array_date["year"]; 
            echo"</h1>";  
        ?>

    <?php
        echo "<h1>";
        echo rand(5,90);
        echo"</h1>";  
    ?>
    </p>
<h1>Funções Personalizadas</h1>