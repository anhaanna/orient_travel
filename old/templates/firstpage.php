<div id="top-content">

	<?php include 'social.php'; ?> 

	<div class="container">

		<div id="content-img">
<!-- 
			<video  id="myVideo" autoplay  poster="assets/images/des.jpg" >
			  <source src="<?php echo $url ?>/assets/video/anapat.mp4">
			</video>
 -->
			<div id='desert'><iframe src="/assets/virap/virap.html"></iframe></div>
			<div class='corners'></div>
		</div>

		<div id="content-text">
			<h1> <?php echo $lang['top_h1']; ?> </h1>
			<h2> <?php echo $lang['top_h2']; ?> </h2>
		</div>

	</div>
</div>


<div id="middle-content">

	<div class="container">

		<div id="boxes">
			<div class="box box1">
				<h2><span class="icon"></span><?php echo $lang['box1_h2']; ?></h2>
				<p id="wave">〰〰〰〰〰〰〰</p>			
				<p><?php echo $lang['box1_p']; ?></p>
			</div>
			<div class="box box2">
				<h2><span class="icon"></span><?php echo $lang['box2_h2']; ?></h2>
				<p id="wave">〰〰〰〰〰〰〰</p>			
				<p><?php echo $lang['box2_p']; ?></p>
			</div>
			<div class="box box3">
				<h2><span class="icon"></span><?php echo $lang['box3_h2']; ?></h2>
				<p id="wave">〰〰〰〰〰〰〰</p>			
				<p><?php echo $lang['box3_p']; ?></p>
			</div>
		</div>

		<div id="enquire">
			<a id="enquire-a" role="button"><?php echo $lang['enquire_now']; ?></a>
		</div>

		<div id="popup">
			<img id="star" src="/assets/images/ornament.png">
			<h1 id="step-1"><?php echo $lang['popup_h1']; ?></h1>
			<p id="step-2"><?php echo $lang['popup_p']; ?></p>
		</div>

	</div>


	<!-- Include Modal FORM -->
	 <?php include 'modal/modal.php'; ?> 

<!-- dest -->
	<div id="destinations">
		<h1><?php echo $lang['destinations_upp']; ?></h1>

		<div id="slider-container">
			<div class="slider">

<?php 
// if ($_SESSION['lang'] == 'en') {}

	$cntrs = array('armenia', 'georgia', 'iran', 'tajikistan', 'turkmenistan', 'kazakhstan', 'mongolia', 'uzbekistan', 'kyrgyzstan');
	$translateCNTRS = function($_cntr){

		if ($_SESSION['lang'] == 'en') {
			return strtoupper($_cntr) ;
		} 

		elseif ($_SESSION['lang'] == 'fr') {
			
			switch ($_cntr) {
			case "armenia":	return "ARMENIE";
			    break;
			case "georgia":	return "GEORGIE";
			    break;
			case "iran":	return "IRAN";
			    break;
			case "kazakhstan":	return "KAZAKHSTAN";
			    break;
			case "turkmenistan":	return "TURKMENISTAN";
			    break;
			case "uzbekistan":	return "OUZBEKISTAN";
			    break;
			case "tajikistan":	return "TADJIKISTAN";
			    break;
			case "mongolia":	return "MONGOLIE";
			    break;
			case "kyrgyzstan":	return "KIRGHIZISTAN";
			    break;
			default:		return "ARMENIE";
			}
		}

		elseif ($_SESSION['lang'] == 'de') {
			
			switch ($_cntr) {
			case "armenia":	return "ARMENIEN";
			    break;
			case "georgia":	return "GEORGIEN";
			    break;
			case "iran":	return "IRAN";
			    break;
			case "kazakhstan":	return "KASACHSTAN";
			    break;
			case "turkmenistan":	return "TURKMENISTAN";
			    break;
			case "mongolia":	return "MONGOLEI";
			    break;
			case "uzbekistan":	return "USBEKISTAN";
			    break;
			case "tajikistan":	return "TADSCHIKISTAN";
			    break;
			case "kyrgyzstan":	return "KIRGISISTAN";
			    break;
			default:		return "ARMENIEN";
			}
		}
	};

	foreach ($cntrs as $cntr) { 
		echo '<span> <a class="dest-a"
			href="'; setDest($cntr); 
		echo'"target="_self">
		<img src="/assets/images/'.ucfirst($cntr).'/'.$cntr.'.jpg"> 
		<div class="corner-dest"></div>
		<p class="dest-name">'.strtoupper($translateCNTRS($cntr)).'</p></a></span>';} 
	?>

			</div>
		</div>

	</div>
<!-- end dest -->

	<div class="container">

		<div id="trip">
			<h1><?php echo $lang['trip_h1']; ?></h1>
			<h2><?php echo $lang['trip_h2']; ?></h2>
			<div id="trip-boxes">

				<div class="trip-box" id="trip-box1">
					<p><span class="icon"></span></p>				   		
					<p><?php echo $lang['trip-box1_p']; ?></p>
				</div>
				<div class="trip-box" id="trip-box2">
					<p><span class="icon"></span></p>			
					<p><?php echo $lang['trip-box2_p']; ?></p>
				</div>
				<div class="trip-box" id="trip-box3">
					<p><span class="icon"></span></p>			
					<p><?php echo $lang['trip-box3_p']; ?></p>
				</div>
				<div class="trip-box" id="trip-box4">
					<p><span class="icon"></span></p>		
					<p><?php echo $lang['trip-box4_p']; ?></p>
				</div>
			</div>
		</div>


		<div id="contact">
			<div id="help">
				<h1><?php echo $lang['help_h1']; ?></h1>
				<div id="contact-boxes">

				<div class="contact-box" id="contact-box1">
					<p><span class="icon"></span></p>
					<p id="wave">〰〰〰〰〰</p>				   		
					<p><?php echo $lang['contact-box1_p']; ?></p>
				</div>
				<div class="contact-box" id="contact-box2">
					<p><span class="icon"></span></p>	
					<p id="wave">〰〰〰〰〰</p>		
	 				<p><?php echo $lang['contact-box2_p']; ?></p>
				</div>
				<div class="contact-box" id="contact-box3">
					<p><span class="icon"></span></p>	
					<p id="wave">〰〰〰〰〰</p>		
					<p><?php echo $lang['contact-box3_p']; ?></p>

				</div>
				
			</div>
			</div>
		</div>

	</div>		
</div>

