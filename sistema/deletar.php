<?php
    require_once "conexao.php";

    $codigo = $_GET["codigo"];
    $query = "DELETE FROM turmas WHERE codigo = '$codigo'";
    if(mysqli_query($conn, $query)){
        echo "excluído com sucesso!";
        header("refresh:1;url=pag_professor.php");
    }else{
        echo "Erro ao excluir!";
        header("refresh:1;url=listar_demanda.php");
    }
?>
