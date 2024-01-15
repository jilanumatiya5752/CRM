<?php include 'db.php';
if(isset($_POST['ucampaign'])){
    $id = $_GET['id'];
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
    $y="UPDATE campaign SET name='$name',assigned='$assigned',type='$type',audience='$audience',sponsor='$sponsor',ads='$ads',date='$date',cost='$cost',revenue='$revenue',ctype='$ctype',description='$description' WHERE id='$id'";
 
    // $i="insert into campaign(name,assigned,type,audience,sponsor,ads,date,cost,revenue,ctype,description)values('$name','$assigned','$type','$audience','$sponsor','$ads','$date','$cost','$revenue','$ctype','$description')";	
  $result = mysqli_query($db,$y);  
  header("Location: marketing.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Edit Marketing </title>
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
      <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM campaign where id = $id";
        $query_run  = mysqli_query($db,$query);
        $row = mysqli_fetch_array($query_run);
      ?>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="container">
        <h1 class="my-4">Edit Marketing</h1>
        <div class="mb-3">
          <label for="name" class="form-label"><b>Update Name</b></label>
          <input type="text" class="form-control"value="<?php echo $row['name'];?>" name="name" id="name" required>
        </div>
        <div class="mb-3">
        <label for="name" class="form-label"><b>Assigned To</b></label>
       <select value="<?php echo $row['assigned'];?>"class="form-control select" name="assigned" id="assigned" required>
               <?php 
                $query = "SELECT * FROM reel ORDER BY 'name' ASC";
                $result = $db->query($query);
               foreach($result as $jsu)
                { 
                    if($pname == $jsu['name']){
                    $slected="selected";
                }else{
                    $slected="";
                }
                ?>
          <option value="<?php echo $jsu['name'];?>" <?php echo $slected; ?>><?php echo $jsu['name'];?></option>';
      <?php }
          ?>
      </select>
</div>
    <div class="mb-3">
    <label for="name" class="form-label"><b>Campaign Type</b></label>
    <select class="form-control select" name="type" required>
        <option value="Select An Option" <?php echo ($row['type'] == 'Select An Option') ? 'selected' : ''; ?>>Select An Option</option>
        <option value="Conference" <?php echo ($row['type'] == 'Conference') ? 'selected' : ''; ?>>Conference</option>
        <option value="Webinar" <?php echo ($row['type'] == 'Webinar') ? 'selected' : ''; ?>>Webinar</option>
        <option value="Trade Show" <?php echo ($row['type'] == 'Trade Show') ? 'selected' : ''; ?>>Trade Show</option>
        <option value="Public Relation" <?php echo ($row['type'] == 'Public Relation') ? 'selected' : ''; ?>>Public Relation</option>
        <option value="Partners" <?php echo ($row['type'] == 'Partners') ? 'selected' : ''; ?>>Partners</option>
        <option value="Referral Program" <?php echo ($row['type'] == 'Referral Program') ? 'selected' : ''; ?>>Referral Program</option>
        <option value="Advertisement" <?php echo ($row['type'] == 'Advertisement') ? 'selected' : ''; ?>>Advertisement</option>
        <option value="Banner ADS" <?php echo ($row['type'] == 'Banner ADS') ? 'selected' : ''; ?>>Banner ADS</option>
        <option value="Direct Mail" <?php echo ($row['type'] == 'Direct Mail') ? 'selected' : ''; ?>>Direct Mail</option>
        <option value="Primary Email" <?php echo ($row['type'] == 'Primary Email') ? 'selected' : ''; ?>>Primary Email</option>
        <option value="Telemarketing" <?php echo ($row['type'] == 'Telemarketing') ? 'selected' : ''; ?>>Telemarketing</option>
        <option value="others" <?php echo ($row['type'] == 'others') ? 'selected' : ''; ?>>others</option>
    </select>
</div>
<div class="mb-3">
        <label for="Audience" class="form-label"><b>Target Audience</b></label>
        <input type="text" class="form-control" placeholder="Target Audience" name="audience" id="audience" value="<?php echo $row['audience']?>" required>
</div>
<div class="mb-3">
        <label for="Sponsor" class="form-label"><b>Sponsor</b></label>
        <input type="text" class="form-control" placeholder="Sponsor" name="sponsor" id="sponsor" value="<?php echo $row['sponsor']?>" required>
</div>
<div class="mb-3">
        <label for="ads" class="form-label"><b>ADS</b></label>
        <input type="text" class="form-control" placeholder="ADS" name="ads" id="ads" value="<?php echo $row['ads']?>" required>
</div>
<div class="mb-3">
        <label for="Date" class="form-label"><b>Expected Close Date</b></label>
        <input type="date" class="form-control" placeholder="Date" name="date" id="date" value="<?php echo $row['date']?>" required>
</div>
<div class="mb-3">
        <label for="Cost" class="form-label"><b>Budget Cost</b></label>
        <input type="number" class="form-control" placeholder="Budget Cost in Dollar" name="cost" id="cost" value="<?php echo $row['cost']?>" required>
</div>
<div class="mb-3">
        <label for="Revenue" class="form-label"><b>Expected Revenue</b></label>
        <input type="number" class="form-control" placeholder="Expected Revenue in Dollar" name="revenue" id="revenue" value="<?php echo $row['revenue']?>" required>
</div>
 <div class="mb-3">
        <label for="name" class="form-label"><b>Campaign Type</b></label>
            <select class="form-control select" name="ctype"  required>
                <option value="Select An Option" <?php echo ($row['ctype'] == 'Select An Option') ? 'selected' : ''; ?>>Select An Option</option>
                <option value="Excellent" <?php echo ($row['ctype'] == 'Excellent') ? 'selected' : ''; ?>>Excellent</option>
                <option value="Good" <?php echo ($row['ctype'] == 'Good') ? 'selected' : ''; ?>>Good</option>
                <option value="Average" <?php echo ($row['ctype'] == 'Average') ? 'selected' : ''; ?>>Average</option>
                <option value="Poor" <?php echo ($row['ctype'] == 'Poor') ? 'selected' : ''; ?>>Poor</option>
            </select>
    </div>
    <div class="mb-3">
       <label for="name" class="form-label"><b>Description</b></label>                          
            <textarea class="form-control" name="description" rows="8" placeholder="Marketing Regarding Detail" value="<?php echo $row['description']?>"><?php echo $row['description']?></textarea>
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