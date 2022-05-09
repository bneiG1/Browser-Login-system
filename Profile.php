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
 <a href="index.php" class="active"><img src="media/home.png" style="height:30px; width:30px; position:relative"> Home</a>
 

	
<a href='profil.php' onclick='document.getElementById('show').style.display='block''><img src='media/profile.png' style='height:30px; width:30px; position:relative'> Profile</a>";
<a href='includes/logout.inc.php'></button><img src='media/logout.png' style='height:30px; width:30px; position:relative'> Logout</a>";
	

  
  
  <a href="#Contact" class="right" onclick="myFunction()"><div id="snackbar">Gmail: iosif.goga01@e-uvt.ro<br /> Telefon: 0123456789</div><img src="media/contact.png" style="height:30px; width:30px; position:relative"> Contact</a>
  </div>
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

</body>
</html>