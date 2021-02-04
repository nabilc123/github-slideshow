<?php
$dbhost = 'elephant.ecs.westminster.ac.uk';
$dbuser = 'w1552093';
$dbpass = 'T4diImbih0Cv';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) ;
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("w1552093_0", $conn);
?>
