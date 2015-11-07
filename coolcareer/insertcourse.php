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
{document.course.action="coursedb.php";
return true;
}
else
return false;
}

</script>
</head>
<body>
<h5>Type to insert the course.</h5>
<form name="course" method='get' onSubmit="return confirm1();">
	<p>
	course name: <input name="course1" type="text" size="40"  />
	</p>
            <input type="submit" name="Add" id="Add" value="Add" />
           
</form>
<a href="adminhome.php">back</a>
</body>
</html>