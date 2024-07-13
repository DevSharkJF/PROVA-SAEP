<?php
    require_once 'conexao.php';
    session_start();
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $entrar = $_POST["entrar"];
    

    if (isset($entrar)) {
        $verifica = mysqli_query($conn, "SELECT * FROM professores WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");

        if (mysqli_num_rows($verifica) <= 0) {
            echo"USUÁRIO OU SENHA <font color=\"red\">INCORRETOS</font>";
            header("refresh:2;url=index.php");
            die();
        } else{
            setcookie("email", $email);
            $_SESSION['email'] = TRUE;
            setcookie('nome', mysqli_fetch_row(mysqli_query($conn, "SELECT nome FROM professores WHERE email = '$email' AND senha = '$senha'"))[0]);

            echo "LOGIN EFETUADO COM SUCESSO";
            header("refresh:2;url=pag_professor.php");
        }
    }
?>