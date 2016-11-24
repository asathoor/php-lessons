<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Membership Form</title>
    <link rel="stylesheet" type="text/css" href="common.css">
  </head>
<body>

  <h1>File: thanx.php</h1>

  <h2>What's in the Cookie Jar Today?</h2>
 
  <?php
    // Do we have a cookie?
    $cookie_name = "petjTestCookie";

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

  <h2>Cookies - the array</h2>
  <pre>
  <?php print_r($_COOKIE); ?>
  </pre>

  </body>
</html>
