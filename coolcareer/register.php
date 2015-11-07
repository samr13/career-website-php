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
	$sub_first = trim($_REQUEST["firstname"]);
	$sub_second = trim($_REQUEST["secondname"]);
	$sub_date = trim($_REQUEST["date"]);
	$sub_month = trim($_REQUEST["month"]);
	$sub_year = trim($_REQUEST["year"]);
	$sub_quali = trim($_REQUEST["qualifi"]);
	
	
	
if(strcmp($sub_user,'')!=0 && strcmp($sub_pass,'')!=0 &&strcmp($sub_first,'')!=0 && strcmp($sub_quali,'')!=0 )
	{
	$sql_in="insert into register values('$sub_user',MD5('$sub_pass'),'$sub_first','$sub_second','$sub_year-$sub_month-$sub_date','$sub_quali')";
	if(mysql_query($sql_in, $con))
	{
	$hour = time() + 3600;
		setcookie( "locuser", $sub_user, $hour );
		setcookie( "locpass", $sub_pass, $hour );
	header("Location: sucessreg.php");
	}
	else  
	header("Location: errorreg.php");
		
 }
 else
 Header("Location:errorreg.php");
 
 mysql_close($con);
?>