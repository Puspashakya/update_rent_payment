
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <style>
        #header{
            border: 1px solid black;
            width: 99%;
            height: 80px;
            background-color: #333;
        }
        #sidebar{
            background-color: #ffe4bf;
            border: 1px solid black;
            width: 10%;
            height: 500px;
            display: block;
            text-decoration: none;
            font-family: sans-serif;
            padding: 40px 30px;
            
            position: absolute;
            color: white;
            }

            a:hover {
                background: white;
                color: #007bff;
            }

        #bigbox
        {
                border: 1px solid black;
                width: 85%;
                height: 580px;
                float: right;
                
            }
            h2{
                text-align: center;
            }
            img{
                display: block;
                margin: 0px auto;
            }

            #one{
                border: 1px solid black;
                width: 49%;
                height: 193px;
                float: right;
                
            }
            #two{
                border: 1px solid black;
                width: 49%;
                height: 193px;
                
            }
            #three{
                border: 1px solid black;
                width: 49%;
                height: 193px;
                float: right;
            }
            #four{
                border: 1px solid black;
                width: 49%;
                height: 193px;
                
            }
            #five{
                border: 1px solid black;
                width: 49%;
                height: 193px;
                float: right;
            }
            #six{
                border: 1px solid black;
                width: 49%;
                height: 193px;
                
            }

    </style>
    
</head>

<body>
<div id="header">
    <?php include "includes/header.php"  ?>

</div>


<br>
<div id="sidebar">
        <a style="
        border: 1px solid #007bff;
        background: #007bff;
        padding: 30px;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        " href="users.php">user</a><br><br><br><br><br>
        
        <a style="
        border: 1px solid #007bff;
        background: #007bff;
        padding: 30px;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        " href="room.php">room</a><br><br><br><br><br>

        <a style="
        border: 1px solid #007bff;
        background: #007bff;
        padding: 30px;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        " href="rent.php">rent</a><br><br><br><br><br>

        <a style="
        border: 1px solid #007bff;
        background: #007bff;
        padding: 30px;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        " href="electricity.php">electricity</a><br><br><br><br><br>

        <a style="
        border: 1px solid #007bff;
        background: #007bff;
        padding: 30px;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        " href="water.php">water</a><br><br><br><br><br>

        <a style="
        border: 1px solid #007bff;
        background: #007bff;
        padding: 30px;
        color: white;
        text-decoration: none;
        border-radius: 30px;
        " href="#">extra</a><br><br><br><br><br>

        
        
</div>

<div id = "bigbox">
    <div id="one"><h2>Room</h2><a href="room.php"> <img src="images/room.png" style="width:250px; height: 100px;"></a></div>
    <div id="two"><h2>Users</h2><a href="users.php"> <img src="images/users.png" style="width:250px; height: 100px;"></a></div>
    <div id="three"><h2>Electricity</h2><a href="electricity.php"> <img src="images/electricity.png" style="width:250px; height: 100px;"></a></div>
    <div id="four"><h2>Rent</h2><a href="rent.php"> <img src="images/rent.png" style="width:250px; height: 100px;"></a></div>
    <div id="five"><h2>extra</h2><a href="#"> <img src="../images/extra.jpg" style="width:250px; height: 100px;"></a></div>
    <div id="six"><h2>Water</h2><a href="water.php"> <img src="images/water.jfif" style="width:250px; height: 100px;"></a></div>        
</div>
</body>

</html>
