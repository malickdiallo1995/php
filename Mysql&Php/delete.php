<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Suppression</title>
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
         
         //Insertion dans la table
         $codesql = "DELETE FROM Visiteurs WHERE id=1";
         
         //excecution de la requete
         $connection ->exec($codesql);
         echo'Suppresion Effectuées';
         }
         catch(PDOException $e)
         {
             echo'echec de l insertion : '.$e->getMessage();
         }
         ?>   
</body>
</html>