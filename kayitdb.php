<?php

include'db.php';

if (isset($_POST['registerbutton'])) {
	$name=$_POST['name'];



	$kaydet=$db->prepare("INSERT into members (uyeliktipi, name, surname, eposta, password) VALUES (
		:uyeliktipi,
		:name,
		:surname,
		:eposta,
		:password)
		");

	$insert=$kaydet -> execute(array(
		'uyeliktipi'=>$_POST['uyeliktipi'],
		'name'=>$_POST['name'],
		'surname'=>$_POST['surname'],
		'eposta'=>$_POST['eposta'],
		'password'=>$_POST['password']));
}
header("Location:main.php?name=".$name."&online=1");
 
/* Make sure that code below does not get executed when we redirect. */
exit;

	?>


