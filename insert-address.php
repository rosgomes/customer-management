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
                <h1 class="text-center">insert address</h1>
                <form method="POST" action="new-address.php" class="py-4">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/16/000000/identity-theft.png"/></div>
                            </div>
                            <input type="text" class="form-control" name="id_cus" placeholder="ID customer" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/16/000000/streets--v1.png"/></div>
                            </div>
                            <input type="text" class="form-control" name="rua" placeholder="street" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/16/000000/numbered-list.png"/></div>
                            </div>
                            <input type="number_format" class="form-control" name='num' placeholder="number" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/16/000000/neighbour.png"/></div>
                            </div>
                            <input type="text" class="form-control" name='bairro' placeholder="neighborhood" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/16/000000/city.png"/></div>
                            </div>
                            <input type="text" class="form-control" name="cidade" placeholder="city" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <button type="submit" class="btn btn-outline-dark w-100">submit</button>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <a href="login.php" class="btn btn-outline-dark w-100">back</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
  
