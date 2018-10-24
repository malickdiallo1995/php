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
        $connection = new PDO("mysql:host=$serveur", $login, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Creation de la base
        $connection ->exec("CREATE DATABASE test2");
        echo'Base de données créées';
        }
        catch(PDOException $e)
        {
            echo'echec de la connexion : '.$e->getMessage();
        }
        ?>
</body>
</html>