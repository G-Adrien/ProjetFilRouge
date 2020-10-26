<?php

try{
  $db = new PDO('mysql:host=localhost;dbname=Banque_PHP', 'BanquePHP', 'banque76');
} catch (PDOException $e) {
  print "Erreur : " . $e->getMessage() . "<br/>";
  die();
}

// Send the query to mysql
$user = ($_SESSION["user"]);
$id = $user["id"];

$query = $db->prepare(
  "SELECT a.account_type, a.amount 
  FROM User AS u 
  INNER JOIN Account AS a ON u.id = a.user_id 
  WHERE u.id = :id"
);
  $query->execute([
    "id" => $id
]);


  //Extract data from the query as an associative array
  $userAccount = $query->fetchALL(PDO::FETCH_ASSOC);