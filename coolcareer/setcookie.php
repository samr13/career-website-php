<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php

$course=trim($_REQUEST['clist']);
	$hour = time() + 3600;
		setcookie("course", $course, $hour );
		header("Location:courses.php");

?>
