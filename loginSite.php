<?php

session_start();
require 'db.php';

try{

$con = new mysqli($host, $user, $pass, $db) or die ("Connection error");

//SQL injectie beveiliging
$userID = $con->escape_string($_POST['userID']);
$userPD = $con->escape_string($_POST['userPD']);

$result = $con->query("SELECT Gebruikersnaam, Voornaam, Achternaam, Saldo, Wachtwoord FROM Gebruikers WHERE Gebruikersnaam = '$userID'");
  
	
	if(!(mysqli_num_rows($result) == 0)) {
		$user = $result->fetch_assoc();
        
        $_SESSION['logged_in'] = true;
        $_SESSION['Gebruikersnaam'] = $user["Gebruikersnaam"];
        $_SESSION['Voornaam'] = $user["Voornaam"];
        $_SESSION['Achternaam'] = $user["Achternaam"];
		$_SESSION['SaldoDec'] = $user["Saldo"];
		
		$WachtwoordHash = $user["Wachtwoord"];
		
		setlocale(LC_MONETARY, 'nl_NL.UTF-8');
        $_SESSION['Saldo'] = money_format('%!(#1i', $user["Saldo"]);
        
        $verify = password_verify($userPD, $WachtwoordHash);
		
		if($verify) {
			header ("location: Profile.php");
		}else{
			$_SESSION['message'] = ('Gebruikersnaam of wachtwoord onjuist!');
		}
		

	}else{
		$_SESSION['message'] = ('Gebruikersnaam of wachtwoord onjuist!');
	}
  

		
}	catch(Exception $e) {
		echo $e;
	}

