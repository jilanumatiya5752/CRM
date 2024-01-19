<?php
include 'db.php';
if(isset($_POST['addpromoption'])){
$pname= $_POST['pname'];
$pdesc = $_POST['pdesc'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$discount = $_POST['discount'];
if ($_FILES['image']['name']) {
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/upload/" . $_FILES['image']['name']);
    $image = $_FILES['image']['name'];
    }
$i = "INSERT INTO promo (pname, pdesc, startDate, endDate, image,discount) VALUES ('$pname', '$pdesc', '$startDate', '$endDate', '$image', '$discount')";
$result = mysqli_query($db, $i);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | ADD PROMOTION </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/addpromo.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php"); ?>
<div class="page-container row-fluid">	
    <?php
    include("leftbar.php"); ?>
    <div class="clearfix"></div>
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
    <div class="progress transparent progress-small no-radius no-margin">
        <div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
    </div>
    <div class="pull-right">
    </div>
  </div>
  <div class="page-content"> 
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
        <header><h1>Add Promotion</h1></header>
     <form action="" method="post" enctype="multipart/form-data">
        <label for="promotionName">Promotion Name:</label>
        <input type="text" id="pname" name="pname" required>

        <label for="promotionDesc">Promotion Description:</label>
<textarea class="form-control" name="pdesc" rows="8" placeholder="Promotion Description regarding some Information"  required></textarea>
        
<label for="startDate">Start Date:</label>
        <input type="date" id="startDate" name="startDate" required>

        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" name="endDate" required>

        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount" min="0" required>

        <label for="image">Choose image:</label>
        <input type="file" class="form-control" name="image" id="image" required>

        <button type="submit" name="addpromoption">Add Promotion</button>
    </form>

</div>
 </div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 

</body>
</html>