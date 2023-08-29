<?php
    include "includes/functions.php";
    signup();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
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
        margin: 0 auto;
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
      h2{
        display: block;
        font-size: 0.95em;
        margin-bottom: 0;
        margin-left: 275px;
        margin-right: 0;
        margin-top: 0;
        font-weight: bold;
        align-items: center;
      }

    </style>
    
</head>
<body>
    <div id="box">
<div>
    <h2> Welcome to signup page </h2>
        <form id="signupform" role = "form" method="post" action="signup.php" enctype="multipart/form-data"> <br>
            name: <input type="text" name="user_name" class="input-box" placeholder="Enter your name"> <br>
            nagrita: <input type="file" accept="image/*" class="input-box" name="user_nagrita" id="user_nagrita" placeholder="upload your nagrita"><span style="color:#f00; font-size:15px;"><b>Note:</b>Only JPG, PNG and GIF images are allowed.Maximum upload size is 50kb</span> <br>
            address: <input type="text" name="user_address" class="input-box" placeholder="Enter your address"> <br>
            phone: <input type="number" name="user_phone" class="input-box" placeholder="Enter your Number"> <br>
            room_no: <input type="number" name="room_no" class="input-box" placeholder="Enter your Room Number"> <br>
            mail: <input type="mail" name="user_mail" class="input-box" placeholder="Enter your mail"> <br>
            member: <input type="text" name="family_member" class="input-box" placeholder="Enter your family member"> <br>
            password: <input type="password" name="user_password" class="input-box" placeholder="Enter your password"> <br>
            
            <button type="submit" value="signup" class="input-box" name= "signup">signup </button>
            <input type ="reset" class="input-box">
        </form>
    </div>
</div>
</body>
</html>