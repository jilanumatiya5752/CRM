
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Branding </title>
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
<link href="assets/css/view.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php"); ?>
<div class="page-container brand-fluid">	
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
         <div align="right">
    <button  type="button" name="add"  id="add" class="btn button-35"><a href="addbrand.php">ADD BRAND</a></button>
    </div>
    <br>  
  
     <div class="col-lg-12 mb-30">
        <?php
            $query = "SELECT * FROM brand";
            $query_run  = mysqli_query($db,$query);
            $brand = mysqli_fetch_array($query_run);
        ?>
    <div class="container bootdey">
    <div class="row">
    <div class="col-md-8">
      <div class="box box-widget widget-user">
        <div class="widget-user-header bg-aqua">
          <h1 class="widget-user-username"><?php echo $brand['bname'] ?></h1>
        </div>
        <div class="widget-user-image">
       <a href="editpromo.php?id=<?= $brand["id"]; ?>"><img class="" src="upload/<?= $brand['image']; ?>" alt="User Avatar" style="width: 150px; height: 150px;"></a>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-12 border-right">
              <div class="description-block">
                <span class="description-text">Brand Type</span>
                <h5 class="description-header"><?php echo $brand['btype'] ?></h5>
                
              </div>
            </div>
            <div class="col-sm-12 border-right">
              <div class="description-block">
                 <span class="description-text">Sponsor</span>
                <h5 class="description-header"><?php echo $brand['sponsor'] ?></h5>
               
              </div>
            </div>
            <div class="col-sm-12">
              <div class="description-block">
                <span class="description-text">Slogan</span>
                <h5 class="description-header"><?php echo $brand['slogan'] ?></h5>
             </div>
            </div>
            <div class="col-sm-12">
              <div class="description-block">
                <span class="description-text">Description</span>
                <h5 class="description-header"><?php echo $brand['description'] ?></h5>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
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