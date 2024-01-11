<?php
include 'db.php';
$id = $_SESSION['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
   // $country = $_POST['country'];
    //$state = $_POST['state'];
   // $city = $_POST['city'];
    $role = $_POST['role'];
    $folder = __DIR__ . "/upload/"; // Corrected the path separator and removed unnecessary quotes

    if (!empty($_FILES['image']['tmp_name'])) { // Check if a new image is uploaded
        $file = $_FILES['image']['tmp_name'];
        $file_name = $_FILES['image']['name'];

        // Delete existing image
        $stmt = mysqli_query($db, "SELECT image FROM reel WHERE id='$id'");
        $row = mysqli_fetch_assoc($stmt);
        $deleteimage = $folder . $row['image'];
        unlink($deleteimage);

        // Upload the new image
        move_uploaded_file($file, $folder . $file_name);
    } else {
        // No new image uploaded, use the existing image name
        $stmt = mysqli_query($db, "SELECT image FROM reel WHERE id='$id'");
        $row = mysqli_fetch_assoc($stmt);
        $file_name = $row['image'];
    }

    // Update other profile information
    $jilan = "UPDATE reel SET name='$name', phone='$phone', image='$file_name', gender='$gender', role='$role', email='$email', address='$address' WHERE id='$id'";
    $result = mysqli_query($db, $jilan);
    if ($result) {
        echo "<script>alert('Your profile updated successfully.');</script>";
    } else {
        $error[] = 'Something went wrong';
    }
}
/*
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
    
	$a=mysqli_query($db,"update reel set name='$name',phone='$phone',gender='$gender',email='$email',address='$address' where id='".$_SESSION['id']."'");

    if($a)
{
echo "<script>alert('Your profile updated successfully.');</script>";
}
}
*/
?>

<!DOCTYPE html>
<html>
<head>
<title>CRM | User Profile</title>
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">
	<?php include("leftbar.php");?>
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
		<div class="page-title">	
<?php
$query=mysqli_query($db,"select * from reel  where id='".$_SESSION['id']."'");
	 while($gave=mysqli_fetch_array($query))
	 {
	  ?>
	
              <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Your Profile</h3>
                                   <div align="right">
                                        Registration Date :<?php echo $gave['time'];?> 
                                    </div>
                                </div>
                             
                                <div class="panel-body">                                                                        
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Profile</label>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="input-group">
                                            <div class="circular-image">
                                              <div class="">
                                    <input class="form-control" type="file" name="image" style="width:100%;" >
                                </div>
                                 <?php
                                 $image = $gave['image'];
                                if($image==NULL)
                                {
                                echo '<img src="upload/'.$image.'"  width="70" height="70">';
                                } else { echo '<img src="upload/'.$image.'"  width="70" height="70">';}?> 
                                
                                 </div>
                                </div>
                                </div>
                                </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="name" value="<?php echo $gave['name'];?>" class="form-control"/>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Primary Email </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" name="email" value="<?php echo $gave['email'];?>"  class="form-control"/>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Contact no </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  name="phone" value="<?php echo $gave['phone'];?>"  maxlength="10" class="form-control"/>
                                            </div>                                            
                                        </div>
                                    </div>
									   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Gender </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <select class="form-control select" name="gender">
                                                  <option value="<?php echo $gave['gender'];?>"><?php $a=$gave['gender'];
												  if($a=='m')
												  {
												  echo "Male";
												  }
												    if($a=='f')
												  {
												  echo "Female";
												  }
												 
												  
												    if($a=='others')
												  {
												  echo "Others";
												  }
												 
												  
												  ?></option>
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                                <option value="others">Other</option>
                                                </select>
                                            </select>
                                            </div>                                            
                                      
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Role </label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <select class="form-control select" name="role">
                                                  <option value="<?php echo $gave['role'];?>"><?php $a=$gave['role'];
												  if($a=='marketing')
												  {
												  echo "Marketing";
												  }
												    if($a=='advertisement')
												  {
												  echo "Advertisement";
												  }
												    if($a=='promotion')
												  {
												  echo "Promotion";
												  }
                                                  if($a=='sales')
												  {
												  echo "Sales";
												  }
                                                  if($a=='branding')
												  {
												  echo "Branding";
												  }
												 
												  
												  ?></option>
                                                <option value="marketing">Marketing</option>
                                                <option value="advertisement">Advertisement</option>
                                                <option value="promotion">Promotion</option>
                                                <option value="sales">Sales</option>
                                                <option value="branding">Branding</option>
                                                </select>
                                            </select>
                                            </div>                                            
                                      
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Address</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <textarea class="form-control" name="address" rows="3"><?php echo $gave['address'];?></textarea>
                                        </div>
                                    </div>
                                     <!-- 
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Country</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                               <select class="form-control select" name="country"  id="country">
                                                     <option>Select Country</option>
                                            </select>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">State</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                               <select class="form-control select" name="state" id="state">
                                            </select>
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">City</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                               <select class="form-control select" name="city" id="city">
                                            </select>
                                            </div>                                            
                                        </div>
                                    </div>-->
                                </div>
								<?php } ?>
                                <div class="panel-footer">
                                    <button class="btn btn-default" type="reset">Clear Form</button>                                    
                                    <input type="submit" value="Update" name="update" class="btn btn-primary pull-right">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>                                       
		</div>
    </div>
  </div>
 </div>
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#country').change(function() {
                    loadState($(this).find(':selected').val())
                })
                $('#state').change(function() {
                    loadCity($(this).find(':selected').val())
                })
            });
            function loadCountry() {
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=country"
                }).done(function(result) {
                    $(result).each(function() {
                        $("#country").append($(result));
                    })
                });
            }
            function loadState(countryId) {
                $("#state").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=state&countryId=" + countryId
                }).done(function(result) {
                    $("#state").append($(result));
                });
            }
            function loadCity(stateId) {
                $("#city").children().remove()
                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: "get=city&stateId=" + stateId
                }).done(function(result) {
                    $("#city").append($(result));
                });
            }
            // init the countries
            loadCountry();
        </script>
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