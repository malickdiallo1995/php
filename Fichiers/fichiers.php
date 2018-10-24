<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php
        //Ouverture d'un fichier
        //on enregistre le resultat de l'appel de la fonction dans une variable
        //r+ permet d'ouvrir un fichier en mode lecture et ecriture(il existe 8 modes d'ouverutre de fichier) 
        $definition = fopen("definition.txt","r+");

          //lecture de fichier
         $lecture = fread($definition,1000);
         echo $lecture;

        //fermeture d'un fichier
        //qui aurra comme argument la variable dans laquelle le fichier a ete ouvert
        fclose($definition);

      

    ?>
</body>
</html>