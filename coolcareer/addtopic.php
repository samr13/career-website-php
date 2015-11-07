<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php

	include "connectdb.php";
	//getting topic details
	$sub_topic = trim($_REQUEST["topicname"]);
	$sub_name = trim($_REQUEST["message"]);
	//getting first name
	$user=$_COOKIE["locuser"];
	$t=localtime();
	$hour=$t[2].":".$t[1].":".$t[0];
	$sql_inst="insert into forum values(CURRENT_TIMESTAMP,'$sub_topic','$user',0,'$hour')";
		if(mysql_query($sql_inst, $con))
	{
	if($sub_name)
	{
	$sql_qry1 = "select * from forum where lastpost = '$hour'";
	$result = mysql_query($sql_qry1, $con) or die("Mysql query failed" . mysql_error());
	$row = mysql_fetch_array($result);
	$tm=$row['topicid'];
	$date=date("Y-m-d");
		$sql_insert="insert into post values('$tm','$sub_topic','$sub_name','$user','$hour','$date')";
		mysql_query($sql_insert,$con);
		$sql_upd="update forum set numofpost=numofpost+1 where topicid='$tm'";
		mysql_query($sql_upd,$con);
				
	}
		header("Location:forum.php");
	}
	else
	echo "Error1";
		mysql_close($con);

	
	?>