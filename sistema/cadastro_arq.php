<?php
    require "conexao.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = $_POST["codigo"];
        $turma = $_POST["nome_turma"];
        $descricao = $_POST["atividade"];

        if($descricao != "" AND $turma != ""){
            $sql = "INSERT INTO atividades (turma,descricao) VALUES ('$turma', '$descricao')";

            if ($conn->query($sql) == TRUE){
                echo"<div class=\"alert alert-success\" role=\"alert\">SUCESSO!</div>";
                header("refresh:2;url=pag_professor.php");

            }else{
                echo "ERRO";
                header("refresh:2;url=cadastro_atividade.php");
            }
        }
    }
    $conn->close();
?>