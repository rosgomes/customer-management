<?php
    session_start();
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
            <h1 class="text-center">restricted area</h1>
                <?php
                    if(isset($_SESSION['usuario_invalido'])){
                        unset($_SESSION['usuario_invalido']);
                        echo "<p><font style='color: red; text-align: center'><strong>Invalid username and/or password!</strong></p>";
                    }
                ?>
                <form method="POST" action="validation.php" class="py-4">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-filled/16/000000/user-female-circle.png"/></div>
                            </div>
                            <input type="text" class="form-control" name="txtusername" placeholder="username" required>
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="https://img.icons8.com/ios-glyphs/16/000000/lock.png"/></div>
                            </div>
                            <input type="password" class="form-control" name="txtpassword" placeholder="password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <button type="submit" class="btn btn-outline-dark w-100">sign in</button>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <a href="register.php" class="btn btn-outline-dark w-100">register now</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>