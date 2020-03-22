<?php
    session_start();
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_exemplos";  

    //Criar a conexao
    $conn = mysqli_connect($host, $username, $password, $database);
    
    $nome = $_POST["nome"];
    $datan = $_POST["datanasc"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $telefone = $_POST["telefone"];

    mysqli_set_charset($conn, 'utf8');

    $sql = "SELECT nome FROM customer WHERE nome = '$nome'";

    $validar = mysqli_query($conn, $sql);

    $sql = "INSERT INTO customer(nome, datanasc, cpf, rg, telefone)"
            . " VALUES ('$nome', '$datan', '$cpf', '$rg' , '$telefone')";

    if (mysqli_query($conn, $sql)) {
        if (isset($_SESSION['id'])) {
            header('location:administration.php');
        } else {
            header('location:new-customer.php');
        }
    } else {
        header('location:new-customer.php?erro=true');
    }
?>