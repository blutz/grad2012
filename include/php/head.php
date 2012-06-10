<!DOCTYPE html>
<head>
	<title>Daily Bruin | Graduation 2012 | <?php echo $validPages[$currentPage]; ?></title>
	<link rel="stylesheet" href="include/css/base.css" type="text/css" />
	<link rel="stylesheet" href="include/css/style.css" type="text/css" />
	<link rel="stylesheet" href="include/css/responsive.css" type="text/css" />



	<script type="text/javascript" src="include/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="include/js/scripts.js"></script>


	<!--[if lt IE 9]>
		<script src="include/js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>

<nav>
	<div id="logos">
		<a id="dbLink" href="http://dailybruin.com/">Daily Bruin</a>
		<span id="graduationLink">Graduation 2012</span>
	</div> <!-- end div logos -->	
	<ul class="mainNav">
		<?php foreach($validPages as $page => $title) {?>
			<li<?php if($page == $currentPage) echo " class='selected'"; ?>><a href="<?php echo $page; ?>"><?php echo $title; ?></a></li>
		<?php }?>
	
	</ul>
</nav>

<div id="content">
