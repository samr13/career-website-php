<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php
include "connectdb.php";
$tn=$_GET['top'];
$sql_del = "delete from forum where topicid='$tn'";
mysql_query($sql_del,$con);
$sql_pdel="delete from post where topicid='$tn'";
mysql_query($sql_pdel,$con);
	header("Location:forum.php");
	

?>