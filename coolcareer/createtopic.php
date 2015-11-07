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
                 
		  <h1 class="title"><a href="#">CC - Topic</a></h1>
          <script type="text/javascript">
		  function res()
		  {
		  if(document.pressed=='Add')
		  {alert("Topic Added");
		  document.topic.action="addtopic.php";
		  }
		   if(document.pressed=='Cancel')
		  document.topic.action="forum.php";
		  return true;
		  }
		  </script>
					<div> 
                    <form name="topic" method="post" onSubmit="return res();">
                    Topic Name :&nbsp;<input name="topicname" type="text" size="40" />
                    <br />
                      Message:<textarea name="message" cols="50" rows="3" > </textarea>
                  <br />
                    <input type="submit" name="submit" onClick="document.pressed=this.value" value="Add" /> &nbsp; &nbsp;
                    <input type="submit" name="cancel" onClick="document.pressed=this.value" value="Cancel" />
                    </form>
                      </div>
                  
  </div>
				</div>
  </div>
<?php include "footer.php" ?>