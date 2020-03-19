<?php

    session_start();
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_exemplos";  

    //Criar a conexao
    $conn = mysqli_connect($host, $username, $password, $database);
    
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $usuario = $_POST["username"];
    $senha = $_POST["password"];

    mysqli_set_charset($conn, 'utf8');

    $sql = "SELECT username FROM user WHERE username = '$usuario'";

    $validar = mysqli_query($conn, $sql);

    $sql = "INSERT INTO user(name, email, username, password)"
            . " VALUES ('$nome', '$email', '$usuario', '$senha')";

    if (mysqli_query($conn, $sql)) {
        if (isset($_SESSION['id'])) {
            header('location: administration.php');
        } else {
            header('location: login.php');
        }
    } else {
        header('location:new-user.php?erro=true');
    }
?>