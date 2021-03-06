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
 
  <a href="Login.php" onclick="document.getElementById('show').style.display='block'"><img src="media/login.png" style="height:30px; width:30px; position:relative"> Login</a>

  <a href="Sign-up.php" class="active"></button><img src="media/signup.png" style="height:30px; width:30px; position:relative"> Sign-up</a>

   <a href="#Contact" class="right" onclick="myFunction()"><div id="snackbar">Gmail: iosif.goga01@e-uvt.ro<br /> Telefon: 0123456789</div><img src="media/contact.png" style="height:30px; width:30px; position:relative"> Contact</a>

  </div>
</div>

<div id="show" class="modal">
  <form class="modal-content animate" action="includes/signup.inc.php" method="post"  name="Form1">
    <div class="container">
      <h1>Sign Up</h1>
      <hr>
	  <img src="media/email.png">
      <input type="text" placeholder="Enter Email" name="email" required>
		
	  <img src="media/user.png">
      <input type="text" placeholder="Enter Username" name="uname" required>
	  
	  <img src="media/password.png">
      <input type="password" placeholder="Enter Password" name="psw" required>

	  <img src="media/re-password.png">
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
<br><br>
      <p>By creating an account you agree to our <a href="Terms and Services.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

		<?php
			if(isset($_GET["error"])){
				if($_GET["error"] == "emptyinput"){
					echo "<p style='color:red; text-align: center'>Fill in all fields!</p>";
				}
				elseif($_GET["error"] == "invalidUid"){
					echo "<p style='color:red; text-align: center'>Chose a proper username!</p>";
				}
				elseif($_GET["error"] == "invalidEmail;"){
					echo "<pstyle='color:red; text-align: center'>Chose a proper email!</p>";
				}
				elseif($_GET["error"] == "passwordsdontmatch"){
					echo "<p sstyle='color:red; text-align: center'>Passwords don't match!</p>";
				}
				elseif($_GET["error"] == "stmtfailed"){
					echo "<p style='color:red; text-align: center'>Something went wrong, try again!</p>";
				}
				elseif($_GET["error"] == "usernametaken"){
					echo "<p style='color:red; text-align: center'>The username  is already taken!</p>";
				}
				elseif($_GET["error"] == "emailtaken"){
					echo "<p style='color:red; text-align: center'>The email  is already taken!</p>";
				}
				elseif($_GET["error"] == "none"){
					echo "<p style='color:green; text-align: center'>Succes!</p>";
				}
			}
		?>
       <input type="submit" name="submit" value="SIGN-UP" onclick="return trimitere()">
	   <div style="visibility:hidden">
<iframe NAME="iframe1" WIDTH="40" HEIGHT="40"></iframe>
<iframe NAME="iframe2" WIDTH="40" HEIGHT="40"></iframe>
</div>	
    </div>
  </form>
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
<script>
var modal = document.getElementById('show');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
	
    }

}
</script>

<script>
function trimite()
{
    document.Form1.action = "includes/detrimis.php"    
    document.Form1.target = "iframe1";    
    document.Form1.submit();               
    return true;
}
</script>


</body>
</html>