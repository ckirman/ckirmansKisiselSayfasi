<?php
	$link = mysqli_connect("localhost", "root")or die("Mysql Bağlantısı kurulamadı.");
	mysqli_select_db($link,"proje") or die("Veritabanına bağlanılamadı.");
	
	$ad =  mysqli_real_escape_string($link,$_POST["ad"]);
	$email =  mysqli_real_escape_string($link,$_POST["email"]);
	$konu =  mysqli_real_escape_string($link,$_POST["konu"]);
	$mesaj = mysqli_real_escape_string($link,$_POST["mesaj"]);
	$tarih = date('d F Y');
	
	if(isset($_COOKIE["SID"])){
		$sid = $_COOKIE["SID"];
		$s = mysqli_query($link,"select * from uye where session='$sid'");
		if($a = mysqli_fetch_array($s)){
			$kullanici_id = $a["id"];
		}
	}else{
		$kullanici_id = 0;
	}
	
	
	$sql = "insert into mail (ad, email, konu, tarih, mesaj, kullanici_id) VALUES ('$ad', '$email', '$konu', '$tarih', '$mesaj', '$kullanici_id')";
	
	if(mysqli_query($link,$sql)){
		echo "<script>alert('Mail gönderildi.');</script>";
		echo '<script>window.location="../index.php";</script>';
	}else{
		echo "<script>alert('Mail gönderilemedi.');</script>";
		echo '<script>window.location="../index.php";</script>';
	}
	
	
	mysqli_close($link);
?>