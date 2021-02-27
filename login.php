<!DOCTYPE html>
<html>
<head>
	<title>secondhand.com üye girişi</title>
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="motorshop.css">
	<link rel="icon" type="image/ico" href="mlogo.png" />
	<style type="text/css">
		#leftlogin{ margin-left:400px;  }
		.uyeolbutton{color: #0099ff;
			border-radius: 8px;
			border-color:#0099ff;
			background-color: white;
			font-size: 15px;
			height: 40px;
			text-align: center;
			cursor: pointer;
		}
		.uyeolbutton a{text-decoration: none;
			color: inherit;}
			.insidediv{
				float: left;
				margin-right: 50px;
				text-align: center;
				border: 1px solid #d9d9d9; width: 400px;
				padding: 40px; margin-top: 50px;
				height: 400px;
				
				

			}
			.alert{
				border: 1px solid red;
				background-color:#ff9999; 
				border-radius:8px;
				height: 25px;
				text-align:center;


			}

		</style>
	</head>
	<body>
		<?php  include 'girisdb.php';?>
		
		<div id="logo" style="width: 200px; margin-left: 400px;"><a href="main.php"><h2>secondhand.com</h2></a></div>

		<div id="anadiv">
			<div  id="leftlogin" class="insidediv">
				<h1>Üye Girişi</h1>
				<?php
		$loginfailed=$_GET['loginfailed'];
		if ($loginfailed==true) {
			echo "<div class='alert'>Hatalı E-posta veya Parola!</div>";
		}

		
		
		?>
				<form action="girisdb.php" method="POST">
					<p style="text-align: left; margin-left: 15%; " class="silik">E-posta:</p>
					<input style="width: 70%;" type="text" name="eposta">
					<p style="text-align: left; margin-left: 15%; " class="silik">Parola:</p>
					<input style="width: 70%; "type="password" name="password"> <br><br>
					<button style="width: 70%;" id="ilan" type="submit" name="loginbutton">Giriş Yap ve Devam Et</button>
					
				</form>
			</div>
			<div class="insidediv">


				<h2 style="margin-bottom: 50px; margin-top:100px;">Henüz Üye Değil misin?</h2>
				<p>Üyelerimize özel hizmetlerimizden faydalanabilmek için üye olun.</p>
				<a href="register.php"><button style="width: 70%;" class="uyeolbutton">Hemen Üye Olun</button></a>

			</div>


		</div>

	</body>
	</html>