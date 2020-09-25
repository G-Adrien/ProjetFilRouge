<?php 



require_once "data/userAccount.php";
require "page/header.php";
?>




    

    <h2>Vos comptes :</h2>

<?php
foreach($user_account as $key => $value): 
?>

    <div class="card">
      <div class="card-header font-weight-bold">
        <?php echo $value['account'] ?>
      </div>
      <div class="card-body">
        <p class="card-title pCard"> <?php echo $value['number_account'] ?> <span> <?php echo $value['amount'] ?> € </span></p>
        <hr>
        <p class="card-text pCard ">Dernière opération : <span> <?php echo $value['last_operation'] ?>  € </span> </p>
        <div class="d-flex justify-content-between align-items-center">
          <a href="currentAccount.php" class="btn bgColorHoneyYellow ">Voir plus</a>
          <div class="iconMore d-flex flex-wrap">
            <a href="#" class="btnAccount"><i class="fas fa-piggy-bank"></i>Détail du compte</a>
            <a href="#" class="btnAccount" id="rib"><i class="fas fa-money-check"></i>RIB/IBAN</a>
            <a href="#" class="btnAccount" id="creditCard"><i class="far fa-credit-card"></i>Carte</a>
            <a href="#" class="btnAccount" id="more"><i class="fas fa-copy"></i>Plus</a>
          </div>
        </div>
      </div>
    </div>

  <?php
  endforeach;
  ?>


  


<?php
include "page/footer.php";
?>


<!-- <div class="card">
      <div class="card-header font-weight-bold">
        Livret A
      </div>
      <div class="card-body">
        <p class="card-title pCard">XXXX 8380 <span>+ 5 280 €</span></p>
        <hr>
        <p class="card-text pCard ">Dernière opération : <span>+ 5 280 €</span> </p>
        <div class="d-flex justify-content-between align-items-center">
          <a href="bookletAAccount.php" class="btn bgColorHoneyYellow ">Voir plus</a>
          <div class="iconMore d-flex flex-wrap">
            <a href="#" class="btnAccount"><i class="fas fa-piggy-bank"></i>Détail du compte</a>
            <a href="#" class="btnAccount" id="rib"><i class="fas fa-money-check"></i>BIB/IBAN</a>
            <a href="#" class="btnAccount" id="creditCard"><i class="far fa-credit-card"></i>Carte</a>
            <a href="#" class="btnAccount" id="more"><i class="fas fa-copy"></i>Plus</a>
          </div>
        </div>
      </div>
    </div>

    
    <div class="card">
      <div class="card-header font-weight-bold">
        P.E.L
      </div>
      <div class="card-body">
        <p class="card-title pCard">XXXX 4571 <span>+50 965 €</span></p>
        <hr>
        <p class="card-text pCard ">Dernière opération : <span>+ 50 965 €</span> </p>
        <div class="d-flex justify-content-between align-items-center">
          <a href="pelAccount.php" class="btn bgColorHoneyYellow ">Voir plus</a>
          <div class="iconMore d-flex flex-wrap">
            <a href="#" class="btnAccount"><i class="fas fa-piggy-bank"></i>Détail du compte</a>
            <a href="#" class="btnAccount" id="rib"><i class="fas fa-money-check"></i>BIB/IBAN</a>
            <a href="#" class="btnAccount" id="creditCard"><i class="far fa-credit-card"></i>Carte</a>
            <a href="#" class="btnAccount" id="more"><i class="fas fa-copy"></i>Plus</a>
          </div>
        </div>
      </div>
    </div> -->