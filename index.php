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
    <link href="css/login.css" rel="stylesheet">
  </head>

<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
      <div class="col-md-4">
        <section class="login-form">
          <form method="post" action="includes/connect.php" role="login">
            <img src="http://www.mabe23.it/blog/wp-content/uploads/2014/10/phpmyadmin-logo-604x2721.png" class="img-responsive" alt="" />
            <input type="text" id="login" name="login" class="form-control" placeholder="login" required autofocus>
            <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" required="" />
            <button class="btn btn-lg btn-primary btn-block" id="connexion" name="connexion" type="submit">Connexion</button>
            
            <div class="pwstrength_viewport_progress"></div>
        </section>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/npm.js"></script>
</html>