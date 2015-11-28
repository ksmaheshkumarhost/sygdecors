<?php 
$menu="contact";

include 'adminpanel/inc/connection.php';

if(isset($_POST['Submit']))
{
	extract($_POST);
	
	$today = date("Y-m-d");
	
 	$insert = "INSERT INTO sd_testimonials(name,email,company,designation,location,message,post_date,status) VALUES('$name','$email','$company','$designation','$location','$message','$today','0')";
	
	if(mysql_query($insert))
	{
	$message = '<html>
	<table cellpadding="10" cellspacing="10">
		<tr><td height="55" align="center" colspan="3"><strong>Feedback Mail</strong></td></tr>
		<tr><td>Name</td><td>:</td><td>'.$name.'</td></tr>
		<tr><td>Email</td><td>:</td><td>'.$email.'</td></tr>
		<tr><td>Company</td><td>:</td><td>'.$company.'</td></tr>
		<tr><td>Designation</td><td>:</td><td>'.$designation.'</td></tr>
		<tr><td>Location</td><td>:</td><td>'.$location.'</td></tr>
		<tr><td>Message</td><td>:</td><td>'.$message.'</td></tr>
	</table>
</html>';

$to = "info@synergydecor.co.in";
$subject = "Synergy Decor - Testimonials";

$headers  = "From: info@synergydecor.co.in \r\n";
    $headers .= "Return-Path: info@synergydecor.co.in \r\n";
 	$headers .= "Bcc: cm.murali78@gmail.com \r\n";
    $headers .= "X-Mailer: PHP/". phpversion();
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
					 if(mail($to, $subject, $message, $headers))
					{
					$succ_message="Thank You for posting your feedback..";				
					} 
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />

<title>Synergy Decor, Interior design, Home, Office, Modular Kitchens Designs</title>
<meta name="description" content="synergy Décor, a budding interior design firm, is based out of Chennai. With a team of young and creative minds to provide innovative design options to customers, ably guided and executed by well experienced professionals, we are specialized in interior designing of Office & Residence. We provide customized solutions on space planning, layouts, partitions, wardrobes and modular kitchens." />
<meta name="keywords" content="interion design, TV Cabinets,Crockery Units,Pooja Units,Wardrobes,Loft Closings,Wall Paneling,Wall painting,Texture painting,False Ceilings,Work Stations,Partitions,Cabins,Wall Paneling,Wall painting,Texture painting,False Ceilings,Fully Modular,Semi Modular,Frame Shutters,Top Units,Bottom Units,Accessories & Appliances,Pull Outs" />

<?php include "header_files.php"; ?> 
<script type="text/javascript">
function validform()
{
	var message="";
	
	if(document.query_form.name.value.length <= 0)
	{
		message+='Name'+"\n";
	}
	if(document.query_form.email.value.length <= 0)
	{
		message+='Email Id'+"\n";
	}
	if(document.query_form.location.value.length <= 0)
	{
		message+='Location'+"\n";
	}
	if(document.query_form.message.value.length <= 0)
	{
		message+='Message'+"\n";
	}
	
	if(message=="")
	{
		return true;
	}
	else
	{
		alert("Kindly fillup the following mandatory fields \n\n"+message);
		return false;
	}
}
</script>
<style type="text/css">
#commentary_users li {background: none repeat scroll 0 center rgba(0, 0, 0, 0); clear: both;float: left;   width: 95%;padding-bottom: 14px; border-bottom: 1px dotted #C6C6C6;
    margin-bottom: 20px;
    padding-left: 0;
}
#content_main a {
    font-weight: 700;
    color:#2A99C4;
}
.testimonial a img {
    -webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out
    border:1px solid #CCCCCC;
    float:left;
}
#commentary_users blockquote {
    background: url("images/quote-l.png") no-repeat scroll left top rgba(0, 0, 0, 0);
    float: left;
    margin-left: 10px;
    margin-right: 0;
    padding-left: 35px;
    width: 65%;
 }
 .testimonial a:hover img {
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
    transform: rotate(2deg);
    transform-origin: left bottom 0;
}
#commentary_users p {
    font-size: 13px !important;
	color:#333;
}
#commentary_users cite {
    color: #000000;
    float: right;
    font-size: 12px;
    font-style: normal;
    font-weight: 700;
    margin: 5px 0 0 0px;
}
#content_main a, #content_intro a, .footer a {
    transition: all 0.2s ease-in-out 0s;
}

#commentary_users cite .context {
    color: #777777;
    font-weight: 400;
}
#commentary_users cite a {
	color:#2A99C4 ! important;
}
#commentary_users cite a:focus, cite a:active {
    background: none repeat scroll 0 0 #2A99C4;
    color: #FFFFFF;
}
.user-testimonials{background: none repeat scroll 0 0 #FFFFFF;
    float: left;
    margin-left: 10px;
    width: 60%;}
.comment-box{
	padding:5px;background:#ffffff;
	float:right;top:38%;
	width:350px;
	position:absolute;
	margin-left:595px;
}
.line{padding-bottom:15px;}
.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 20px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
  background: white;
  border: 1px solid #f4e2d2;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #b46f2c; }
  .alert h4 {
    color: #b46f2c;
    margin: 0; }
  .alert .close {
    position: relative;
    top: -2px;
    right: -21px;
    line-height: 20px; }

