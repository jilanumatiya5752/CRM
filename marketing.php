<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Marketing </title>
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
      <div align="right">
    <button  type="button" name="add"  id="add" class="btn button-35"><a href="addcampaign.php">ADD CAMPAIGN</a></button>
    </div>
   <br>
    <form name="bulk_action_form" action=""  id="bulk_action_form" method="get" onSubmit="return delete_confirm()";>
      <table  class="table table-bordered table-striped" width="1000px" >
            <tbody>
            <tr>
            <th>Id</th>
				    <th>Campaign Name</th>
            <th>Assigned Project</th>
				    <th>Campaign Type</th>
            <th>Target Audience</th>
            <th>Sponsor</th>
            <th>Campaign Type</th>
				    <th>Budget Cost</th>
            <th>Expected Close Date</th>
            </tr>
            </tbody>
            <tbody>
            </div>
            <?php
            $query = "SELECT * FROM campaign";
            $query_run  = mysqli_query($db,$query);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $line_number = 1;
                        foreach($query_run as $row)
                        {
                            ?>
                                <tr>
                                    <td><?= $line_number++; ?></td>
                                    <td><?= $row['name'];?></td>
                                    <td><?= $row['assigned'];?></td>
                                    <td><?= $row['type'];?></td>
                                    <td><?= $row['audience'];?></td>
                                    <td><?= $row['sponsor'];?></td>
                                    <td><?= $row['ctype'];?></td>
                                    <td><?= $row['cost'];?></td>
                                    <td><?= $row['date'];?></td>
                                    <td> <a href="deleteuser.php?id=<?= $row["id"]; ?>"><img src="assets/img/delete.png"></a>
                                          <a href="#?id=<?= $row["id"]; ?>"><img src="assets/img/update.png"></a> </td>                     
                             </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                          <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </form>
</div>
 </div>

   <script>
    function delete_confirm(){
    if($('.checkbox:checked').length > 0){
        var result = confirm("Are you sure to delete selected users?");
        if(result){
            return true;
        }else{
            return false;
        }
    }else{
        alert('Select at least 1 record to delete.');
        return false;
    }
}
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox').each(function(){
                this.checked = false;
                });
            }
        });
        $('#stud_delete_id').on('click',function(){
            $('#bulk_action_form').submit();
        });
});
</script>
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
