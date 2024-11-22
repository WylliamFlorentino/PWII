<?php include "cabecario.php"; ?>
<?php 
if( 
    isset($_POST['Id']) && !empty($_POST['Id']) &&
    isset($_POST['descricao']) && !empty($_POST['descricao']) &&
    isset($_POST['role']) && !empty($_POST['role']))
{
    include "conexao.php";
    $sql = "UPDATE permissoes SET descricao = '$_POST[descricao]',
                                 role =  '$_POST[role]'
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



if ( isset($_GET["Id"]) && !empty( $_GET['Id'] )   )  
{
    include "conexao.php";
    $sql = "Select Id, descricao, role from permissoes where id = $_GET[Id]";
    $resultado = $conexao->query($sql);   

    if($resultado)
    {
        if($resultado->num_rows > 0)
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $id = $row["Id"];
                $descricao = $row["descricao"];
                $role = $row["role"];
            }
        }
        else
        {
            header("location: permissao.php?erro=Nenhum registro encontrado");
        }
    }
    else
    {
        header("location: permissao.php?erro=Erro do if do resultado");
    }
}
else
{
    header("location: permissao.php?erro=Nenhum id informado");
}

?>
<form action="editar_permissao.php?Id=<?php echo $id; ?>" method="post">
    <input name="Id" value="<?php echo $id ?>" />
    <input name="descricao" value="<?php echo $descricao ?>" />
    <input name="role" value="<?php echo $role ?>" />
    <br>
    <button type="submit" >
    Salvar Alterações
    </button>

</form>

<?php include "rodape.php"; ?>