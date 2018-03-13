var nums = [1,2,3,4];
var funcCount = 0;
var lastFunc = 0;
var userScore = 0;
var r = "";
function gameStart(){
	shuffle();
    //pickRandomGame();
    pickBoy();
    //document.getElementById('result').innerHTML = r;
    
}

function shuffle(){


	for(i=nums.length-1;i>0;i--)
	{
		var ran = Math.floor(Math.random()*(i+1));
		var temp = nums[i];
		nums[i] = nums[ran];
		nums[ran] = temp;

	}
	//document.getElementById('img1').innerHTML = nums.toString();
	//alert("choag!");
}

function pickRandomGame(){
	for(i=0; i<nums.length; i++){
		if(nums[i] == 1){
			pickBoy();
		}
		else if(nums[i] == 2){
			pickBall();
		}
		else if(nums[i] == 3){
			pickDog();
		}
		else if(nums[i] == 4){
			pickC();
		}
	}
}

function pickBoy(){
	r = r+"Boy picked";
	document.getElementById('result').innerHTML = "Pick the <span style='color: red;'>BOY</span>";

	document.getElementById('img1').innerHTML = "<img src='boy-0"+nums[0]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img2').innerHTML = "<img src='boy-0"+nums[1]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img3').innerHTML = "<img src='boy-0"+nums[2]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img4').innerHTML = "<img src='boy-0"+nums[3]+".jpg' class='img-responsive' id='i1'>";

	funcCount = 1;
	lastFunc = 0;
}

function pickBall(){
	//r =  r+"Ball picked";

	document.getElementById('result').innerHTML = "Pick the <span style='color: red;'>BALL</span>";

	document.getElementById('img1').innerHTML = "<img src='ball-0"+nums[0]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img2').innerHTML = "<img src='ball-0"+nums[1]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img3').innerHTML = "<img src='ball-0"+nums[2]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img4').innerHTML = "<img src='ball-0"+nums[3]+".jpg' class='img-responsive' id='i1'>";

	//document.getElementById('result').innerHTML = r;

	funcCount = 2;
	lastFunc = 1;
}

function pickDog(){
	//r = r+"Dog picked";
	document.getElementById('result').innerHTML = "Pick the <span style='color: red;'>DOG</span>";

	document.getElementById('img1').innerHTML = "<img src='dog-0"+nums[0]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img2').innerHTML = "<img src='dog-0"+nums[1]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img3').innerHTML = "<img src='dog-0"+nums[2]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img4').innerHTML = "<img src='dog-0"+nums[3]+".jpg' class='img-responsive' id='i1'>";
	
	funcCount = 3;
	lastFunc = 2;
}

function pickC(){
	//r = r+"C picked";
	document.getElementById('result').innerHTML = "What comes <span style='color: red;'>after the letter 'B'</span>";

	document.getElementById('img1').innerHTML = "<img src='c-0"+nums[0]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img2').innerHTML = "<img src='c-0"+nums[1]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img3').innerHTML = "<img src='c-0"+nums[2]+".jpg' class='img-responsive' id='i1'>";
	document.getElementById('img4').innerHTML = "<img src='c-0"+nums[3]+".jpg' class='img-responsive' id='i1'>";

	funcCount = 4;
	lastFunc = 3;
}

function nextFunc(){
	if(funcCount == 0){
		pickBoy();
	}
	else if(funcCount == 1){
		pickBall();
	}
	else if(funcCount == 2){
		pickDog();
	}
	else if(funcCount == 3){
		pickC();

	}

}

function verify(x){
	if(funcCount == 1){
		verifyBoy(x);
	}
	else if(funcCount == 2){
		verifyBall(x);
	}
	else if(funcCount == 3){
		verifyDog(x);
	}
	else if(funcCount == 4){
		verifyC(x);
	}
	nextFunc();
	document.getElementById('userScore').innerHTML = "Your Score: "+userScore;
	//alert(funcCount);
}

function verifyBoy(x){
	if(x == 1){
		if(document.getElementById('img1').innerHTML == '<img src="boy-04.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 2){
		if(document.getElementById('img2').innerHTML == '<img src="boy-04.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 3){
		if(document.getElementById('img3').innerHTML == '<img src="boy-04.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 4){
		if(document.getElementById('img4').innerHTML == '<img src="boy-04.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
}

function verifyBall(x){
	if(x == 1){
		if(document.getElementById('img1').innerHTML == '<img src="ball-02.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 2){
		if(document.getElementById('img2').innerHTML == '<img src="ball-02.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 3){
		if(document.getElementById('img3').innerHTML == '<img src="ball-02.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 4){
		if(document.getElementById('img4').innerHTML == '<img src="ball-02.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
}

function verifyDog(x){
	if(x == 1){
		if(document.getElementById('img1').innerHTML == '<img src="dog-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 2){
		if(document.getElementById('img2').innerHTML == '<img src="dog-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 3){
		if(document.getElementById('img3').innerHTML == '<img src="dog-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 4){
		if(document.getElementById('img4').innerHTML == '<img src="dog-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
}

function verifyC(x){
	if(x == 1){
		if(document.getElementById('img1').innerHTML == '<img src="c-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 2){
		if(document.getElementById('img2').innerHTML == '<img src="c-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 3){
		if(document.getElementById('img3').innerHTML == '<img src="c-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	if(x == 4){
		if(document.getElementById('img4').innerHTML == '<img src="c-01.jpg" class="img-responsive" id="i1">'){
			document.getElementById('ans').innerHTML = "Correct! Well done!!";
			userScore++;
		}
		else{
			document.getElementById('ans').innerHTML = "Oh No! That was not the right answer.";
		}
	}
	funcCount = 0;
}


//for music

var c = 2;

function ppChange() {
var ppToggle = document.getElementById("ppToggle");

	if(c%2==0){
	    //
	    ppToggle.className = "glyphicon glyphicon-play";
	    rugratsTheme.pause();
	    c++;
	}
	else{
		//
		ppToggle.className = "glyphicon glyphicon-pause";
		rugratsTheme.play();
		c++;
	}
}