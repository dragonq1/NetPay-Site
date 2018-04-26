<?php
session_start();

if(isset($_SESSION['logged_in'])) {

    //Gebruiker ingelogd, vars instellen voor makkelijk hergebruik
    $Gebruikersnaam = $_SESSION["Gebruikersnaam"];
    $Voornaam = $_SESSION["Voornaam"];
    $Achternaam = $_SESSION["Achternaam"];
    $Saldo = $_SESSION["Saldo"];


}else{

    header ("location: LoginForm.php");
    session_unset();
}
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>NetPay</title>
        <link rel="icon" type="image/png" href="afbeeldingen/logo-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="afbeeldingen/logo-16x16.png" sizes="16x16" />
        <meta name="theme-color" content="#607D8B" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="Body-profile">
        <div id="NavBar" class="navbar navbar-default navbar-fixed-top profilenav" role="navigation">
            <div class="container-fluid">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span>
                    <span class="icon-bar">
                    </span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-menubuilder">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.html">NetPay</a></li>
                    <li><p>Hallo <?php echo($Voornaam)?>! </p></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li> <a href ="logout.php">Uitloggen</a></li>
                </ul>



            </div>
        </div>

        <div class="profile text-center rounded">
            <div class="profileInfo row">
                <p class="text-left">Account: <?php echo($Gebruikersnaam)?></p>
            </div>

            <div class="profileInfo row">
                <p class="text-left">Saldo: <?php echo($Saldo)?> euro</p>
            </div>

                <div class="col-sm-4 profileButtons Profile-InfoTabs">
				<form method="POST" name="add">
                    <label for="inputBedrag" class="sr-only">Bedrag</label>
                    <input name="bedrag" type="decimal" id="inputBedrag" class="form-control" placeholder="Bedrag" required autofocus autocomplete="off">

                    <button name="add">Toevoegen</button>
					
					<?php 
						if ($_SERVER['REQUEST_METHOD'] == 'POST') 
						{
						require 'Geldtoevoegen.php';
						}
					?>
				</form>
                </div>

        </div>

    </body>
</html>