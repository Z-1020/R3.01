<!DOCTYPE html>
    <html lang="fr">
    <?php
        require_once "connexion.php";
        session_start();
    ?>
    <head>
        <title>Minichat</title>
    </head>
    <body>
        <form action="traitementMinichat.php" method="post">
            <label for="pseudo"> Veuillez entrer votre pseudo: </label>
            <input type="texte" id="pseudo" name="pseudo"/>
            <br>
            <label for="message"> Veuillez entrer votre message: </label>
            <input type="texte" id="message" name="message"/>
            <br>
            <input type="submit" id="envoyer" value="Envoyer"/>


        </form>
        <hr>
        <p class="afficheMessage"></p>
    </body>

</html>



