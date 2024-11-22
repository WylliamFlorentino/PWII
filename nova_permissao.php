<?php include "cabecario.php"; ?>

<?php
    if (isset($_POST["DESCRICAO"]) && isset($_POST["ROLE"])) {
        if (empty($_POST["DESCRICAO"])) {
            echo "<br><div class='alert alert-danger'>
                    Campo Descrição não pode estar em branco
                    </div>";
        } else if (empty($_POST["ROLE"])) {
            echo "<br><div class='alert alert-danger'>
                    Campo ROLE não pode estar em branco
                    </div>";
        } else {
            include "conexao.php";
            
            $descricao = $_POST["DESCRICAO"];
            $role = $_POST["ROLE"];
            $query = "INSERT INTO permissoes (DESCRICAO, ROLE) 
                     VALUES ('$descricao', '$role')";
    
            $resultado = $conexao->query($query);
            if ($resultado) {
                echo "<div class='alert alert-success'>Salvo no banco com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Ocorreu algum erro ao salvar</div>";
            }
        }
    } else {
        $descricao = "";
        $role = "";
    }
?>
<br>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Cadastrar Nova Permissão
            </div>
            <div class="card-body">
                <form action="nova_permissao.php" method="post">
                    <label>Descrição</label>
                    <input class="form-control" type="text" name="DESCRICAO" value="<?php echo $descricao; ?>" />
                    <br>
                    <label>Role</label>
                    <input class="form-control" type="text" name="ROLE" value="<?php echo $role; ?>" />
                    <br>
                    <button type='submit' class='btn btn-success'>Enviar os dados</button>
                </form>
            </div>
        </div>    
    </div>
    <div class="col-4"></div>
</div>
<?php include "rodape.php"; ?>
