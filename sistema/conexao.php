<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "saep_database";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
?>