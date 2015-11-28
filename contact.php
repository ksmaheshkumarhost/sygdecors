<?php 
$menu="contact";

include 'adminpanel/inc/connection.php';

if(isset($_POST['Submit']))
{
	extract($_POST);
	
	$today = date("Y-m-d");
	
	$insert = "INSERT INTO sd_enquiry(name,location,mobile,email,purpose,message,en_date) VALUES('$name','$location','$mobile','$email','$purpose','$message','$today')";
	
	if(mysql_query($insert))
	{
	$message = '<html>
	<table cellpadding="10" cellspacing="10">
		<tr><td height="55" align="center" colspan="3"><strong>Query Form</strong></td></tr>
		<tr><td>Name</td><td>:</td><td>'.$name.'</td></tr>
		<tr><td>Location</td><td>:</td><td>'.$location.'</td></tr>
		<tr><td>Mobile No</td><td>:</td><td>'.$mobile.'</td></tr>
		<tr><td>Email</td><td>:</td><td>'.$email.'</td></tr>
		<tr><td>Purpose</td><td>:</td><td>'.$purpose.'</td></tr>
		<tr><td>Message</td><td>:</td><td>'.$message.'</td></tr>
	</table>
</html>';

$to = "info@synergydecor.co.in";
$subject = "Synergy Decor - Query Form";
mail('cm.murali78@gmail.com', $subject, $message);
$headers  = "From: info@synergydecor.co.in \r\n";
    $headers .= "Return-Path: info@synergydecor.co.in \r\n";
 	$headers .= "Bcc: cm.murali78@gmail.com \r\n";
    $headers .= "X-Mailer: PHP/". phpversion();
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
					 if(mail($to, $subject, $message,$headers))
					{
					header("location:contact.php?msg=We will be in touch with you within two hours, Thank you!");
                    exit;
					} else
                    {
                        echo "Mail not sent";
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
	if(document.query_form.location.value.length <= 0)
	{
		message+='Location'+"\n";
	}
	if(document.query_form.mobile.value.length <= 0)
	{
		message+='Mobile Number'+"\n";
	}
	if(document.query_form.email.value.length <= 0)
	{
		message+='Email Id'+"\n";
	}
	if(document.query_form.purpose.value.length <= 0)
	{
		message+='Purpose'+"\n";
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
</head>

<body>

<div class="main">
<?php include 'header_menu.php'; ?>
    <script type="text/javascript"  src="js/jquery.validate.js"></script>
     <script>
  $(document).ready(function(){
    $("#query_form01").validate();

  });
  </script>

    <div id="content" >
    
    <div id="left">
<div class="contact1" style="  display: block;    float: left;     padding: 32px 30px 0;    position: relative;    width: 320px;">
	<span class="redHeader">Contact information</span><br><br>
		<div class="C1">
					<strong id="adresbg">Factory & Office :</strong> 
					<span> <b>Synergy Décor</b><br />
						Plot No 3, 4th Main Road<br />
						Rose Nagar<br />
						Kovilambakkam<br />
						Chennai 600 117<br />
						
						Land Mark: Behind Rani Mahal

    	<!--	Sowmya Lakshmi G<br>
    	T-11, Salma’s Royal Residency<br>
		94, SB Colony Extn<br>
		Nanganallur<br>
		Chennai 600061<br>
		--></br>
    	</span>
					<br class="clear">
				</div>
				<div class="C1">
					<strong id="mailbg">E-mail</strong> 
						<span> 
							<a href="mailto:info@synergydecor.co.in">info@synergydecor.co.in</a> <br>
							
						</span>
					<br class="clear">
				</div>
				<div class="C1">
					<strong id="phonebg">Phone</strong> 
					<span> 
						+91 9025 666 888 <br> 
					</span>
					<br class="clear">
				</div>
				<div class="C1">
					<strong id="websitebg">Websites</strong> 
						<span> 
							<a href="http://www.synergydecor.co.in">www.synergydecor.co.in</a><br> 
							
						</span>
					<br class="clear">
				</div>
   </div>
    
   	  	<div >
  <div class="queryform">
    	<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']!='')
		{ ?>
	<div style="top: 30px;" class="message success">
					<h3>Form Submitted successfully </h3>
					
				</div>
			<?php } else {?>
    	<form name="query_form" onsubmit="return validform()" id="query_form" method="post">
    	<h3 style="text-align: left; margin-left:40px; margin-bottom: 30px; margin-top: 34px; color: red;">Query Form</h3>
    	<div>
				<label for="fname">Name<font color="red">*</font></label> 
   		<input class="input required" name="name" type="text"></div>
    	<div><label class="fname">Location<font color="red">*</font></label><input name="location" class="input required" type="text"></div>
    	<div><label class="fname">Mobile Number<font color="red">*</font></label><input name="mobile" class="input required num" type="text"></div>
    	<div><label class="fname">E-mail<font color="red">*</font></label><input name="email" class="input required email" type="text"></div>
    	<div><label class="fname">Purpose<font color="red">*</font></label>
    		<select name="purpose" class="input required">
    			<option value="">--select--</option>
    			<option value="Home">Home</option>
    			<option value="Office">Office</option>
    			<option value="Modular Kitchens">Modular Kitchens</option>
    			<option value="others">Others</option>
    		</select></div>
    	<div><label class="fname">Message</label><textarea name="message" class="input" style="border: 1px solid #cdcdcd;" name="message" rows="8" cols="18"></textarea></div>
    	<div><label class="fname"></label><input name="Submit" onclick="return validform()" type="submit" value="Submit" style="margin-left: 55px" class="button" /></div>
    </form>
    <?php } ?>
    </div>
  </div>
    
    </div>
    <div class="footer">
    	<?php include "footer.php"; ?>
    </div>
    </div>



</div>

</body>
</html>
