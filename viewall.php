<html>
<head>
<title></title>
</head>
<body>
<?php
require('connect1.php');
$sql="select * from library";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "Book Name:".$row["Book_name"]."<br>";
echo "Author:".$row["Author"]."<br>";
echo "Publisher:".$row["Publisher"]."<br>";
echo "Quantity:".$row["Quantity"]."<br>";
echo "Price:".$row["Price"]."<br><br>";
}
}
else
{
echo "Failed";
}
mysqli_close($conn);
?>
</body>
</html>