<?php include "cabecario.php"; ?>

<?php
    if (isset($_POST["login"]) && isset($_POST["senha"])) {
        if (empty($_POST["login"])) {
            echo "<br><div class='alert alert-danger'>
                    Campo Login não pode estar em branco
                    </div>";
        } else if (empty($_POST["senha"])) {
            echo "<br><div class='alert alert-danger'>
                    Campo Senha não pode estar em branco
                    </div>";
        } else {
            include "conexao.php";
            
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            $query = "INSERT INTO usuarios (login, senha, ativo) VALUES ('$login', '$senha', 1)";
    
            $resultado = $conexao->query($query);
            if ($resultado) {
                echo "<div class='alert alert-success'>Salvo no banco com sucesso</div>";
            } else {
                echo "<div class='alert alert-danger'>Ocorreu algum erro ao salvar</div>";
            }
        }
    } else {
        $login = "";
        $senha = "";
    }
?>
<br>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Cadastrar novo usuario
            </div>
            <div class="card-body">
                <form action="novo_usuario.php" method="post">
                    <label>Login</label>
                    <input class="form-control" type="text" name="login" value="<?php echo $login; ?>" />
                    <br>
                    <label>Senha</label>
                    <input class="form-control" type="text" name="senha" value="<?php echo $senha; ?>" />
                    <br>
                    <button type='submit' class='btn btn-success'>Enviar os dados</button>
                </form>
            </div>
        </div>    
    </div>
    <div class="col-4"></div>
</div>
<?php include "rodape.php"; ?>
