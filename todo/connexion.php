<?php

/* Database config */

$db_host		= 'localhost';
$db_user		= 'nicolasr';
$db_pass		= 'gbAf8AppozMK8C';
$db_database	= 'nicolasr'; 

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_set_charset('utf8');
mysql_select_db($db_database,$link);

?>
