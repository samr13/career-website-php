<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php

	include "connectdb.php";	
	$type = trim($_REQUEST["type"]);
	$cname = trim($_REQUEST["name"]);
	$url = trim($_REQUEST["url"]);

	
	
	
if(strcmp($type,'')!=0 && strcmp($cname,'')!=0 &&strcmp($url,'')!=0)
	{
	$sql_ins="insert into collegereq values('$_COOKIE[locuser]','$type','$cname','$url')";
	mysql_query($sql_ins, $con);
	header("Location:addcoll.php");
 }
 else
 echo"Error in insertion";
 
 mysql_close($con);
?>