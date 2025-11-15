<?php
session_start();
    require_once "connexion.php";

    function valider_donnee($donnee){
        $donnee = trim($donnee);
        $donnée = stripcslashes($donnee);
        $donnee = htmlspecialchars($donnee);
        return $donnee;
    }
    if(isset($_POST["pseudo"])){
        echo "coucou";
    }
    $_SESSION['pseudo'] = strip_tags($_POST['pseudo']);
    var_dump($_SESSION['pseudo']);
        if(isset($_POST)){
            

        $pseudo = valider_donnee($_POST["pseudo"]);
        $message = valider_donnee($_POST["message"]);
        $sql = "insert into conversation ( pseudo, message, date) values ( :pseudo, :message, SYSDATE())";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':pseudo' => $pseudo, ':message' => $message]);
        header("Location:index.php");

    }

    
?>