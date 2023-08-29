<?php 
    session_start();
    if(!isset($_SESSION['admin_fname']))
    {
        header('location:login.php');
    }
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>  </title>
    <link rel="stylesheet" href="style3.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">rent_system</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
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
        <span class="admin_name">Puspa Shakya <br>   Creator</span>
               <!-- <i class='bx bx-chevron-down' ></i> -->
      </div>
    </nav>
    

    <br>

    <br>

    <br>

    <br>
    <table style="width:100%">
      <tr>
      
      </tr>
      <tr>
        <td><div id="one" style="text-align: center;"><h2 style="text-align: center;">Room</h2><a href="room.php"> <img src="images/room.png" style="width:400px; height: 120px;"></a></div></td>
        <td><div id="two" style="text-align: center;"><h2>Users</h2><a href="users.php"> <img src="images/users.png" style="width:400px; height: 120px;"></a></div></td>
        
      </tr>
      <tr>
        <td><div id="three" style="text-align: center;"><h2>Electricity</h2><a href="electricity.php"> <img src="images/electricity.png" style="width:400px; height: 120px;"></a></div></td>
        <td><div id="four" style="text-align: center;"><h2>Rent</h2><a href="rent.php"> <img src="images/rent.png" style="width:250px; height: 120px;"></a></div></td>
        
      </tr>
      <tr>
        <td><div id="six" style="text-align: center;"><h2>Water</h2><a href="water.php"> <img src="images/water.jfif" style="width:250px; height: 120px;"></a></div> </td>
        <td><div id="five" style="text-align: center;"><h2>extra</h2><a href="#"> <img src="../images/extra.jpg" style="width:250px; height: 120px;"></a></div> </td>
      </tr>
    </table>
  </section>
  

 

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>


</body>
</html>