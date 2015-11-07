<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<html>
<head>
<title>
Admin home</title>
</head>
<body>
<H2> Click Below </H2>
<ul>
<li><a href="insertcoll.php">Insert College</a></li>
<li><a href="insertcourse.php">Insert Course</a></li>
<li><a href="addc2c.php">Add course to college</a></li>
<li><a href="viewreq.php">View College Request</a></li>
<li><a href="viewreq1.php">View Course Request</a></li>
<li><a href="addexam.php">Add Exam</a></li>

</ul>


<br>
<br>
<a href="adminlogout.php">logout</a>
</body>
</html>

