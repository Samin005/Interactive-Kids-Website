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

    <body style="background-color: orange;" id="signORlog">

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
                $userName = $_SESSION['userName'];
                
                $date = $_GET['date'];
                //echo $date;
                //$writing = $_GET['writing'];

                //echo $writing;
                echo "<div class='text-center' id='congratz'>Welcome $userName! Here is what you wrote on $date</div>";
            ?>
                <div class="pull-left" id="dearDiary">
                    Dear diary,
                </div>
                <?php
                    //echo $date;
                    $m = substr($date,0,2);
                    $day = substr($date,3,2);
                    $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                    $month = $months[$m -1];

                    $q = "SELECT writing  FROM data WHERE userName = '$userName' AND date = '$date'";
                    $result = mysqli_query($conn, $q);
                    $row = mysqli_fetch_array($result);
                    $writing = $row['writing'];
                    //echo $day;
                    //echo $month;
                    echo '<div class="pull-right" id="dateContainer" >';
                    echo '<div class="text-center" id="dateNum">'.$day.'</div>';
                    echo '<div class="text-center" id="dateMonth">'.$month.'</div>';
                echo '</div>';
                    
                    
                        echo '<textarea rows="14" id="textArea" readonly>'.$writing.'</textarea>';
                        //echo '<input type="hidden" id="datePicker">';

                ?>
                    <a href="javascript:history.back()"><input type="submit" class="pull-right" value="Back" id="done"></a>
                
            </div>

            <div class="col-md-3">
                <form action="logout.php">
                    <input type="submit" value="Logout" id="lgBtn">
                </form>
            </div>

        </div>
        <audio  loop autoplay>
            <source src="titanic.mp3"></source>
        </audio>

        
    </body>
</html>