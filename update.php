<?php
    session_start();
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_exemplos";  

    //Criar a conexao
    $conn = mysqli_connect($host, $username, $password, $database);
    
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];

    mysqli_set_charset($conn, 'utf8');

    $sql = "SELECT nome FROM customer WHERE nome = '$nome'";

    $validar = mysqli_query($conn, $sql);

    $sql = "UPDATE customer SET  nome = '$nome', telefone = '$telefone'";

    if (mysqli_query($conn, $sql)) {
        if (isset($_SESSION['id'])) {
            header('location:list-customer.php');
        } else {
            header('location:update-customer.php');
        }
    } else {
        header('location:update-customer.php?erro=true');
    }
?>