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

       $requete = "SELECT * FROM visiteurs where id=1";
      $result = $connection -> exec($requete); 
      $reslutt = $result->fetch();


        echo'<pre>';
        print_r($resultt);
        echo'</pre>';
      
        }
        catch(PDOException $e)
        {
            echo'echec lors de la recuperation de donnees : '.$e->getMessage();
        }

    ?>
    
</body>
</html>