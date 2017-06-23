<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  
  <link href="style/bootstrap.min.css" rel="stylesheet">
  <link href="style/login.css" rel="stylesheet">
  <!--<link href="style/style.css" rel="stylesheet">
  <link href="style/menu.css" rel="stylesheet">-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<?php
include("include/utilisateur.php");
session_start();
?>
<div id="login">
  <section>
    <aside>
      <div id="log">
        <?php echo menuConnexion(); ?>
      </div>
      <?php
        if (estConnecte()){
          header("Location: index.php");
          die();
        }
      ?>
    </aside>
  </section>
</div>
<?php


?>
