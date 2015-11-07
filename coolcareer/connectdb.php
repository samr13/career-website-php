<?php  
	$con = mysql_connect("localhost", "root", "");
	if(!$con)
	{
		die("Could not connect to the database" . mysql_error());
	}
	mysql_select_db("main", $con);
	
?>