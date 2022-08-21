<?php
	$link = mysqli_connect("localhost", "root")or die("Mysql Bağlantısı kurulamadı.");
	mysqli_select_db($link,"proje") or die("Veritabanına bağlanılamadı.");
	if($_POST["isim"] == "" || $_POST["email"] == "" || $_POST["parola"] == ""){
		header('Location: login.php');
	}
	
	$isim = mysqli_real_escape_string($link,$_POST["isim"]);
	$email = mysqli_real_escape_string($link,$_POST["email"]);
	$parola = mysqli_real_escape_string($link,$_POST["parola"]);
	$foto = "img/uye/default.jpg";
	$yetki = 0;
	$s = mysqli_num_rows(mysqli_query($link,"SELECT * FROM uye")) + 1;
	$md5parola = md5($parola);
	$session = $s.$md5parola;
	
	$email_check = mysqli_num_rows(mysqli_query($link,"SELECT * FROM uye WHERE email='$email'"));
	
	if($email >= 1){
		echo "<script>alert('Aynı email ile 1 den fazla kayıt oluşturulamaz.');</script>";
		header('Location: login.php');
	}
	
	$sql = "insert into uye (ad, email, parola, foto, yetki, session) VALUES ('$isim', '$email', '$md5parola', '$foto', '$yetki', '$session')";
	
	if(mysqli_query($link,$sql)){
		echo "<script>alert('Üye kaydı oluşturuldu.');</script>";
		header('Location: index.php');
	}else{
		echo "<script>alert('Üye kaydı oluşturulamadı.');</script>";
		header('Location: login.php');
	}
	
	
	mysqli_close($link);
?>