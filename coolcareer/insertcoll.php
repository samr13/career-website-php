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
{document.college.action="collegedb.php";
return true;
}
else
return false;
}

</script>
</head>
<body>
<h5>Select the Type And fill the form To insert the college.</h5>
<form name="college" method='get' onSubmit="return confirm1();">
	<p>College Type:    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <select name="type" id="type">
        <br />
	    <option value="Engg">Engineering</option>
	    <option value="med">Medicine</option>
	    <option value="Art">Arts</option>
	    <option value="mgmt">Management</option>
		<option value="Law">Law</option>
      </select>
  </p>
	<p><br />
  Name of College:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="name"  size="100"maxlength="100" />
  </p>
	<p><br />
		College Website Link: &nbsp;&nbsp;  
	    <input type="text" name="url" maxlength="100" size="50" />
            </p>
			
			 <label>
            <input type="submit" name="Add" id="Add" value="Add" />
            </label>
</form>
<a href="adminhome.php">back</a>
</body>
</html>