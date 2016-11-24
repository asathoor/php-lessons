<?php
/*
file: cookie.php
will: set a coikie
by: Per Thykjaer Jensen
license: GPLv3
*/
echo "<p>Cookie.php is included</p>";

// let's set a cookie
$kage =	setcookie("petjTestCookie", $_POST['firstName'], time() +( 60*60*24*365), "/" );

/*
Doyle:276

"Notice that the expires argument uses a PHP function called time() . This returns the current time in UNIX timestamp format. So the expiry time is 60 * 60 * 24 * 365 seconds after the current time, or one year into the future. The cookie will remain until that time, even if the browser is closed and reopened, unless the user chooses to delete it manually. The remaining arguments set a path of “/” (so the cookie will be returned to any URL within the Web site), a domain of “.example.com” (so that the cookie is sent to any server within the domain example.com ), no secure flag (so that the cookie can be sent over standard HTTP connections), and the HttpOnly flag (so that JavaScript can ’ t read the cookie)."

IMPORTANT

You cannot set a cookie unless you have write permissions in the folder.
In a terminal set the properties to the folder like this:

chmod 777 yourDirectory

Or rightclick and give permission to read-write-execute

*/

?>
