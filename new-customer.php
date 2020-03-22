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
        <title>Customer Management - Register Now</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="theme.css">
    </head>

    <body>

        <section id="section-login">
            <div class="container justify-content-md-center px-5 py-3" id="login">
                <h1 class="text-center">insert customer</h1>
                <form method="POST" action="insert.php" class="py-4">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/16/000000/name.png"/></div>
                            </div>
                            <input type="text" class="form-control" name="nome" placeholder="name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-filled/16/000000/calendar.png"/></div>
                            </div>
                            <input type="date" class="form-control" name="datanasc" placeholder="date of birth" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/small/16/000000/single-line-text-input.png"/></div>
                            </div>
                            <input type="text" class="form-control" name='cpf' size='11' maxlength='11' placeholder="CPF" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/small/16/000000/single-line-text-input.png"/></div>
                            </div>
                            <input type="text" class="form-control" name='rg' size='9' maxlength='9' placeholder="RG" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/small/16/000000/number-pad.png"/></div>
                            </div>
                            <input type="number_format" class="form-control" name="telefone" size='11' maxlength='11' placeholder="phone" required>
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
  
