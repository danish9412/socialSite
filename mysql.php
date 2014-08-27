<?php
$con = mysql_connect("localhost","root","toor");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("social", $con);
?>
