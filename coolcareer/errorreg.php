<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php include "header.php" ?>
<div id="content">
		<p> &nbsp; &nbsp; Error in Registration.!!
		<br />&nbsp; &nbsp; Username already exists or Please fill all the fields. </p>
				</div>
  </div>
  <?php include "footer.php" ?>