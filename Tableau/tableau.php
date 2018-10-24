<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Les Tableaux</title>
</head>
<body>
<!-- il existe 3 types de tableaux en PHP : numeroté, Associatif, multidensionnel

-->
    <h1>Tableaux numéroté<h1>
    <!--Declaration d'une variable de type tableau "prenom" avec differents éléments -->
    
    <?php
        // chacun recoit un index automatiquement
        $prenom = array ('Pierre','Paul','Jacques');

         // on saisi manuellement la valeur des indexes des elements
         $prenom[1] = 'Pierre';
         $prenom[0] = 'Paul';
         $prenom[2] = 'Jacques';
         
         echo" <p> ------------Affichage avec Echo--------------</p>";
         //Echo pour afficher un element du tableau en precisant son indexe
         echo $prenom[0].'</br>'; 
         
         //Parcour du tableau avec la boucle for
         echo" <p> ------------Affichage avec la boucle for--------------</p>";
         for ($i=0; $i <= 2 ; $i++) 
         { 
            echo $prenom[$i].'</br>';
            //A chaque parcour de la boucle nous allons afficher la valeur contenu dans la varialbe $i qui correspond a l'indexe
         }

         echo" <p> ------------Affichage avec la boucle foreach--------------</p>";
         foreach ($prenom as $result) {
             echo $result.'<br/>';
             //La boucle foreach va lire chaque ligne du tableau et le stocker dans une variable temporaire
         }
    ?>
    
    =========================================================================
    <h1>Tableaux Associatifs<h1>
    <?php
    //Contrairement aux tableaux numerotes, on va attribuer des clés textuelles aux elements 
    //On lie si dessous la variable age a l'utilisateur a laquelle elle appartient
    $age = array(   'Pierre' => 24 ,
                    'Paul' => 30,
                    'Jacques' => 50
                 );
    //On peut aussi l'ecrire de la maniere suivante
    $age['Pierre'] = 24;
    $age['Paul'] = 30;
    $qge['Jacques'] = 50;

    echo $age['Pierre']; //Affichage de l'element avec le cle Pierre

    echo" <p> ------------Affichage  Cles & Valeurs avec la boucle foreach --------------</p>";
    foreach ($age as $key => $value) {
        echo 'L\'age de '.$key.' est '.$value.'<br/>';
    }
    
    ?>


     =========================================================================
    <h1>Tableaux multidensionnels<h1>
    <?php
   
   //Un tableai mutlidimentionnel est un tableau qui contient d'autre tableau
   $membres = array(
                    array('Pierre',24,'pierre@gmail.com'),
                    array('Paul',30,'paul@gmail.com'),
                    array('Jacque',50,'jacque@gmail.com')      
    );
    echo" <p> ------------Affichage avec Echo--------------</p>";
    //Affichage des elements du tableau a deux dimension
    echo $membres[0][0].' a '.$membres[0][1].' ans ,son mail est : '.$membres[0][2];
    //On affiche avec la variable $membre qui contient l'ensemble des tableaux
    //Avec ces coordonnees le premier correspond a la ligne donc aux sous-tableaux
    //                      le deuxieme correspond aux colonnes


    echo" <p> ------------Affichage avec la boucle For--------------</p>";

    for ($lignes=0; $lignes <3 ; $lignes++) { 
      //on parcour d'abord le premier tableau par lignes
      $membre_no = $lignes + 1; //on recupere ensuite le numero de la ligne qu'on incremente qui correspond au numero du membre
      echo 'Membre numero : '.$membre_no.'<br/>'; //affichage du numero du membre
      echo '<ul>';
      for ($col=0; $col < 3; $col++) { 
          //On parcour ensuite le deuxieme tableau par colonnes
          echo'<li>'.$membres[$lignes][$col].'</li>'; //on affiche les elements du deuxieme tableau avec les coordonnées [lignes][colonnes]                  
      }
      echo'</ul>';
    }
    
    ?>    
</body>
</html>