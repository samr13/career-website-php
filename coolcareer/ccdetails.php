<?php include "header.php" ?>

<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
       			 <?php include "usercheck.php" ?>
			  <h1 class="title"><a href="#">Courses !</a></h1>
					
			  <div class="entry">
				<p> 
				Select a course:
				<form name="cc" method="get" action="setcollege.php">
				 <select name="colllist" id="colllist">
				 <?php
				    include "connectdb.php";
					$sql="select * from college";
	$result = mysql_query($sql, $con) or die("Mysql query failed" . mysql_error());
		while($row = mysql_fetch_array($result))
	{
	if(strcmp($_COOKIE['college'],$row[collegeid])==0)
	echo "<option value='$row[collegeid]' selected='selected'>$row[name]</option>";
	else
	echo "<option value='$row[collegeid]'>$row[name]</option>";
	}
				 ?>
				 <input type="submit" name="show" value="Show Course" />
				 </select>
				 </form>
			<?php 
			$i=1;
			if(isset($_COOKIE['college']))
			{
			echo "<table border=1>
			<tr><th>S.No.</th><th>Course</th></tr>";
			include "connectdb.php";
			$sql1="select * from c2c where collegeid='$_COOKIE[college]'";
			$result1=mysql_query($sql1, $con) or die("Mysql query failed" . mysql_error());
			while($row1=mysql_fetch_array($result1))
			{
				$sql2="select * from course where courseid='$row1[courseid]'";
				$result2=mysql_query($sql2, $con) or die("Mysql query failed" . mysql_error());
				$row2=mysql_fetch_array($result2);
				echo "<tr><td>$i</td><td>$row2[course]</td></tr>";
				$i=$i+1;
			}
			
				echo"</table>";
				
			}
			?>
				  </p></div>
			</div>
				</div>
  </div>
  
<?php include "footer.php" ?>