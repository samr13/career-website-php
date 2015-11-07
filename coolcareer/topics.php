<?php

	include "connectdb.php";
	
	$sql_art="ALTER TABLE `forum`  ORDER BY `lastpost` DESC";
	mysql_query($sql_art);
	$sql_qry = "select * from forum";
	$result = mysql_query($sql_qry, $con) or die("Mysql query failed" . mysql_error());
	
		while($row = mysql_fetch_array($result))
	{
echo"<tr> <td><a href=\"showpost.php?top=$row[topicid]\">$row[topic_name]</a></td> <td>$row[author]</td> <td>$row[numofpost]</td> <td>$row[lastpost]</td>";
	if((strcmp($row[author],$_COOKIE["locuser"])==0)||(strcmp($_COOKIE["locuser"],"admin")==0) && isset($_COOKIE["locuser"]))
		echo"<td><a href='delete.php?top=$row[topicid]'>delete</a></td></tr>";	
		else
		echo"<td> N/A </td></tr>";
	}
	

		
	
	?>	 