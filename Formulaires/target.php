<?php

    $nom_cookie = "users";
    $valeur_cookie = $_POST['nom'];

    setcookie($nom_cookie, $valeur_cookie);

    echo 'Bienvenu Mr '.$_COOKIE["users"].' dans votre compte <br/>';


?>


<?php

echo "========================Session===========================";
//les sessions permettent de conserver des informations de page en page mais de facon temporaire


?>







<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Target</title>
</head>
<body>
    <?php
    //Fonction pour securiser le formulaire
    //declaration de variables vides pour recuperer apres le traitement de la fonction
    $prenom = $nom = $pseudo = "";

    //Fonction qui va faire tous les tests de securité sur les donnees entrants
    function securisation($donnees)
    {
        $donnees = trim($donnees);
        $donnees = stripcslashes($donnees);
        $donnees = strip_tags($donnees);
        $donnees = htmlspecialchars($donnees);

        //On retourne le resusltat du traitement ci-dessus
        return $donnees;
    }

    //On fait le traitement pour chaque champ du formulaire via les donnees saisi et recuperees avec $_POST et en appelant la fonction securisation

    $prenom =securisation($_POST['prenom']);
    $nom =securisation($_POST['nom']);
    $pseudo =securisation($_POST['pseudo']);

    echo'Bonjour Mr '.$nom.' votre nom est '.$prenom. ' et votre pseudo '.$pseudo.'<br/>';
    echo 'Dernier Connexion a: '.date("H:i:s");
    ?>
    
</body>
</html>