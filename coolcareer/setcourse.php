<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php
$course1=trim($_REQUEST['type1']);
	$hour = time() + 3600;
		setcookie("type", $course1, $hour );
		header("Location:exam.php");

?>
