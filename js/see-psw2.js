
function see_psw() {
  var x = document.getElementById("psw");
  var y = document.getElementById("psw-repeat");
  
  if (x.type === "password" && y.type === "password") {
    x.type = "text";
	 y.type = "text";
	document.getElementById("ochi").src="../media/show-psw.png";
  } else {
    x.type = "password";
	y.type = "password";
	document.getElementById("ochi").src="../media/no-show-psw.png";
  }
}

