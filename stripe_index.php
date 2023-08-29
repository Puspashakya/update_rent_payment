<?php
include 'admin/includes/functions.php';
 echo "<pre>";
 print_r($_POST);
 echo "</pre>";

 echo $_POST['total'];
 echo "<br>";
 $total1 = (int)$_POST['total'] * 100;
 echo $_POST['room_id'];

 echo "<br>";
 $room = $_POST['room_id'];
 echo   $total1;
 echo "<br>";
 $name = $_POST['user_name'];
 echo $name;
 
?>


<?php

require('stripe_config.php');
?>
<?php 
if(isset($_POST["submit"]))
{
}?>
<form action="stripe_submit.php" method="post">
	<script

		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="<?php echo $total1 ?>"
		data-name="<?php echo $name ?>"
		data-description="<?php echo $room ?>"
		data-image="images\users.png"
		data-currency="npr"
		data-email="puspashakya123@gmail.com"
	>
	</script>
	
</form type = "submit" name="submit">

------------------------------------------------------


