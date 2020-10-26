<?php
require "model/start_session.php";

$accountType = " -- ";
if(isset($_POST["accountType"]) && !empty($_POST["accountType"])){
    $accountType = htmlspecialchars($_POST["accountType"]);
}

$amount = "  --  ";
if(isset($_POST["amount"]) && !empty($_POST["amount"])){
    $amount = htmlspecialchars($_POST["amount"]) . " €";
}

$amount = "";
$accountType = "";
if(!empty($_POST) && isset($_POST)){
    $amount = $_POST['amount'];
    $accountType = $_POST['accountType'];
}
require "template/header.php";
require "model/model_transaction.php";
$user = ($_SESSION["user"]);
$id = $user["id"];
$accounts_list = getAccounts($db, $id);


require "view/view_transaction.php";

include "template/footer.php";