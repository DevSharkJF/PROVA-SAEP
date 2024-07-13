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
    <title>Listagem</title>
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
        <a href="pag_professor.php" class="btn btn-primary mt-2">Voltar</a>
    </div>

    <div class="container mt-5">
        <h1>LISTAGEM DE ATIVIDADES</h1>
        <br>
        <h4>Atividades da Turma: <?php echo $turma; ?></h4>

        <div class="row justify-content-end">
            <div class="col-3">
                <a href="cadastro_atividade.php?codigo=<?php echo $codigo; ?>&nome_turma=<?php echo $turma;?>" class="btn btn-success mb-2">Cadastrar Atividade</a>
            </div>
        </div>

        <center>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">NÚMERO</th>
                        
                        <th scope="col">DESCRIÇÃO</th>
                    </tr>
                </thead>

                <?php
                    require_once "conexao.php";
                    if ($_SERVER["REQUEST_METHOD"] == "GET"){
                        $sql_query = "SELECT * FROM atividades WHERE turma = '$turma'";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result->fetch_assoc()) {
                                $numero = $row['id_atividade'];
                                $turma = $row['turma'];
                                $descricao = $row['descricao'];
                ?>
                            <tr>
                                <td><?php echo $numero; ?></td>
                                <td><?php echo $descricao; ?></td>
                            </tr>
                <?php
                            }
                        }
                    }
                    $conn->close();
                ?>
            </table>
        </center>
    </div>
</body>
</html>
<?php
    }else{
        header("location:index.php");
}
?>
