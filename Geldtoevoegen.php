<?php
	session_start();
	require 'db.php';
	$con = new mysqli($host, $user, $pass, $db) or die ("Connection error");
	
	if(isset($_SESSION['logged_in'])) {

    //Gebruiker ingelogd, vars instellen voor makkelijk hergebruik
    $Gebruikersnaam = $_SESSION["Gebruikersnaam"];
    $Voornaam = $_SESSION["Voornaam"];
    $Achternaam = $_SESSION["Achternaam"];
    $Saldo = round($_SESSION["SaldoDec"], 2);


	}else{
		
		header ("location: LoginForm.php");
		session_unset();
	}
		
	
	try {
		
		$strBedrag = str_replace(',','.',($con->escape_string($_POST['bedrag'])));
		$bedrag = round($strBedrag, 2);

		$NieuwSaldo = bcadd($Saldo, $bedrag, 2);
		
		if($con->query("UPDATE Gebruikers SET Saldo = '$NieuwSaldo' WHERE Gebruikersnaam = '$Gebruikersnaam'")) {
			
			setlocale(LC_MONETARY, 'nl_NL.UTF-8');		
			$_SESSION["Saldo"] = money_format('%!(#1i', $NieuwSaldo);
			$_SESSION["SaldoDec"] = $NieuwSaldo;
			
			
			
			header("Refresh:0;");
		}else{
			echo "Oeps!";
		}
		
		
	}catch(Exception $e) {
			echo $e;
			die;
	}
	
	
?>