<?php
session_start();
    require_once "connexion.php";
    if(isset($_POST["pseudo"])){
        echo "coucou";
    }
    $_SESSION['pseudo'] = strip_tags($_POST['pseudo']);
    var_dump($_SESSION['pseudo']);
        if(isset($_POST)){

        $pseudo = $_POST["pseudo"];
        $message = $_POST["message"];
        $sql = "insert into conversation ( pseudo, message, date) values ( :pseudo, :message, SYSDATE())";
        $stmt = $conn->prepare($sql);
        $stmt->execute([':pseudo' => $pseudo, ':message' => $message]);
        header("Location:index.php");
//        echo "envoie réussi";
    }
?>