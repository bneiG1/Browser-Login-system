<?php

if(isset($_POST['submit'])){
	
	$email = $_POST['email'];
	$username = $_POST['uname'];
	$psw = $_POST['psw'];
	$psw_re = $_POST['psw-repeat'];
	
	require 'dbh.inc.php';
	require 'functions.inc.php';
		
	if(emptyInputSignup($email, $username, $psw ,$psw_re)!== false){
		
		header("location: ../Sign-up.php?error=emptyinput");
		exit();

	}		
		
	if(invalidUid($username)!== false){
		
		header("location: ../Sign-up.php?error=invalidUid");
		exit();

	}	
	
	if(invalidEmail($email)!== false){
		
		header("location: ../Sign-up.php?error=invalidEmail");
		exit();

	}
	
	if(pswMatch($psw, $psw_re)!== false){
		
		header("location: ../Sign-up.php?error=passwordsdontmatch");
		exit();

	}
	
	if(uidExists($conn, $username, $email)!== false){
		
		header("location: ../Sign-up.php?error=usernametaken");
		exit();

	}
	

	
	createUser($conn, $username, $email, $psw);
	
}
else{
	
	

	$subject = "Date conectare Proiect EWD";
	$message = "Username: " .$username."\n" ."Password: " .$psw;
	if(mail($email,$subject,$message)){
		
	echo "<h1>VETI PRIMII DATELE DE CONECTARE PE ADRESA DE EMAIL</h1>";
		
	}
	else{
		
		echo "<p>ERROR!!!</p>";
	}
}
	
	header("location: ../Login.php");
	exit();


		
	
