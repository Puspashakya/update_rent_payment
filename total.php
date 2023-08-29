<?php
  session_start();
  include "includes/functions.php";

  if(!isset($_SESSION["user_name"]))
  {
    header("Location: login.php");
  }

?>
<?php

  require('stripe_config.php');  
?>

<?php
    
    //get_electricity();   
   // $bijuli_paisa=$data;
   // echo $bijuli_paisa;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
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



<div id="box">

<div>

  <form method="post" action="stripe_submit.php"> 

<label>Name: </label> <input type ="text" name="user_name" class="input-box" value ="<?php echo $_POST['user_name']; ?>"   ><br>
Room_id: <input type = "text" name = "room_id" class="input-box" value = " <?php echo $_POST['room_id']; ?>"> <br><br>
Rent: <input type = "text" name = "rent" class="input-box" value ="
<?php
        $servername="127.0.0.1:4000";
        $username="root";
        $password = "";
        $db = "rent";
    
        $connection = mysqli_connect($servername, $username, $password, $db);
    
    $query = "SELECT * FROM room";
   
    $result = mysqli_query($connection, $query);

    

    while($row=mysqli_fetch_assoc($result))
    {
        if ($row['room_id'] == $_POST['room_id'])
        {
            $rent = $row['price'];
            echo $rent;
        }
        
        //echo $row['room_id'];
        //echo $row['floor'];
    }
    ?>">

<br>

Electricity: <input type ="text" name="electricity" class="input-box" value ="
 <?php
  
  $data = get_electricity();
  
  if (isset($data)) {
    $num = sizeof($data);
    for($i=0; $i<$num; $i++)
    {
      echo $data[$i]['unit_price'] * $_POST['electricity'];
      $electricity = $data[$i]['unit_price'] * $_POST['electricity'];
      //$electricity = $data[$i]['unit_price'] * $_POST['electricity']; 
    }
      
    }
  ?>"> 
  
  <br><br>
 
   
    
Waste: <input type ="text" name="waste" class="input-box" value =" <?php $waste = $_POST['family_member'] * 50; echo $waste; ?> "> <br><br>
Water: <input type = "text" name = "water" class="input-box" value =" 
<?php 

    $data = get_water();

    if (isset($data)){
      $num = sizeof($data);
      for($i=0; $i<$num; $i++)
      {
        
        echo $data[$i]['water_amount'] * $_POST['family_member'];
        $water = $data[$i]['water_amount'] * $_POST['family_member'];
      }
    }

?> ">

<br><br>


<h3> your total amount of this month is :<input type="text" name ="total" class="input-box" value ="
<?php

    

    

    $total = $water + $electricity + $waste+ $rent;

    echo $total;
    
    
    
?> ">
<br>
<script

		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="<?php echo $total*100 ?>"
		data-name="<?php echo $_POST['user_name'] ?>"
		data-description="<?php echo $_POST['room_id'] ?>"
		data-image="images\users.png"
		data-currency="npr"
		data-email= "<?php echo $_POST['user_name'] ?>@gmail.com"
	>
	</script>
  </form type = "submit" name="submit">                
</form>

</div>
</div>



<br>
<br>
<br>
<br>
<br>




</body>
</html>











