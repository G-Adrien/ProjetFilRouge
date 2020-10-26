<?php  
require "model/start_session.php";
require "model/entity/account.php";
require "model/account_model.php";

$accountModel = new AccountModel();
$userAccount = $accountModel->getAccounts($_SESSION["user"]);

require "view/view_index.php";


?>

