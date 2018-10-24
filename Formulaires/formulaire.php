<!DOCTYPE html>
<html>
        <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">
            
                <title>HakimDev Entertainement</title>
            
                <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
                <link href="css/bootstrap.min.css" rel="stylesheet">
            
                <!-- Custom CSS -->
               
            
                <!-- Custom Fonts -->
                <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
                <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
            
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
            
            </head>
    <body>
        <!-- container pour largeur fixe et container-fuild pour largeur variable-->
        <div class="container-fuild">                       
            <div class="row">                       
                    <div class="panel panel-default" style="margin: 100px;" ">
                                <div class="jumbotron" style="margin: 10px;">
                                                <h2 style="text-align: center"> Inscription</h2 >                                              
                                </div>
                        <form  action ="target.php" method="POST" style="margin: 100px;">
                                <div class="form-group" style="margin-top: -5%;">
                                  <label for="prenom">Prenom:</label>
                                  <input type="text" class="form-control" id="prenom" name="prenom">
                                </div>
                                <div class="form-group">
                                  <label for="nom">Nom:</label>
                                  <input type="text" class="form-control" id="nom" name="nom">
                                </div>
                                <div class="form-group">
                                  <label for="pseudo">Pseudo:</label>
                                  <input type="text" class="form-control" id="pseudo" name="pseudo">
                                </div>
                               
                                <input type="submit" class="btn btn-success" style="width:30%; margin-left: 30%;"/ >                               
                         </form>
                    </div>                              
            </div>          
        </div>   
    </body>
</html>