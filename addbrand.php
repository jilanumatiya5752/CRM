<?php
include 'db.php';
if (isset($_POST['save'])) {
    $bname = $_POST['bname'];
    $btype = $_POST['btype'];
    $slogan = $_POST['slogan'];
    $sponsor = $_POST['sponsor'];
    $description = $_POST['description'];
    if ($_FILES['image']['name']) {
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/upload/" . $_FILES['image']['name']);
        $image = $_FILES['image']['name'];
    }
    $i = "INSERT INTO brand (bname, btype, slogan, sponsor, image,description) VALUES ('$bname', '$btype', '$slogan', '$sponsor', '$image', '$description')";
    $result = mysqli_query($db, $i);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | ADDBRAND </title>
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
        <h1 class="my-4">ADD BRAND</h1>
        <div class="mb-3">
          <label for="name" class="form-label"><b>Brand Name</b></label>
          <input type="text" class="form-control" placeholder="Enter Name" name="bname" id="bname" required>
        </div>
    <div class="mb-3">
        <label for="name" class="form-label"><b>Branding Type</b></label>
            <select class="form-control select" name="btype"  required>
                <option value="Select An Option">Select An Option</option>
                <option value="Corporate-branding">Corporate-branding</option>
                <option value="Personal-branding">Personal-branding</option>
                <option value="Product-branding">Product-branding</option>
                <option value="Retail-branding">Retail-branding</option>
                <option value="Geographic-branding">Geographic-branding</option>
                <option value="Service-branding">Service-branding</option>
                <option value="others">others </option>
            </select>
    </div>
    <div class="mb-3">
        <label for="Audience" class="form-label"><b>Slogan</b></label>
        <input type="text" class="form-control" placeholder="Slogan" name="slogan" id="slogan" required>
    </div>
    <div class="mb-3">
        <label for="Sponsor" class="form-label"><b>Sponsor</b></label>
        <input type="text" class="form-control" placeholder="Sponsor" name="sponsor" id="sponsor" required>
    </div>
    <div class="mb-3">
       <label for="name" class="form-label"><b>Description</b></label>                          
            <textarea class="form-control" name="description" rows="8" placeholder="Marketing Regarding Detail" ></textarea>
    </div>
    <div class="mb-3">
       <label for="name" class="form-label"><b>Choose image:</b></label>                          
            <input type="file" class="form-control" name="image" id="image" required>
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