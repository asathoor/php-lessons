<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

<p>
	Somewhere you need this value, so <?php echo " favcolor: " , $_SESSION["favcolor"]; ?>

</p>

<h2> The session object </h2>

<pre>
	<?php print_r( $_SESSION ); ?>
</pre>

</body>
</html>
