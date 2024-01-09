<?php
include 'db.php';
$id = $_SESSION['id'];
$sql = "SELECT * FROM reel WHERE id = $id";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_array($query);

?>

<!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src= "upload/<?= $row['image']; ?>"  alt=""  width="70" height="70" /> </div>
        <div class="user-info">
          <div class="greeting" style="font-size:14px;">Welcome <p style="color:red"><?php echo $row['name']; ?> </p></div>
          <div class="username" style="font-size:12px;"></div>
          <div class="status" style="font-size:10px;"><a href="profile.php">
            <div class="status-icon green"></div>Online</a></div>
      </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
   
    <ul>	
      <li></li>
      <li class="start"> <a href="#"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span>  </a> 
		    </li>
          <li><a href="#"><span class="fa fa-user"></span> User</a></li>
          <li><a href="#"><span class="fa fa-file-text-o"></span> Marketing</a></li>
          <li ><a href="#"> <span class="fa fa-tasks"></span> Sales</a></li>
					<li ><a href="#"><span class="fa fa-cube"></span> Promotion</a></li>
          <li ><a href="#"><span class="fa fa-line-chart"></span> Advertisement</a></li>
          <li ><a href="#"><span class="fa fa-bullhorn"></span> Branding</a></li>
          <li ><a href="#"><span class="fa fa-ticket"></span> Payment</a></li>

    </ul>
    
	