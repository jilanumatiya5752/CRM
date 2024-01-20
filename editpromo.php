<?php
include 'db.php';
if (isset($_POST['uppromoption'])) {
    $id = $_GET['id'];
    $pname = $_POST['pname'];
    $pdesc = $_POST['pdesc'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $discount = $_POST['discount'];
    if ($_FILES['image']['name']) {
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/upload/" . $_FILES['image']['name']);
        $image = $_FILES['image']['name'];
    }
    $y="UPDATE promo SET pname='$pname',pdesc='$pdesc',startDate='$startDate',endDate='$endDate',discount='$discount',image='$image' WHERE id='$id'";
    // $i="insert into campaign(name,assigned,type,audience,sponsor,ads,date,cost,revenue,ctype,description)values('$name','$assigned','$type','$audience','$sponsor','$ads','$date','$cost','$revenue','$ctype','$description')";	
  $result = mysqli_query($db,$y);  
  if (!$result) {
    die("Error in query: " . mysqli_error($db));
  }else{
  echo "<script>alert('Update Successfully.');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | EDIT PROMOTION </title>
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
        <header><h1>Edit Promotion</h1></header>
        <?php
       
        $id = $_GET['id'];
        $query = "SELECT * FROM promo where id = $id";
        $query_run  = mysqli_query($db,$query);
        $row = mysqli_fetch_array($query_run);
      ?>
       
     <form action="" method="post" enctype="multipart/form-data">
        <label for="promotionName">Promotion Name:</label>
        <input type="text" id="pname" name="pname" value="<?php echo $row['pname']; ?>"required>

        <label for="promotionDesc">Promotion Description:</label>
<textarea class="form-control" name="pdesc" rows="8" placeholder="Promotion Description regarding some Information"  value="<?php echo $row['pdesc']; ?>" required><?php echo $row['pdesc']; ?></textarea>
        
<label for="startDate">Start Date:</label>
        <input type="date" id="startDate" name="startDate" value="<?php echo $row['startDate']; ?>" required>

        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" name="endDate" value="<?php echo $row['endDate']; ?>" required>

        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount" min="0" value="<?php echo $row['discount']; ?>" required>

        <label for="image">Choose image:</label>
        <input type="file" class="form-control" name="image" id="image"  required>

        <button type="submit" name="uppromoption">Update Promotion</button>
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