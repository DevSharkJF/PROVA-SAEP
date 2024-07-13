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
    <title>Cadastro de Turma</title>
    <style>
        .navbar-custom {
            background-color: #1B3954;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Bem-vindo(a), <?php echo $_COOKIE['nome']; ?></span>
            <a href="index.php" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja SAIR?')">SAIR</a>
        </div>
    </nav>
    <div class="col-2" style="margin-left: 96%;">            
        <a href="pag_professor.php" class="btn btn-primary mt-2">Voltar</a>
    </div>

    <div class="container mt-5">
        <center>
            <h1>Cadastrar Turma</h1>
            <br><br>
            <form method="POST" action="cadastro.php" class="form">
                <div class="mb-3">
                    <input type="hidden" class="mecanico" value="<?php echo $_COOKIE['nome']; ?>" name="professor" id="professor" required>
                    <label for="nome" class="form-label">Nome da Turma: </label> <input type="text" name="turma" id="turma" placeholder="Nome da Turma" required>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </form>
        </center>
    </div>
</body>
</html>
<?php
    }else{
        header("location:index.php");
}
?>
