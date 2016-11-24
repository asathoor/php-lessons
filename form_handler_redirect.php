<?php
/*
    Inspired by Doyle "Beginning PHP" (2010) p. 265.
    In the same directory create a thanks.html file.
*/

if ( isset( $_POST["submitButton"] ) ) {
  // (deal with the submitted fields here)

  header( "Location: thanks.php" );

  // what's inside $_POST?
  print_r($_POST);

  // cookies
  include_once "cookie.php";

  exit;

} else {
  displayForm();
}

function displayForm() {
  // you could echo or print the lines
  // but this is more easy.
  // PS: updated to HTML5
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Membership Form</title>
    <link rel="stylesheet" type="text/css" href="common.css">
  </head>
  <body>

  <h1>Membership Form</h1>

  <form action="form_handler_redirect.php" method="post">
    <div style="width: 30em;">
      <label for="firstName">First name</label>
      <input type="text" name="firstName" id="firstName" value=""><br>
      <label for="lastName">Last name</label>
      <input type="text" name="lastName" id="lastName" value="">
      <div style="clear: both;">
        <input type="submit" name="submitButton" id="submitButton" value="Send Details" />
      </div>
    </div>
  </form>

  </body>
  </html>
<?php
} // ends the function displayForm()
?>
