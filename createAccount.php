<?php

$countType = "Aucun compte sélectionné";
if(isset($_POST["countType"]) && !empty($_POST["countType"])){
    $countType = htmlspecialchars($_POST["countType"]);
}

$amount = "  --  ";
if(isset($_POST["amount"]) && !empty($_POST["amount"])){
    $amount = htmlspecialchars($_POST["amount"]);
}

?>


<?php 
require "page/header.php";
?>

<h2>Ouvrir un Compte :</h2>

<div class="container d-flex">
  <div>

      <section class="row">
        <div class="col ">
          <div class="card">
            <div class="card-header font-weight-bold">
              Création d'un nouveau compte
            </div>
            <div class="card-body">
              <form action="createAccount.php" method="post">
                <div class="form-group">
                  <label for="countType">Type de compte</label>
                  <select class="form-control" id="countType" name="countType">
                    <option value="Compte Courant">Compte Courant</option>
                    <option value="Livret A">Livret A</option>
                    <option value="PEL">PEL</option>
                    <option value="PEA">PEA</option>
                    <option value="PERP">PERP</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="amount">Montant à l'ouverture</label>
                  <input type="number" name="amount" id="amount" min="50" value="50">
                </div>
                <button type="submit" class="btn bgColorHoneyYellow btnOpen">Ouvrir</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      
      
      <section>
        <div class="col ">
          <div class="card">
            <div class="card-header font-weight-bold">
              Compte créé :
            </div>
            <div class="card-body">
              <p class="font-weight-bold">Type de compte créé : </p>
              <?php 
            echo "$countType"
            ?>
            <br><br>
            <p class="font-weight-bold">Montant lors de la création :</p>
            <?php 
            echo "$amount €";
            ?>
            <br><br>
            
            </div>
          </div>
        </div>
      </section>
  
  </div>
</div>




<?php
include "page/footer.php";
?>
