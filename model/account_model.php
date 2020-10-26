<?php

class AccountModel{
  protected PDO $db;

  public function __construct(){
    try{
      $this->db = new PDO('mysql:host=localhost;dbname=Banque_PHP', 'BanquePHP', 'banque76');
    } catch (PDOException $e) {
      print "Erreur : " . $e->getMessage() . "<br/>";
      die();
    }
  }

  public function getAccounts($user){
    
    // Send the query to mysql
    
    $query = $this->db->prepare(
      "SELECT *
      FROM Account AS a 
      WHERE a.user_id = :id"
    );
      $query->execute([
        "id" => $user["id"]
    ]);
    
    
      //Extract data from the query as an associative array
      $userAccount = $query->fetchALL(PDO::FETCH_CLASS, "Account");
      return $userAccount;
  }
}
