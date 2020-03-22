<?php 
  session_start();
  
  $usuario = $_SESSION['usuario'];
  
  if((!isset ($_SESSION['id']))){
    header('location:login.php');
  }
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management - Restricted Area</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme.css">
  </head>

  <body>

    <section id="section-login">
      <div class="container justify-content-md-center px-5 py-3" id="login">
        <h1 class="text-center">administrative area</h1>

        <a href="new-customer.php" class="btn btn-outline-dark w-100 my-2">insert customer</a>
        <!-- com a listagem de clientes aparece as opções de excluir e alterar -->
        <a href="list-customer.php" class="btn btn-outline-dark w-100 my-2">list customer</a>
      </div>
    </section>

  </body>
</html>