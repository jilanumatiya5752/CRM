<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | DASHBOARD </title>
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
<link href="dab.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="img/favicon.ico" />
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
     <div class="main-panel">
          <div class="content-wrapper">

            <div class="row">
              <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="img/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Cost <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <?php
                      $sqlReel = "SELECT * FROM campaign WHERE 1";
                      $queryReel = mysqli_query($db, $sqlReel);

                      if (mysqli_num_rows($queryReel) > 0) {
                          $totalCost = 0;

                          foreach ($queryReel as $row) {
                              $cost = $row['cost'];
                              $totalCost += $cost;

                              // Display other content for each row if needed
                              ?>
                              
                              <?php
                          }

                          // Display the total cost after the loop
                          ?>
                          <h2> $<?= $totalCost ?></h2>
                          <?php
                      }
                      ?>

                  </div>
                </div>
              </div>
              <div class="col-md-6 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="img/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Revenue <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <?php
                      $sqlReel = "SELECT * FROM campaign WHERE 1";
                      $queryReel = mysqli_query($db, $sqlReel);

                      if (mysqli_num_rows($queryReel) > 0) {
                          $totalCost = 0;

                          foreach ($queryReel as $row) {
                              $cost = $row['revenue'];
                              $totalCost += $cost;

                              // Display other content for each row if needed
                              ?>
                              
                              <?php
                          }

                          // Display the total cost after the loop
                          ?>
                          <h2> $<?= $totalCost ?></h2>
                          <?php
                      }
                      ?>
                  </div>
                </div>
              </div>
            
            </div>
           <div class="row">
          <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="clearfix">
                  <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                  <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                </div>
                <canvas id="visit-sale-chart" class="mt-4"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Traffic Sources</h4>
                <canvas id="traffic-chart"></canvas>
                <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
              </div>
            </div>
          </div>
        </div>

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recent Project</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Assignee </th>
                            <th> Subject </th>
                            <th> Status </th>
                            <th> Last Update </th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sqlReel = "SELECT * FROM reel WHERE 1";
                          $queryReel = mysqli_query($db, $sqlReel);

                          foreach ($queryReel as $row) {
                            $reelId = $row['id'];
                            $sqlCampaign = "SELECT * FROM campaign WHERE reel = '$reelId'";
                            $queryCampaign = mysqli_query($db, $sqlCampaign);
                              foreach ($queryCampaign as $campaignRow) {
                            // Display the reel information
                          
                            ?>
                            <tr>
                              <td>
                                <img src="upload/<?= $row['image']; ?>" class="me-2" alt="image"> <?php echo $row['name'] ?>
                              </td>
                            
                                <td><?php echo $campaignRow['name']; ?></td>
                                <td>
                                  <label class="badge badge-gradient-success">DONE</label>
                                </td>
                                <td><?php echo $campaignRow['date']; ?></td>
                            
                            </tr>
                          <?php
                          }
                          }
                          ?>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Project Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Due Date </th>
                            <th> Progress </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            <?php
                          $sqlReel = "SELECT * FROM reel WHERE 1";
                          $queryReel = mysqli_query($db, $sqlReel);
                          foreach ($queryReel as $row) {
                          ?>
                          <tr>
                            <td> <?= $line_number++; ?> </td>
                            <td> <?= $row['name'] ?> </td>
                            <td> <?= $row['date'] ?> </td>
                            
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
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
 <script src="assets/vendors/js/vendor.bundle.base.js"></script>
</body>
</html>