<?php include "cabecario.php"?>

<?php
    if(isset ($_POST["nome"]) 
        && isset ($_POST["valor"]) 
        && isset ($_POST["codigobarras"]) 
        && isset ($_POST["datavalidade"])) {
        if( empty($_POST["nome"])) {
            echo "<div class='alert alert-danger'>Campo nome não pode estar em branco</div>";
        }
        else if( empty($_POST["valor"])) {
            echo "<div class='alert alert-danger'>Campo valor não pode estar em branco</div>";
        }
        else if( empty($_POST["codigobarras"])) {
            echo "<div class='alert alert-danger'>Campo código de barras não pode estar em branco</div>";
        }
        else if( empty($_POST["datavalidade"])) {
            echo "<div class='alert alert-danger'>Campo data de validade não pode estar em branco</div>";
        }
        else {
                include "conexao.php";
                $nome = $_POST["nome"];
                $valor = str_replace(",",".",$_POST["valor"]) ;
                $codigobarras = $_POST["codigobarras"];

                $query ="insert into produtos(DESCRICAO,CODIGO_BARRAS,VALOR,ATIVO) 
                         VALUES ('$nome','$codigobarras',$valor,1)";
                $resultado = $conexao->query($query);
                
                if ($resultado){
                    echo "<div class = 'alert alert-success'>Produto Salvo com sucesso</div>";
                }else {
                    echo "<div class = 'alert alert-danger'>Ocorreu Algum erro ao Salvar</div>";  
                }        

        
        }
    }

?>
<form action="novo-produto.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome"/>
    <br>
    <label>Valor</label>
    <input type="number" name="valor"/>
    <br>
    <label>Código de barras</label>
    <input type="text" name="codigobarras"/>
    <br>
    
    <label>Data</label>
    <input type="date" name="datavalidade"/>
    <br>
    <button type='submit' class='btn btn-success'>Enviar os dados</button>
</form>

<?php include "rodape.php"?>