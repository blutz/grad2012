<!DOCTYPE html>
<head>
	<title>Daily Bruin | Graduation 2012 | <?php echo $validPages[$currentPage]; ?></title>
	<link rel="stylesheet" href="include/css/base.css" type="text/css" />
	<link rel="stylesheet" href="include/css/style.css" type="text/css" />
	<link rel="stylesheet" href="include/css/responsive.css" type="text/css" />

	<script type="text/javascript" src="include/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="include/js/scripts.js"></script>
	
	<?php if($currentPage == 'endangered-languages') { ?>
	<script type="text/javascript" src="include/js/buzz.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		var bambara = new buzz.sound("content/endangered-languages/bambara", {
    		formats: [ "mp3", "wav" ]
		});
		var senaya = new buzz.sound("content/endangered-languages/senaya", {
    		formats: [ "mp3", "wav" ]
		});
		var tommoso = new buzz.sound("content/endangered-languages/tommo-so", {
    		formats: [ "mp3", "wav" ]
		});
		var urdu = new buzz.sound("content/endangered-languages/urdu", {
    		formats: [ "mp3", "wav" ]
		});
		
		$('#playBambara').click(function(){bambara.play();});
		$('#playSenaya').click(function(){senaya.play();});
		$('#playTommoso').click(function(){tommoso.play();});
		$('#playUrdu').click(function(){urdu.play();});
		
		fixNavBar();

	});
	</script>
	<?php } ?>
	
	<?php if($currentPage == 'summer-sports') { ?>
	<link rel="stylesheet" href="include/css/thickbox.css" type="text/css" media="screen" />
	<script type="text/javascript">
	$(document).ready(function(){
		placeMapDots();
		$(window).resize(placeMapDots);
	});
	</script>
	<script type="text/javascript" src="include/js/thickbox-compressed.js"></script>
	<?php } ?>
	
	<?php if($currentPage == 'then-and-now' || $currentPage == 'day-in-the-life') { ?>
	<!-- Gallery scripts -->
	<script type="text/javascript" src="include/js/galleria-1.2.7.min.js"></script>
	<script type="text/javascript" src="include/js/galleria.history.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				loadGallery();
		});
	</script>
	<?php } ?>
	
	<!-- Everything needed for scroll scripts -->
	<link type="text/css" href="include/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<script type="text/javascript" src="include/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="include/js/jquery.jscrollpane.min.js"></script>


	<!--[if lt IE 9]>
		<script src="include/js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
<ul class="dropdownList">
	<?php 
		foreach($validPages as $page => $title) {?>
		<li<?php 
			echo " id='nav-item-".$page."-2'";
			if($page == $currentPage) echo " class='selected'";
		?>><a href="<?php echo $page; ?>"><?php echo $title; ?></a></li>
	<?php } ?>
</ul>


<nav>
	<div id="logos">
		<a id="dbLink" href="http://dailybruin.com/">Daily Bruin</a>
		<span id="graduationLink">Graduation 2012</span>
	</div> <!-- end div logos -->	
	<a id="moreDropdown">More <div class="downarrow"></div></a>

	<ul class="mainNav">
		<?php 
			foreach($validPages as $page => $title) {?>
			<li<?php 
				if($page == $currentPage) echo " id='selectedList'";
				echo " class='nav-item-".$page."'";
			?>><a href="<?php echo $page; ?>"><?php echo $title; ?></a></li>
		<?php } ?>
	</ul>
	
</nav>

<div id="content">
