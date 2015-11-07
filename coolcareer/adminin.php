<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php

	include "connectdb.php";
	
//	$sub_user = trim($_REQUEST["user"]);
	$sub_pass = trim($_REQUEST["pass"]);
	
	$sql_qry = "select password from register where username = \"admin\" ";
	
	$result = mysql_query($sql_qry, $con) or die("Mysql query failed" . mysql_error());
	
	$row = mysql_fetch_array($result);
	
	if(strcmp(MD5($sub_pass), $row['password']) == 0 && strcmp($sub_pass,'') != 0 && strcmp($sub_pass,'') != 0)
	{
		$hour = time() + 3600;
		setcookie( "aduser", "admin", $hour );
		setcookie( "adpass", $sub_pass, $hour );
		header("Location: adminhome.php");
	}
	else
	{	
	
			echo "We dont like Hackers!!!";
	}
	
	mysql_close($con);

?>