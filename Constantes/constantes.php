<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Les Constantes</title>
</head>

<body>
        <?php
            echo "================= Definition Constantes============ <br/>";

            //Syntaxe creation d'une constante
            define("BIENVENU","Bienvenu sur notre site");
            //Affichage de la constante
            echo BIENVENU;

            echo "<br/>";

            define("PI", 3.14);

            $a = PI*5;
            echo $a.'<br/>';

            echo "=================Constantes Magiques================<br/>";
            //Constantes Magiques
            //les constantes magiques sont des constantes definies par PHP avec des valeurs par defauts
            //certains parmis elles peuvent changer de valeurs selon la situation

            function test($age)
            {
                echo 'Votres age est '.$age.'<br/>';

                //__FUNCTION indique la fonction dans laquelle se trouve la constante
                echo 'La fonction est '.__FUNCTION__.'<br/>';
            }

            test(30);

            //__LINE__ indique la ligne a laquelle cette constante magique est appelee
            echo __LINE__.'<br/>';

            //__FILE__ indique le fichier dans lequel se trouve la constante
            echo __FILE__.'<br/>';

            //__DIR__ indique le dossier dans lequel se trouve la constante
            echo __DIR__.'<br/>';

        ?>

</body>
</html>