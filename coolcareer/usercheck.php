<?php
		include "connectdb.php";
		$pass=$_COOKIE["locpass"];
	$user=$_COOKIE["locuser"];
	if(isset($_COOKIE["locuser"]))
		{
	$result = mysql_query("select * from register where username = '$user'", $con) or die("Mysql query failed" . mysql_error());
		$row = mysql_fetch_array($result);
		if(strcmp(MD5($pass),$row['password'])==0)
			echo "Welcome ".$row['firstname'].",";
		}
?>