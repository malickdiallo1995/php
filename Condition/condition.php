<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Les Conditions</title>
    </head>
    <body>       
        <?php
         //Condition qvec IF pour tester si l'heure de la connexion est supperieur a 17h
            $heure_connexion = 17;
            if($heure_connexion > 18) {
                echo "passer une bonne soirée <br/>";
                $journee="oui";
                
            }
            if ($heure_connexion <= 17) {

                echo 'Vous vous etes lever a '. $heure_connexion.' heure <br/>';
                $journee="non";
                echo $journee.'<br/>';
            }
            //Condition if..elsif.
        
            $note = 16;
            if ($note <= 15) 
            {
                echo "Vous avez bien travaillé";
                echo'Votre note est '.$note;
            }
            elseif ($note > 15) 
            {
                echo "vous avez tres bien travaillé <br/>";
                echo'Votre note est '.$note.'<br/>';

            //Condition avec switch case

            switch ($note) {
                case 16:
                echo "tres biens";
                    break;
                
                default:
                    echo"pas de commentaire";
                    break;
            }
                
            }      
        ?>
    </body>
</html>