<html>
<head><title>Quotation</title>
<style>
table{
	background:white;
	width:100%;
}
.Container{
	position:relative;
	//max-width:400px;
	width:70%;
	height:100%
	background:#fff;
	padding:40px 30px;
	box-shadow: 0 5px 10px rgba(0,0,0,0.2);
	perspective:3000px;
}
</style>
</head>


<?php
@include 'config.php';
error_reporting(0);
$query="SELECT * FROM quotation";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


echo $result['email']."".$result['Q_Name']."".$result['Quotation']."".$result['Cost'];


//echo $total;

if($total != 0)
{
	?>
	<body bgcolor="D071f9">
	<h2 align="center"><mark>Your Estimated Quotation</mark></h2>
	<center>
	<div class="Container">
	
	<table border="3" cellspacing="7" width="70%">
		<tr>
		<th width="10%">email</th>
		<th width="10%">Q_name</th>
		<th width="40%">Quotation</th>
		<th width="10%">Cost</th>
		</tr>
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo"<tr>
				<td>".$result['email']."</td>
				<td>".$result['Q_Name']."</td>
				<td>".$result['Quotation']."</td>
				<td>".$result['Cost']."</td>
		</tr>";

	}
}
else
{
	echo"No records found";
}
?>
<table><br>
<a href="payment.php">
<input type="submit" name="submit" value="Pay">
</a>
</div>

</center>
</body>
</html>