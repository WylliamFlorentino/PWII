<?php include "cabecario.php"; ?>

<?php
    if (isset($_POST["nome"])) {
        $Nome = trim($_POST["nome"]); 

        if (empty($Nome)) {
            echo "<br><div class='alert alert-danger'>
                    Campo nome não pode estar em branco
                    </div>";
        } else {
            include "conexao.php";            
            $query = "INSERT INTO categorias (Nome) VALUES ('$Nome')";

            $resultado = $conexao->query($query);

            if ($resultado) {
                echo "<div class='alert alert-success'>
                      Salvo no banco com sucesso 
                      </div>";
            } else {
                echo "<div class='alert alert-danger'>
                      Ocorreu algum erro ao salvar
                     </div>";
            }
        }
    }
    else
    {
        $Nome="";
    }
?>
<br>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Cadastrar novo produto
            </div>
            <div class="card-body">
                <form action="nova_categoria.php" method="post">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="nome" value="<?php echo isset($Nome) ? $Nome : ''; ?>" />
                    <br>
                    <button type='submit' class='btn btn-success'>
                        Enviar os dados
                    </button>
                </form>
            </div>
        </div>    
    </div>
    <div class="col-4"></div>
</div>
<?php include "rodape.php"; ?>
