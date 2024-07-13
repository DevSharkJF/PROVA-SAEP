<?php
    session_start();
    if(isset($_SESSION['email']) && $_SESSION['email'] === TRUE){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Atividade</title>
    <style>
        .navbar-custom {
            background-color: #1B3954;
        }
        
    </style>
</head>
<body>
<?php
    require_once 'conexao.php';
    $turma = $_GET["nome_turma"];
    $codigo = $_GET["codigo"];
?>
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Bem-vindo(a), <?php echo $_COOKIE['nome']; ?></span>
            <a href="index.php" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja SAIR?')">SAIR</a>
        </div>
    </nav>

    <div class="col-2" style="margin-left: 96%;">            
        <a href="listar_demanda.php" class="btn btn-primary mt-2">Voltar</a>
    </div>

    <div class="container mt-5">
        <h3>Cadastrar Atividade</h3>
        <br>
        <form method="POST" action="cadastro_arq.php">
            <input type="hidden" name="nome_turma" id="nome_turma" value="<?php echo $turma; ?>">
            <input type="hidden" name="codigo" id="codigo" value="<?php echo $codigo; ?>">
            <label> Especificação: </label> <textarea type="text" class="form-control" name="atividade" id="atividade" required></textarea> <br>
            <br>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</body>
</html>
<?php
    }else{
        header("location:index.php");
}
?>
