<?php
$validPages = array(
	'home' => 'Home',
	'graduation-columns' => 'Graduation Columns',
	'ae-profiles' => 'a&e Profiles',
	'day-in-the-life' => 'Day in the Life',
	'then-and-now' => 'Then and Now',
	'map-of-memories' => 'Map of Memories',
	'summer-sports' => 'Summer Sports',
	'endangered-languages' => 'Endangered Languages',
);

if(isset($_GET['p']) && array_key_exists($_GET['p'],$validPages)){
	$currentPage = $_GET['p'];
}
else
	$currentPage = 'home';

if(!file_exists('pages/'.$currentPage.'.php')) {
	header("HTTP/1.0 404 Not Found");
	header('Location: http://dailybruin.com');
}

include('include/head.php');

include('pages/'.$currentPage.'.php');
?>