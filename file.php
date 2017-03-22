<?php
/*
purpose: Prepare for mini-cms creation
file: file.php
what: open, read, write to  files
by: Per Thykjaer Jensen
license: GPLv3
*/
?>

<h1>Files: open, read, write.<h1>

<p>
  <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);
  ?>
</p>

<h2>  Write to a file </h2>

<?php
  $myfile = fopen("anyfile.txt", "w") or die("Unable to open file!");
  $txt = "John Deer\n";
  fwrite($myfile, $txt);
  $txt = "Jane Deer\n";
  fwrite($myfile, $txt);
  fclose($myfile);
?>

<h3> Overwrite </h3>

<?php
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "Mickey Mouse\n";
  fwrite($myfile, $txt);
  $txt = "Minnie Mouse\n";
  fwrite($myfile, $txt);
  fclose($myfile);
?>

<h2> Workshop: mini cms </h2>

<ol>
  <li> Create a form </li>
  <li> Let the user enter some password </li>
  <li> Use an if( sentence to determine that the sentence is correct </li>
  <li> Create a $_SESSION and save the state as loggedin </li>
  <li> Load the content of a file in an input form element </li>
  <li> Overwrite the content of the file when the form is submitted </li>
</ol>

<p> It's a bit primitive, but you've got a working content management system ... </p>

<h3> Security </h3>

<p> When your login works, try to hide the password via MD5.</p>
