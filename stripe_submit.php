<?php
 /*echo "<pre>";
 print_r($_POST);
 echo "</pre>";
 */

  
  session_start();
  include "includes/functions.php";
  if(!isset($_SESSION["user_name"]))
  {
    header("Location: login.php");
  }
?>




<?php
require('stripe_config.php');
\Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];
$amount = $_POST['total'];
$description = $_POST['user_name'];
$stripeEmail = $_POST['stripeEmail'];


	

	$data=\Stripe\Charge::create(array(
		"amount"=>(int) $amount*100,
		"currency"=>"npr",
		"description"=>$description,
		"source"=>$token,
	));

    /*
	echo "<pre>";
	print_r($data);

    */
?>




<?php

    $servername="127.0.0.1:4000";
    $username="root";
    $password = "";
    $db = "rent";

    $connection = mysqli_connect($servername, $username, $password, $db);


    

    if (!$connection)
    {
        echo "some problem here";
    }

    $user_name = $_POST['user_name'];
    $room_id = $_POST['room_id'];
    $rent = $_POST['rent'];
    $electricity = $_POST['electricity'];
    $waste = $_POST['waste'];
    $water = $_POST['water'];
    $total = $_POST['total'];

    $qry = "INSERT INTO total (user_name, room_id, rent, electricity, waste, water, total) VALUES ('$user_name','$room_id','$rent','$electricity','$waste','$water','$total')";
    $insert = mysqli_query($connection, $qry);
    if(!$insert)
    {
        echo "there is some problem".$sql."".$connection->error;
    }
    else 
    {
        echo "payment sucessfull";
    }
    
?>
--------------------------------------------------------------

<br>
<br><br>
<?php
    //include "includes/head.php";
 
    include "admin/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/_style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
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
<body>


    
<div id="box">

<div>
<h1>Thank You</h1>
<h1>Payment Successfull</h1>

Total amount of Rs. <input type ="text" name="total" class="input-box" value ="<?php echo $_POST['total']; ?>"   ><br>

is paid under the name of <input type ="text" name="user_name" class="input-box" value ="<?php echo $_POST['user_name']; ?>"   ><br>


<div class="input-field">
            <input type="button" value="home" onclick="location.href='index.php'" name="submit" class="submit">  
        </div>
</body>
</html>


<?php 


session_unset();
session_destroy();
echo "session is destroyed";
?>