<?php 
	session_start();

//dst session

	$destinations = array('', 'armenia', 'georgia', 'iran', 'tajikistan', 'turkmenistan', 'kazakhstan', 'mongolia', 'uzbekistan', 'kyrgyzstan', 'terms', 'privacy_policy');

	if ( !isset($_SESSION['dest']) or empty($_SESSION['dest']) ) {
		$_SESSION['dest']="";
	}

	else if (isset($_GET['dest']) && $_SESSION['dest'] != $_GET['dest'] && !empty($_GET['dest'])) {

		foreach ($destinations as $destination) {
			if ($_GET['dest'] == $destination) {
				$_SESSION['dest'] = $destination;
			}
		}
	}

//lng session
	$languages = array('en', 'fr', 'de');

	if (!isset($_SESSION['lang']) or empty($_SESSION['lang']) ) {
		$_SESSION['lang']="en";
	}
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {

		foreach ($languages as $language) {
			if ($_GET['lang'] == $language) {
				$_SESSION['lang'] = $language;
			}
		}
	}

	require "languages/". $_SESSION['lang'] . ".php";

	//ROUTS

function setDest( $dest ) {

	if ($dest =='') {
		echo '/'.$_SESSION['lang']."/" ;
	}else{
		echo ('/'.$_SESSION['lang']."/".$dest);
	}
	
	 $_SESSION['dest'] = $_GET['dest'];
	
}
	
function setLang( $lang ) {

	if ( $_SESSION['dest'] =='') {
		echo "/".$lang ."/";
	}else{
		echo "/".$lang."/".$_SESSION['dest'] ;
		$_SESSION['lang']= $_GET['lang'] ;
	}

}	

/*
The following function will strip the script name from URL
i.e.  http://www.something.com/search/book/fitzgerald will become /search/book/fitzgerald
*/

/*
function getCurrentUri()
{
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
    $uri = '/' . trim($uri, '/');
    return $uri;
}

$base_url = getCurrentUri();
$routes = array();
$routes = explode('/', $base_url);
foreach($routes as $route)
{
    if(trim($route) != '')
        array_push($routes, $route);
}
*/


/*
Now, $routes will contain all the routes. $routes[0] will correspond to first route.
For e.g. in above example $routes[0] is search, $routes[1] is book and $routes[2] is fitzgerald
*/

// if($routes[0] == “search”)
// {
//     if($routes[1] == “book”)
//     {
//         searchBooksBy($routes[2]);
//     }
// }

/*
	$country = $_GET['country'];

	$country_array = array("armenia", "georgia", "iran", "kyrgyzstan", "mongolia", "tajikistan", "turkmenistan", "kazakhstan", "uzbekistan");
	$choosen = false;

	if(in_array($country, $country_array)) $choosen = true;
	if (!$choosen) {
		require 'templates/firstpage.php' ;
	}

    foreach ($country_array as $erkir){
        if ($country == $erkir) {
        	include 'templates/'. $erkir .'.php';
        }
    }
*/



?>

