<?php 
	setcookie("username", "andy", time()+(60*60*24));
	setcookie("password", "12345", time()+(60*60*24));
	
	$employee1 = "Sally Meyers";
	$employee2 = "David Boby Horn";
	$employee3 = "Samantha Salas";
?>

<html>
	<head>
		<title>Chap.6 - Arrays 1</title>
	</head>
	<body>
		<h1>Chap.6 - Arrays 1</h1>
		<p><?php echo $employee1; ?></p>
		<p><?php echo $employee2; ?></p>
		<p><?php echo $employee3; ?></p>
		<br>
		<h2>Numeric Arrays</h2>
		<?php 
			$employee = array('Sally Meyers', 'David Boby Horn', 'Samantha Salas');
			echo $employee[2];
			echo "<br />"; 
			print_r($employee);
			echo "<br />";
			var_dump($employee);
		
		?>
		<h2>Associative Arrays</h2>
		<?php 
			$employee = array(
					'name' => 'Sally Meyers',
					'position' => 'President',
					'yearEmployed' => 2001,
			);
			var_dump($employee);
			echo "<br />";
			print_r($employee);
		
		?>
		<h2>Multidimensional Array</h2>
		<?php 
			$employees = array(
					array(
						'name' => 'Sally Meyers',
						'position' => 'President',
						'yearEmployed' => 2001,			
					),
					array(
							'name' => 'David Boby Horn',
							'position' => 'CFO',
							'yearEmployed' => 2004,
					),
					array(
							'name' => 'Samantha Salas',
							'position' => 'Secretary',
							'yearEmployed' => 2008,
					),
			);  
			echo "<h3>Using var_dump</h3>";
			var_dump($employees);
			echo "<br />";
			echo "<h3>Using print_r</h3>";
			echo "<pre>";
			print_r($employees);
			echo "</pre>";
			
		?>
			
		<h2>Logical Variables</h2>
		<?php 
			$myvar1 = TRUE;
			$myvar2 = FALSE;
			$myvar3 = NULL;
			echo "TRUE: " . $myvar1 . "<br />";
			echo "FALSE: " . $myvar2 . "<br />";
			echo "NULL: " . $myvar3 . "<br />";
		
		?>
		
		<h2>Working with Dates and Times</h2>
		<?php 
			echo "Timezone: " . date_default_timezone_get();
		?>
		
		<h3>Date and Time built-in functions</h3>
		<?php 
		
			echo "Function: time()= " . time() . "<br />";
			echo "Function: date('c')= " . date('c') . "<br />";
			echo "Function: date('m/d/Y')= " . date('m/d/Y') . "<br />";
			echo "Function: date('l, F n, Y')= " . date('l, F n, Y') . "<br />";
			echo "Function: date('h:i a')= " . date('h:i a') . "<br />";
			echo "Function: date('T')= " . date('T') . "<br />";
		?>
		
		<h3>Other Functions</h3>
		<h4>strtotime()</h4>
		<?php 
			echo "Function: strtotime('now')= " . time() . "<br />";
			echo "Function: date(‘l, F j, Y’, strtotime('now'))= " .  date('l, F j, Y', strtotime('now')) . "<br />";
		?>
		<h4>getdate()</h4>
		<?php 
			$unix_timestamp_sample = time('now');	
			var_dump(getdate($unix_timestamp_sample));
			print_r(getdate($unix_timestamp_sample));
		?>
		<hr />
		<h2>Working with Built-in Functions</h2>
		<h3>_GET</h3>
		
		<form action="chap6_destination.php" method="get">
			<label for="username">Username</label><br />
			<input type="text" id="username" name="username" /><br />
			<label for="password">Password</label><br />
			<input type="password" id="password" name="password" /><br /><br />
			<button type="submit">Submit</button>
			
		
		</form>
		
		<h3>_POST</h3>
		
		<form action="chap6_destination.php" method="post">
			<label for="username">Username</label><br />
			<input type="text" id="username" name="username" /><br />
			<label for="password">Password</label><br />
			<input type="password" id="password" name="password" /><br /><br />
			<button type="submit">Submit</button>			
		</form>
		
		<h3>COOKIES</h3>
		
		<p>You entered <?php echo $_COOKIE["username"]; ?> as the User Name and <?php echo $_COOKIE["password"]; ?> as the password.</p>
		
		<h3>Filter Sanitize forms: filter_var()</h3>
		
		<form action="chap6_destination.php" method="post">
			<label for="username">Username</label><br />
			<input type="text" id="username" name="username" /><br />
			<label for="password">Password</label><br />
			<input type="password" id="password" name="password" /><br /><br />
			<button type="submit">Submit</button>			
		</form>
	</body>
</html>



















