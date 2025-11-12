<?php
require_once "connexion.php";
session_start();
?>

<!DOCTYPE>
<html lang="fr">
    <head>
        <title>Minichat</title>
    </head>
    <body>
        <form action="traitementMinichat.php" method="post">
            <label for="name"> Veuillez entrer votre pseudo: </label>
            <input type="texte" id="pseudo"/>
            <br>
            <label for="name"> Veuillez entrer votre message: </label>
            <input type="texte" id="message"/>
            <br>
            <input type="button" id="envoyer" value="Envoyer"/>


        </form>
        <hr>
        <p class="afficheMessage"></p>
    </body>

</html>



