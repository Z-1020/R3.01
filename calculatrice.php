<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Calculatrice</title>
    </head>
    <body>
        <h1>Calculatrice</h1>
        <form  methode="post">
        <p>valeur 1:</p>
        <input type="text" name="valeur" id="valeur1">
        <p>valeur 2:</p>
        <input type="text" name="valeur" id="valeur2">
        <p>opération :</p>
        <input type="button" name="operation" id="addition" value="+">
        <input type="button" name="operation" id="soustration" value="-">
        <input type="button" name="operation" id="multiplication" value="X" >
        <input type="button" name="operation" id="division" value="/">
        </form> 
        
        
    </body>
</html>

<?php
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $val1 = $_POST["valeur1"];
    $val2 = $_POST["valeur2"];
   } 
?>