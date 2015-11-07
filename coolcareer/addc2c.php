<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<html>
<head>
<title>
Insert College</title>
<script type="text/javascript">
function confirm1()
{
if(window.confirm("Do You want to insert? "))
{document.c2c.action="c2cdb.php";
return true;
}
else
return false;
}

</script>
</head>
<body>
<h5>Select the Type And fill the form To insert the college.</h5>
<form name="c2c" method='get' onSubmit="return confirm1();">
	<p>College Name:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <select name="coll1" id="coll1">
       <?php include "connectdb.php";
	$sql="select * from college";
	$result1 = mysql_query($sql, $con) or die("Mysql query failed" . mysql_error());
		while($row1 = mysql_fetch_array($result1))
	{
	echo "<option value='$row1[collegeid]'>$row1[name]</option>";
	}	 ?>
	   </select>
  </p>
  Course:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <select name="course1" id="course1">
       <?php include "connectdb.php";
	$sql1="select * from course";
	$result2 = mysql_query($sql1, $con) or die("Mysql query failed" . mysql_error());
		while($row2 = mysql_fetch_array($result2))
	{
	echo "<option value='$row2[courseid]'>$row2[course]</option>";
	}	 
	?>
	   </select>
	<p><br />
  		 <label>
            <input type="submit" name="Add" id="Add" value="Add" />
            </label>
</form>
<a href="adminhome.php">back</a>
</body>
</html>