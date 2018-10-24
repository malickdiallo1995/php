<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Fonctions String</title>
</head>

<body>
    <h2>======================== Fonction Pré a l'emploi============================</h2>

<label>
    <?php    
        echo "La phrase est : Bonjour a tous ceux qui utilisent PHP <br/>";

        //Fonction qui retourne la longueur d'une chaine de caractere
        $phrase = "Bonjour a tous ceux qui utilisent PHP <br/>";
        echo 'le nombre de caractere est '.strlen($phrase).'<br/>';

        //Fonction qui retourne le nombre de mot contenu d'une chaine de caractere
        echo 'le nombre de mot dans la phrase est : '.str_word_count($phrase).'<br/>';

        //Fonction qui permet de repeter un mot plusieurs fois
        $login = "malick";

        echo"Repeter 7 fois Bonjour a l'utilisateur connecté : <br/>";
        echo str_repeat('Bonjours '.$login.'<br/>',7);

        //Fonction qui permet de remplacer un mot d'une phrase par un autre mot

        echo str_replace("Bonjour","Bonsoir",$phrase,$i);
        echo'Bonjour a ete remplace '.$i.' fois dans le text';
    ?>
</label>
    
</body>
</html>