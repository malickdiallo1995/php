<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visiteur</title>
</head>
<body>

    <?php
        include_once('visiteur.class.php');

        //instanciation de la classe visiteur
        //creation d'un objet pour la classe visiteur qui aurra tous les attributs de la methode Visiteur
        $visiteur1 = new Visiteur;
       
        
        //Creation nouveau visiteur avec les setters
        $visiteur1 ->set_prenom('Malick');
        $visiteur1 ->set_nom('Diallo');
      

        //Recuperation de la valeur avec les getters
        echo'Bonjour '.$visiteur1->get_prenom().' '.$visiteur1->get_nom().'<br/>';
       
    ?>
    
</body>
</html>