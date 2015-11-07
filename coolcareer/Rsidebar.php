<div id="sidebar2" class="sidebar">
			<ul>
				<li>
					<?php 
					if(!isset($_COOKIE["locuser"]))
					include "loginside.php";
					else
					{
                    print "<form name=\"logout\" method=get action=logoutside.php>
					<input type=\"submit\" name=\"logout\" value=\"Logout\" />
					</form>";
					}
                    ?> 
			  </li>
              <li>
				<?php include "calendar.php" ?>
			</li>	
			</ul>
	  </div>