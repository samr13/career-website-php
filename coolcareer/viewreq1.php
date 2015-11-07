<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<html>
<head>
<title>College Request</title>
</head>
<body>
<h5>College Request:</h5>
<table border="1">
<tr><th>S.No.</th><th>User</th><th>college name</th><th>course name</th><th>remove</th></tr>

<?php
include "connectdb.php";
$i=1;
$sql="select * from coursereq";
$result = mysql_query($sql, $con) or die("Mysql query failed" . mysql_error());
while($row=mysql_fetch_array($result))
{
	$sql_id="select * from college where collegeid='$row[collegeid]'";
	$result1 = mysql_query($sql_id, $con) or die("Mysql query failed" . mysql_error());
	$row1=mysql_fetch_array($result1);
	echo "<form method='post' action='removecourse.php'><input type='hidden' value='$row[collegeid]' name='ok'><input type='hidden' value='$row[course]' name='ok1'>
	<tr><td>$i</td><td>$row[sender]</td><td>$row1[name]</td><td>$row[course]</td><td><input type='submit' value='remove')'></td></tr></form>";
	$i=$i+1;
}
?>
</table>
<a href="adminhome.php">back</a>
</body>
</html>