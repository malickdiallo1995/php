<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mise a jour</title>
</head>
<body>
    <?php
         //connection a une base via PDO
         $serveur="localhost";
         $login = "root";
         $pass="";
 
         try
         {
         $connection = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
         //preparation de la requete
         $requete = $connection -> prepare(
            "UPDATE visiteurs SET nom = (:nom) WHERE id=1"
        );

        //On relie les marqueurs a des variables avec bindParam
        $requete->bindParam(':nom',$nom);

        //saisi manuel de valeur
        $nom = "SECK";
        //Execution de la requete
        $requete-> execute(); 
        echo'mise a jour effectuée';
         }
         catch(PDOException $e)
         {
             echo'echec de l insertion : '.$e->getMessage();
         }
         ?>   
</body>
</html>