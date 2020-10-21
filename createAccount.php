  <?php


  $accountType = " -- ";
  if(isset($_POST["accountType"]) && !empty($_POST["accountType"])){
      $accountType = htmlspecialchars($_POST["accountType"]);
  }

  $amount = "  --  ";
  if(isset($_POST["amount"]) && !empty($_POST["amount"])){
      $amount = htmlspecialchars($_POST["amount"]) . " €";
  }

  require "template/header.php";

  require "view/view_createAccount.php";

  require "model/model_createAccount.php";


    include "template/footer.php";
  ?>
