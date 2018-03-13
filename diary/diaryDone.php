<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="myscript.js"></script>

    </head>

    <body style="background-color: orange;" id="signORlog" onload="showDate()">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="javascript:history.back()"><img src="backButton.png" id="backbtn"></a>
                </div>

                <div class="col-md-6 text-center">
                    <nav class="navbar navbar-inverse" id="menu">                   
                        <ul class="nav navber-nav">
                            <li class="active"><a href="../index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Games <span class="caret"></span></a>
                                <ul class="dropdown-menu" id="drpcon">
                                    <li><a href="../games/Rock Paper Scissors/Rock, paper & scissors.html">Rock Paper & Scissors</a></li>
                                    <li><a href="../games/Picture Game/Picture Game.html">Picture Game</a></li>
                                </ul>   
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Watch <span class="caret"></span></a>
                                <ul class="dropdown-menu" id="drpcon">
                                    <li><a href="../watch/pokemon/pokemon.html">Pokemon</a></li>
                                    <li><a href="../watch/spongbob/spongbob.html">Spongebob Squarepants</a></li>
                                </ul>   
                            </li>
                            <li><a href="diary.php">Diary</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-3">
                    <img class = "img-responsive" id="catFace" src="catFace.png">
                </div>
            </div>
        </div>
		<div class="row">

            <div class="col-md-3">
            </div>

            <div class="col-md-6">
            <?php
                include 'db_variables.php';
                $conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name);
                //echo "connected";
                //$_SESSION['count'] = 0;
                
                 $userName = $_SESSION['userName'];
                 $date = $_GET['date'];
                 $writing = $_GET['writing'];

                //$_SESSION['password'] = $_GET['password'];

                $q = "INSERT INTO data (userName, date, writing) VALUES ('$userName', '$date', '$writing')";
                if(mysqli_query($conn, $q)){
                    //$result_array =mysqli_fetch_array(mysqli_query($conn,$q));
                    //print_r($result_array) ;
                    //echo "table created";
                    
                	//echo "And inserted";
                	echo "<div class='text-center' id='congratz'>Congratulations $userName! Diary data was inserted for $date.</div>";
                    
                
                }
                else{
                	//echo "Error: " . $q . "<br>" . mysqli_error($conn);
                	$q = "UPDATE data SET writing = '$writing' WHERE date = '$date' AND userName = '$userName'";
                    //echo $date;
                	if(mysqli_query($conn, $q)){
                		echo "<div class='text-center' id='congratz'>Congratulations $userName! Diary data was updated for $date.</div>";
                	}
                	else{
                	echo "Error: " . $q . "<br>" . mysqli_error($conn);
                	}
                }
                echo "<div class='text-center' id='congratz'>$userName, here is what you wrote so far!</div>";

                $q = "SELECT date, writing  FROM data WHERE userName = '$userName'";
  				$result = mysqli_query($conn, $q);

              	echo "<table class='table table-striped'>";
                echo "<thead>";
                echo "<th>Date</th>";
                echo "<th>What you wrote</th>";
                echo "</thead>";

                while($row = mysqli_fetch_array($result)){
                    echo "<form action='diaryView.php'>";
                	$date = $row['date'];
                	$writing = $row['writing'];
                  	echo "<tr><td>".$row['date']."</td><td>".$row['writing']."</td>";
                        //echo 'date';
                        
                        echo "<td><input type='hidden' name='date' value='$date'>";
                        echo "<input type='hidden' name='writing' value='$writing'>";
                        echo "<input type='submit' value='View' id='viewBtn'>";
                    
                    echo "</td></tr>";
                    echo "</form>";

              		}
                    echo "</table>";
            ?>
                        
                            
                            
        </div>

            
    	<form action="logout.php">
            <div><input type="submit" value="Logout"  id="lgBtn"></div>
        </form>
        

        </div>
        <audio  loop autoplay>
            <source src="titanic.mp3"></source>
        </audio>
        

	</body>
</html>