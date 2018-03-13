

function signup(){
	//alert("signup");
	//document.signORlogHeader.style.color = "red";
	document.getElementById("signORlogForm").action = "signup.php";
	document.getElementById("signORlogHeader").innerHTML = "Sign up now!";
	document.getElementById("signORlogBtn").value = "Sign up";
}

function login(){
	//alert("login");
	document.getElementById("signORlogForm").action = "login.php";
	document.getElementById("signORlogHeader").innerHTML = "Login";
	document.getElementById("signORlogBtn").value = "Login";
}

//for date

function settingDate(){
	//document.getElementById("test").innerHTML = "todayyy";
	var d = new Date();

	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];

	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();

	if(dd<10) {
	    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	} 

	today = mm+'/'+dd+'/'+yyyy;

	document.getElementById("datePicker").value = today;

	//alert("test");
}

function showDate(){
	var d = new Date();

	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];


	document.getElementById('dateNum').innerHTML = d.getDate();
	document.getElementById('dateMonth').innerHTML = monthNames[d.getMonth()];
	//alert("done");

	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();

	if(dd<10) {
	    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	} 

	today = mm+'/'+dd+'/'+yyyy;

	document.getElementById("datePicker").value = today;
	//document.getElementById("test").innerHTML = today;
	//alert("showDate");

}

