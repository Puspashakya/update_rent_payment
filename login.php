<?php
    session_start();
    include "includes/functions.php";
    login();
    /*if(!isset($_SESSION['user_name']))
    {
      header('location: login.php');
    }
    */
    //$_SESSION["user_name"] = "user_name";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>
    <style>
      body {
      background-image: url("images/1.jpg");
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      }
      #box{
        background-color: whitesmoke;
        border: 5px solid;
        width: 750px;
        height: 750px;
        font-size: 22px;
        margin-top: 15px;
        padding: 50px;
        
        margin-left: 450px;

        
      }
      div.signupform{
        border-radius: 10px;
        background-color: aquamarine;
        width: 100%;
        border-radius: 10px;
         
      }
      form#signupform{
        font-family: sans-serif;
        font-size: 18px;
        font-style: italic;
      }
      input#name{
        width: 300px;
        border: 1px solid #ddd;
        border-radius: 3px;
        outline: 0;
        padding: 7px;
        
      }
      .input-box{
        border-radius: 20px;
        padding: 10px;
        margin: 10px 0;
        width: 100%;
        border: 1px solid #999;
        outline: none;
      }

    </style>
    
</head>
<body> 
 <!--   <form method="post" action="<?php  //$_SERVER['PHP_SELF'] ?>"> -->  
 <form action="user.php" method="post">

   <div class="box">
    <div class="container">

        <div class="top">
            <span>Have an account?</span>
            <header>Login</header>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" name="user_name" >
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" name="user_password">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
        <input type="submit" value="login" name="login" class="submit">
        
            
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="signup.php">signup here</a></label>
            </div>
        </div>
    </div>
  </div>  
</form>
</body>
</html>