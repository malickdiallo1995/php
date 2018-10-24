
 <?php

           //creation de cookie
           $nom_cookie = "utilisateur";
           $valeur_cookie = "pierre";

           //parametre 1 = nom du cookie
           //parametre 2 = valeur du cookie
           //parametre 3 = date d'expiration du cookie
           //parametre 5 = partie du site ou le cookie sera accessible (chemin)
           //parametre 6 = Domaine ou sous domaine ou le site sera accessible
           //parametre 7 = true ou false qui permet de securiser le cookie en https
           //parametre 8 = true or false qui permet de determiner l'accessibilite via des langage scritpe(JS)
           setcookie($nom_cookie, $valeur_cookie, time() + 3600, "/", "malick.fr", false, true);

           //affichage de notre cookie 
           echo $_COOKIE["utilisateur"];



           //le code pour les cookies doient imperativement s'ecrire avant tous code html
           //de meme que pour les sessions

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SuperGlobal</title>
</head>
<body>
    <?php 
       echo"===========================Utilisation de la variable GLOBALS=====================================<br/>";
         //ils servent a palier le probleme de la portee des variables
        //la variable superglobal GLOBALS va nous permette d'acceder a nos variable global meme dans les fonctions
        //elle est une variable tableau dans laquelle sont stockes toutes les variables  globales declarees

        //declaration de variables globales
         $x= 10;
         $y=20;

         function Multi()
         {
             //l'indexe correspond au nom de la variable
            $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
             //on recupere le resultat du calcul dans une variable locale
         }
         //affichage de la fonction
         Multi();
         echo 'La valeur de la variable super Global est : '.$z.'<br/><br/>';

         /********************************************************************************************* */

         echo"===========================Utilisation de la variable SERVER=====================================<br/>";
         //le chemin du fichier dans le serveur
         echo $_SERVER['PHP_SELF'].'<br/>';

         //adresse ip du Serveur
         echo $_SERVER['SERVER_ADDR'].'<br/>';

         //nom du serveur
         echo $_SERVER['SERVER_NAME'].'<br/>';

         //nom du script (fichier)
         echo $_SERVER['SCRIPT_NAME'].'<br/>';

         //L'adresse de l'hote
         echo $_SERVER['HTTP_HOST'].'<br/>';
         

           /********************************************************************************************* */

           echo"===========================Utilisation de la variable REQUEST=====================================<br/>";
           echo"Permet de recolter des informations apres l'envoi d'un formulaire HTML";

           /********************************************************************************************* */

           echo"===========================Utilisation de la variable COOKIE=====================================<br/>";
           //creation de cookie
           $nom_cookie = "utilisateur";
           $valeur_cookie = "pierre";

           //parametre 1 = nom du cookie
           //parametre 2 = valeur du cookie
           //parametre 3 = date d'expiration du cookie
           //parametre 5 = partie du site ou le cookie sera accessible (chemin)
           //parametre 6 = Domaine ou sous domaine ou le site sera accessible
           //parametre 7 = true ou false qui permet de securiser le cookie en https
           //parametre 8 = true or false qui permet de determiner l'accessibilite via des langage scritpe(JS)
           setcookie($nom_cookie,$valeur_cookie,time() + 3600,"/","malick.fr",false,true);

           //affichage de notre cookie :
           echo $_COOKIE['utilisateur'];

           //le code pour les cookies doient imperativement s'ecrire avant tous code html

    ?>

</body>
</html>