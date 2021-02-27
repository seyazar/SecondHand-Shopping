<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="motorshop.css">
	<link rel="icon" type="image/ico" href="mlogo.png" />
	<title>Anasayfa</title>
	<style type="text/css">
		.welcome {

			background-color: yellow;
			width:%100;
			text-align: center;
			overflow:hidden 
		}
		.welcomesign{
			

		}
		.username{
			
			font-size: 30px;
			margin-top: 5px;
		}
		.logoutbutton{
			width: 50px;
			height: 50px;
			

			
		}

	</style>
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

		<div id="maindiv">
			<table id="maintable">
				<tr id="bluerow">
					<td></td>
					<td>Brand</td>
					<td>Title</td>
					<td>Price</td>
					<td>Coupon</td>
					<td>Status</td>

				</tr>

				<?php

				$avability;
				include'db.php';
				include 'girisdb.php';

				$sql = 'SELECT brand,model,title,price,status,coupon,id,profile
				FROM motorbikes';



				$name=$_GET['name'];
				$online=$_GET['online'];




				foreach ($db->query($sql) as $row) {
					if (isset($name)){$online=1;}

					echo "<tr><td class='photo'><a href='detail.php?id=".$row['id']."&name=".$name."&online=".$online."' )><img value='".$row['photo_id']."' width='80px' src='".$row['profile']."'></a></td>";


					if ($row['status']==0) {
						$avability="Available";
					}
					else
						$avability="Not Available";


					echo "<td>".$row['brand']."</td>";
					echo "<td".$row['model']."></td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['price']."$</td>";
					echo "<td>".$row['coupon']."</td>";
					echo "<td>".$avability."</td>";
					echo "</tr>";



				}
				?>


			</table>

		</div>



		<?php
		$name=$_GET['name'];
		$online=$_GET['online'];

		if ($online==1){

			echo "<div class='welcome'>";
			echo "<h1 class='welcomesign'>Welcome </h1>";
			echo "<p class='username' >".$name."</p>";




			?>

			<a href="logout.php"><input type='image' src='logout.png ' class="logoutbutton"  /></a>


			<?php
		}
		echo "</div>";

		?>





	</body>
	</html>