<?php

function emptyInputSignup($email, $username, $psw, $psw_re){
	
	$result;
	
	if(empty($email)|| empty($username) || empty($psw) || empty($psw_re) ){
		
		$result = true;
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
	
}

function invalidUid($username){
	
	$result;
	
	if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		
		$result = true; 
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
}

function invalidEmail($email){
	
	$result;
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		
		$result = true; 
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
}

function pswMatch($psw, $psw_re){
	
	$result;
	
	if($psw != $psw_re){
		
		$result = true; 
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
}

function uidExists($conn, $username, $email){
	
	$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		
		header("location: ../Sign-up.php?error=stmtfailed");
		exit();
		
	}
	
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($resultData)){
		
		return $row;
		
	}
	else{
		
		$result = false;
		return $result;
		
	}
	
	mysqli_stmt_close($stmt);
	
}


function createUser($conn, $username, $email, $psw){
	
	$sql = "INSERT INTO users (usersUid, usersEmail, usersPwd) VALUES (?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	
	if(!mysqli_stmt_prepare($stmt,$sql)){
		
		header("location: ../Sign-up.php?error=stmtfailed");
		exit();
		
	}
	
	
	
	mysqli_stmt_bind_param($stmt, "sss", $username, $email, $psw);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	
	header("location: ../Sign-up.php?error=none");
	exit();
	
	
	
}


function emptyInputLogin($username, $psw){
	
	$result;
	
	if(empty($username) || empty($psw)){
		
		$result = true;
		
	}
	
	else{
		
		$result = false;
		
	}
	
	return $result;
	
	
}

function loginUser($conn, $username, $psw){
	
	$uidExists = uidExists($conn, $username, $username);
	
	if($uidExists === false){
		
		header("location: ../Sign-up.php?error=wronglogin");
		exit();
		
	}
	
	$pswHashed = $uidExists["usersPwd"];
	$checkPwd =strcmp($psw, $pswHashed);
	
	if($checkPwd !== 0){
		
		header("location: ../Sign-up.php?error=wronglogin");
		exit();
		
	}
	elseif($checkPwd === 0){
		
		session_start();
		$_SESION["userid"] = $uidExists["usersId"];
		$_SESION["useruid"] = $uidExists["usersUid"];
		
		header("location: ../Profile.php");
		exit();
		
	}
	
	
}