<?php
    $servername = "localhost"; // nom du serveur
    $username = ""; //ajouter votre identifiant
    $password = ""; //ajouter votre mot de passe
    $bdd = "minichat"; //nom de la base de données

    try{
        $conn =new PDO("mysql:host=$servername;dbname=$bdd", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'connexion réussi';
    }
    catch(PDOException $e){
        echo "Erreur : ". $e->getMessage();
    }
    

?>