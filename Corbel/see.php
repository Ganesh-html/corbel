<html>
<head><title>Requirement</title>
<style>
table{
	background:white;
}
</style>
</head>


<?php
@include 'config.php';
error_reporting(0);
$query="SELECT * FROM requirement1";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


echo $result['mail']."".$result['A_Name']."".$result['A_Size']."".$result['Description']."".$result['budget'];


//echo $total;

if($total != 0)
{
	?>
	<body bgcolor="D071f9">
	<h2 align="center"><mark>User Requirement</mark></h2>
	<center>
	<table border="3" cellspacing="7" width="80%" background="red">
		<tr>
		<th width="10%">Mail</th>
		<th width="10%">Area name</th>
		<th width="10%">Area Size</th>
		<th width="40%">Description</th>
		<th width="10%">Budget</th>
		</tr>
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo"<tr>
				<td>".$result['mail']."</td>
				<td>".$result['A_Name']."</td>
				<td>".$result['A_Size']."</td>
				<td>".$result['Description']."</td>
				<td>".$result['budget']."</td>
		</tr>";

	}
}
else
{
	echo"No records found";
}
?>
<table>
</center>
</body>
</html>