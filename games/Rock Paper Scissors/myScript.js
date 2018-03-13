
/*var userChoice = prompt("Do you choose rock, paper or scissors?\npress, \n1 for rock\n2 for paper \n3 for scissors");
while(userChoice!=1 && userChoice!=2 && userChoice!=3){
    userChoice = prompt("Please press, \n1 for rock\n2 for paper \n3 for scissors");
}
if(userChoice == 1)
    userChoice = "rock";
else if(userChoice == 2)
    userChoice = "paper";
else
    userChoice = "scissors";
*/
var userScore = 0;
var computerScore = 0;

function rps(userChoice){
    var result = "";
    document.getElementById("userChoice").innerHTML = "You chose : "+userChoice;
    var computerChoice = Math.floor(Math.random()*3 + 1);
    if(computerChoice === 1)
        computerChoice = "rock";
    else if(computerChoice === 2)
        computerChoice = "paper";
    else
        computerChoice = "scissors";

    document.getElementById("computerChoice").innerHTML = "The computer chose : "+computerChoice;
    compare(userChoice, computerChoice);
    document.getElementById("result").innerHTML = result;

    document.getElementById("userScore").innerHTML = "Your Score: "+userScore;
    document.getElementById("computerScore").innerHTML = "Computer Score: "+computerScore;
    function compare(choice1, choice2){
        if(choice1 === choice2){
            result =  "The result is a tie!";
        }
        else if(choice1 === "rock"){
            if(choice2==="scissors"){
                result =  "rock beats scissors!, You win!!";
                userScore++;
            }
            else{
                result =  "paper covers rock! The computer wins.";
                computerScore++;
            }
        }
        else if(choice1 === "paper"){
            if(choice2==="scissors"){
                result =  "scissors cuts paper! The computer wins.";
                computerScore++;
            }
            else{
                result =  "paper covers rock! You win!!";
                userScore++;
            }
        }
        else if(choice1 === "scissors"){
            if(choice2==="paper"){
                result =  "scissors cut paper! You win!!";
                userScore++;
            }
            else{
                result =  "rock beats scissors! The computer wins.";
                computerScore++;
            }
        }
    }
}