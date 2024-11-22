<?php include "cabecario.php";?>

<?php 
    include "conexao.php";

    $sql_Permissoes = "select Role, Id from PERMISSOES order by Id desc";
    $resultado_permissoes = $conexao->query($sql_Permissoes);
    if( isset($_GET["Adicionar"]) && !empty($_GET["Adicionar"]))
    {
        $sql_salvar = "insert into usuarios_permissoes (USUARIO_ID, PERMISSAO_ID)
                        Values($_GET[id_usuario], $_GET[Adicionar])";
        $resultado = $conexao->query($sql_salvar);

    }

    if(isset($_GET["excluir"]) && !empty($_GET["excluir"]))
    {
        $sql_excluir = "delete from usuarios_permissoes where id = $_GET[excluir]";
        $resultado = $conexao->query($sql_excluir);
    }

    $sql_usuarios_permissao = " select u.Id, u.Login, p.Role, PU.Id from USUARIOS_PERMISSOES PU 
                                inner join Usuarios u on (u.Id = PU.USUARIO_ID)
                                inner join PERMISSOES p on (p.Id = PU.PERMISSAO_ID)";

        $resultado_usuario_permissao = $conexao->query($sql_usuarios_permissao);

?>
<?php 
    $sql = "
    SELECT 
        p.id AS permissao_id,
            p.descricao AS permissao_nome,
            CASE WHEN up.usuario_id IS NOT NULL THEN 1 ELSE 0 END AS possui_permissao,
            p.descricao AS descricao,
            up.Id,
            CASE 
                WHEN up.usuario_id IS NOT NULL
                    THEN 1 
                ELSE 0 
                END AS acao
    FROM 
        permissoes p
    LEFT JOIN 
        usuarios_permissoes up 
    ON 
            p.id = up.permissao_id AND up.usuario_id = $_GET[id_usuario];
    ";
    // Executa a consulta
    $result = $conexao->query($sql);

    // Exibe os resultados
    echo "<table class='table table-bordered table-hover table-striped'>";
    echo "<thead><tr><th>Ação</th><th>Descrição</th></tr></thead><tbody>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>"; 
                if($row["acao"] == 1)
                {
                    echo "<a href='permissoes_usuario.php?id_usuario=$_GET[id_usuario]&excluir=$row[Id]' class='btn btn-danger'>Excluir Permissão</a>"; 
                }else{
                    echo "<a href='permissoes_usuario.php?id_usuario=$_GET[id_usuario]&Adicionar=$row[permissao_id]' class='btn btn-success'> Adicionar Permissão</a>";
                }
                echo "</td>";
                echo "<td>$row[descricao]</td>";
                echo "</tr>";
        }
    }
    else
    {
        echo "<tr> <td colspan='2'>Nenhuma permissão encontrada.</td></tr>";
    }
    // Fecha a conexão
    $conexao->close();
?>

<?php include "rodape.php"; ?>