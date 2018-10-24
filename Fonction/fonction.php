<!DOCTYPE HTML>
<html>
    <head>
        <title> Fonction PHP</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        <?php
            //une fonction est un bloc de code qui va contenir une serie d'instruction
            //les fonctions vont retourner des valeurs differentes en fonction des parametres ou arguments qu'on va leurs attribuer

            //Premiere fonction avec la syntaxe suivante
            //Creation de la Fonction sans arguments
            function Bonjour()
            {
                echo "Bonjour a tous<br/>";
            }
            //Appel de la fonction sans arguments
            Bonjour();

            //Creation Fonction avec arguments
            function BonjourUser($prenom)
            {
                echo'Bonjour '.$prenom.'!<br/>';
            }
            //Appel de la fonction en lui passant un argument
            BonjourUser('Pierre');

            //Creation d'une fonction avec plusieurs arguments
            function NomAge($prenom,$age)
            {
                echo'Bonjour '.$prenom.' Votre age est '.$age.' ans<br/>';
            }
            //Appel de la fonction
            NomAge('Malick',20);

            echo"=================== Difference entre echo et Return ===================<br/>";
            function DireBonjour()
            {
                return "Bonjour<br/>";
            }

            function DireBonsoir()
            {
                echo "Bonsoir<br/>";
            }
            $bonjour = DireBonjour(); //la fonction DireBonjour RETOURNE la valeur "Bonjour" stocké dans $bonjour
            $bonsoir = DireBonsoir(); // la fonction DireBonsoir echo la valeur "Bonsoir" immediatement des l'appel de la fonction mais cette fonction ne retourne aucune valeur

            //Ainsi le programme va afficher Bonsoir avant le Bonjour
            //tout instruction executé apres le return ne sera pas affiche
            echo $bonjour;
            echo $bonsoir;

        ?>

    </body>


</html>