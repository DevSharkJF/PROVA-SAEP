<?php
    require_once 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $professor = $_POST["professor"];
        $turma = $_POST["turma"];
        if($professor != "" AND $turma != ""){
            $sql = "INSERT INTO turmas (nome_turma, professor_cadastro) VALUES ('$turma', '$professor')";

            if ($conn->query($sql) == TRUE){
                setcookie('nome_turma', mysqli_fetch_row(mysqli_query($conn, "SELECT nome_turma FROM turmas WHERE professor_cadastro = '$professor' AND nome_turma = '$turma'"))[0]);

                echo"<div class=\"alert alert-success\" role=\"alert\"> TURMA CADASTRADA COM SUCESSO!</div>";
                header("refresh:2;url=pag_professor.php");
            }else{
                echo "ERRO AO CADASTRAR A TURMA!";
                header("refresh:2;url=cadastro_turma.php");
            }
        }
    }
    $conn->close();
?>