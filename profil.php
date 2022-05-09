<?php include 'sesion_starter.php';?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="">
<title>Pagina principala</title>
<link rel="icon" href="media/site_logo.ico" />

<link rel="stylesheet" href="css/aspect_general.css"/>
<link rel="stylesheet" href="css/meniu_index.css"/>
<link rel="stylesheet" href="css/Login.css">
<link rel="stylesheet" href="css/Contact.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/contact.js"></script>

<style>	
#navbar {
  overflow: hidden;
  background-image: url("media/BG_header.jpg");
  background-repeat:no-repeat;
  padding: 90px 10px;
  transition: 0.3s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1;
}


.bg_body {
	
	background-image: url("media/index.jpg");
	background-repeat:no-repeat;
	width: 100%;
	hight: auto;

}
</style>

</head>
<body bgcolor="#101010">



<div id="navbar">
  <a href="" id="logo">Proiect EWD</a>
  <div id="navbar-right">
 <a href="index.php" ><img src="media/home.png" style="height:30px; width:30px; position:relative"> Home</a>
 

	
<a href="profil.php" class="active"><img src="media/profile.png" style="height:30px; width:30px; position:relative"> Profile</a>";
<a href="includes/logout.inc.php"></button><img src="media/logout.png" style="height:30px; width:30px; position:relative"> Logout</a>";
	

  
  
  <a href="#Contact" class="right" onclick="myFunction()"><div id="snackbar">Gmail: iosif.goga01@e-uvt.ro<br /> Telefon: 0123456789</div><img src="media/contact.png" style="height:30px; width:30px; position:relative"> Contact</a>
  </div>
</div>






<br><br><br><br><br><br><br><br><br><br><br><br>




<div class="bg_body">
<br><br><br><br><br><br>
<div class="border">

	<?php
	
		if (isset($_SESSION["useruid"])){
			
		echo"<h1>Hello: " . $_SESSION["useruid"] . "</h1>";
			
		}
	
	?>
  
</div>
<br>
</div>

</body>
</html>