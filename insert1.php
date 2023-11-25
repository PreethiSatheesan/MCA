<html>
<body>
<?php
require('connect.php');
if(isset($_POST['sut']))
{
$name1=$_POST['Name'];
$username=$_POST['Username'];
$password=$_POST['Password'];
$phoneno=$_POST['Phone'];
$address=$_POST['Address'];
$sql="insert into userregistration(Name,Username,Password,Phone_no,Address)values('$name1','$username','$password','$phoneno','$address')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo"New record successfully created";
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1>REGISTRATION</h1><br><br>

	<label for="nm">Name:&nbsp &nbsp &nbsp &nbsp</label>
	<input type="text" name="Name" id="nm"><br><br>

	
	<label for="un">Username:</label>
	<input type="text" name="Username" id="un"><br><br>

	<label for="pwd">Password:</label>
	<input type="password" name="Password" id="pwd"><br><br>

	<label for="pn">Phone No:</label>
	<input type="number" name="Phone" id="pn"><br><br>

	<label for="add">Address:&nbsp</label>
	<textarea name="Address" id="ad"></textarea><br><br>

	<input type="submit" value="Submit" name="sut" id="sub">&nbsp

	<input type="reset" value="Reset" name="ret" id="rset"><br>
</fieldset>

<?php
}
?>
 </form>      		
</body>
</html>