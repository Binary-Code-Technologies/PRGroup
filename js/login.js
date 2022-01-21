function logIn() {
	var username = document.getElementById("uName").value;
	var password = document.getElementById("password").value;
	document.cookie = "token = nil";
	console.log(username + "\n" + password);
	if (username == "Consultancy" && password == "password") {
		window.location.href = "Consultancy.html";
		document.cookie = "token = Consultancy";
	} else if (username == "Real Estate" && password == "secret") {
		window.location.href = "Consultancy.html";
		document.cookie = "token = Real Estate";
	} else {
		alert("Incorrect Username or Password");
	}
}
