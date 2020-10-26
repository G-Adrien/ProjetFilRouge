<?php 



//Connect to database
try{
    $db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die();
}

$user = ($_SESSION["user"]);
$id = $user["id"];



$query = $db->prepare(
    "INSERT INTO Account(amount, opening_date, account_type, user_id)
    VALUES
    (:amount, NOW(), :accountType, :id)"
);

$query->execute([
    "id" => $id,
    "amount" => $amount,
    "accountType" => $accountType
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
    
    

function getAccounts($db, $id){
    $query = $db->prepare(
        "SELECT `account_type`,`id`, `amount` FROM `account` WHERE `user_id`=:id"
    );

    $query->execute([
        "id" => $id
    ]);

    $accounts_list = $query->fetchAll(PDO::FETCH_ASSOC);
    return $accounts_list;

}
