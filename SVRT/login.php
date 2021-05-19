<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>


<?php

 include"config.php";

 if(isset($_POST['login']))
 {
     $email = $_POST['email'];
     $pass = $_POST['pass'];

     $emailsearch = "select * from registration where email='$email'";
     $query=mysqli_query($con,$emailsearch);

     $emailcount = mysqli_num_rows($query);

     if($emailcount){

          $emailpass=mysqli_fetch_assoc($query);
          $dbpass = $emailpass['pass'];
          $_SESSION['fname'] = $emailpass['fname'];

        if($dbpass==$pass){
            ?>
            <script>alert("Login Succesfull")</script>
            <script>location.replace("loginafter.php");</script>
            <?php
        }
           

        
        else{
            ?>
            <script>alert("Password Incorrect!")</script>
            <?php
        }
     }
     else{
        ?>
        <script>alert("Email does not exist!")</script>
        <?php

     }
     
 }
 




?>
    <div class="center">
        <h1>Login</h1>
        <form  method="post">
            <div class="txt_field">
               <input type="text" name="email" required> <!-- there will an error if type="email" -->
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
           
            <input type="submit" name="login" value="Login">
            <div class="signup_link">Don't have an account?
                <a href="signup.php">Signup</a>
            </div>
           
               
            
        </form>

    </div>
</body>

</html>