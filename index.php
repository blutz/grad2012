<?php
$validPages = array(
	'home',
	'graduation-columns',
	'ae-profiles',
	'day-in-the-life',
	'then-and-now',
	'map-of-memories',
	'summer-sports',
	'endangered-languages',
);

if(isset($_GET['p']) && in_array($_GET['p'],$validPages)){
	$currentPage = $_GET['p'];
}
else
	$currentPage = 'home';

if(!file_exists('pages/'.$currentPage.'.php')) {
	header("HTTP/1.0 404 Not Found");
	header('Location: /grad2012');
	$currentPage = 'home';
}

include('pages/'.$currentPage.'.php');
?>