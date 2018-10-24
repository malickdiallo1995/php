<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Filtres PHP</title>
</head>
<body>
    <style>
        table{
            border-collapse : collapse;
        }
        th,td{
            border : 1px solid black;
        }
    </style>
    <table >
        <tbody>
            <tr>
                <th>Nom du filtre</th>
                <th>id du filtre</th>
            </tr>
        </tbody>
        <?php
            //les filtres permettent d'assurer l'integrite des donnees
            $filtre = filter_list();
            foreach ($filtre as $id => $nomfiltre) {
                echo'<tr>
                        <td>'.$nomfiltre.'</td>
                        <td>'.filter_id($nomfiltre).'</td>
                    </tr>';
                # code...
            }

        ?>
    </table>
   
    
</body>
</html>