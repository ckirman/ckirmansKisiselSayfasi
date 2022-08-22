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
												echo '<li><a href="index.php">'.$a["ad"].'</a></li>';
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
	

  <div class="inner_mid_left" style="min-height: 661px;">


<!-- SiteAgacDal:20.11.10.30 -->
		<section class="in_sec_1">
			<article class="art_loop">
				<!-- #60574 anahlı dal içerik başlıyor: [versiyon :0] --> 
<h2 style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: center;"></h2><h1 style="text-align: center;"><strong>TOKAT</strong></h1><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Tarih boyunca Tokat'a birçok isim verilmiştir, bunlardan en çok bilinenler; Comano Pontika, Komana, Evdoksia, Dokia, Dokat, Kah-Cun, Sobaru, Darün-Nusret, Darün-Nasr ve Tokat'tır.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>"Tokat" adının kaynağı hakkında değişik rivayetler vardır. Bunlar; Togayıt Türkleri tarafından kurulmuş ve ismin de buradan geldiği, bir diğeri de surlu kent manasına gelen Toh-kat'tan geldiğidir.&nbsp; Evliya Çelebi ise Tokat Kalesinin Amalika Kavminden efsanevi bir kahraman olan "Dok-Ad"ın inşa ettiğini ve ''Tokat'' isminin buradan geldiğini yazmaktadır.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Tokat'ın M.Ö. 5500'lere inen bir tarihi olduğu, 14 Devlet ve 5 Beyliğin yaşayıp egemen olduğu yörede yapılan kazılarda ele geçen buluntular, yörenin Kalkolitik Çağ'dan beri yerleşime açık olduğunu göstermektedir. Hatti, Hitit, Frig, Med, Pers, Büyük İskender, Pontus, Roma, Bizans, Arap, Danişment, Anadolu Selçuklu, İlhanlı, Beylikler, Osmanlı ve Türkiye Cumhuriyeti dönemlerinde bu topraklar hep önemli bir yerleşim alanı olmuştur.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Kaynakların verdiği bilgilere göre Malazgirt Savaşından sonra Danişmendli Beyliği kurulan bölge, 1175 yılında Selçuklulara bağlanmıştır. 1243 Kösedağ Savaşı sonrasında İlhanlı, 1335 sonrası Eretna, 1388'de Kadı Burhaneddin yönetimine giren şehir 1392'de Osmanlı topraklarına katılmıştır. Ankara Savaşı sonrası bir süre Osmanlı idaresinden çıkan bölge 1413'de yeniden Osmanlı Yönetimine girmiştir. 1863'de Sivas Eyaletine bağlı nahiye, 1878'de Mutasarrıflık, 1920'de Müstakil Liva, 1923 yılında ise il konumuna getirilmiştir.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: center;"><strong>900 ADIMDA 900 YIL&nbsp;</strong></p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;"><strong>"TARİH VE KÜLTÜR ŞEHRİ TOKAT"</strong></p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;"><span class="Apple-tab-span" style="white-space: pre;"></span>Tokat; Yeşilırmak havzasının bereketli toprakları üzerinde kurulmuş olmasının verdiği avantajla 6000 yıllık tarihi boyunca önemli bir ticaret ve kültür merkezi olmuş, 14 Devleti ve birçok Beyliği içerisinde barındırmış, önemli bir Anadolu şehridir.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Hatti, Hitit, Frig, Roma, Bizans, Danişmendli, İlhanlı, Selçuklu ve Osmanlı Dönemine kadar gelişen süreç içerisinde tarihin her dönemine ait eserleri Tokat'ın her bölgesinde bulabilmek mümkündür. Bu yönüyle Tokat bir açık hava müzesi konumundadır.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Erbaa ilçesinde antik Horoztepe yerleşimi, Hitit yerleşim yeri, Zile'de Maşathöyük Ören Yeri, Sulusaray'da; Roma-Bizans Dönemlerinin izlerini taşıyan Sebastapolis, Merkez ilçede, tarihi Komana şehri, yine Roma Döneminde yol güvenliği için kurulmuş olan Tokat Kalesi, aynı zamanda Danişmend Devletine başkentlik yapmış olan Niksar'da bulunan tarihi kale, Malazgirt sonrası yapılan en eski Türk Camisi Garipler Camii, Yağıbasan Medresesi, Gökmedrese, Yeşilırmak-Hıdırlık Köprüsü, 9 adet zaviye, Osmanlı Dönemine ait Alipaşa Camii ve Hamamı, Voyvoda Han ( Taşhan), Deveciler Hanı, Arastalı Bedesten, 18. yüzyıla ait bütün Anadolu'nun en görkemli tavan göbeğine sahip Latifoğlu Konağı Müze Evi ve Anadolu'nun en güzel ahşap Mevlevihanesi, en güzel Saat Kulesi; Bey Sokağı, Bey Hamam Sokağı, Halit Sokağı ve Sulusokak'ta bulunan sivil mimarlık örneği yapılarla; Türklerin Anadolu'ya gelişlerinden itibaren 900 yılda mimarlık adına ortaya koydukları önemli eserlerin kesintisiz olarak görülebileceği tek şehirdir TOKAT...</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Evliya Çelebi'nin "Alimler ve Şairler Şehri" diye övdüğü Mevlana'nın hayatının bir kısmını Tokat'ta geçirmekten bahtiyar olduğu, Şeyhülislam İbn-i Kemal gibi alimlerin Gazi Osman Paşa gibi komutanların, Zileli Talibi ve Ceyhuni gibi şairlerin yetiştiği, coğrafi konum itibariyle eşsiz doğal güzelliklere sahip, tarihle iç içe yaşayan bir şehirdir TOKAT.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Bakırcılık, Yazmacılık, Dokumacılık, Ahşap Oymacılığı, Kuyumculuk, Demircilik, Dericilik gibi bilinen el sanatlarının yanı sıra, Tokat ili Anadolu'da 20. yy.'a kadar devam ede dört önemli özgün seramik merkezinden biridir. ( İznik, Kütahya, Çanakkale )</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Çeşitli el sanatlarıyla otantik güzellikler sunan, kültüründeki çeşitliliği tarihi akıştan geçirerek farklı anlayışları bu coğrafyada özümsemiş folklor dokusuna sahip insanların yaşadığı bir şehirdir TOKAT.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: center;"><strong>SEYYAHLARIN GÖZÜNDEN TOKAT<br></strong></p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>"Halk zevk ehlidir, gariplerle dostturlar, kin tutmaz, hile bilmez, derya gönüllü, halim selim insanlardır. Herkese iyi zanda bulunurlar, iyi geçinirler." ( Evliya Çelebi )</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>"Alimler konağı, fazıllar yurdu ve şairler yatağıdır." ( Hacı Bektaş-ı Veli )</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>"1714'de küçük Asya'nın önde gelen bir ticaret merkezi olan, Tokat'ta gördüğüm güzellik ve gelişmişlik manzarasını dünyanın hiç bir yerinde görmedim." ( Tournefort )</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>"Tokat'a has iyiliklerden biri, oradaki kervansarayların etrafında, tacirlere kiralanan bir çok hususi odaların mevcudiyetidir. Seyahatimiz boyunca diğer hiçbir yerde görmediğimiz bu odalar kervansarayların gürültüsünden uzak, sakin ve rahat yerler olup, yolcu orada, kendilerini menfaat şaikiyle rahatsız eden adamlardan uzak dostlarıyla sohbet ederek serbestçe dinlenebilir..."( Tavernier J. B. 1678 )</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: center;"><strong>COĞRAFİ YAPI&nbsp;</strong></p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Tokat, Karadeniz Bölgesinin Orta Karadeniz bölümünün iç doğusunda Sivas ve Ordu, batısında Amasya illeri bulunmaktadır.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Yüzölçümü 10.072 km<sup>2'</sup>dir. Nüfusu 612.646 olup rakımı ortalama 623 metredir.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>11 ilçesi bulunan Tokat'ın her türlü tarım yapılabilen bereketli ovaları, il topraklarının yaklaşık %15,4'ünü kaplar. Kazova, Turhal Ovası, Erbaa Ovası, Niksar Ovası, Omala Ovası, Artova Ovası ve Zile Ovası mevcut mümbit yapıya sahip olan verimli arazilerini sulamaktadırlar.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Tokat ili topraklarının %48.18'i ormanlık ve fundalıklarla, %38.80'i ekili dikili alanlarla %14.50'si çayır ve meralarla, %1.90'ı ise tarıma elverişsiz alanlardan oluşmaktadır. Tokat yurdumuzun sayılı orman bölgelerinden biri olup, iller içinde altıncı sırada gelir. Ormanlar daha çok Almus, Reşadiye ve Niksar ilçeleri dolayındadır. Karaçam, Sarıçam, Köknar, Gürgen, Sedir ve Lübnan Sediri gibi ağaç türlerinin içerisinde Fındık, Kızılcık, Yabani Erik, Elma, Ahlat ve Alıç gibi türlere de rastlanmaktadır.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: center;"><strong>ULAŞIM</strong></p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;"><span class="Apple-tab-span" style="white-space: pre;"></span>Karadeniz'i Sivas ve Kayseri üzerinden İç Anadolu, AKdeniz ve Güneydoğu Anadolu bölgelerine; Doğu Anadolu'yu Erzincan, Reşadiye, Niksar, Erbaa üzerinden İstanbul'a bağlayan karayolları Tokat'tan geçmektedir. Ülkenin her yerinden Tokat'a ulaşmak mümkündür.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;"><span class="Apple-tab-span" style="white-space: pre;"></span>Tokat merkeze demiryolu ulaşımı olmamakla beraber, Samsun'u Sivas'a ve diğer Anadolu illerine bağlayan demiryolu Artova, Zile ve Turhal ilçelerinden geçer.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;<span class="Apple-tab-span" style="white-space: pre;"></span>Tokat - Turhal karayolunun 17. km'sinde yer alan Tokat Havalimanı genişletme çalışmaları halen devam etmektedir.</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;</p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;"></p><ul><li style="display:inline;"><a href="images/Resim/Taşhan.JPG.png" rel="adasoft_galeri_68" title="Taşhan.JPG.." unselectable="on" style="border: none;"><img src="images/Resim/Taşhan.JPG.png" title="Taşhan.JPG.." alt="Taşhan.JPG.." style="opacity: 0.95; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
<li style="display:inline;"><a href="images/Resim/Taşköprü.jpg.png" rel="adasoft_galeri_68" title="Taşköprü.jpg.." unselectable="on" style="border: none;"><img src="images/Resim/Taşköprü.jpg.png" title="Taşköprü.jpg.." alt="Taşköprü.jpg.." style="opacity: 0.4; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
<li style="display:inline;"><a href="images/Resim/Saat Kulesi.jpg.png" rel="adasoft_galeri_68" title="Saat Kulesi.jpg.." unselectable="on" style="border: none;"><img src="images/Resim/Saat Kulesi.jpg.png" title="Saat Kulesi.jpg.." alt="Saat Kulesi.jpg.." style="opacity: 0.4; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
<li style="display:inline;"><a href="images/Resim/Meydan Camii.JPG.png" rel="adasoft_galeri_68" title="Meydan Camii.JPG.." unselectable="on" style="border: none;"><img src="images/Resim/Meydan Camii.JPG.png" title="Meydan Camii.JPG.." alt="Meydan Camii.JPG.." style="opacity: 0.95; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
<li style="display:inline;"><a href="images/Resim/Mevlevihane (2).jpg.png" rel="adasoft_galeri_68" title="Mevlevihane (2).jpg.." unselectable="on" style="border: none;"><img src="images/Resim/Mevlevihane (2).jpg.png" title="Mevlevihane (2).jpg.." alt="Mevlevihane (2).jpg.." style="opacity: 0.95; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
<li style="display:inline;"><a href="images/Resim/Latifoğlu Konağı-Müze.JPG.png" rel="adasoft_galeri_68" title="Latifoğlu Konağı-Müze.JPG.." unselectable="on" style="border: none;"><img src="images/Resim/Latifoğlu Konağı-Müze.JPG.png" title="Latifoğlu Konağı-Müze.JPG.." alt="Latifoğlu Konağı-Müze.JPG.." style="opacity: 0.95; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
<li style="display:inline;"><a href="images/Resim/Laifoğlu Konağı-İç Kısım.jpg.png" rel="adasoft_galeri_68" title="Laifoğlu Konağı-İç Kısım.jpg.." unselectable="on" style="border: none;"><img src="images/Resim/Laifoğlu Konağı-İç Kısım.jpg.png" title="Laifoğlu Konağı-İç Kısım.jpg.." alt="Laifoğlu Konağı-İç Kısım.jpg.." style="opacity: 0.4; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
<li style="display:inline;"><a href="images/Resim/Mahmut Paşa Cami İçi (1).JPG.png" rel="adasoft_galeri_68" title="Mahmut Paşa Cami İçi (1).JPG.." unselectable="on" style="border: none;"><img src="images/Resim/Mahmut Paşa Cami İçi (1).JPG.png" title="Mahmut Paşa Cami İçi (1).JPG.." alt="Mahmut Paşa Cami İçi (1).JPG.." style="opacity: 0.4; border: 2px solid rgb(255, 255, 255);" width="90" height="90" unselectable="on"></a></li>
</ul><br><p></p><p style="border-bottom: 2px solid #eeeeee; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px; padding: 0px 0px 5px; margin: 5px 0px 10px; clear: both; font-size: 16px; font-weight: normal; text-align: justify;">&nbsp;</p><dl style="border: 0px; padding: 0px; margin: 0px 0px 20px; width: 695px; float: left; clear: both; text-align: justify;"><dt style="border: 0px; padding: 4px; margin: 1px 5px 0px 0px; width: 194px; float: left; color: #333333; clear: both; font-size: 12px; font-weight: bold; background-color: #f6f6f6;"><label style="line-height: 18px; display: block; margin-bottom: 5px; font-size: 12px; font-weight: normal;">&nbsp;</label></dt></dl><p>&nbsp;</p><script type="text/javascript">
//<![CDATA[
															if(typeof(wiy_galleries)!='undefined') wiy_galleries[wiy_galleries.length] = {id:'adasoft_galeri_68',bordercolor:'#FF0000',method:'LightBox'};

															  
//]]></script>
<!-- ######  60574 anahlı dal içerik bitti  ##### -->
			</article>
		</section>
	


<div style="clear: both;"></div>

<div>
	<section class="in_sec_2">
		<article class="right_nav AltDalListe">
			<!-- SiteAgacDallar:20.11.10.30 --><div id="bbAltDallar">
<div id="items" class="SKItems">
					<ul>
				</ul></div>
</div>
			
		</article>
	</section>

</div>



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