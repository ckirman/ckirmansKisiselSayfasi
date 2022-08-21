<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cihat Kırman'ın Kişisel Sayfası</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/changelog.css" rel="stylesheet"><!--Kendi oluşturduğumuz .css dosyası>
	<!-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +90 (264) 295 69 79 </a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> bbf@sakarya.edu.tr</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/cihat.kirman"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/CihatKrman"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/in/cihat-k%C4%B1rman-6831b0a1/"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/Screenshot_5.png" alt="" width="80px" height="80px" class="img-circle"/></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
							</div>
							<div class="btn-group">
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php
								$link = mysqli_connect("localhost", "root")or die("Mysql Bağlantısı kurulamadı.");
								mysqli_select_db($link,"proje") or die("Veritabanına bağlanılamadı.");
									if(isset($_COOKIE["SID"])){
										$sid = $_COOKIE["SID"];
										$sql = mysqli_query($link ,"SELECT * FROM uye WHERE session='$sid'");
										
										while($a = mysqli_fetch_array($sql)){
											if($a){
												echo '<li><a href="hesabim.php">'.$a["ad"].'</a></li>';
												echo '<li><a href="cikis.php"><i class="fa fa-lock"></i> Çıkış</a></li>';
											}else{
												setcookie("SID", "", time()-3600);
												echo '<script>window.location="index.php";</script>';
											}
										}
										
									}else if(isset($_COOKIE["ASID"])){
										$sid = $_COOKIE["ASID"];
										$sql = mysqli_query($link ,"SELECT * FROM uye WHERE session='$sid'");
										
										while($a = mysqli_fetch_array($sql)){
											if($a){
												echo '<li><a href="admin.php">'.$a["ad"].'</a></li>';
												echo '<li><a href="cikis.php"><i class="fa fa-lock"></i> Çıkış</a></li>';
											}else{
												setcookie("ASID", "", time()-3600);
												echo '<script>window.location="index.php";</script>';
											}
										}
									}else{
										echo '<li><a href="login.php"><i class="fa fa-lock"></i> Giriş Yap/Üye Ol</a></li>';
									}
								
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Hakkımda</a></li>
								<li><a href="ozgecmis.php">Özgeçmiş</a></li>
								<li><a href="sehrim.php">Şehrim</a></li>
								<li><a href="mirasimiz.php">Mirasımız</a></li>
								<li><a href="ilgiAlanlarim.php">İlgi Alanlarım</a></li>
								<li><a href="iletisim.php">İletişim</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>
						
						<div class="carousel-inner">
								<?php
									$s = mysqli_query($link ,"SELECT * FROM slider LIMIT 1");
								
									if($slider = mysqli_fetch_array($s)){
										
										echo '<div class="item active">';
										echo '<div class="col-sm-6">';
										echo '<h1><span>'.$slider["baslik"].'</span></h1>';
										echo '<h2>'.$slider["ikinci"].'</h2>';
										echo '<p>'.$slider["detay"].'</p>';
										echo '<a href="haber.php?id='.$slider["haber_id"].'" class="btn btn-default get">Şimdi oku</a></a>';
										echo '</div>';
										echo '<div class="col-sm-6">';
										echo '<img src="images/'.$slider["foto"].'" class="girl img-responsive" alt="" />';
										echo '</div>';
										echo '</div>';
									}
									
									$sql = mysqli_query($link ,"SELECT * FROM slider LIMIT 1,3");
									
									while($slider = mysqli_fetch_array($sql)){
										echo '<div class="item">';
										echo '<div class="col-sm-6">';
										echo '<h1><span>'.$slider["baslik"].'</span></h1>';
										echo '<h2>'.$slider["ikinci"].'</h2>';
										echo '<p>'.$slider["detay"].'</p>';
										echo '<a href="haber.php?id='.$slider["haber_id"].'" class="btn btn-default get">Şimdi oku</a>';
										echo '</div>';
										echo '<div class="col-sm-6">';
										echo '<img src="images/'.$slider["foto"].'" class="girl img-responsive" alt="" />';
										echo '</div>';
										echo '</div>';
									}

								?>							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-sm-offset-1">
					<div class="blog-post-area">
						<h2 class="title text-center"> EN SON HABERLER</h2>
						
								
					
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="companyinfo">
							<h2><span>Cihat Kırman'ın Kişisel Sayfası</h2>
							
						</div>
					</div>

					<div class="col-sm-3">
						<div class="address">
							<img src="images/map.png" alt="" />
							<p>Sakarya Üniversitesi Bilgisayar ve Bilişim Bilimleri Fakültesi, 54187 Sakarya</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2022 Cihat Kırman. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>