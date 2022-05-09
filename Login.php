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
<script src="js/woosh.js"></script>
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
  z-index: 10;
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
 <a href="index.php"><img src="media/home.png" style="height:30px; width:30px; position:relative"> Home</a>
 
 
 <?php
if(isset($_SESSION["useruid"])){
	
	echo "<a href='Profile.php' onclick='document.getElementById('show').style.display='block''><img src='media/login.png' style='height:30px; width:30px; position:relative'> Profile</a>";
	echo "<a href='includes/logout.inc.php'></button><img src='media/signup.png' style='height:30px; width:30px; position:relative'> Logout</a>";
	
}
else{
	
	echo "<a href='Login.php' onclick='document.getElementById('show').style.display='block'' class='active' ><img src='media/login.png' style='height:30px; width:30px; position:relative'> Login</a>";
	echo "<a href='Sign-up.php'></button><img src='media/signup.png' style='height:30px; width:30px; position:relative'> Sign-up</a>";
	
}
?>
  
    <a href="#Contact" class="right" onclick="myFunction()"><div id="snackbar">Gmail: iosif.goga01@e-uvt.ro<br /> Telefon: 0123456789</div><img src="media/contact.png" style="height:30px; width:30px; position:relative"> Contact</a>

  </div>
</div>

  <div id="show" class="modal">
  
  <form class="modal-content animate" action="includes/login.inc.php" method="post">
    <div class="container">

	<h1>Login</h1><hr><br>


	<img src="media/user.png" style="height=70px; width: 70px; position:absolute; padding-top: 3px; z-index:1" >
	
      <input type="text" placeholder="Username" name="uname" required>

	

	<img src="media/password.png" style="height=70px; width: 70px; position:absolute; padding-top: 3px; z-index:1">
      <input type="password" placeholder="Password" name="psw" id="psw" required>

	<input type="checkbox" id="ochii" onclick="see_psw()">
	<label for="ochii" style="padding-left:50px" ><img src="media/no-show-psw.png" id="ochi" style="height:30px; width:50px" ></label><p>Show password</p><br><br>
<?php
			if(isset($_GET["error"])){
				if($_GET["error"] == "emptyinput"){
					echo "<p style='color:red; text-align: center'>Fill in all fields!</p>";
				}
				elseif($_GET["error"] == "wronglogin"){
					echo "<p style='color:red; text-align: center'>incorrect login information!</p>";
				}
				
			}
		?>
      <input type="submit" name="submit" value="LOGIN" ><br>
	  <span class="psw"><a href="forgotpassword.php" >Forgot password?</a></span><br>

    </div>
  </form>
</div>






<br><br><br><br><br><br><br><br><br><br><br><br>




<div class="bg_body">
<br><br><br><br><br><br>
<div class="border">

  <h2>Cerintele problemei:</h2>
<ul>
<h4>Creaţi un sistem de inregistrare/autentificare.</h4>
<li> Aplicaţia va avea o pagină securizată, accesul la ea făcându-se doar după o autentificare
cu username şi parola
</li>
<li>Utilizatorului i se va pune la dispoziţie o pagină de login (respectiv de inregistrare dacă
nu este deja înregistrat)
</li>
<li> După înregistrare se va trimite utilizatorului un email cu username şi parola</li>
<li>Aplicaţia va avea o pagina de recuperare prin email a parolei
</li>
<li>Alte funcţii pe care le consideraţi utile</li>
<li>Un utilizator “admin” va putea să şteargă anumiţi utilizatori</li>
</ul>
</div>
<br>


<div class="border">
<ul>
<h4>1. HTML:</h4>
<li> proiectul trebuie să conțină minim 2, maxim 6 pagini web;</li>

<h4>2. CSS:</h4>
<li>stilizarea să fie facută in fișiere separate;</li>
<li> site-ul să fie responsive;</li>
<li>layout-ul să fie realizat cu ajutorul tabelelor și cadrelor;</li>
<li>să conțină un menu drop-down realizat cu CSS;</li>
<li> să se folosească transformări CSS;</li>

<h4>3. Elemente JavaScript/jQuery:</h4>
<li>modificarea stilului unui element sau al unui grup de elemente;</li>
<li>folosirea funcțiilor in formulare;</li>
<li> folosirea evenimentelor de mouse și tastatură (ex poziția mouse sau tasta apăsată);</li>
<li> modificare dinamică a poziției unui element;</li>
<li> folosirea setTimeout și setInterval;</li>

<h4>4. PHP+MySQL:</h4>
<li>să conțină cel puțin un formular de înregistrare și login în PHP;</li>
<li>să folosească cel puțin o tabelă de tip MySQL pentru păstrarea și actualizarea informațiilor;</li>
<li>să se genereze o pagină cu continut dinamic folosind PHP și informații luate dintr-o tabelă
MySQL definind tabela cu date (mai mult de 50 de intrari) preluate din fișiere csv și
importate în MySQL cu ajutorul interfeței PHPMyAdmin din XAMP.;</li>
</ul>
</div>
<br>
</div>

<script>
function see_psw() {
  var x = document.getElementById("psw");

  
  if (x.type === "password") {
    x.type = "text";
	document.getElementById("ochi").src="media/show-psw.png";
  } else {
    x.type = "password";
	document.getElementById("ochi").src="media/no-show-psw.png";
  }
}

</script>

<script>

var modal = document.getElementById('show');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
	
    }

}

</script>


</body>
</html>