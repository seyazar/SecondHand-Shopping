<!DOCTYPE html>
<html>
<head>
	<title>Üye Ol</title>
	<link rel="icon" type="image/ico" href="mlogo.png" />
	<link rel="stylesheet" type="text/css" href="motorshop.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
	<style type="text/css">
		body {background-color: #e6e6e6;
			}
		#registerortadiv{
			border: 1px solid #bfbfbf;
			width:1000px;
			height: 500px;
			padding: 50px;
			background-color: white;
			overflow:hidden;
			
		}
		
		#rightdiv{
			float:right;
			border:1px solid #bfbfbf;
			width: 40%;
			
		}
		#leftdiv{float: left;
			width: 60%}

		</style>
	</head>
	<body>
		<div id="logo" style="width: 200px; margin-left: 400px;"><a href="main.php"><h2>secondhand.com</h2></a></div>
		<h2 style=" margin-left: 400px;">Üye Ol</h2>
		<div style="margin-left: 400px;" id="registerortadiv">
			<div class="insidediv" id="leftdiv" >
				<form method="POST" action="kayitdb.php">

					<input  type="radio" name="uyeliktipi" value="bireysel"> Bireysel Üyelik
					<input style="margin-left: 10px;" type="radio" name="uyeliktipi" value="kurumsal"> Kurumsal Üyelik
					<br>
					<p><b>Adınız:</b></p>
					<input type="text" name="name" required="">
					<p><b>Soyadınız:</b></p>
					<input type="text" name="surname" required="">
					<p><b>E-posta Adresiniz:</b></p>
					<input type="email" name="eposta" required="">
					<p><b>Şifre:</b></p>
					<input type="password" name="password" required="">
					<br><br>
					<input type="checkbox" name="conditions" value="conditions"> Koşulları kabul ediyorum. secondhand.com' un iletişim bilgilerime ulaşılmasına izin veriyorum.<br>
					<br><button style="width: 70%;" id="ilan" type="submit" name="registerbutton">Üye Ol</button>

				</form>
			</div>

			<div class="insidediv"><h2><img src="mlogo.png" style="width: 50px; height: 50px;"> Bireysel Üyelik Avantajları Neler?</h2></div>
			<p>Evinizi, arabanızı satıp kiralayın, 
				kullanmadığınız eşyalarınızı satın, 
			yenilerini alın.</p>
			<ul class="silik">
				<li class="silik">Ücretsiz ilan verin,</li>
				<li>İlgilendiğiniz ilanları favorilere ekleyin, 
kriterlerinize uygun favori aramalar oluşturun,</li>
				<li>İlan sahipleri ile site içi mesajlaşın.</li>
			</ul>

		</div>
	</body>
	</html>