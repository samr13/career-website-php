<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php
	$name=trim($_REQUEST['ok']);
	include "connectdb.php";
	$sql="delete from collegereq where name='$name'";
	mysql_query($sql, $con);
 header("Location:viewreq.php");
 ?>