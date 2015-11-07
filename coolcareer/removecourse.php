<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php
	$id=trim($_REQUEST['ok']);
	$course=trim($_REQUEST['ok1']);
	include "connectdb.php";
	$sql="delete from coursereq where collegeid='$id' and course='$course'";
	mysql_query($sql, $con);
 header("Location:viewreq1.php");
 ?>