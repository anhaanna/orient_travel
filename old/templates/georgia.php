<?php  $url = 'http://'.$_SERVER['HTTP_HOST'];?>
<div id="top-content">

	<?php include 'social.php'; ?> 


	<!-- <div id="content-img">
		<img src="assets/images/Armenia/armenia.jpg">
		<div class='corners'></div>
	</div> -->
	


 <section id="slidecorner">
	<div  id="slideshow">
	   <div>
	     <img src="/assets/images/Armenia/armenia1.jpg">
	   </div>
   	   <div>
	     <img src="/assets/images/Armenia/armenia2.jpg">
	   </div>
   	   <div>
	     <img src="/assets/images/Armenia/armenia3.jpg">
	   </div>
	  
	</div>
	<div class="corners"></div>
  </section>


	<div id="content-text">
		<h1><?php echo $lang['georgia_headline'];?></h1>
	</div>
</div>

<div id="middle-content">
	
	
	<div id="about-country">
		<img id="star-country" src="/assets/images/ornament.png">
		<h1><?php echo $lang['georgia_h1'];?></h1>
		<p> <?php echo $lang['georgia_about'];?></p>
	</div>

	<div id="enquire">
		<a id="enquire-a" role="button"><?php echo $lang['enquire_now'];?></a>
	</div>

	<!-- Include Modal FORM -->
	 <?php include 'modal/modal.php'; ?> 

</div>

