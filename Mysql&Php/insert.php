<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Insertion</title>
</head>
<body>
    <?php
        //Preformater les requetes avec la preparation des requetes
         //connection a une base via PDO
         $serveur="localhost";
         $login = "root";
         $pass="";
 
         try
         {
         $connection = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
         //Gestion des erreurs de connexion
         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        //preparation de la requete
         $requete = $connection -> prepare(
            "INSERT INTO visiteurs(nom,prenom,email)
                VALUES (:nom,:prenom,:email)"
        );

        //On relie les marqueurs a des variables avec bindParam
        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':prenom',$prenom);
        $requete->bindParam(':email',$email);

        //saisi manuel de valeur
        $nom = "SECK";
        $prenom = "Oumou";
        $email = "oumou.seck@hotmail.fr";

        //Execution de la requete
        $requete-> execute(); 

        echo"Insertion effectuees";

         }
         catch(PDOException $e)
         {
             echo'echec de l insertion : '.$e->getMessage();
         }
         ?>   
</body>
</html>