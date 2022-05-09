<?php


if(isset($_POST["submit"])){
	$email = $_POST['email'];
	require 'dbh.inc.php';
	require 'functions.inc.php';
	
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
	$stmt = mysqli_stmt_init($conn);

$message = "Parola dvs. este: " . $sql;


$to      = $email;
$subject = 'Parola dvs.';
$message = 'Parola dvs. este: ' . $sql;


mail($to, $subject, $message);

}else{
	header("location: ../index.php");
}