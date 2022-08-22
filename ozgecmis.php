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
<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> +90 (545) 768 96 43 </a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> cihat.kirman@ogr.sakarya.edu.tr</a></li>
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
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
	

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse mainmenu" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav collapse navbar-collapse">
                            	<li><a href="index.php" class="active">Hakkımda</a></li>
								<li><a href="ozgecmis.php">Özgeçmiş</a></li>
								<li><a href="sehrim.php">Şehrim</a></li>
								<li><a href="mirasimiz.php">Mirasımız</a></li>
								<li><a href="ilgiAlanlarim.php">İlgi Alanlarım</a></li>
								<li><a href="iletisim.php">İletişim</a></li>
							</ul>
     
      				
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav navbar-right">
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
      		</ul>
    	</div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
	
			<div width="%100" height="%100">
			<iframe src= "documents/CihatKirman.pdf" width="750" height="1000"></iframe>
			</div>
							
	
  <footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="companyinfo">
							<h2><span>Cihat Kırman'ın Kişisel Sayfası</h2>
							
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