<?php include "header.php" ?>
<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
      
       			 <?php include "usercheck.php" ?>
                 
		  <h1 class="title"><a href="#">CC - Forum</a></h1>
					<div> 
                 <?php 
				 echo '<script language=javascript>
				 				var $jset="'.isset($_COOKIE["locuser"]).'";
								 function check()
						 			{
				 							if(!$jset)
												{alert("Please Login to add a topic.");return false;}
											else		
												{
													document.myform.action="createtopic.php";
													return true;
												}	
					           			}</script>';		
				
						echo "<form name=\"myform\" method=get onSubmit=\"return check();\">
					<input type='submit' value=\"New Topic\" ></form>";				
  		
					?>
                    <table width="100%" border="1"  >
                     <tr>
   					 <th align="left" >Topic</th><th align="left" > Author </th> <th align="left"> Posts</th> <th align="left"> Last post </th><th>Delete</th>
    				</tr>
                                       <?php include "topics.php" ?>
          </table>			 
				  </div>
                  
  </div>
				</div>
  </div>
<?php include "footer.php" ?>