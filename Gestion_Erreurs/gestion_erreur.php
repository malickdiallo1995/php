<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Gestion des Erreurs</title>
</head>
<body>
    <?php
        
        echo"***********************Gestion  des Erreurs avec Try-Catch***************";

        function Division($x,$y)
        {
           if($y==0)
           {
               throw new Exception('Division par '.$y.' impossible');  
           }
            return $x/$y;              
        }
          //on essai avec les valeurs suivantes
          try
          {
              echo"<br>";
              $result =  Division(2,1);
              echo 'le resultat de la division est '.$result.'<br/>';
              echo"</br>";
              echo Division(2,0);
          }
          catch (Exception $e)
          {
              echo 'Message '.$e->getMessage();
          }


    ?>
    
</body>
</html>