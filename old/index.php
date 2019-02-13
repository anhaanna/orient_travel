
<?php 	

	require "config.php";

	require 'templates/head.php';

	require 'templates/nav.php' ;


// echo '<h3 style="color:azure; text-align:center">';

// echo"test 456 <br><br>"; 

//     echo 'baseURL:      ' .$base_url .'<br><br>';

//     echo 'GET_Lang: ' .$_GET['lang'] .'<br><br>';
//     echo 'Session_Lang: ' .$_SESSION['lang'] .'<br><br>';

//     echo 'GET_Dest: ' .$_GET['dest'] .'<br><br>';
//     echo 'Session_Dest: ' .$_SESSION['dest'] .'<br><br>';

//     echo 'REQUEST_URI:  ' .$_SERVER['REQUEST_URI'] .'<br>';

//     echo 'PATH_INFO:  ' .$_SERVER['PATH_INFO'] .'<br>';

// echo '</h3>';


    if ($_SESSION['dest'] != '' && !empty($_GET['dest']) ) {
        include 'templates/'.$_GET['dest'].'.php';
    }else{
        include 'templates/firstpage.php';
    }


	require 'templates/footer.php'; 
	
?>
