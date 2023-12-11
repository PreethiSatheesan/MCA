<?php
$servername="localhost";
$username="root";
$password="";
$dbname="preethi";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("couldn't connect mysql".mysqli_connect_error());
}
else
{

}
?>