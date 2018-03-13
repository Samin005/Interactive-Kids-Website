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

    <body style="background-color: orange;">

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
                            <li><a href="../watch/spongbob/spongbob.html">Diary</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-3">
                    <img class = "img-responsive" id="catFace" src="catFace.png">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-5">
            </div>

            <div class="col-md-5" id="loginMessage">A diary is a personal thing, you should <span id="signLog" title="If you are new!" onclick="signup()">Sign up</span> or <span id="signLog" title="If you already use one!" onclick="login()">Login</span> before you start!

                <div class="Container">
                    <h1 id="signORlogHeader">Login</h1>
                    <form action="login.php" id="signORlogForm">
                        <input type="text" name="userName" id="userName" placeholder="Your Name" required>

                        <input type="password" name="password" id="password" placeholder="Password" required><br/>
                         <input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> <span id="showPasswordText">Show</span>
                        <input type="submit" value="Login" id="signORlogBtn">
                    </form>                   

                </div>
               
            </div>

            <div class="col-md-2">
            </div>
        </div>


        <?php
            include 'db_variables.php';
            $conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name);
            //echo "connected";
        ?>
        <audio  loop autoplay>
            <source src="titanic.mp3"></source>
        </audio>
    </body>
</html>