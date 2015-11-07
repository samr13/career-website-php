<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<?php
$college1=trim($_REQUEST['colllist']);
	$hour = time() + 3600;
		setcookie("college", $college1, $hour );
		header("Location:ccdetails.php");

?>
