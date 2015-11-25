<html>
	<head>
		<title>Chap.8 - Loops</title>
	</head>
<body>
	<h1>for loops: display even numbers</h1>
	<?php 
		$myArray = array(1,2,3,4,5,6,7,8,9,10);
		$total = count($myArray);
	?>
	<h2>Use the even numbers</h2>
	<ul>
		<?php 
			$i = 0;
			for ($i=1; $i < $total; $i = $i += 2) { ?>
				<li>The array element is: <?php echo $myArray[$i]; ?></li>
		<?php } ?>
	</ul>
	
	
	
	
	
	
	
	
</body>