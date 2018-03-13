<?php
	include 'db_variables.php';
    //include 'd_array.php';
    
    @mysqli_connect($db_host,$db_username,$db_pass,$db_name) or die ("Could not connect to MySQL");
    //@mysqli_select_db($db_name) or die ("No database");
    $conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name);
    echo "connected";
?>