<?php
    if($_server["REQUEST_METHOD" == "POST"]){
        $pseudo = $_post["pseudo"];
        $message = $p_post["message"];
        $sql = "insert into conversation (pseudo, message, date, heure) values ($pseudo, $message, sysdate )";
        $stmt = $pdo->prepare($sql);
        $stmt ->execute($sql);
    }
?>