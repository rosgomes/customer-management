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
                <h1 class="text-center">list customer</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th>name</th>
                            <th>date of birth</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>phone</th>
                            <th>street</th>
                            <th>number</th>
                            <th>neighborhood</th>
                            <th>city</th> -->
                            <th>ID</th>
                            <th>name</th>
                            <th>date of birth</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>phone</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $host = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "db_exemplos";  

                            //Criar a conexao
                            $conn = mysqli_connect($host, $username, $password, $database);
                            $id = $_SESSION["id"];

                            mysqli_set_charset($conn, 'utf8');
                        
                            $sql = "SELECT id FROM customer WHERE id = '$id'";
                        
                            $validar = mysqli_query($conn, $sql);

                            if(!$conn) die("Falha ao conectar ao banco");

                            // $sql = "SELECT c.nome, c.datanasc, c.cpf, c.rg, c.telefone, a.street, a.number, a.neighborhood, a.city 
                            //         FROM customer c 
                            //         JOIN address a on a.id_customer = c.id 
                            //         WHERE a.id_customer = c.id 
                            //         ORDER BY c.id ASC";


                            $sql = "SELECT * FROM customer ORDER BY id ASC";

                            $resultado_listagem = mysqli_query($conn, $sql) or die(mysqli_error($link));

                            if ($resultado_listagem) {
                                while($linha = mysqli_fetch_assoc($resultado_listagem)){
                                    // echo '<tr>';
                                    // echo '<td>'. $linha['nome'] .'</td>';
                                    // echo '<td>'. $linha['datanasc'] .'</td>';
                                    // echo '<td>'. $linha['cpf'] .'</td>';
                                    // echo '<td>'. $linha['rg'] .'</td>';
                                    // echo '<td>'. $linha['telefone'] .'</td>';
                                    // echo '<td>'. $linha['street'] .'</td>';
                                    // echo '<td>'. $linha['number'] .'</td>';
                                    // echo '<td>'. $linha['neighborhood'] .'</td>';
                                    // echo '<td>'. $linha['city'] .'</td>';
                                    // echo '</tr>';   
                                    echo '<tr>';
                                    echo '<td>'. $linha['id'] .'</td>';
                                    echo '<td>'. $linha['nome'] .'</td>';
                                    echo '<td>'. $linha['datanasc'] .'</td>';
                                    echo '<td>'. $linha['cpf'] .'</td>';
                                    echo '<td>'. $linha['rg'] .'</td>';
                                    echo '<td>'. $linha['telefone'] .'</td>';
                                    echo '</tr>';   
                                }
                                
                            } else {
                                header('location:new-customer.php?erro=true');
                            }
                        ?>
                    </tbody>
                </table>

                <a href="update-customer.php" class="btn btn-outline-dark w-100 my-2">update customer</a>
                <a href="insert-address.php" class="btn btn-outline-dark w-100 my-2">insert address</a>
                <a href="delete-customer.php" class="btn btn-outline-dark w-100 my-2">delete customer</a>
            </div>
        </section>
    </body>
</html>