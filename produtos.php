<?php include "cabecario.php"?>
<?php
        if(isset($_GET["pesquisa"]))
        {
            $pesquisa = $_GET["pesquisa"];
            if(empty($pesquisa))
            {
                //se variel estiver Vazio executa aqui.
                include "conexao.php";
                $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem from Produtos order by Id desc";
                $resultado = $conexao->query($sql);
                $conexao->close();         
            }
            else
            {
                //Aqui vai a logica da pesquisa
                include "conexao.php";
                $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem 
                        from Produtos  
                        where Descricao like '%$pesquisa%' || Codigo_Barras = '$pesquisa'
                        order by Id desc";
                $resultado = $conexao->query($sql);
                $conexao->close();        
            }
        }else
        {
            $pesquisa="";
            include "conexao.php";
            $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem from Produtos order by Id desc";
            $resultado = $conexao->query($sql);
           
            $conexao->close();
                    
        } 

?>
    <div class="row">
        <div class ="col-12">
            <div class="card">
                <div class="card-header">
                    Lista de Produtos
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <a href="novo-produto.php" class="btn btn-success">
                                Novo Produto
                            </a>    
                        </div>
                        <div class="col-8">
                            <form action="produtos.php" method="get">
                                <div class="input-group mb-3">
                                    <input type="text" name="pesquisa" class="form-control" value="<?php echo $pesquisa; ?>" 
                                            placeholder="Digite sua pesquisa aqui...">
                                    <button type="submit" class="btn btn-primary">
                                        Pesquisar
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped  table-hover">
                                <thead>
                                    <tr>    
                                    <th scope="col">Id</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Codigo de barras</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include "conexao.php";
                                        $sql = "select id,descricao,valor,codigo_barras,imagem from produtos order by id desc";
                                        $resultado  = $conexao -> query($sql);
                                        if($resultado->num_rows>0){
                                            while($row = $resultado->fetch_assoc()){
                                                echo"<tr>";
                                                echo"<td>".$row["id"]."</td>";
                                                echo"<td>".$row["descricao"]."</td>";
                                                echo"<td>".$row["valor"]."</td>";
                                                echo"<td>".$row["codigo_barras"]."</td>";
                                                echo"<td>".$row["imagem"]."</td>";
                                                echo "<td><a href='editar_produto.php?id=$row[id]' class='btn btn-warning' >Editar</a>  ";
                                                echo "<a href='excluir_produto.php?Id=$row[id]' class='btn btn-danger'>Excluir</a></td>";
                                                echo"</tr>";
                                            }
                                            
                                        }else{
                                            echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                                        }
                                        $conexao->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php include "rodape.php" ?>