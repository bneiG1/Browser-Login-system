		<?php

if(isset($_POST["submit"])){
	
	$email = $_POST['email'];
	$username = $_POST['uname'];
	$psw = $_POST['psw'];

	$subject = "Date conectare Proiect EWD";
	$message = "Username: " .$username."\n" ."Password: " .$psw;
if(mail($email,$subject,$message){
		
		echo "<h1>VETI PRIMII DATELE DE CONECTARE PE ADRESA DE EMAIL</h1>";
		
	}
	else{
		
		echo "<p>ERROR!!!</p>";
	}
}
