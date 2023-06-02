<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css?v=1">
    <title>Password Change</title>
</head>

<body>
    <div class="overlay"></div>
    <div class="header">
    <a href="http://localhost/EROS_DB/EROS-LOGIN/Login.php">
      <img id="logo" src="eros-logo.png">
    </a>
    </div>

    <h1> Change Password </h1>

<div class = "box"> </div> 

<form method = "POST" action ="" >
    <div class="main"> 
        <input type="text" name="Email"
        id="user" placeholder="Email">
        <br>
        <input type="text" name="newPassword"
        id="pass" placeholder="New-Password">
    <br> <br>
    <br>

        <button type="submit" class="button" name="submit">
            <span class="arrow"></span>
            Continue
        </button>
</form>



<?php

include 'dbcon.php';

    if(isset($_POST['submit'])) {

        $email = $_POST['Email'];
        $newPass = $_POST['newPassword'];
        
        if(!$email || !$newPass) {
            echo "Missing input";
            header('Location:http://localhost/EROS_DB/EROS-LOGIN/pass-change.php');
    
        } else {

            $email_check = "SELECT * FROM registration WHERE Email = '".$email."'";
            $check_query = mysqli_query($conn, $email_check);
            $rows = mysqli_num_rows($check_query);

            if($rows > 0) {

                $update_pass = "UPDATE registration SET Password = '".$newPass."' WHERE Email = '".$email."'";
                $changeQuery = mysqli_query($conn, $update_pass);

                if(!$changeQuery) {
                    echo "Failed to Change";
                } else {
                    header('Location:http://localhost/EROS_DB/EROS-LOGIN/Login.php');
                }
            
            } else {
                ?>
                    <p class="note2">Email doesn't exist</p>
                <?php
            }


        }
    }
?>
    </div>
    </div>

</body>
</html>

    

