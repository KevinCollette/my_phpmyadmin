<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>PhpMyAdmin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <form class="form-signin" method="POST" action="includes/connect.php">

        <h2 class="form-signin-heading">PhpMyAdmin</h2>

        <label for="login" class="sr-only">Login</label>
        <input type="text" id="login" name="login" class="form-control" placeholder="login" required autofocus>

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="password" required>

        <button class="btn btn-lg btn-primary btn-block" id="connexion" name="connexion" type="submit">Connexion</button>
      </form>
    </div>

  <?php if(isset($_POST['connexion']))
    echo 'erreur !';
  ?>
  </body>
</html>