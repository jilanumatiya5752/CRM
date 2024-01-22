<?php include 'db.php';
if (isset($_POST['ucampaign'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $ctype = $_POST['ctype'];
    $payment = $_POST['payment'];
    $y = "UPDATE payment SET name='$name',sdate='$sdate',edate='$edate',ctype='$ctype',payment='$payment' WHERE id='$id'";

    // $i="insert into campaign(name,assigned,type,audience,sponsor,ads,date,cost,revenue,ctype,description)values('$name','$assigned','$type','$audience','$sponsor','$ads','$date','$cost','$revenue','$ctype','$description')";	
    $result = mysqli_query($db, $y);
    if (!$result) {
        die("Error in query: " . mysqli_error($db));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Edit Payment </title>
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
<link href="style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
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
      <?php
      $id = $_GET['id'];
      $query = "SELECT * FROM payment where id = $id";
      $query_run = mysqli_query($db, $query);
      $row = mysqli_fetch_array($query_run);
      ?>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="container">
        <h1 class="my-4">Edit Payment</h1>
        <div class="mb-3">
          <label for="name" class="form-label"><b>Name</b></label>
          <input type="text" class="form-control"value="<?php echo $row['name']; ?>" name="name" id="name" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label"><b>Starting-Date</b></label>
          <input type="date" class="form-control"value="<?php echo $row['sdate']; ?>" name="sdate" id="sdate" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label"><b>End-Date</b></label>
          <input type="date" class="form-control"value="<?php echo $row['edate']; ?>" name="edate" id="edate" required>
        </div>
    <div class="mb-3">
    <label for="name" class="form-label"><b>Campaign Type</b></label>
    <select class="form-control select" name="ctype" required>
        <option value="Select An Option" <?php echo ($row['ctype'] == 'Select An Option') ? 'selected' : ''; ?>>Select An Option</option>
        <option value="Marketing" <?php echo ($row['ctype'] == 'Marketing') ? 'selected' : ''; ?>>Marketing</option>
        <option value="Sales" <?php echo ($row['ctype'] == 'Sales') ? 'selected' : ''; ?>>Sales</option>
        <option value="Promotion" <?php echo ($row['ctype'] == 'Promotion') ? 'selected' : ''; ?>>Promotion</option>
        <option value="Branding" <?php echo ($row['ctype'] == 'Branding') ? 'selected' : ''; ?>>Branding</option>
    </select>
</div>
<div class="mb-3">
        <label for="Audience" class="form-label"><b>Payment</b></label>
        <input type="number" class="form-control" placeholder="Amount" name="payment" id="payment" value="<?php echo $row['payment'] ?>" required>
</div>
    <br>
     <div align="center">
          <button class="btn button-35 "  type="ucampaign"  name="ucampaign">Update Campaign</button>
        </div>
</div>
</div>
</form>
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