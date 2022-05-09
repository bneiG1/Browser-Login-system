<?php

if(isset($_POST['submit'])){
	
	$username= $_POST['uname'];
	$psw= $_POST['psw'];
	
	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputLogin($username, $psw) !== false){
		
		header("location: ../login.php?error=emptyinput");
		exit();
	}
	
	loginUser($conn, $username, $psw);
	
}
	else{
		
		header("location: ../login.php");
		exit();
		
	}