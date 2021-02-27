<!DOCTYPE html>
<html>
<head>
	<title>İlan Ver</title>
	<link rel="icon" type="image/ico" href="mlogo.png" />
	<link rel="stylesheet" type="text/css" href="motorshop.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
	<style type="text/css">body {background-color: #e6e6e6;
			}
			#middlediv{	border: 1px solid #bfbfbf;
			width:1000px;
			height: 600px;
			padding: 50px;
			background-color: white;
			overflow:hidden;
			margin-left: 400px;
			position: relative;}

			td{padding:20px;}

			#addphotodiv{
				position: absolute;
				
				left: 550px;
				
			}

		</style>
</head>
<body>
	<div id="logo" style="width: 200px; margin-left: 400px;"><?php 
	$name=$_GET['name'];
	$online=$_GET['online'];
echo "<a href='main.php?name=".$name."&online=".$online."'>";
	?><h2>secondhand.com</h2></a></div>
	<div id="middlediv">
		<div>
	<form enctype="multipart/form-data" method="POST" 

<?php
$name=$_GET['name'];
$online=$_GET['online'];

echo "action='ilandb.php?name=".$name."&online=".$online."'";


?>

	>
		<table style="float: left;">
			<tr>
				<td>Title</td>
				<td><input type="text" name="title" required></td>

			</tr>
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand" required></td>

			</tr>
			<tr>
				<td>Model</td>
				<td><input type="text" name="model" required></td>

			</tr>
			<tr>
				<td>Year</td>
				<td><input type="text" name="year" required></td>

			</tr>
			<tr>
				<td>KM</td>
				<td><input type="text" name="km" required></td>

			</tr>
			<tr>
				<td>Engine</td>
				<td><input type="text" name="engine" required></td>

			</tr>
			<tr>
				<td>Coupon</td>
				<td><input type="text" name="coupon" required></td>

			</tr>
			<tr>
				<td>Color</td>
				<td><input type="text" name="color" required></td>

			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" required></td>

			</tr>

		</table>
		</div>


		<div id="addphotodiv">
			<h2> Lütfen Fotoğraf Ekleyin</h2><br>
			  <input type="file" name="resim[]" id="resim" multiple="multiple"><br><br><br>
			  
			  <br><br><br><br>
			<button style="width: 500px;" id="ilan" type="submit" name="addilanbutton">İlanı Ekle</button>

		</div>



	</form>
</div>

</body>
</html>