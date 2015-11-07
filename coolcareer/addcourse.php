<?php include "header.php" ?>

<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
       			 <?php include "usercheck.php" ?>
			  <h1 class="title"><a href="#">Add College</a></h1>
			 <div class="entry">
				 <p>
				   <?php 
				 echo '<script language=javascript>
				 				var $jset="'.isset($_COOKIE["locuser"]).'";
								 function check()
						 			{
				 							if(!$jset)
												{alert("Please Login to Send request");return false;}
											else		
												{
												
													if(window.confirm("Do You want to Send request? "))
																		{document.addcourse.action="reqcrse.php";
																						return true;
																					}
														else
													return false;
																		

												}	
					           			}</script>';	
echo"<form name='addcourse' method=\"get\" onsubmit=\"return check();\"> ";
?>
                <br />
				
  Name of College:  <br />
    <select name="college" id="college">
	<?php
	include "connectdb.php";
	$sql="select * from college";
	$result = mysql_query($sql, $con) or die("Mysql query failed" . mysql_error());
		while($row = mysql_fetch_array($result))
	{
	echo "<option value='$row[collegeid]'>$row[name]</option>";
	}	 
	?>
</select>	
  </p><br />
  Course Name:  <br />
    <input type="text" name="name"  size="40"maxlength="100" />
  </p>
	<p><br />
			 <label>
            <input type="submit" name="sendrequest" id="sendrequest" value="Send Request" />
            </label>
                 </form>
                 </p>
                 
				  </div>
			</div>
				</div>
  </div>
  
<?php include "footer.php" ?>