<?php include "header.php" ?>

<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
       			 <?php include "usercheck.php" ?>
			  <h1 class="title"><a href="#">Courses !</a></h1>
					
			  <div class="entry">
				<p> 
				Select a course:
				<form name="course" method="get" action="setcookie.php">
				 <select name="clist" id="clist">
				 <?php
				    include "connectdb.php";
					$sql="select * from course";
	$result = mysql_query($sql, $con) or die("Mysql query failed" . mysql_error());
		while($row = mysql_fetch_array($result))
	{
	if(strcmp($_COOKIE['course'],$row[courseid])==0)
	echo "<option value='$row[courseid]' selected='selected'>$row[course]</option>";
	else
	echo "<option value='$row[courseid]'>$row[course]</option>";
	}
				 ?>
				 <input type="submit" name="show" value="show college" />
				 </select>
				 </form>
			<?php 
			$i=1;
			if(isset($_COOKIE['course']))
			{
			echo "<table border=1>
			<tr><th>S.No.</th><th>College</th><th>Link</th></tr>";
			include "connectdb.php";
			$sql1="select * from c2c where courseid='$_COOKIE[course]'";
			$result1=mysql_query($sql1, $con) or die("Mysql query failed" . mysql_error());
			while($row1=mysql_fetch_array($result1))
			{
				$sql2="select * from college where collegeid='$row1[collegeid]'";
				$result2=mysql_query($sql2, $con) or die("Mysql query failed" . mysql_error());
				$row2=mysql_fetch_array($result2);
				echo "<tr><td>$i</td><td>$row2[name]</td><td><a href='$row2[url]'>$row2[url]</a></td></tr>";
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