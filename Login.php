
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Login</title>

    <link href="bootstrap-3.2.0-dist/bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="bootstrap-3.2.0-dist/Css/signin.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">

        <form class="form-signin" action="checklogin.php" method="post">
        <h2 class="form-signin-heading">Ingreso</h2>
        
        <label for="" class="sr-only">UsernName</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        
        
        <label for="" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
        
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" value="Entrar"type="submit">Ingresar</button>
      </form>

    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
