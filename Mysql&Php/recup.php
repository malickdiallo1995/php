<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Recuperation de données</title>
</head>
<body>


    <?php
        $serveur = "localhost";
        $login = "root";
        $pass = "";

        try
        {
        $connection = new PDO("mysql:host=$serveur;dbname=test2", $login, $pass);
        //Gestion des erreurs de connexion
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = $connection -> prepare("SELECT * FROM visiteurs WHERE id=3 OR id=1");
        $requete ->execute();
        $resultat = $requete -> fetchall();

        echo'<pre>';
        print_r($resultat);
        echo'</pre>';
      
        }
        catch(PDOException $e)
        {
            echo'echec lors de la recuperation de donnees : '.$e->getMessage();
        }

    ?>
    
</body>
</html>