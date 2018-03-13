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
                $userName = $_SESSION['userName'];
                $a = '';
                $date = $_GET['date'];
                //echo $a;
                //echo $date;
                
                $q = "SELECT writing FROM data WHERE userName='$userName' AND date='$date'";

                if(mysqli_query($conn,$q)){
                    $result_array = mysqli_fetch_array(mysqli_query($conn,$q));
                    $a = $result_array['writing'];
                    //echo $result_array['writing'];
                }
            
                echo "<div class='text-center' id='congratz'>Welcome $userName! Start writing your diary now!!</div>";
            ?>
                <div class="pull-left" id="dearDiary">
                    Dear diary,
                </div>

                <div class="pull-right" id="dateContainer" >
                    <div class="text-center" id="dateNum"></div>
                    <div class="text-center" id="dateMonth"></div>
                </div>
                <form action="diaryDone.php">
                    <textarea rows="14" id="textArea" name="writing"><?php echo $a;?></textarea>
                    <input type="hidden" id="datePicker" name="date">
                    <input class="pull-right" type="submit" value="done" id="done">
                </form>
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