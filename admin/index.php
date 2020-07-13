<!DOCTYPE html>
<html>
    <head>
        <title>Burger Code</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    
 <body style="background: url(../images/bg.png);">
        <div class="container site">
            <h1 style="font-family: 'Holtwood One SC', sans-serif;
    color: #e7480f;
    text-shadow: 2px 2px #ffd301;
    font-size: 50px;
    padding: 40px 0px;
    text-align: center;"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
            
            <div>
            
                <form action="secret.php" method="POST">

                <p> <strong style="font-size:20px; color:#eee"> Mot de passe : chaqueDetailCompte</strong> </p><br/>
                <input class="form-control" type="password" name="mdp" required/><br/>
                <input class="btn btn-primary" style="margin:10px 45%; font-size:20px" type="submit" value="envoyer"/>
                    

               </form>
            </div>
            
     </div>
    </body>
</html>