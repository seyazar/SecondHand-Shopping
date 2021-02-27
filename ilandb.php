<?php


if (isset($_POST['addilanbutton'])) {
	$status=0;
	$title=$_POST['title'];
	$brand=$_POST['brand'];
	$model=$_POST['model'];
	$year=$_POST['year'];
	$km=$_POST['km'];
	$engine=$_POST['engine'];
	$coupon=$_POST['coupon'];
	$color=$_POST['color'];
	$price=$_POST['price'];
	

	## Uzantı Kontrollerim
  #  $uzanti=    array('image/jpeg','image/jpg','image/png','image/x-png','image/gif');
## Aynı Dizinde Bulunan Resimler Klasörüne Kaydet
    $dizin=     "img";
     $baglan=   mysql_connect("localhost","root","S2207.yazar") or die ('Sunucuya Bağlanamadım.');
     $asd=      mysql_select_db("test",$baglan) or die ('Veritabanı Bağlanamadık !');
    
     ##if(in_array(strtolower($_FILES['resim']['type']),$uzanti)){ 
     	 for($i=0; $i<3; $i++){
     /*move_uploaded_file($_FILES['resim']['tmp_name'],"./$dizin/{$_FILES['resim']['name'][$i]}");*/


     move_uploaded_file($_FILES['resim']['tmp_name'][$i],$dizin."/".$_FILES['resim']['name'][$i]);


    mysql_query("SET NAMES utf8");
    mysql_query("SET CHARACTER SET utf8");
    mysql_query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
## Türkçe Karakter Hatası
    $db=       $_FILES['resim']['name'][$i]; 
    echo $db;
    $profile=       $_FILES['resim']['name'][1]; 
    $eklekucukresim=     mysql_query("INSERT INTO motorbike_photo (path) VALUES ('".$db."') ") or die (mysql_Error());
    



}

    $ekle=     mysql_query("INSERT INTO motorbikes (title,brand,model,status,year,km,engine,coupon,color,price,profile) VALUES ('".$title."','".$brand."','".$model."','".$status."','".$year."','".$km."','".$engine."','".$coupon."','".$color."','".$price."','".$profile."')") or die (mysql_Error());
     
   
$online=$_GET['online'];
$name=$_GET['name'];
    
    header("location: main.php?name=".$name."&online=".$online."");}

 







?>