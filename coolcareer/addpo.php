<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php
$tn=$_GET['top'];
	include "connectdb.php";
	//getting topic details
	$subject = trim($_REQUEST["subject"]);
	$msg = trim($_REQUEST["message"]);
	//getting first name
	$user=$_COOKIE["locuser"];
	$t=localtime();
	$hour=$t[2].":".$t[1].":".$t[0];
	$date=date("Y-m-d");
	$sql_inst="insert into post values('$tn','$subject','$msg','$user','$hour','$date')";
		if(mysql_query($sql_inst, $con))
	{
		$sql_upd="update forum set numofpost=numofpost+1 where topicid='$tn'";
		mysql_query($sql_upd,$con);
		$sql_upd="update forum set lastpost='$hour' where topicid='$tn'";
		mysql_query($sql_upd,$con);
		header("Location:showpost.php?top=$tn");
	}
	else
	echo "Error1";
		mysql_close($con);

	
	?>