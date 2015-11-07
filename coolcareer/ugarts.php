
<?php include "header.php" ?>

<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
       			 <?php include "usercheck.php" ?>
			  <h1 class="title"><a href="#">Undergraduate BA</a></h1>
					
			  <div class="entry">
				 <p><table border=1><tr><th>College Name</th><th>Link</th></tr>
				 <?php
				 include "connectdb.php";
				 $sql="select * from college where type='Art'";
				 $result = mysql_query($sql, $con) or die("Mysql query failed" . mysql_error());
	
		while($row = mysql_fetch_array($result))
	{
	echo"<tr> <td>$row[name]</td><td><a href='$row[url]'>$row[url]</a></td></tr>";
	}
				 
				 ?> </table></p>
				  </div>
			</div>
				</div>
  </div>
  
<?php include "footer.php" ?>