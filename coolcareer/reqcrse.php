<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php

	include "connectdb.php";	
	$cname = trim($_REQUEST["college"]);
	$course = trim($_REQUEST["name"]);

	
	
	
if(strcmp($cname,'')!=0 && strcmp($course,'')!=0)
	{
	
	$sql_ins="insert into coursereq values('$_COOKIE[locuser]','$cname','$course')";
	mysql_query($sql_ins, $con);
	header("Location:addcourse.php");
 }
 else
 echo"Error in insertion";
 
 mysql_close($con);
?>