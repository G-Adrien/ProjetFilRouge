<?php

if(!empty($_POST) && isset($_POST["login"])){

    //Connect to database
    try{
    $db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
    } catch (PDOException $e) {
        print "Erreur : " . $e->getMessage() . "<br/>";
        die();
    }
    $query = $db->prepare(
    "SELECT * FROM user WHERE email = :email"
    );
    $query->execute([
    "email"=>$_POST["email"]
    ]);
    $user = $query->fetch(PDO::FETCH_ASSOC);
    if($user == true){
        if(password_verify($_POST["password"],$user["password"])){
            session_start();
            $_SESSION["user"]=$user;
            header("Location: index.php");
            exit();
        }
    }
}
