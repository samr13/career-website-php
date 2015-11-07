<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php

	include "connectdb.php";	
	$type = trim($_REQUEST["type"]);
	$cname = trim($_REQUEST["name"]);
	$url = trim($_REQUEST["url"]);

	
	
	
if(strcmp($type,'')!=0 && strcmp($cname,'')!=0 &&strcmp($url,'')!=0)
	{
	
	$sql_in="select * from id where type='$type'";
	$sql_re=mysql_query($sql_in, $con);
	$row = mysql_fetch_array($sql_re);
	$collid=$row['type'].$row['num'];
	$sql_up="update id set num=num+1 where type='$type'";
	mysql_query($sql_up, $con);
	$sql_ins="insert into college values('$collid','$cname','$url','$type')";
	mysql_query($sql_ins, $con);
	header("Location:insertcoll.php");
	
		
 }
 else
 echo"Error in insertion";
 
 mysql_close($con);
?>