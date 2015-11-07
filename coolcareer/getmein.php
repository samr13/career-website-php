<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php

	include "connectdb.php";
	
	$sub_user = trim($_REQUEST["user"]);
	$sub_pass = trim($_REQUEST["pass"]);
	
	$sql_qry = "select password from register where username = '$sub_user'";
	
	$result = mysql_query($sql_qry, $con) or die("Mysql query failed" . mysql_error());
	
	$row = mysql_fetch_array($result);
	
	if(strcmp(MD5($sub_pass), $row['password']) == 0 && strcmp($sub_pass,'') != 0 && strcmp($sub_pass,'') != 0)
	{
		$hour = time() + 3600;
		setcookie( "locuser", $sub_user, $hour );
		setcookie( "locpass", $sub_pass, $hour );
		header("Location: index.php");
	}
	else
	{			header("Location: index.php");
			echo "Error";
	}
	
	mysql_close($con);

?>