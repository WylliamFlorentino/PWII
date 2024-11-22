<?php include "cabecario.php"; ?>
<?php 
if( 
    isset($_POST['Id']) && !empty($_POST['Id']) &&
    isset($_POST['login']) && !empty($_POST['login']) &&
    isset($_POST['senha']) && !empty($_POST['senha']) &&
    isset($_POST['ativo']) && !empty($_POST['ativo']))
{
    include "conexao.php";
    $sql = "UPDATE usuarios SET login = '$_POST[login]',
                                senha = '$_POST[senha]',
                                ativo = '$_POST[ativo]'
            WHERE Id = $_POST[Id]";
     
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



if ( isset($_GET['Id']) && !empty( $_GET['Id'] )   )  
{
    include "conexao.php";
    $sql = "Select Id, login, senha, ativo from usuarios where id = $_GET[Id]";
 
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        if($resultado->num_rows > 0)
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $id = $row["Id"];
                $login = $row["login"];
                $senha = $row["senha"];
                $ativo = $row["ativo"];
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
    <input name="Id" value="<?php echo $id ?>" />
    <input name="login" value="<?php echo $login ?>" />
    <input name="senha" value="<?php echo $senha ?>" />
    <input name="ativo" value="<?php echo $ativo ?>" />
    <br>
    <button type="submit" >
    Salvar Alterações
    </button>

</form>
<?php include "rodape.php"; ?>