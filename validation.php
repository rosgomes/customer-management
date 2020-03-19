<?php
    session_start();   
    $usuario = $_POST['txtusername'];
    $senha = $_POST['txtpassword'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_exemplos";  

    $conn = mysqli_connect($host, $username, $password, $database);
    $qry = "SELECT * FROM user WHERE username = '$usuario' && password = '$senha' LIMIT 1";  
    $sql = mysqli_query($conn,$qry) or die("ERROR");

    if($dados = mysqli_fetch_assoc($sql)){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $dados['nome'];
        $_SESSION["id"] = $dados['id'];
        header('location: administration.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['nome']);
        unset($_SESSION['id']);
        
        $_SESSION['usuario_invalido'] = true;
        header('location:login.php');}
?>