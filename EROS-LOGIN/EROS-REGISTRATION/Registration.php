<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="Registration.css?v=1">


    <title>E-ROS Registration</title>
</head>

<body>  
    <div class="overlay"></div>

    <div class="headerleft">
    <a href="http://localhost/EROS_DB/EROS-LOGIN/Login.php">
      <img id="logo" src="eros-logo.png">
    </a>
    </div>

    <div class="headerright">
        <h6> Language </h6>
    </div>

    <div class="create">
        <h1 style="color:black;"> Create Account </h1>
    </div>

    <div class="box"></div>
<div class = "all">
    <div class="user">
        <div class="u">
<form method="POST" action="">
    <label> Username </label>
</div>
    <input type="text" name="user"
    id="username" placeholder="Username">
    &nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div class="p"><label>Password</label> </div>
    <input type="text" name="pass"
    id="password" placeholder="Password">
</div>
<br> <br> <br> 
        <div class="form">
        <div class="first">
    <label>First Name</label>
    &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <label>  Last Name </label>
    <br>
    <input type="text" name="fname"
    id="name1" placeholder="First Name">
    
    <input type="text" name="lname"
    id="name2" placeholder="Last Name">
</div>
     <br> <br> <br>
    <div class="birthday"></div>
    <Label> Birthday </Label>

    <br>
    <input type="text" name="Month"
    id="MM" placeholder="MM">
    <input type="text" name="Day"
    id="DD" placeholder="DD">
    <input type="text" name="Year"
    id="YYYY" placeholder="YYYY">
</div>
<br><br> <br>


<div class="gender">
    <label> Gender </label>
    <br>
    <input type="text" name="gender"
    id="Gender" placeholder="Male/Female">
</div>
<br> <br> <br>
<div class="email">
    <label> Email Address </label>
    <br>
    <input type="text" name="email"
    id="email" placeholder="Email Address">
</div>

<div class="continue"> 
    <br> <br>
    <a href="file:///C:/Users/User/Desktop/Programming%20languages%20for%20vs/html,css,javascript/html/Dating%20site/Login.html">
<button type="submit" class="button" name="submit"> 
      <span class="arrow"></span> 
     Continue </button>
</div>
</a>


<?php

include 'dbcon.php';

    if(isset($_POST['submit'])) {

        $userName = $_POST['user'];
        $passWord = $_POST['pass'];
        $fName = $_POST['fname'];
        $lName =$_POST['lname'];
        $bMonth = $_POST['Month'];
        $bDay = $_POST['Day'];
        $bYear = $_POST['Year'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
 
        

    if(!$userName || !$passWord || !$fName || !$lName || !$bMonth || !$bDay || !$bYear || !$gender || !$email) {
         echo "Missing Info";
         header('Location: http://localhost/EROS_DB/EROS-LOGIN/EROS-REGISTRATION/Registration.php');

    } else {

        $email_check = "SELECT * FROM registration WHERE Email = '".$email."'";
        $check_query = mysqli_query($conn, $email_check);
        $rows = mysqli_num_rows($check_query);

    if($rows > 0) {
        ?>
            <p id="note">Email already in use</p>
        <?php
        
    } else {

            $insert_reg = "INSERT INTO registration (Username, Password, Firstname, Lastname, Birthday, Gender, Email)
                                VALUES ('$userName', '$passWord','$fName', '$lName','$bMonth-$bDay-$bYear','$gender', '$email')";

            if(mysqli_query($conn, $insert_reg)) {
                header('Location: http://localhost/EROS_DB/EROS-LOGIN/Login.php');
            }
        }
    }
}
?>


</div>
</div>
</div>
</div>




</div>
</div>
</body>
</form>
</html>
