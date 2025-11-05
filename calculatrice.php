<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculatrice</title>
    </head>

    <body>
        
        <form action="" method="post">
            <p>Valeur1 :</p>
            <input type="text" name="valeur1" size="15">
            <p>Valeur2 :</p>
            <input type="text" name="valeur2" size="15">
            <p>Opération :</p>
            <p>Addition</p>
            <input type="radio" name="operation"  value="+">
            <p>Soustraction</p>
            <input type="radio" name="operation"  value="-">
            <p>Multiplication</p>
            <input type="radio" name="operation"  value="X" >
            <p>Division</p>
            <input type="radio" name="operation" value="/">
            <input type="submit" value="envoyer">
        </form> 
        
        
    </body>
</html>

<?php
   if(isset($_POST['valeur1']) && isset($_POST['valeur2']) && isset($_POST['operation'])){
    $val1 = $_POST['valeur1'];
    $val2 = $_POST['valeur2'];
    $operation = $_POST['operation'];
    $res;
        if($operation == "+")
        {
            $res = $val1 + $val2;
            echo "Le résultat est " .$res;
        }
        else if($operation == "-")
        {
            $res = $val1 - $val2;
            echo "Le résultat est " .$res;
        }
        else if($operation == "X")
        { 
            $res = $val1 * $val2;
            echo "Le résultat est " .$res;
        }
        else { 
            if($val2 != 0){
                $res =  $val1 / $val2;
                echo "Le résultat est " .$res;
            }
            else{
                echo "impossible de diviser par 0";
            }
            
        }
   }
   else{
    echo "echec de l'envoi";
   } 
?>