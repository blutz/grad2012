<?php
$validPages = array(
/* 	'home' => 'Home', */
	'map-of-memories' => 'Map of Memories',
	'summer-sports' => 'Summer Sports',
	'endangered-languages' => 'Endangered Languages',
	'day-in-the-life' => 'Day in the Life',
	'then-and-now' => 'Then and Now',
/* 	'ae-profiles' => 'a&e Profiles',	 */
/* 	'graduation-columns' => 'Graduation Columns', */
);

if(isset($_GET['p']) && array_key_exists($_GET['p'],$validPages)){
	$currentPage = $_GET['p'];
}
else
	$currentPage = 'home';

// Temp fix for pages not being done
if($currentPage == 'home')
	$currentPage = 'summer-sports';

if(!file_exists('pages/'.$currentPage.'.php')) {
	header("HTTP/1.0 404 Not Found");
	header('Location: http://dailybruin.com');
}

include('include/php/head.php');

include('pages/'.$currentPage.'.php');

include('include/php/foot.php');
?>