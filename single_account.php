<?php 

require "template/header.php";
require "model/model_single_account.php";

if(isset($_GET["id"])){
   $id = htmlspecialchars($_GET["id"]);
   $accounts = get_accounts();
   $account = $accounts[$id];
}

require "view/view_single_account.php";

include "template/footer.php";
?>