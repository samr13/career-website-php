<?php
if(!(isset($_COOKIE['aduser'])))
{
	header("Location:admin.php");
}
?>
<html>
<Head>
<title>Add Exam</title>

<script type="text/javascript">
function confirm1()
{
if(window.confirm("Do You want to insert? "))
{document.exam1.action="insertexam.php";
return true;
}
else
return false;
}

</script>
</Head>
<body>

<h5> Add Exam to The category</h5>
<form name="exam1" method="get" onSubmit="return confirm1();">
Select the Course Type: &nbsp;  <select name="type1" id="type1">
	    <option value="Engg">Engineering</option>
	    <option value="med">Medicine</option>
	    <option value="Art">Arts</option>
	    <option value="mgmt">Management</option>
		<option value="Law">Law</option>
        <option value="others">Others</option>
		            </select>
					<br />
					<br />

Exam name: <input type="text" name="exam" size="30" />
					<br />
					<br />
<br />
Exam date:
  <label></label>
                          <select name="date" id="date">
                              <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                          <label>
                          <select name="month" size="1" id="month">
                            <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                          </select>
                          </label>
                          <label>
                          <select name="year" id="year">
                            <option value="2009" selected="selected">2009</option>
                            <option value="2010">2010</option>
                          </select>
                          </label>
                          <br>                          <br>

<input type="submit" value="Add" name="add" />

</form>
<br />
<a href="adminhome.php">back</a>

</body>
</html>