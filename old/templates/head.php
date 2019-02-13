<?  //echo $_SERVER["PHP_SELF"] ."<br>"; 			// /contacts.php
	//echo $_SERVER["SERVER_NAME"]  ."<br>"; 		// orient.alptransfer.com
	//echo $_SERVER["REQUEST_URI"] ."<br>"; 		// /contacts.php

//include "content.php";

   $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  //$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>


<?php 

	$page = $_GET["dest"];
if ($_SESSION["lang"] == "en") {
	

	if ($page == "armenia") {
		$title = "Armenia | Orient Travel";
		$description = "Armenia";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "georgia") {
		$title = "Georgia | Orient Travel";
		$description = "Georgia";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "iran") {
		$title = "Iran | Orient Travel";
		$description = "Iran";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "tajikistan") {
		$title = "Tajikistan | Orient Travel";
		$description = "Tajikistan";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "turkmenistan") {
		$title = "Turkmenistan | Orient Travel";
		$description = "Turkmenistan";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "kazakhstan") {
		$title = "Kazakhstan | Orient Travel";
		$description = "Kazakhstan";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "china") {
		$title = "China | Orient Travel";
		$description = "China";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "uzbekistan") {
		$title = "Uzbekistan | Orient Travel";
		$description = "Uzbekistan";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "terms") {
		$title = "Terms & Conditions | Orient Travel";
		$description = "Terms & Conditions";
		$keywords = "bla, bla, bla";
	}
	else if ($page == "privacy_policy") {
		$title = "Privacy Policy | Orient Travel";
		$description = "Privacy Policy";
		$keywords = "bla, bla, bla";
	}	
	else{
		$title = "Orient Travel";
		$description = "Default description";
		$keywords = "bla, bla, bla";
	}

}


else if ($_SESSION["lang"] == "fr") {
	

	if ($page == "armenia") {
		$title = "FR-Armenia | Orient Travel";
		$description = "FR-Armenia";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "georgia") {
		$title = "FR-Georgia | Orient Travel";
		$description = "FR-Georgia";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "iran") {
		$title = "FR-Iran | Orient Travel";
		$description = "FR-Iran";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "tajikistan") {
		$title = "FR-Tajikistan | Orient Travel";
		$description = "FR-Tajikistan";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "turkmenistan") {
		$title = "FR-Turkmenistan | Orient Travel";
		$description = "FR-Turkmenistan";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "kazakhstan") {
		$title = "FR-Kazakhstan | Orient Travel";
		$description = "FR-Kazakhstan";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "china") {
		$title = "FR-China | Orient Travel";
		$description = "FR-China";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "uzbekistan") {
		$title = "FR-Uzbekistan | Orient Travel";
		$description = "FR-Uzbekistan";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "terms") {
		$title = "FR-Terms & Conditions | Orient Travel";
		$description = "FR-Terms & Conditions";
		$keywords = "FR-bla, bla, bla";
	}
	else if ($page == "privacy_policy") {
		$title = "FR-Privacy Policy | Orient Travel";
		$description = "FR-Privacy Policy";
		$keywords = "FR-bla, bla, bla";
	}	
	else{
		$title = "FR-Orient Travel";
		$description = "FR-Default description";
		$keywords = "FR-bla, bla, bla";
	}

}


else if ($_SESSION["lang"] == "de") {
	

	if ($page == "armenia") {
		$title = "DE-Armenia | Orient Travel";
		$description = "DE-Armenia";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "georgia") {
		$title = "DE-Georgia | Orient Travel";
		$description = "DE-Georgia";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "iran") {
		$title = "DE-Iran | Orient Travel";
		$description = "DE-Iran";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "tajikistan") {
		$title = "DE-Tajikistan | Orient Travel";
		$description = "DE-Tajikistan";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "turkmenistan") {
		$title = "DE-Turkmenistan | Orient Travel";
		$description = "DE-Turkmenistan";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "kazakhstan") {
		$title = "DE-Kazakhstan | Orient Travel";
		$description = "DE-Kazakhstan";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "china") {
		$title = "DE-China | Orient Travel";
		$description = "DE-China";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "uzbekistan") {
		$title = "DE-Uzbekistan | Orient Travel";
		$description = "DE-Uzbekistan";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "terms") {
		$title = "DE-Terms & Conditions | Orient Travel";
		$description = "DE-Terms & Conditions";
		$keywords = "DE-bla, bla, bla";
	}
	else if ($page == "privacy_policy") {
		$title = "DE-Privacy Policy | Orient Travel";
		$description = "DE-Privacy Policy";
		$keywords = "DE-bla, bla, bla";
	}	
	else{
		$title = "DE-Orient Travel";
		$description = "DE-Default description";
		$keywords = "DE-bla, bla, bla";
	}

}

?>

<!DOCTYPE html>
<html lang="<?php 
		if ($_GET["lang"] == "fr" ) {echo "fr"; }
		else if ($_GET["lang"] == "en" ) {echo "en"; }
		else if ($_GET["lang"] == "de" ) {echo "de"; }
		else {echo "en"; } ?>" >
	
	<head>
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="/assets/css/main.css">
		<link rel="stylesheet" href="/templates/modal/modal.css">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="description" content= "<?php echo $description ?>" />
		<meta name="keywords" content= "<?php echo $keywords ?>" />
		
</head>
<body>

