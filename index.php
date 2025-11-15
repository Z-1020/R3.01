<!DOCTYPE html>
    <html lang="fr">
    <?php
        require_once "connexion.php";
        session_start();
    ?>
    <head>
        <title>Minichat</title>
        <link href="Style/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Bienvenue sur le tchat </h1>
        </heaser>
        <main>
            <div class="formulaire">
                <form action="traitementMinichat.php" method="post">
                    <label for="pseudo"> Veuillez entrer votre pseudo: </label>
                    <input type="texte" id="pseudo" name="pseudo" placeholder="pseudo"/>
                    </br>
                    <label for="message"> Veuillez entrer votre message: </label>
                    <input type="texte" id="message" name="message" placeholder="message"/>
                    </br>
                    <input type="submit" id="envoyer" value="Envoyer"/>
                </form>
            </div>
            <hr>
            <div class="message">
            <?php
                $resMessage = [];
                $sth = $conn->prepare("select pseudo, message, date from conversation order by date desc limit 5 ");
                $sth->execute();
                $res = $sth->fetchAll(PDO::FETCH_ASSOC);
                foreach($res as $key => $val){
                    echo $val['date']. ' '.$val['pseudo']. ' à envoyé : '. $val['message'];
                    echo '</br>';
                }  
            ?>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>




