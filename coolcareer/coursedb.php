<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php
	include "connectdb.php";	
	$course = trim($_REQUEST['course1']);	
if(strcmp($course,'')!=0)
	{
	$sql_in="select * from id where type='crs'";
	$sql_re=mysql_query($sql_in, $con);
	$row = mysql_fetch_array($sql_re);
	$corseid=$row['type'].$row['num'];
	$sql_up="update id set num=num+1 where type='crs'";
	mysql_query($sql_up, $con);
	$sql_ins="insert into course values('$corseid','$course')";
	mysql_query($sql_ins, $con);
	header("Location:insertcourse.php");
 }
 else
 echo"Error in insertion";
 
 mysql_close($con);
?>