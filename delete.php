<?php
    session_start();
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_exemplos";  

    //Criar a conexao
    $conn = mysqli_connect($host, $username, $password, $database);
    
    $nome = $_POST["nome"];

    mysqli_set_charset($conn, 'utf8');

    $sql = "SELECT nome FROM customer WHERE nome = '$nome'";

    $validar = mysqli_query($conn,$sql) or die("ERROR");

    $sql = "DELETE FROM customer WHERE nome='$nome'"; 

    if (mysqli_query($conn, $sql)) {
        echo "Registro EXCLUIDO com sucesso.";
        header('location: list-customer.php');
    } else {
        echo "ERROR";
    }
?>