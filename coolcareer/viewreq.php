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
<tr><th>S.No.</th><th>User</th><th>college name</th><th>type</th><th>link</th><th>remove</th></tr>

<?php
include "connectdb.php";
$i=1;
$sql="select * from collegereq";
$result = mysql_query($sql, $con) or die("Mysql query failed" . mysql_error());
while($row=mysql_fetch_array($result))
{
	echo "<form method='post' action='removecoll.php'><input type='hidden' value='$row[name]' name='ok'>
	<tr><td>$i</td><td>$row[sender]</td><td>$row[name]</td><td>$row[type]</td><td>$row[link]</td><td><input type='submit' value='remove')'></td></tr></form>";
	$i=$i+1;
}
?>
</table>
<a href="adminhome.php">back</a>
</body>
</html>