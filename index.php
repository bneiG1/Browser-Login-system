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
 
 <?php
if(isset($_SESSION["useruid"])){
	
	echo "<a href='Profile.php' onclick='document.getElementById('show').style.display='block''><img src='media/login.png' style='height:30px; width:30px; position:relative'> Profile</a>";
	echo "<a href='includes/logout.inc.php'></button><img src='media/signup.png' style='height:30px; width:30px; position:relative'> Logout</a>";
	
}
else{
	
	echo "<a href='Login.php' onclick='document.getElementById('show').style.display='block'' ><img src='media/login.png' style='height:30px; width:30px; position:relative'> Login</a>";
	echo "<a href='Sign-up.php'></button><img src='media/signup.png' style='height:30px; width:30px; position:relative'> Sign-up</a>";
	
}
?>
  
  
  <a href="#Contact" class="right" onclick="myFunction()"><div id="snackbar">Gmail: iosif.goga01@e-uvt.ro<br /> Telefon: 0123456789</div><img src="media/contact.png" style="height:30px; width:30px; position:relative"> Contact</a>
  </div>
</div>





<br><br><br><br><br><br><br><br><br><br><br><br>




<div class="bg_body">
<br><br><br><br><br><br>
<div class="border">

  <h2>Cerintele problemei:</h2>
<ul>
<h4>Crea??i un sistem de inregistrare/autentificare.</h4>
<li> Aplica??ia va avea o pagin?? securizat??, accesul la ea f??c??ndu-se doar dup?? o autentificare
cu username ??i parola
</li>
<li>Utilizatorului i se va pune la dispozi??ie o pagin?? de login (respectiv de inregistrare dac??
nu este deja ??nregistrat)
</li>
<li> Dup?? ??nregistrare se va trimite utilizatorului un email cu username ??i parola</li>
<li>Aplica??ia va avea o pagina de recuperare prin email a parolei
</li>
<li>Alte func??ii pe care le considera??i utile</li>
<li>Un utilizator ???admin??? va putea s?? ??tearg?? anumi??i utilizatori</li>
</ul>
</div>
<br>


<div class="border">
<ul>
<h4>1. HTML:</h4>
<li> proiectul trebuie s?? con??in?? minim 2, maxim 6 pagini web;</li>

<h4>2. CSS:</h4>
<li>stilizarea s?? fie facut?? in fi??iere separate;</li>
<li> site-ul s?? fie responsive;</li>
<li>layout-ul s?? fie realizat cu ajutorul tabelelor ??i cadrelor;</li>
<li>s?? con??in?? un menu drop-down realizat cu CSS;</li>
<li> s?? se foloseasc?? transform??ri CSS;</li>

<h4>3. Elemente JavaScript/jQuery:</h4>
<li>modificarea stilului unui element sau al unui grup de elemente;</li>
<li>folosirea func??iilor in formulare;</li>
<li> folosirea evenimentelor de mouse ??i tastatur?? (ex pozi??ia mouse sau tasta ap??sat??);</li>
<li> modificare dinamic?? a pozi??iei unui element;</li>
<li> folosirea setTimeout ??i setInterval;</li>

<h4>4. PHP+MySQL:</h4>
<li>s?? con??in?? cel pu??in un formular de ??nregistrare ??i login ??n PHP;</li>
<li>s?? foloseasc?? cel pu??in o tabel?? de tip MySQL pentru p??strarea ??i actualizarea informa??iilor;</li>
<li>s?? se genereze o pagin?? cu continut dinamic folosind PHP ??i informa??ii luate dintr-o tabel??
MySQL definind tabela cu date (mai mult de 50 de intrari) preluate din fi??iere csv ??i
importate ??n MySQL cu ajutorul interfe??ei PHPMyAdmin din XAMP.;</li>
</ul>
</div>
<br>
</div>

</body>
</html>