.alert-success {
  background: #cdeed4;
  border-color: #a8e0b4;
  color: #091a0d; }
  .alert-success h4 {
    color: #091a0d; }

.alert-error, .alert-danger {
  background: #f7dcdc;
  border-color: #edb3b3;
  color: #300b0b; }
  .alert-error h4, .alert-danger h4 {
    color: #300b0b; }

.alert-warning {
  background: #f9efe6;
  border-color: #e5bc94;
  color: #623c18; }
  .alert-warning h4 {
    color: #623c18; }

.alert-info {
  background: #6284db;
  border-color: #3864d2;
  color: black; }
  .alert-info h4 {
    color: black; }
.comment-box .input{
	width:180px !important;
}


.name_title{
	float:left;
	width:100%;
	font-size:16px;
	font-weight:bold;
	margin-bottom:10px;
	color:#333;
}

.name_title font {
	font-weight:normal;
	font-size:12px;
}

#commentary_users{
	margin-left: -20px !important;
}

</style>
</head>

<body>

<div class="main">
<?php include 'header_menu.php'; ?>
   
          
<script type="text/javascript"  src="js/jquery.validate.js"></script>

<script>
$(document).ready(function(){
	$("#query_form01").validate();

});

$(function() {
    function moveFloatMenu() {
        var menuOffset = menuYloc.top + $(this).scrollTop() + "px";
        $('#floatMenu').animate({
            top: menuOffset
        }, {
            duration: 500,
            queue: false
        });
    }

    menuYloc = $('#floatMenu').offset();

    $(window).scroll(moveFloatMenu);

    moveFloatMenu();
});
</script>

    <div id="content" >
    
    <div id="left">
    <div class="user-testimonials">
        <h3 class="test_title">What our customers say about us?</h3>
        <ul class="testimonial" id="commentary_users">
      <li>
      	<span class="name_title">Raj Kumar <font>Programmer (TCS) | Chennai</font></span>
        <a href="buzz/user-testimonials#tk_b">
            <img width="120" height="120" alt="Katy Bairstow" src="images/blank-user.gif">
        </a>
        <blockquote>
          <p>The bottom line for us, is the time saving. FreeAgent saves us about four hours a week in tedious accounting practices, whilst giving us better quality performance data than we could hope to get from another software package.</p>
        </blockquote>
      </li>
      <li>
      	<span class="name_title">Raj Kumar <font>Programmer (TCS) | Chennai</font></span>
        <a href="buzz/user-testimonials#tk_b">
            <img width="120" height="120" alt="Katy Bairstow" src="images/blank-user.gif">
        </a>
        <blockquote>
          <p>The bottom line for us, is the time saving. FreeAgent saves us about four hours a week in tedious accounting practices, whilst giving us better quality performance data than we could hope to get from another software package.</p>
        </blockquote>
      </li>
      <li>
      	<span class="name_title">Raj Kumar <font>Programmer (TCS) | Chennai</font></span>
        <a href="buzz/user-testimonials#tk_b">
            <img width="120" height="120" alt="Katy Bairstow" src="images/blank-user.gif">
        </a>
        <blockquote>
          <p>The bottom line for us, is the time saving. FreeAgent saves us about four hours a week in tedious accounting practices, whilst giving us better quality performance data than we could hope to get from another software package.</p>
        </blockquote>
      </li>
      <li>
      	<span class="name_title">Raj Kumar <font>Programmer (TCS) | Chennai</font></span>
        <a href="buzz/user-testimonials#tk_b">
            <img width="120" height="120" alt="Katy Bairstow" src="images/blank-user.gif">
        </a>
        <blockquote>
          <p>The bottom line for us, is the time saving. FreeAgent saves us about four hours a week in tedious accounting practices, whilst giving us better quality performance data than we could hope to get from another software package.</p>
        </blockquote>
      </li>
      <li>
      	<span class="name_title">Raj Kumar <font>Programmer (TCS) | Chennai</font></span>
        <a href="buzz/user-testimonials#tk_b">
            <img width="120" height="120" alt="Katy Bairstow" src="images/blank-user.gif">
        </a>
        <blockquote>
          <p>The bottom line for us, is the time saving. FreeAgent saves us about four hours a week in tedious accounting practices, whilst giving us better quality performance data than we could hope to get from another software package.</p>
        </blockquote>
      </li>
    </ul>
    
    </div>

	<div class="comment-box" id="floatMenu" style="top:161.7px" >
		<?php if(isset($succ_message) && $succ_message!=''){
            ?>
          <div class="alert alert-block alert-success fade in">
              <p> Thank you for your valuable feedback.</p>
            </div>
        <?php
            } else {
        ?>
	<form name="query_form" id="query_form01" method="post">
    	<h3 class="test_title" >Post Your Comments</h3>
     	<div class="line">
		<label for="fname">Name<font color="red">*</font></label> 
   		<input class="input required" name="name" type="text">
   		</div>
    	
    	<div class="line"><label class="fname">E-mail<font color="red">*</font></label>
    	<input name="email" class="input required email" type="text">
    	</div>
    	
    	<div class="line">
		<label for="fname">Company </label> 
   		<input class="input" name="company" type="text">
   		</div>
   		
   		<div class="line">
		<label for="fname">Designation </label> 
   		<input class="input" name="designation" type="text">
   		</div>
   		
   		<div class="line">
		<label for="fname">Location<font color="red">*</font></label> 
   		<input class="input required" name="location" type="text">
   		</div>
    	
    	
    	<div class="line"><label class="fname">Message</label>
    		<textarea style="border: 1px solid #cdcdcd;" class="input" name="message" rows="5"></textarea></div>
    	<div class="line"><label class="fname"></label><input name="Submit" onclick="return validform()" type="submit" value="Submit" style="margin-left: 190px" class="button" /></div>
    </form> <?php  } ?>
</div>
  <div>
  
  </div>
    
    </div>
    <div class="footer">
    	<?php include "footer.php"; ?>
    </div>
    </div>
</div>

</body>
</html>
