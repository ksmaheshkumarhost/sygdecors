<div class="head">
    	<div class="logo">
        <a href="index.php"><img src="images/logo.jpg" border="0" class="logo" /></a>
       </div>
    	<div class="contact">
        	<li><img src="images/temp_06.gif" /> <font>+91 9025 666 888</font></li>
            <li><a href="mailto:info@synergydecor.co.in"><img src="images/temp_08.gif" /><font>info@synergydecor.co.in</font></a></li>
        </div>
    </div>
    
 
    
    	<div class="white">  
<ul id="mega-menu-9" class="mega-menu">
	<li><a <?php if($menu=="home"){ echo "class='active'"; } ?> href="index.php">Home</a></li>
	<li><a <?php if($menu=="about"){ echo "class='active'"; } ?> href="about.php">About Us</a></li>
	
	<li><a <?php if($menu=="gallery"){ echo "class='active'"; } ?> href="#">Gallery</a>
	<ul>
	<li><a href="modular_kitchens_gallery.php">Modular Kitchens</a></li>
	<li><a href="pooja_units_gallery.php">Pooja Units</a></li>
    <li><a href="tv_miscelleneous.php">TV Miscelleneous</a></li>
    <li><a href="false_ceiling.php">False Ceiling</a></li>
	<li><a href="renovation_works_gallery.php">Renovation Works</a></li>
	<li><a href="wardrobe_gallery.php">Wardrobe</a></li>
	<li><a href="commercial_gallery.php">Commercial</a></li>
	
	

    </ul>
   </li>
	<li><a <?php if($menu=="service"){ echo "class='active'"; } ?> href="#">Services</a>
	<ul>
		<li><a href="services.php#home">Home</a>
	</li>
	<li><a href="services.php#office">Office</a>
	</li>
		<li><a href="services.php#modular kitchens">Modular Kitchens</a>
	</li>
	</ul>
	</li>
<li><a <?php if($menu=="modular_kitchens"){ echo "class='active'"; } ?> href="modular_kitchens.php">Modular Kitchens</a></li>
<li><a <?php if($menu=="knowledge"){ echo "class='active'"; } ?> href="knowledge_corner.php">Knowledge Corner</a></li>
<li><a <?php if($menu=="contact"){ echo "class='active'"; } ?> href="contact.php">Contact us</a></li>
</ul>
</div>

</div>
   <?php if(isset($banner)){ ?> 
    <div class="banner">
    	<div id="header"><div class="wrap">
   <div id="slide-holder">
<div id="slide-runner">
    <a href=""><img id="slide-img-1" src="images/nature-photo.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-2" src="images/nature-photo1.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-3" src="images/nature-photo2.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-4" src="images/nature-photo3.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-5" src="images/nature-photo4.png" class="slide" alt="" /></a>
    <a href=""><img id="slide-img-6" src="images/nature-photo5.png" class="slide" alt="" /></a>
	<a href=""><img id="slide-img-7" src="images/nature-photo6.png" class="slide" alt="" /></a> 
    <div id="slide-controls">
     <p id="slide-client" class="text"><strong>post: </strong><span></span></p>
     <p id="slide-desc" class="text"></p>
     <p id="slide-nav"></p>
    </div>
</div>
	
	<!--content featured gallery here -->
   </div>
   <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-5","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-6","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-7","client":"nature beauty","desc":"add your description here"}];
   </script>
  </div></div>
    </div>
    <?php } ?>