<?php 
$menu="gallery";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
<title>Synergy Decor, Interior design, Home, Office, Modular Kitchens Designs</title>
<meta name="description" content="synergy Décor, a budding interior design firm, is based out of Chennai. With a team of young and creative minds to provide innovative design options to customers, ably guided and executed by well experienced professionals, we are specialized in interior designing of Office & Residence. We provide customized solutions on space planning, layouts, partitions, wardrobes and modular kitchens." />
<meta name="keywords" content="interion design, TV Cabinets,Crockery Units,Pooja Units,Wardrobes,Loft Closings,Wall Paneling,Wall painting,Texture painting,False Ceilings,Work Stations,Partitions,Cabins,Wall Paneling,Wall painting,Texture painting,False Ceilings,Fully Modular,Semi Modular,Frame Shutters,Top Units,Bottom Units,Accessories & Appliances,Pull Outs" />

<?php include "header_files.php"; ?>
<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<style type="text/css" media="screen">
	p { font-size: 1.2em; }
	ul li { display: inline-block; padding-left: 20px; padding-bottom:20px; }
.wide {border-bottom: 1px #000 solid;width: 4000px;}
	.fleft { float: left; margin: 0 20px 0 0; }
	.cboth { clear: both; }
	
</style>
 	<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
</head>

<body>

<div class="main">

	<?php include 'header_menu.php'; ?>
    <div id="content" >
    
    <div class="gallerypage">
    	
	<div id="main">
			<ul class="gallery clearfix">
			</ul>
			
	 		<div class="title"><h2><a name="renovation_works">Renovation Works</a></h2></div>
	
<ul class="gallery clearfix">
<li><a href="gallery/renovation_works/1.JPG" rel="prettyPhoto[gallery2]" ><img src="gallery/renovation_works/thumb/1.JPG"  /></a></li>
	<li><a href="gallery/renovation_works/2.JPG" rel="prettyPhoto[gallery2]" ><img src="gallery/renovation_works/thumb/2.JPG"  /></a></li>
	</ul>
    </div>
    
    </div>
    
    <div class="footer">
    	<?php include "footer.php"; ?>
    </div>



</div>

</body>
</html>
