<?php 
    session_start();
    if(!isset($_SESSION['admin_fname']))
    {
        header('location:login.php');
    }
?>




<body>

 <br> 
 
<div style = "border: 5px solid black; width: 90%; height:850px;">

    

<div style="margin-top: 45px; margin-left: 20%;">

    <div style="border: 1px solid black; width: 45%; height: 250px; float:left;" > <h3 style="text-align:center;">user </h3>
        <a href ="users.php">
            <img src="../images/users.png" style="width: 250px; height: 150px;">
         </a>
    </div>
    <div style="border: 1px solid black; width: 45%; height: 250px; float:left;" ><h3 style="text-align:center;">room </h3><a href ="room.php">
            <img src="../images/room.png" style="width: 150px; height: 150px;">
         </a> </div>
    <div style="border: 1px solid black; width: 45%; height: 250px; float:left;" > <h3 style="text-align:center;"> rent </h3><a href ="rent.php">
            <img src="../images/rent.png" style="width: 150px; height: 150px;">
         </a> </div>
    <div style="border: 1px solid black; width: 45%; height: 250px; float:left;" > <h3 style="text-align:center;">electricity </h3><a href ="electricity.php">
            <img src="../images/electricity.png" style="width: 150px; height: 150px;">
         </a> </div>
    <div style="border: 1px solid black; width: 45%; height: 250px; float:left;" > <h3 style="text-align:center;"> water </h3><a href ="water.php">
            <img src="../images/water.jfif" style="width: 150px; height: 150px;">
         </a></div>
    <div style="border: 1px solid black; width: 45%; height: 250px; float:left;" > extra </div>
</div>    
</div>
</body>

</html>