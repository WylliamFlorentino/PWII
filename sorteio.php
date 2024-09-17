<?php include "cabecario.php"; ?>
    <h1>Sorteio Nomes.</h1>
    <?php
        $array = array(
                        "JONAS SILVA JATOBA",      
                        "MARCOS VINÍCIUS SANCHES CARDOSO",     
                        "MARIANA DOS SANTOS",      
                        "MATHEUS MARQUEZIM GENEBRA",       
                        "RAFAEL TSUTAI MASSAKI",       
                        "REBÉCA RODRIGUES DE OLIVEIRA",        
                        "RODOLFO LEONARDO ROMO",       
                        "RODRIGO MIRANDA DOS SANTOS",      
                        "SARAH VITÓRIA PEDROSO DA SILVA",      
                        "TAYNA ADRIANA DA SILVA",      
                        "VANESSA ALVARES BERNARDO",        
                        "VINICIUS GABRIEL GONÇALVES DOS SANTOS",       
                        "VITOR TAKAYUKI HIROTOMI",     
                        "WYLLIAM DOS SANTOS FLORENTINO");
        echo"<pre><hr>";
        $sorteado = array_rand($array);
        echo "<h2>".$array[$sorteado]."</h2>";
        echo"</pre>";
    ?>
    <button type="button" class="btn btn-primary" onclick="location.reload()">Novo Nome</button>

<?php include "rodape.php"; ?>