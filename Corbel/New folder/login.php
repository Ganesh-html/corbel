<?php
$fn=$_REQUEST["fn"];
$ln=$_REQUEST["ln"];
$em=$_REQUEST["em"];
$pass=$_REQUEST["pass"];
$conn = mysqli_connect("localhost:3307", "root", "", "detail");
if (!$conn)
{
die ("Connection failed :" .mysqli_connect_error());
}
$sql = "INSERT INTO student(Fname,Lname,MAIL,Pass)VALUES('$fn','$ln','$em','$pass')";
if (mysqli_query($conn ,$sql))
{
echo "New record created succesfully ";
} else
{
echo "Error :" .$sql. "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>
OUT