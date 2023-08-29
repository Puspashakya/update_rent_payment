

<?php 
     
    
    include "includes/functions.php";
    get_electricity();
    
?>


                   
<?php
    edit_electricity();
    if (isset($_GET['edit']))
    {
        ?>

        <h2>   </h2>
      <!--  <form action="electricity.php" method="get"> -->
        <form name="myForm" action="electricity.php" method="get" onsubmit="return validateForm()" required> 
            <label style="color: white;"><h3>unit price</h3></label>
           <!-- <input type ="text" size="45" style="height: 49px; width: 238px;" placeholder="Enter new unit price of electricity" name="unit_price">  -->

            <input type="number" min="1" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="unit_price">
            <br>
            
            
            <button type = "submit" value="update" name="edit_electricity" style="color:black;">submit</button>
            <button type = "submit"> <a href="electricity.php">cancel</a></button>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            

            

            
        </form>

        <?php 
    }
        ?>

    




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <link rel="stylesheet" href="style3.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>electricity details</title>
    <style>

button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

    </style>
    
</head>
<body>



<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">rent_system</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="room.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Room</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">extra</span>
          </a>
        </li>
        <li>
          <a href="electricity.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Electricity</span>
          </a>
        </li>
        <li>
          <a href="rent.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Rent</span>
          </a>
        </li>
        <li>
          <a href="water.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Water</span>
          </a>
        </li>
        <li>
          <a href="users.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
      
    
      
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="../images/tran.jpg" alt="">
        <span class="admin_name">Puspa Shakya</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    
    <div>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                            
                    <h1 style="color:black; text-align:center;">    The unit price of electricity is Rs. 

                    
                    
                <?php
                $data = get_electricity();
                if (isset($data)) {
                $num = sizeof($data);
                for($i=0; $i<$num; $i++)
                {
                ?>

                    
                    <tr>
                        <td> <?php echo $data[$i]['unit_price'] ?> </td>
                        
                        
                    </tr>
                    
                <?php  
                }
                }
                ?>
                <br>
                <br>    

                <button  type ="button"><a href="electricity.php?edit=1">    Update price of electricity </a></button>
                            
                </h1>  
    </div>


       
        
        
    

<br>

<br>





<script>     

  function validateForm() {
  var x = document.forms["myForm"]["unit_price"].value;
  
  if (x == "") {
    alert("price must be filled out");
    return false;
  }
}

</script>
    
</body>
</html>









 



















