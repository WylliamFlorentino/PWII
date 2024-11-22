<?php include "cabecario.php"; ?>

<?php 
if( isset($_GET["pesquisa"]) )
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa) )
    {
       //Se a variavel estiver vazia executa aqui 
       include "conexao.php";
       $sql = "SELECT  ID, DESCRICAO, ROLE FROM permissoes order by ID desc";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
    }
    else
    {
        //Aqui vai a lógica da pesquisa
        include "conexao.php";
        $sql = "Select ID, DESCRICAO, ROLE 
                from permissoes  
                where ROLE like '%$pesquisa%' || ID = '$pesquisa'
                order by ID desc";
        $resultado = $conexao->query($sql);
        
        $conexao->close();
    }
}
else
{
    $pesquisa = "";
    include "conexao.php";
    $sql="Select ID, DESCRICAO, ROLE from permissoes order by Id desc";
    $resultado = $conexao->query($sql);
   
    $conexao->close();
    
}
?>
<br>
<?php
    if(isset($_GET["erro"]) && !empty($_GET["erro"]) )
    {
        echo "<div class='alert alert-danger'>";
        echo $_GET["erro"];
        echo "</div>";
    }
?>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Permissões
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="nova_permissao.php" class="btn btn-success" >
                            Nova Permissão
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="permissao.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text" 
                                        name="pesquisa" 
                                        value="<?php echo $pesquisa; ?>"  
                                        class="form-control" 
                                        placeholder="Digite sua pesquisa aqui..." />


                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row">
                    <div class="col-12">
                        
                        <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Role</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if ($resultado->num_rows > 0) {
                                    while($row = $resultado->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["ID"] . "</td>";
                                        echo "<td>" . $row["ROLE"] . "</td>";
                                        echo "<td>" . $row["DESCRICAO"] . "</td>";
                                        echo "<td><a href='editar_permissao.php?Id=$row[ID]' class='btn btn-warning' >Editar</a>  ";
                                        echo "<a href='excluir_permissao.php?Id=$row[ID]' class='btn btn-danger'>Excluir</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                                }
                            ?>
                                                    
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "rodape.php"; ?>