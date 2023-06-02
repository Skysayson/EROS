<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>E-ROS Login</title>
</head>

<body>
    <div class="overlay"></div>
    <div class="header">
    <a href="http://localhost/EROS_DB/EROS-LANDING/Landing.php">
      <img id="logo" src="eros-logo.png">
    </a>
    </div>

    <h1> Sign In </h1>

<div class = "box"> </div> 

<form method="POST" action="" >
    <div class="main"> 
        <input type="text" name="username"
        id="user" placeholder="Username">
        <br>
        <input type="text" name="password"
        id="pass" placeholder="Password">
    <br> <br>
    <div class="checkbox-container">
        <input type="checkbox" name="sign" id="sign">
        <label for="sign">Stay signed in</label>
    </div>
    <br>

    <button type="submit" class="button" name="submit">
</form>
        <span class="arrow"></span>
        Continue
      </button>
    <div class="k">
        <div class="cant">
    <a class = "m"; href="http://localhost/EROS_DB/EROS-LOGIN/pass-change.php">  Can't sign In?</a>
    <br><br>
    <a href="http://localhost/EROS_DB/EROS-LOGIN/EROS-REGISTRATION/Registration.php"> Create Account</a>
</div>
</div>

</body>
</html>

<?php 

include 'dbcon.php';


if(isset($_POST['submit'])) { // If submit button is clicked

    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    $get_login = "SELECT * FROM registration WHERE username ='".$userName . "' 
    AND password = '" .$passWord."'    ";  //SQL code to get matching username and password from database

    if($passWord || $userName) {
        $query = mysqli_query ($conn, $get_login); //SQL query
        $row = mysqli_num_rows($query); // gets number of rows of the query
    
        if($row > 0) {  //This condition checks if database is populated with what was asked for in the query
            
            echo("Successfully Logged in");
            header('Location:http://localhost/EROS_DB/EROS-SEARCH/SEARCH/homesearch.php');

        } else {
            echo "Wrong Log-in info";
        }

    } else {
        echo "No Log-in info";
    }


}


