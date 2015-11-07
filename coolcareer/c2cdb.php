<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php
	include "connectdb.php";	
	$collid = trim($_REQUEST["coll1"]);
	$courseid = trim($_REQUEST["course1"]);
if(strcmp($collid,'')!=0 && strcmp($courseid,'')!=0)
	{
	
	$sql_ins="insert into c2c values('$collid','$courseid')";
	if(mysql_query($sql_ins, $con))
	header("Location:addc2c.php");
	else
	echo "Error";
		
 }
 else
 echo"Error in insertion";
 
 mysql_close($con);
?>