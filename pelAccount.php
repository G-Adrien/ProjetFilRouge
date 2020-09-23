<?php 
require "page/header.php";
?>

<a href="index.php" class="btn bgColorHoneyYellow ">< Tout les comptes</a>
<div class="card">
      <div class="card-header font-weight-bold">
        P.E.L
      </div>
      <div class="card-body">
        <p class="card-title pCard">XXXX 4571 <span>+50 965 €</span></p>
        <hr>
        <p class="card-text pCard ">Solde prévisionnel : <span>+ 50 965 €</span> </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="iconMore d-flex flex-wrap">
            <a href="#" class="btnAccount"><i class="fas fa-piggy-bank"></i>Détail du compte</a>
            <a href="#" class="btnAccount" id="rib"><i class="fas fa-money-check"></i>BIB/IBAN</a>
            <a href="#" class="btnAccount" id="creditCard"><i class="far fa-credit-card"></i>Carte</a>
            <a href="#" class="btnAccount" id="more"><i class="fas fa-copy"></i>Plus</a>
          </div>
        </div>
      </div>
    </div>


<?php
include "page/footer.php";
?>
