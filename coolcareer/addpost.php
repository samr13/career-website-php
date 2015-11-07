<?php
if(!(isset($_COOKIE['locuser'])))
{
	header("Location:index.php");
}
?>
<?php include "header.php" ?>
<div id="content">
		<div class="post">
       &nbsp;   &nbsp;  
      
       			 <?php include "usercheck.php" ?>
                 
		  <h1 class="title"><a href="#">CC - Post</a></h1>
          <?php
		  
		  $tn=$_GET['top'];
		  echo '   <script type="text/javascript">
		  function res()
		  {
		  if(document.pressed==\'Add\')
		  {alert("Topic Added");
		  document.post.action="addpo.php?top='.$tn.'";
		  }
		   if(document.pressed==\'Cancel\')
		  document.post.action="showpost.php?top='.$tn.'";
		  return true;
		  }
		  </script>
					<div> 
                    <form name="post" method="post" onSubmit="return res();">
                    Subject :&nbsp;<input name="subject" type="text" size="50" />
                    <br />
                      Message:<textarea name="message" cols="50" rows="3" > </textarea>
                  <br />
                    <input type="submit" name="submit" onClick="document.pressed=this.value" value="Add" /> &nbsp; &nbsp;
                    <input type="submit" name="cancel" onClick="document.pressed=this.value" value="Cancel" />
                    </form>
                 ';
				 ?>
               
                                       </div>
                  
  </div>
				</div>
  </div>
<?php include "footer.php" ?>