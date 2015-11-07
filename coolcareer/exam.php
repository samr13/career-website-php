<?php include "header.php" ?>

<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
       			 <?php include "usercheck.php" ?>
			  <h1 class="title"><a href="#">Exams !</a></h1>
					
			  <div class="entry">
				 <p>Select the Course Type:
				 <form name="exam" action="setcourse.php" method="get">
				 <select name="type1" id="type1">
				 <?php
				 if(strcmp($_COOKIE['type'],"Engg")==0)
				 				 echo"<option value=\"Engg\" selected='selected'>Engineering</option>";
				else
								echo"<option value=\"Engg\">Engineering</option>";
				if(strcmp($_COOKIE['type'],"med")==0)
				 				 echo"<option value=\"med\" selected='selected'>Medicine</option>";
				else
								echo"<option value=\"med\">Medicine</option>";
				if(strcmp($_COOKIE['type'],"Art")==0)
				 				 echo"<option value=\"Art\" selected='selected'>Arts</option>";
				else
								echo"<option value=\"Art\">Arts</option>";
				if(strcmp($_COOKIE['type'],"mgmt")==0)
				 				 echo"<option value=\"mgmt\" selected='selected'>Management</option>";
				else
								echo"<option value=\"mgmt\">Management</option>";
				if(strcmp($_COOKIE['type'],"Law")==0)
				 				 echo"<option value=\"Law\" selected='selected'>Law</option>";
				else
								echo"<option value=\"Law\">Law</option>";
				if(strcmp($_COOKIE['type'],"others")==0)
				 				 echo"<option value=\"others\" selected='selected'>Others</option>";
				else
								echo"<option value=\"others\">Others</option>";
								
	            ?></select>
					<input type="submit" value="Show Exam" value="exam" />
					</form>
					
					<?php 
			$i=1;
			if(isset($_COOKIE['type']))
			{
			echo "<table border=1>
			<tr><th>S.No.</th><th>Exam</th><th>Date of Exam</tr>";
			include "connectdb.php";
			$sql1="select * from exam where type='$_COOKIE[type]'";
			$result1=mysql_query($sql1, $con) or die("Mysql query failed" . mysql_error());
			while($row1=mysql_fetch_array($result1))
			{
				echo "<tr><td>$i</td><td>$row1[exam]</td><td>$row1[date]</td></tr>";
				$i=$i+1;
			}
			
				echo"</table>";
				
			}
			?>
					
					
					
				 </p>
				  </div>
			</div>
				</div>
  </div>
  
<?php include "footer.php" ?>