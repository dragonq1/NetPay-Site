<?php
session_start();
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>NetPay</title>
        <link rel="icon" type="image/png" href="afbeeldingen/logo-transparant.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="afbeeldingen/logo-transparant.png" sizes="16x16" />
        <meta name="theme-color" content="#607D8B" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require ('loginSite.php');
    }		
    ?>

    <body class="body-login">
        <form class="form-login" name="form" method="POST" >
            <a href="index.html"><img class="logo" src="afbeeldingen/logo-transparant.png" width="72px" height="72px"></a> 
            <h3>Inloggen</h3>

            <label for="inputUser" class="sr-only">Gebruikersnaam</label>
            <input name="userID" type="username" id="inputUser" class="form-control" placeholder="Gebruikersnaam" required autofocus style="border-bottom: 0px">
            <label for="inputWachtwoord" class="sr-only">Wachtwoord</label>
            <input name="userPD" type="password" id="inputWachtwoord" class="form-control" placeholder="Wachtwoord" required autofocus>

            <?php
            if(isset($_SESSION['message']) AND !empty($_SESSION['message'])) { 
                
                echo ('<p>'.$_SESSION["message"].'</p>');
                session_unset();
            }else{
                //Niets
            }		
            ?>

            <button class="btn btn-default" name="login" >Inloggen</button>
            <br>
            <button class="btn-register btn-link" >Nog geen lid? Registreer nu!</button>  

        </form>


    </body>


</html>