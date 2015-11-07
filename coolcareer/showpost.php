<?php include "header.php" ?>
<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
      
       			 <?php include "usercheck.php" ?>
                 
		  <h1 class="title"><a href="#">CC - Posts</a></h1>
					<div> 
<?php  
	include "connectdb.php";
	
	$tn=$_GET['top'];
	$get_top="select topic_name from forum where topicid='$tn'";
	$result = mysql_query($get_top, $con) or die("Mysql query failed" . mysql_error());
	$row=mysql_fetch_array($result);
	echo "<h5> Topic : $row[topic_name] </h5>";
				 echo '<script language=javascript>
				 				var $jset="'.isset($_COOKIE["locuser"]).'";
								 function check()
						 			{
				 							if(!$jset)
												{alert("Please Login to add a post.");return false;}
											else		
												{
													document.myform1.action="addpost.php?top='.$tn.'";
													return true;
												}	
					           			}</script>';		
				
						echo "<form name=\"myform1\" method=post onSubmit=\"return check();\">
					<input type='submit' value=\"Add Post\" ></form>";				
?>
                    <table width="100%" border="1"  >
                     <tr>
   					 <th align="left">Author</th><th align="left" > Post </th> <th align="left"> Time</th>
    				</tr>

<?php 			
	$sql_qry = "select * from post where topicid='$tn'";
	$result = mysql_query($sql_qry, $con) or die("Mysql query failed" . mysql_error());
		while($row = mysql_fetch_array($result))
	{
		echo"<tr> <td>$row[author]</a></td> <td><b>$row[subject]:</b><br>$row[content]</td> <td>$row[time]</td> </tr>";
	}
?>
          </table>			  
						
                  </div>
                  
  </div>
				</div>
  </div>
<?php include "footer.php" ?>