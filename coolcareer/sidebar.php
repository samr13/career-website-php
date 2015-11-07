<div id="wrapper">
	<div id="page">
		<div id="sidebar1" class="sidebar">
			<ul>
				<li>
					<h2>Recent Posts</h2>
						<ul>
						<li><a href="forum.php"><?php
						include "connectdb.php ";
						$t=localtime();
						$hr=$t[2]-1;
						$hour=$hr.":".$t[1].":".$t[0];
						$date=date('Y-m-d');
						$count="select * from post where time > '$hour' and date='$date'";
						$ci=0;
						$cresult = mysql_query($count, $con) or die("Mysql query failed" . mysql_error());
						while($ri = mysql_fetch_array($cresult))
						{$ci=$ci+1;
						}
						if($ci==0)
						echo"No new post available";
						else
						echo"$ci new post available";
						?></a></li>
						</ul>	
					<h2>Search Your College</h2>
			
								
				<ul>
					<li><a href="ugbe.php">UnderGraduate-BE</a></li>
					<li><a href="ugarts.php">UnderGraduate-BA</a></li>
					<li><a href="ugarts.php">UnderGraduate-Bcom</a></li>
					<li><a href="uglaw.php">UnderGraduate-BL</a></li>
					<li><a href="mbbs.php">MBBS</a></li>
				    <li><a href="ugbe.php">PostGraduate-ME</a></li>
					<li><a href="ugarts.php">PostGraduate-MA</a></li>
					<li><a href="ugarts.php">PostGraduate-MCom</a></li>
					<li><a href="mgmt.php">MBA</a></li>
				</ul>
            	
                 <h2> Send Request</h2>
                <ul>
                	<li><a href="addcoll.php">Add College </a></li>
                	<li><a href="addcourse.php">Add Course</a></li>
               </ul>
                <h2>College-Course details</h2>
                <ul>
                	<li><a href="ccdetails.php">View Courses in your college</a></li>
               </ul>
               	</li>
		</ul>
               	
	  </div>