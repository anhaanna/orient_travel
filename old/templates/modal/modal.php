<?php  $url = 'http://'.$_SERVER['HTTP_HOST'];?>
<div id='modal' >
	<div id="modal-container">
		<img id="star_modal" src="<?php echo $url ?>/assets/images/ornament.png">
		<div id="modal-form">
 		<h1><?php echo $lang['send_request']; ?></h1>

	  <div id="form-messages"></div>
		
		<form id="ajax-contact" method="post" action="templates/modal/mailer.php">


			<div id="your_preferences" class="field">

		    <div class="checkbox">		        
		        <input type="checkbox" value="Armenia" name="Armenia" id="Armenia">
		        <label for="Armenia"><?php echo $lang['armenia']; ?></label> 
		 	</div>

		    <div class="checkbox">	         
		        <input type="checkbox" value="Georgia" name="Georgia" id="Georgia">
		        <label for="Georgia"><?php echo $lang['georgia']; ?></label>
		 	</div>

		    <div class="checkbox">		         
		        <input type="checkbox" value="Iran" name="Iran" id="Iran">
		        <label for="Iran"><?php echo $lang['iran']; ?></label>
		 	</div>

		    <div class="checkbox">
		        <input type="checkbox" value="Kyrgyzstan" name="Kyrgyzstan" id="Kyrgyzstan">
		        <label for="Kyrgyzstan"><?php echo $lang['kyrgyzstan']; ?></label>
		 	</div>

		    <div class="checkbox"> 
		        <input type="checkbox" value="Mongolia" name="Mongolia" id="Mongolia">
		        <label for="Mongolia"><?php echo $lang['mongolia']; ?></label>
			</div>

		    <div class="checkbox"> 	        
		        <input type="checkbox" value="Tajikistan" name="Tajikistan" id="Tajikistan">
		        <label for="Tajikistan"><?php echo $lang['tajikistan']; ?></label> 
		 	</div>

		    <div class="checkbox">	         
		        <input type="checkbox" value="Turkmenistan" name="Turkmenistan" id="Turkmenistan">
		        <label for="Turkmenistan"><?php echo $lang['turkmenistan']; ?></label>
		 	</div>

		    <div class="checkbox">		         
		        <input type="checkbox" value="Kazakhstan" name="Kazakhstan" id="Kazakhstan">
		        <label for="Kazakhstan"><?php echo $lang['kazakhstan']; ?></label>
		 	</div>
		    
		    <div class="checkbox">		        
		        <input type="checkbox" value="Uzbekistan" name="Uzbekistan" id="Uzbekistan">
		        <label for="Uzbekistan"><?php echo $lang['uzbekistan']; ?></label> 
		 	</div>

		 </div>
			<div class="field">
				<input type="text" class="input" id="name" name="name" placeholder="Name" required>
				<span class="field-icon"><i class="fa fa-user"></i></span>
			</div>

			<div class="field">
				<input type="email" class="input" id="email" name="email" placeholder="Email" required>
			</div>

			<div class="field">
				<textarea id="message" class="input" name="message" placeholder="Message" required></textarea>
			</div>

			<div class="sendfield">
				<button id='send'>
				  <p><?php echo $lang['send']; ?></p>
				  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
				    <path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
				M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
				  </svg>
				</button>
			</div>
		</form>

		</div>
	</div>

</div>


