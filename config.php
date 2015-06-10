<?php

$hostname = "";
$username = "";
$password_db = "";
$link = mysql_connect($hostname, $username, $password_db) or die(mysql_error());

mysql_set_charset('utf8', $link);
mysql_select_db("myschool") or die(mysql_error());