<?php

$host     = "localhost";
$username = "aplikasi";
$password = "123456";
$dbname   = "zadmin_lembur";

if (!mysql_connect($host, $username, $password))
{
	echo "Connection Failed!, Because : <b> " . mysql_error() . "</b>";
}
else
{
	if (!mysql_select_db($dbname))
	{
		echo "Failed select database, Because : <b> " . mysql_error() . "</b>";
	}
}
 ?>