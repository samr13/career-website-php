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
												{
												alert("Please Login to Send request");return false;
												}
											else		
												{
												
													if(window.confirm("Do You want to Send request? "))
														{
														document.addcollege.action="reqcoll.php";
														return true;
														}
													else
													return false;
																		

												}	
					           			}</script>';	
echo"<form name=\"addcollege\" method=\"post\"  onsubmit=\"return check();\">";
?>
                 Select the College Type: &nbsp;  <select name="type" id="type">
        <br />
	    <option value="Engg">Engineering</option>
	    <option value="med">Medicine</option>
	    <option value="Art">Arts</option>
	    <option value="mgmt">Management</option>
		<option value="Law">Law</option>
        <option value="others">Others</option>
		            </select><p>
  Name of College:  <br />
    <input type="text" name="name"  size="70"maxlength="100" />
  </p>
	<p><br />
		Link: &nbsp;&nbsp;  
	    <input type="text" name="url" maxlength="100" size="50" />
            </p>
			
 <label>
            <input type="submit" name="sendrequest" id="sendrequest" value="Send Request" />
 </label>                 </form>
 </p>
           
  </div>
		</div>
			</div>
				  </div>
  
<?php include "footer.php" ?>