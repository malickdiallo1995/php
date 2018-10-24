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
        $connection = new PDO("mysql:host=$serveur;dbname=banque", $login, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo'Connexion a la base reussit';
        }
        catch(PDOException $e)
        {
            echo'echec de la connexion : '.$e->getMessage();
        }
        ?>
</body>
</html>