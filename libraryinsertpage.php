<html>
<head>
<title>Library Book Registration</title>
<style>
form{
	background-color:LightGray;
}
</style>
</head>

<body>
<?php
require('connect1.php');
if(isset($_POST['sub']))
{
$bookname=$_POST['Bookname'];
$author=$_POST['Author'];
$publisher=$_POST['Publisher'];
$quantity=$_POST['Quantity'];
$price=$_POST['Price'];
$sql="insert into library(Book_name,Author,Publisher,Quantity,Price)values('$bookname','$author','$publisher','$quantity','$price')";
$result=mysqli_query($conn,$sql);
if($result)
{
	header('Location:');
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1><u>Book Details</u></h1>
	
	<label for="name">Book Name:</label>
	<input type="text" name="Bookname" id="name"><br><br>

	<label for="aut">Author:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</label>
	<input type="text" name="Author" id="aut"><br><br>

	<label for="pub">Publisher:&nbsp;&nbsp;</label>
	<input type="text" name="Publisher" id="pub"><br><br>

	<label for="qty">Quantity:&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Quantity" id="qty" ><br><br>
	
	<label for="prc">Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="Price" id="prc"><br><br>

	<input type="submit" name="sub" id="sub" value="Submit">
	<input type="reset" name="rst" id="rst" value="Reset">
</fieldset>
<?php
}
?>
</form>
</body>
</html>