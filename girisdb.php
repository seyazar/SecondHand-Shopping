
<?php
//Bağlantı cümlesi
$baglanti = mysqli_connect("localhost","root","S2207.yazar","test");
// Bağlantı Kontrolü
if (mysqli_connect_errno())
{
	echo "Bağlantı Yapılamadı. Hata :" . mysqli_connect_error();
}
//Türkçe Karakter Sorunu Çözümü
$baglanti->set_charset("utf8");
$baglanti->query('SET NAMES utf8');
$redirect = NULL;
if($_POST['location'] != '') {
	$redirect = $_POST['location'];
}

if($_POST)
{
//Formumuzdan POST methodu ile aldığımız kullanıcı adı ve şifreyi değişkene atıyoruz.
	$eposta = $_POST['eposta'];
	$password = $_POST['password'];

//Kullanıcı var mı diye kontrol et.
	$sql = "SELECT * FROM members where eposta='$eposta' and password='$password'";
	$sonuc = $baglanti->query($sql);
	$name = $sonuc->fetch_object()->name; 
	

	if ($sonuc->num_rows > 0) 
	{
  //Eğer var ise BAŞARILI 
		$_SESSION["giris"] = "BASARILI";
		header("Location: main.php?name=".$name."&online=1");
		exit;
	}
	else
	{
  //Eğer yok ise BAŞARISIZ 
		header("Location:login.php?loginfailed=true ");
		exit;
	}
//Son olarak ekrana giriş durumunu yazdırıyoruz.
//echo '<br> GİRİŞ '. $_SESSION["giris"];    
}






















?>


