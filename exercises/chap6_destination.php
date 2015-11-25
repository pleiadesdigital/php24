<?php

?>



<!-- <p>This is where the GET functions brings you!</p> -->
<p>Username: <?php //echo $_GET["username"]; ?></p>
<p>Password: <?php //echo $_GET["password"]; ?></p>

<h3>$_POST method results:</h3>
<p>You entered <?php echo filter_var($_POST["username"], FILTER_SANITIZE_STRING); ?> as the User Name and <?php echo filter_var($_POST["password"], FILTER_SANITIZE_STRING); ?> as the Password.</p>