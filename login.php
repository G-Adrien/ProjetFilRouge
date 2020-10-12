    <?php
    if(!empty($_POST) && isset($_POST["login"])){

      //Connect to database
      try{
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
      } catch (PDOException $e) {
          print "Erreur : " . $e->getMessage() . "<br/>";
          die();
      }
      $query = $db->prepare(
        "SELECT * FROM user WHERE email = :email"
      );
      $query->execute([
        "email"=>$_POST["email"]
      ]);
      $user = $query->fetch(PDO::FETCH_ASSOC);
      if($user == true){
        if($_POST["password"]===$user["password"]){
          session_start();
          $_SESSION["user"]=$user;

          header("Location: index.php");
          exit();
        }
      }
    }
?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <title>DEV Bank - connexion</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
  <!-- Place favicon.ico in the root directory -->
  <link href="//db.onlinewebfonts.com/c/9f94dc20bb2a09c15241d3a880b7ad01?family=Menlo" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@700&display=swap" rel="stylesheet"> 
  
  <script src="https://kit.fontawesome.com/0f0f7849a1.js" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/login.css">
<!-- link font -->
  <meta name="theme-color" content="#fafafa">
</head>

<body>
    <div id="background">

    </div>
    <h1>DEV BANK</h1>
    <div class="container card-log">
        <h3>Connexion</h3>
        <p>Veuillez saisir votre adresse e-mail ainsi que votre mot de passe</p>
        <form action="" method="post">
          <div class="form-group">
              <label for="email">Adresse E-mail:</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer ici votre adresse e-mail">
          </div>
          <div class="form-group">
              <label for="password">Mot de passe:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Entrer ici votre mot de passe">
          </div>
          <div class="center">
              <button type="submit" class="btn btn-warning " name="login">Entrer</button>
          </div>
        </form>
    </div>
    <footer>
        <div>
            <p>DEV BANK - tous droits réservés © 2020 </p>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <?php
  if(isset($script)){
    echo $script;
  }
?>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>