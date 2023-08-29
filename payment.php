<?        


$host = "localhost";
    $user = "root";
    $pass = "";
    $pass = "";
    $db = "rent";

    $con = new mysqli($host, $user, $pass, $db);

    if (!$con)
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
    $insert = mysqli_query($con, $qry);
    if(!$insert)
    {
        echo "there is some problem".$sql."".$con->error;
    }
    else 
    {
        echo "inserted sucessfull";
    }
    
?>
--------------------------------------------------------------

<br>
<br><br>
<?php
    //include "includes/head.php";
    require "config.php";
    include "admin/functions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Integartion (Stripe)</title>
    <link rel="stylesheet" href="./css/_style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<button type="button" onclick="goback()" class="back">Go Back</button> 
<br>
<br>
<div class="row">
    <div class="col-md-6">
        <div class="form-container">
                <div>
                    <input type="text" name="user_name"   value="<?php echo ($user_name)?>" disabled required/>
                    <label>user_name</label>
                </div>
                <br>
                <div>
                    <input type="text" name="room_id"  value="<?php echo ($room_id)?>" disabled required/>
                    <label>Room_id</label>
                </div>
                 <br>
                 <div>
                    <input type="text" name="rent"  value="<?php echo ($rent)?>" disabled required/>
                    <label>Room rent</label>
                </div>
                <br>
                <div>
                    <input type="text" name="electricity"  value="<?php echo ($electricity)?>" disabled required/>
                    <label>cost of electricity</label>
                </div>
                <br>
                <div>
                    <input type="text"  name="waste" value="<?php echo ($waste)?>" disabled required/>
                    <label>cost of waste</label>
                </div>
                <br>
                <div>
                    <input type="text" name="water"  value="<?php echo ($water)?>" disabled required/>
                    <label>cost of water</label>
                </div>
                <br>
                <div>
                    <input type="text" name="total1"
                      value="<?php echo ($total); $total1=((int)$total*100);?>" disabled required/>
                    <label>total</label>
                </div>
                <br>
                   
               
              
                <form action="checkout-charge.php?room_id=1" method="get">
               
 
               
                <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_51Mfar8G8IMG50CI54Kgqf9bXWLaTTGsiE37NlR2Et3GY9W05LJv1LBhv0oXb6XDxI7VZF4HZ43DC9s9wjDPRsTXu00K35cEroa"
                data-amount="<?php echo ($total1)?>"
                data-name="<?php echo ($user_name)?>"
                data-description="<?php echo  ($room_id)?>"
                data-image= "images/users.png" alt="Image" class="img-fluid"
                data-currency="npr"
                data-locale="auto">
                </script>
                
                
                            

 
            </form>
            
            
        </div>
    </div>
    
</div> 


<script>
    function goback(){
        window.history.go(-1);
    }

    
</script>
</body>
</html>