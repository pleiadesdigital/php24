<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Smithside Auctions</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">

	<div id="header">
		<a href="index.html">
			<img src="images/banner.jpg"  alt="Smithside Auctions" />
		</a> 
	</div><!-- end header -->
	
	<div id="navigation">
		<h3 class="element-invisible">Menu</h3>
		<ul class="mainnav">
	    <li><a href="index.php?content=categories">Lot Categories</a></li>
	    <li><a href="index.php?content=about">About Us</a></li>
	    <li><a href="index.php?content=home">Home</a></li>
		</ul>
		<div class="clearfloat"></div>
	</div><!-- end navigation -->

	<div class="message">
	</div><!-- end message -->	
	
	<div class="sidebar">
		<?php 
			switch (isset($_GET['content'])) :
				case 'gents' :
				case 'sporting' :
				case 'women' :
				include 'content/catnav.php';
			endswitch;
		?>
	</div><!-- end sidebar -->
	
	<div class="content">
		<?php 
			$content = "";
			// get the content from the URL
			if (isset($_GET['content'])) {
				$content = filter_var($_GET['content']);
			}
			$content = (empty($content)) ? "home" : $content; // make "home" default value
			
			include 'content/' . $content . '.php';
			
			
		?>
	</div><!-- end content -->
	
	<div class="clearfloat"></div>
	
	<div id="footer">
		<p>&copy; 2011 Smithside Auctions</p>
	</div><!-- end footer -->

</div><!-- end container -->
</body>
</html>
