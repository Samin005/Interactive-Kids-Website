var count = 0;
var c = 2;
function pp() {
var pokemonTheme = document.getElementById("pokemonTheme");

	if(count%2==0){
	    pokemonTheme.pause();
	    count++;
	}
	else{
		pokemonTheme.play();
		count++;
	}
}


function ppChange() {
var ppToggle = document.getElementById("ppToggle");

	if(c%2==0){
	    //
	    ppToggle.className = "glyphicon glyphicon-play";
	    pokemonTheme.pause();
	    c++;
	}
	else{
		//
		ppToggle.className = "glyphicon glyphicon-pause";
		pokemonTheme.play();
		c++;
	}
}