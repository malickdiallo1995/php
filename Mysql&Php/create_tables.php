<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mysql&PHP</title>
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
        
        //Creation de la table
        $codesql = "CREATE TABLE Visiteurs(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(50),
            prenom VARCHAR(50),
            email VARCHAR(70)    
            )";
        
        //excecution de la requete
        $connection ->exec($codesql);
        echo'Tables de données créées';
        }
        catch(PDOException $e)
        {
            echo'echec de la connexion : '.$e->getMessage();
        }
        ?>
</body>
</html>