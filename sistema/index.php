<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Página Principal</title>

    <style>
        .navbar-custom {
            background-color: #1B3954;
        }
        
    </style>
</head>
<?php 
    session_start();
    session_destroy();
?>
<body>
    <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <span class="navbar-brand mb-1 h4 text-white">SISTEMA ESCOLA</span>
        </div>
    </nav>
    <br>
    <center>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h1>FAÇA LOGIN</h1>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="login.php">
                                <div class="mb-3">
                                    <input type="email" name="email" id="email" placeholder="E-mail">
                                    <input type="password" name="senha" id="senha" placeholder="Senha">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="entrar" id="entrar">ENTRAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
</body>
</html>