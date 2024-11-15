<?php include "cabecario.php"; ?>
<?php 
if(  isset($_POST['login']) && !empty($_POST['login']) &&
    isset($_POST['senha']) && !empty($_POST['senha']) &&
    isset($_POST['ativo']) && !empty($_POST['atibo'])
{
    include "conexao.php";
    $sql = "UPDATE usuarios SET login = '$_POST[login]',
                                senha =  $_POST[senha],
                                ativo = '$_POST[ativo]'
            WHERE id = $_POST[id]";
     
     echo $sql;
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        //logica para mensagem de sucesso
    }
    else
    {
        //caso o update de false
    }
}



if ( isset($_GET["Id"]) && !empty( $_GET['Id'] )   )  
{
    include "conexao.php";
    $sql = "Select Id, login, senha, ativo from usuarios where id = $_GET[id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        if($resultado->num_rows > 0)
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $id = $row["id"];
                $descricao = $row["login"];
                $valor = $row["senha"];
                $codigo_barras = $row["ativo"];
            }
        }
        else
        {
            header("location: usuarios.php?erro=Nenhum registro encontrado");
        }
    }
    else
    {
        header("location: usuarios.php?erro=Erro do if do resultado");
    }
}
else
{
    header("location: usuarios.php?erro=Nenhum id informado");
}



?>

<form action="editar_usuario.php?Id=<?php echo $id; ?>" method="post">
    <input name="id" value="<?php echo $id ?>" />
    <input name="login" value="<?php echo $login ?>" />
    <input name="senha" value="<?php echo $senha ?>" />
    <input name="ativo" value="<?php echo $ativo ?>" />
    <br>
    <select name="usuarios_id" >
        <?php
            $sql_categorias = "select Id,Nome from categorias";
            $resultado_categoria = $conexao -> query($sql_categorias);
            
            if ($resultado_categoria->num_rows > 0) {
                while($row = $resultado_categoria->fetch_assoc()) 
                {
                    if($categoria_id == $row["Id"])
                    {
                        echo "<option selected value='$row[Id]'>$row[Nome]</option>";    
                    }    
                    else
                    {
                        echo " <option value='$row[Id]'>$row[Nome]</option>";
                    }
                }
            }
            else
            {
                echo"<option value='0'>Não tem Categoria Cadastrada </option>";
            }
        ?>
    </select>
    <br>
    <button type="submit" >
    Salvar Alterações
    </button>

</form>
<?php include "rodape.php"; ?>