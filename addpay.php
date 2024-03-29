<?php
include 'db.php';
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $ctype = $_POST['ctype'];
    $payment = $_POST['payment'];

    $i = "insert into payment(name,sdate,edate,ctype,payment)values('$name','$sdate','$edate','$ctype','$payment')";
    $result = mysqli_query($db, $i);
    header("Location: payment.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | ADD Payment </title>
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
     <form action="" method="post" enctype="multipart/form-data">
      <div class="container">
        <h1 class="my-4">ADD PAYMENT</h1>
        <div class="mb-3">
          <label for="name" class="form-label"><b>Product-Name</b></label>
          <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" required>
        </div>
         <div class="mb-3">
          <label for="name" class="form-label"><b>Start-Date</b></label>
          <input type="date" class="form-control"  name="sdate" id="sdate" required>
        </div>
         <div class="mb-3">
          <label for="name" class="form-label"><b>End-Date</b></label>
          <input type="date" class="form-control"  name="edate" id="edate" required>
        </div>
         <div class="mb-3">
          <label for="name" class="form-label"><b>Category Type</b></label>
           <select class="form-control select" name="ctype"  required>
                <option value="Select An Option">Select An Option</option>
                <option value="Marketing">Marketing</option>
                <option value="Sales">Sales</option>
                <option value="Promotion">Promotion</option>
                <option value="Branding">Branding</option>
            </select>
        </div>
       <div class="mb-3">
          <label for="name" class="form-label"><b>Payment</b></label>
          <input type="number" class="form-control"  name="payment" id="payment" required>
        </div>
        <br>
        <div align="center">
          <button class="btn button-35 "  type="save"  name="save">SAVE</button>
        </div>
</div>
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