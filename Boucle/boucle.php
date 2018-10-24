<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Les Boucles</title>
</head>
<body>
    <h1> Boucle while</h1>
    <?php
        //Boucle while = tant que
        $x=1;
        while ($x<= 10) {
            echo 'ceci est le nombre : '.$x.'</br>';
            
            //incrementation de x pour eviter une boucle infinit
            $x++;
            if ($x>10) {
                $sous = $x-1;
                echo'Vous avez depasser le nombre autorisé '.$sous.'<br/>';    
                echo" =============================================================";
            }           
        }
      ?>
       <h1> Boucle Do....while</h1>
       <?php
        //Boucle Do ... while = faire tant que
       if ($x=1) 
       {
           do {
             echo'le nombre est '.$x.'<br/>';
             $x++;
           } while ($x <= 10);
           echo" =============================================================";
       }
        ?>

        <h1> Boucle for</h1>
       <?php
        //Boucle for  = pour
      for ($x=1; $x<=15; $x++) { 
          echo 'le nombre est '.$x.'<br/>';
      }
        ?>
            
</body>
</html>