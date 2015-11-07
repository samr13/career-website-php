<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php
include "connectdb.php";	
	$type = trim($_REQUEST['type1']);
	$exam = trim($_REQUEST['exam']);
	$sub_date = trim($_REQUEST["date"]);
	$sub_month = trim($_REQUEST["month"]);
	$sub_year = trim($_REQUEST["year"]);	
if(strcmp($exam,'')!=0 && strcmp($type,'')!=0)
	{
	$sql_in="select * from id where type='exam'";
	$sql_re=mysql_query($sql_in, $con);
	$row = mysql_fetch_array($sql_re);
	$examid=$row['type'].$row['num'];
	$sql_up="update id set num=num+1 where type='exam'";
	mysql_query($sql_up, $con);
	$sql_ins="insert into exam values('$examid','$exam','$type','$sub_year-$sub_month-$sub_date')";
	mysql_query($sql_ins, $con);
	header("Location:addexam.php");
 }
 else
 echo"Error in insertion";
 
 mysql_close($con);


?>