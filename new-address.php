<?php
    session_start();
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_exemplos";  

    //Criar a conexao
    $conn = mysqli_connect($host, $username, $password, $database);
    
    $id_c = $_POST["id_cus"];
    $rua = $_POST["rua"];
    $numero = $_POST["num"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];

    mysqli_set_charset($conn, 'utf8');

    $sql = "SELECT * FROM address WHERE id_customer = '$id_c'";

    $validar = mysqli_query($conn, $sql);

    $sql = "INSERT INTO `address`(`id_customer`, `street`, `number`, `neighborhood`, `city`)"
            . " VALUES ('$id_c', '$rua', '$numero', '$bairro' , '$cidade')";

    if (mysqli_query($conn, $sql)) {
        if (isset($_SESSION['id'])) {
            header('location:list-customer.php');
        } else {
            header('location:new-address.php');
        }
    } else {
        header('location:new-address.php?erro=true');
    }
?>