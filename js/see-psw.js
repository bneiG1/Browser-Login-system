
function see_psw() {
  var x = document.getElementById("psw");

  
  if (x.type === "password") {
    x.type = "text";
	document.getElementById("ochi").src="../media/show-psw.png";
  } else {
    x.type = "password";
	document.getElementById("ochi").src="../media/no-show-psw.png";
  }
}

