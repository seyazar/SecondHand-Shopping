<!DOCTYPE html>
<html>
<head>
	<title>detaylar</title>
	
	<link rel="stylesheet" type="text/css" href="motorshop.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
	<link rel="icon" type="image/ico" href="mlogo.png" />
	
</head>
<body>
	<nav>
		<div id="logo"><?php

		$name=$_GET['name'];
		$online=$_GET['online'];
		if ($online==1) {
			echo "<a href='main.php?name=".$name."&online=".$online."'>";
		}
		else
		{
			echo "<a href='main.php'>";
		}

		?><h2>secondhand.com</h2></a></div>
		<div id="searchdiv">  <input id="search" type="text" name="searchbox" placeholder="Search..." ><img src="y3.jpg"></div>
		<?php if ($online!=1){?>
		<a href="login.php" class="link">Giriş Yap</a>
		<a href="register.php" class="link">Üye Ol</a>

		<?php
	}


		echo "<a style='text-decoration: none; color: inherit;' ";
		$online=$_GET['online'];
		$name=$_GET['name'];
		if($online==0){
		echo "href='login.php'>";}
		else
			echo "href=ilan.php?name=".$name."&online=".$online.">";

		?>


	<button id="ilan" style="margin-top: 20px">Ücretsiz* İlan Ver</button></a> 

	</nav>
	<?php
	include'db.php';
	include 'girisdb.php';
	$urlid=$_GET['id'];
	$online=$_GET['online'];
	$name=$_GET['name'];
	

	$detailsql="select * from motorbikes where id = '$urlid'";
	$photosql="select * from motorbike_photo where bike_id= '$urlid'";

	foreach ($db->query($detailsql) as $detail) {

		if($detail['id']==$urlid){
			echo "<div id=".$detail['id']." class='bikedetail'>";
			echo "<table>";
			echo"<tr>";
			echo "<td colspan='3'><h2>".$detail['title']."</h2></td>";
			echo"</tr><tr>";
			$selectedphoto=$_GET['photo_id'];
			
			$photoname=$detail['profile'];
			foreach ($db->query($photosql) as $bikephoto) {
				

				if ($selectedphoto==$bikephoto['photo_id'])
				{
					$photoname=$bikephoto['path'];
					
					

				}
			}
			

			
			echo "<td rowspan='12'><img src='".$photoname."'style='width:400px;'></td><td colspan='2'>".$detail['price']." TL</td></tr>";







			echo "<tr><td>Brand: </td><td>".$detail['brand']."</td><tr>";
			echo "<tr><td>Model: </td><td>".$detail['model']."</td><tr>";
			echo "<tr><td>Year: </td><td>".$detail['year']."</td><tr>";
			echo "<tr><td>KM: </td><td>".$detail['km']."</td><tr>";
			echo "<tr><td>Color: </td><td>".$detail['color']."</td><tr>";
			echo "<tr><td>Engine: </td><td>".$detail['engine']."</td><tr>";
			echo "<tr><td>";
			
			foreach ($db->query($photosql) as $bikephoto) {
				echo "<a href='detail.php?id=".$urlid."&photo_id=".$bikephoto['photo_id']."&name=".$name."&online=".$online."'>";
				echo "<img id='".$bikephoto['photo_id']."' src='".$bikephoto['path']."' class='small' >";
				echo "</a>";

				
			}
			
	
			
			echo "</tr></td>";
			echo "</table>";
			
			$newurl= $urlid+1;
			if ($newurl>=13) {
				$newurl=$urlid;
			}
			$minurl= $urlid-1;
			if ($newurl<=2) {
				$minurl=$urlid;
			}
			
			

			echo "<a href='detail.php?id=".$minurl."&name".$name."&online=".$online."'><button class='back'>BACK</button></a>   ";
			echo "<a href='detail.php?id=".$newurl."&name".$name."&online=".$online."'><button class='back'>NEXT</button></a>    ";
			echo "<a href=";
			$online=$_GET['online'];
			$name=$_GET['name'];
			if ($online==1) {
				
				echo "buy.php?id=".$urlid."&name=".$name."&online=".$online.">";
			}
			else
			{ 
				echo "login.php>";
			}

			
			echo "<button class='back'> BUY</button></a> ";
			echo "<br><br><a href='main.php?name=".$name."&online=".$online."'><button class='homebutton'> HOMEPAGE</button></a>";
		}

	}


	?>




</div>
</body>
</html>