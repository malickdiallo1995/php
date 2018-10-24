<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Fonction Date / Time</title>
</head>
<body>

    <?php
        echo 'On est le :'.date("d-M-Y").'<br/>';
        echo 'il est '.date("H:i:s");

        echo "<br/>";

        echo "============ Traduire Jours et Mois en Francais================ <br/>";

        $jours = array(
            "",
            "Lundi",
            "Mardi",
            "Mercredi",
            "Jeudi",
            "Vendredi",
            "Samedi",
            "Dimanche"
        );

        $mois = array(
            "",
            "Janvier",
            "Fevrier",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Aout",
            "Septembre",
            "Octobre",
            "Novembre",
            "Decembre"    
        );
        //date("N") retourne un nombre qui correspond a la cle de la valeur du jours, ainsi pour le mois
        $datefr = $jours[date("N")].' '.date("d").' '.$mois[date("n")].' '. date("Y");
        echo 'Nous sommes le : '.$datefr.'<br/>'; 
    ?>
    
</body>
</html>