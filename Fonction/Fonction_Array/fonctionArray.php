<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Fonction PHP pour les Tableaux</title>
</head>

<body>
    <?php
        //declaration du tableau
        $voiture = array(
            "Citroen" => "DS3",
            "Peugeot" => "3008",
            "Renault" => "Turbo"
        );
        //Fonction qui renvoi les cles contenues dans le tableau
        print_r(array_keys($voiture));

        echo"<br/>";

        //Fonction qui permet de retourner toutes les valeurs d'un tableau sans les cles dans un nouveau tableau
        echo"<pre>";
        print_r(array_values($voiture));
        echo"</pre>";

        //fonction qui permet de verifier si une cle existe
        if (array_key_exists("Citroen",$voiture)) {
            echo"La cles existe ";
        }
        else {
            echo "Cette  cle n'existe pas";
        }

        echo"<br/>";

        //Fonction qui recherche une valeur dans un tableau et retourne la cle qui lui correspond
        $valeur = array_search("DS3",$voiture);
        echo 'La cle de la valeur DS3 est '.$valeur;
    ?>
</body>
</html>