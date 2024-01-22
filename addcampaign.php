<?php
include 'db.php';
if(isset($_POST['save'])){
	$name=$_POST['name'];
    $assigned=$_POST['assigned'];
    $type=$_POST['type'];
    $audience=$_POST['audience'];
    $sponsor=$_POST['sponsor'];
    $ads=$_POST['ads'];
    $date=$_POST['date'];
    $cost=$_POST['cost'];
    $revenue=$_POST['revenue'];
    $ctype=$_POST['ctype'];
    $description=$_POST['description'];
    $reel=$_POST['reel'];
    $i="insert into campaign(name,assigned,type,audience,sponsor,ads,date,cost,revenue,ctype,description,reel)values('$name','$assigned','$type','$audience','$sponsor','$ads','$date','$cost','$revenue','$ctype','$description','$reel')";

    $result = mysqli_query($db,$i);  
if (!$result) {
    die("Insert failed: " . mysqli_error($db));
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | ADD Campaign </title>
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
<?php include("header.php");?>
<div class="page-container row-fluid">	
	<?php 
    include("leftbar.php");?>
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
        <h1 class="my-4">Campaign</h1>
        <div class="mb-3">
          <label for="name" class="form-label"><b>Campaign Name</b></label>
          <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" required>
        </div>
        <div class="mb-3">
        <label for="name" class="form-label"><b>Assigned To</b></label>
            <select class="form-control select" name="assigned" id="assigned" required>
                <?php
                $query = mysqli_query($db, "SELECT name FROM reel");
                while ($gave = mysqli_fetch_array($query)) {
                    echo '<option>' . $gave['name'] . '</option>';
                }
                ?>
            </select>
       
    </div>
    <div class="mb-3">
        <label for="name" class="form-label"><b>Campaign Type</b></label>
            <select class="form-control select" name="type"  required>
                <option value="Select An Option">Select An Option</option>
                <option value="Conference">Conference</option>
                <option value="Webinar">Webinar</option>
                <option value="Trade Show">Trade Show</option>
                <option value="Public Relation">Public Relation</option>
                <option value="Partners">Partners</option>
                <option value="Referral Program ">Referral Program </option>
                <option value="Advertisement">Advertisement</option>
                <option value="Banner ADS">Banner ADS</option>
                <option value="Direct Mail">Direct Mail</option>
                <option value="Primary Email">Primary Email</option>
                <option value="Telemarketing">Telemarketing</option>
                <option value="others">others </option>
            </select>
    </div>
    <div class="mb-3">
        <label for="Audience" class="form-label"><b>Target Audience</b></label>
        <input type="text" class="form-control" placeholder="Target Audience" name="audience" id="audience" required>
    </div>
    <div class="mb-3">
        <label for="Sponsor" class="form-label"><b>Sponsor</b></label>
        <input type="text" class="form-control" placeholder="Sponsor" name="sponsor" id="sponsor" required>
    </div>
    <div class="mb-3">
        <label for="ads" class="form-label"><b>ADS</b></label>
        <input type="text" class="form-control" placeholder="ADS" name="ads" id="ads" required>
    </div>
    <div class="mb-3">
        <label for="Date" class="form-label"><b>Expected Close Date</b></label>
        <input type="date" class="form-control" placeholder="Date" name="date" id="date" required>
    </div>
     <div class="mb-3">
        <label for="Cost" class="form-label"><b>Budget Cost</b></label>
        <input type="number" class="form-control" placeholder="Budget Cost in Dollar" name="cost" id="cost" required>
    </div>
    <div class="mb-3">
        <label for="Revenue" class="form-label"><b>Expected Revenue</b></label>
        <input type="number" class="form-control" placeholder="Expected Revenue in Dollar" name="revenue" id="revenue" required>
    </div>

    
     <div class="mb-3">
        <label for="name" class="form-label"><b>Campaign Type</b></label>
            <select class="form-control select" name="ctype"  required>
                <option value="Select An Option">Select An Option</option>
                <option value="Excellent">Excellent</option>
                <option value="Good">Good</option>
                <option value="Average">Average</option>
                <option value="Poor">Poor</option>
            </select>
    </div>
    <div class="mb-3">
       <label for="name" class="form-label"><b>Description</b></label>
            <textarea class="form-control" name="description" rows="8" placeholder="Marketing Regarding Detail" ></textarea>
    </div>
    <div class="mb-3">
      <?php
                $query = mysqli_query($db, "SELECT * FROM reel");
                $gave = mysqli_fetch_array($query)
                  ?>
                  <input type="hidden" class="form-control"  name="reel" id="reel" value="<?php echo $row['id']?>" required>
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