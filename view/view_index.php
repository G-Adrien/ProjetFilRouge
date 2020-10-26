<?php 
require "template/header.php";
?>

<h2>Vos comptes :</h2>
<?php


foreach ($userAccount as $key => $account){

echo '
  <div class="card">
    <div class="card-header font-weight-bold">'
      . $account->getAccount_type() .
    '</div>
    <div class="card-body">
      <p class="card-title pCard"> Solde du Compte: <span>'. $account->getAmount() . '€ </span></p>
      <hr>
      <p class="card-text pCard ">Dernière opération : <span> montant et label </span> </p>
      <div class="d-flex justify-content-between align-items-center">
        <a href="single_account.php" class="btn bgColorHoneyYellow ">Voir plus</a>
        <div class="iconMore d-flex flex-wrap">
          <a href="#" class="btnAccount"><i class="fas fa-piggy-bank"></i>Détail du compte</a>
          <a href="#" class="btnAccount" id="rib"><i class="fas fa-money-check"></i>RIB/IBAN</a>
          <a href="#" class="btnAccount" id="creditCard"><i class="far fa-credit-card"></i>Carte</a>
          <a href="#" class="btnAccount" id="more"><i class="fas fa-copy"></i>Plus</a>
        </div>
      </div>
    </div>
  </div>';
}
    
 ?>

<?php
  $script = "<script src='js/layer.js'></script>";
  include "template/footer.php";
?>