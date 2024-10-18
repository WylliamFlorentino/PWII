<?php include "cabecario.php";?>

<?php
    if(isset($_GET["id"])&& !empty($_GET['id']))
    {
        include "conexao.php";
        $sql = "SELECT ID,DESCRICAO,CODIGO_BARRAS,VALOR from produtos where id=$_GET[id]";
        $resultado = $conexao->query($sql);
        if($resultado){
            if($resultado->num_rows>0)
            {
                while($row = $resultado->fetch_assoc())
                {
                    $id = $row["ID"];
                    $descricao = $row["DESCRICAO"];
                    $valor = $row["VALOR"];
                    $codigo_barras = $row["CODIGO_BARRAS"];
                    
                }
            }else
            {
                header("location: produtos.php");
            }    

        }else
        {
            header("location: produtos.php");    
        }

    }else
    {
        header("location: produtos.php");
    }
?>
    <form action="editar_produto.php" method="post">
        <input name="id" value="<?php echo $id ?>" />
        <input name="descricao" value="<?php echo $descricao ?>" />
        <input name="valor" value="<?php echo $valor ?>" />
        <input name="codigo_barras" value="<?php echo $codigo_barras ?>" />
        <button typw="submit">
            Salvar Alterações
        </button>
    </form>

<?php include "rodape.php"?>