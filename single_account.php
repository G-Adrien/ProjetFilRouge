<?php 
require_once "data/userAccount.php";
require "template/header.php";

if(isset($_GET["id"])){
   $id = htmlspecialchars($_GET["id"]);
   $accounts = get_accounts();
   $account = $accounts[$id];
}

?>

<a href="index.php" class="btn bgColorHoneyYellow ">Retour</a>

<div class="card">
    <div class="card-header font-weight-bold">
    <?php 
    echo $account['account']
    ?>
    </div>
    <div class="card-body">
        <p class="card-title pCard"> <?php echo $account['number'] ?> <span> <?php echo $account['amount'] ?> € </span></p>
        <hr>
        <p class="card-text pCard ">Dernière opération : <span> <?php echo $account['last_operation'] ?>  € </span> </p>
        <div class="d-flex justify-content-between align-items-center">
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
include "template/footer.php";
?>