var count = 0;
var c = 2;
function pp() {
var spongebobTheme = document.getElementById("spongebobTheme");

	if(count%2==0){
	    spongebobTheme.pause();
	    count++;
	}
	else{
		spongebobTheme.play();
		count++;
	}
}


function ppChange() {
var ppToggle = document.getElementById("ppToggle");

	if(c%2==0){
	    //
	    ppToggle.className = "glyphicon glyphicon-play";
	    spongebobTheme.pause();
	    c++;
	}
	else{
		//
		ppToggle.className = "glyphicon glyphicon-pause";
		spongebobTheme.play();
		c++;
	}
}