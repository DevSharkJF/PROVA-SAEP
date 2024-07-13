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
    <title>Página Professor</title>
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

    <div class="container mt-5">
        <h1>TURMAS</h1>
        <div class="row justify-content-end">
            <div class="col-2">            
                <a href="cadastro_turma.php" class="btn btn-success mb-2">Cadastrar Turma</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">TURMA</th>
                    <th scope="col">NOME DO PROFESSOR</th>
                    <th scope="col">AÇÃO</th>
                </tr>
            </thead>
            <?php
                require_once 'conexao.php';
                $sql_query = "SELECT * FROM turmas WHERE professor_cadastro = '$_COOKIE[nome]'";
                if ($result = $conn ->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $codigo = $row['codigo'];
                        $turma = $row['nome_turma'];
                        $professor = $row['professor_cadastro'];
                    
                ?>
            <tr>
                <td><?php echo $codigo; ?></td>
                <td><?php echo $turma; ?></td>
                <td><?php echo $professor; ?></td>
                <td>
                    <a href="deletar.php?codigo=<?php echo $codigo;?>" onclick="return confirm('Tem certeza que deseja deletar todos os DADOS?')" class="btn btn-danger btn-sm" style="font-weight: 900;">EXCLUIR</a>
                </td>
                <td>
                    <a href="listar_demanda.php?codigo=<?php echo $codigo; ?>&nome_turma=<?php echo $turma;?>" class="btn btn-info btn-sm"> VER MAIS </a>
                </td>
            </tr>
            <?php
                    }
                }
                $conn->close();
            ?>
        </table> 
    </div>
</body>
</html>

<?php
    }else{
        header("location:index.php");
}
?>
