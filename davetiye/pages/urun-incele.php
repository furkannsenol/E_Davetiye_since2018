<?php $title="Ürünler - Davetiyem.com"; 
		include 'head.php';?>
    <body>
		<?php include 'topbar.php';?>
    	
		<?php include 'menu.php';?>

		<div class="container" >
			<div class="row">
				<div class="col-sm-3" style="margin-top:20px;">
					<?php include 'kategori.php';?>	
				</div>
                <div class="col-sm-9" style="margin-top:20px; ">
				<?php
						error_reporting(0);
						include("vtbaglan.php");
						session_start();
						$gelenid=$_GET['id']; 
						$sql ="SELECT * FROM tblurun INNER JOIN tblkategori ON tblkategori.kategori_Id=tblurun.urun_Kategori where urun_Id='$gelenid'";
						$exec = mysql_query($sql);
						$fetch = mysql_fetch_array($exec);
						$sira   = $fetch['urun_Id'];
						$ad   = $fetch['urun_Ad'];
						$kod = $fetch['urun_Kod'];
						$ozellik = $fetch['urun_Ozellik'];
						$resim    = $fetch['urun_Resim'];
						$eski_fiyat    = $fetch['urun_Eski_Fiyat'];
						$yeni_fiyat    = $fetch['urun_Yeni_Fiyat'];
						$kategori    = $fetch['kategori_Ad'];
						$kategoriId    = $fetch['kategori_Id'];
	   
	   			echo '	<form class="form-inline"  method="POST" action="sepet.php?action=add&id='.$gelenid.'">
					<div class="col-sm-7">
						<div class="urun-incele-resim">
							<a href="#"><img class="img-rounded " src="'.$resim.'" alt=""  name="'.$resim.'" ></a>
						</div>
					</div>
					
					<div class="col-sm-5">
					
					<h1 class="incele-ad">'.$ad.'</h1><br>
					<span class="incele-kod" style="">Ürün Kodu: '.$kod.'</span>
					<br><br>
					<span class="incele-kod">Adet Fiyatı: <del class="incele-eski-fiyat">'.$eski_fiyat.' TL</del></span> <br><br>
					<span class="incele-yeni-fiyat">İndirimli Adet Fiyatı: <span class="incele-yeni-fiyat2">'.$yeni_fiyat.' TL</span></span>
					<hr>
	
					</div>
					
  								<div class="form-group" style="margin-left:20px;">
    								<label for="text" >Adet</label>
    								<input class="form-control" style="margin-left:10px; width:100px;" type="number" value="100" name="quantity" step="10">
  								</div>
  						<input type="hidden" name="hidden_name" value="'.$ad.'" />

							<input type="hidden" name="hidden_price" value="'.$yeni_fiyat.'" />

								<br>
								<br>
								<div class="form-group" style="margin-left:20px;">
    								
									<button type="submit" class="btn btn-default" style="width:300px; background-color:#ad6290; height:45px; color:white; font-family:comic sans MS regular; font-size:15px; font-weight:bold;" name="add_to_cart">SEPETE EKLE</button>
  								</div>
					</form>';?>
					
					
					
					
								
								
					
				</div>
			</div>
		</div>
		<div class="container deneme" style="margin-top:20px">
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Ürün Özellikleri</a></li>
    <li><a data-toggle="tab" href="#menu1">Ürün Yorumları</a></li>
    <li><a data-toggle="tab" href="#menu2">Teslimat ve İade</a></li>
    <li><a data-toggle="tab" href="#menu3">Kargo</a></li>
  </ul>

  <div class="tab-content ">
    <div id="home" class="tab-pane fade in active">
      <br><br>
      <p><?php echo $ozellik;?></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <br><br>
      <p>Müşteriler genel olarak çok iyi yorumladı.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <br><br>
      <p>Satın aldığınız ürüne ait iade/değişim talebinizi, kargodan teslim aldığınız günden itibaren 7 iş günü içinde help@olegcassini.com.tr e-posta hesabımıza e-posta göndererek iletebilirsiniz. Kişiye özel hazırlanan ürünlerde iade ve değişim yapılmamaktadır. Detayı bilgi için tıklayınız.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <br><br>
      <p>Sipariş gönderimlerimiz UPS Kargo tarafından yapılmaktadır. Siparişiniz tamamlandıktan sonra e-mailinize iletilen kargo takip numarası ile sizde siparişinizi takip edebilirsiniz. 
Kişiye özel hazırlanan (nikah şekeri, bekarlığa veda & düğün aksesuarları, gelin ayakkabı, davetiye vb) ürünlerin kargo teslim süreçleri değişkenlik göstermektedir. Bu ürünlere ait olan kargo bilgileri yukarıdaki Ürün Özellikleri alanında yer almaktadır. Detayı bilgi için tıklayınız.</p>
    </div>
  </div>
</div>
			
			<div class="container" style="margin-top:50px;">
			<h2 class="head text-center seg-title">Benzer Ürünler</h2>
			<hr >
		</div>
		<div class="container">
			<?php
				error_reporting(0);	  
				include("vtbaglan.php");
				session_start();
				$sql ="select  * from tblurun where urun_Kategori=$kategoriId  ORDER BY urun_Id DESC ";
				$exec = mysql_query($sql);
				$i = 0 ; 
				while($fetch = mysql_fetch_array($exec))
				{
					$sira  = $fetch['urun_Id'];
					$ad   = $fetch['urun_Ad'];
					$kod = $fetch['urun_Kod'];
					$resim    = $fetch['urun_Resim'];
					$eski_fiyat    = $fetch['urun_Eski_Fiyat'];
					$yeni_fiyat    = $fetch['urun_Yeni_Fiyat'];
	   
					echo' <div class="col-sm-3">
								<div class="urun-cerceve" >
									<div class="urun-resim">
										<a href="urun-incele?id='.$sira.'"><img class="img-rounded " src="'.$resim.'" alt="" ></a>
									</div>
									<div class="urun-metin">
										<a href="urun-incele?id='.$sira.'"><span>'.$ad.' </span>
										<br><span>'.$kod.' Model</span>
										</a>
									</div>
									<hr>
									<div class="urun-bottom">
									<span class="urun-eski-fiyat"><del>'.$eski_fiyat.' TL</del></span>
									<br>
									<span class="urun-yeni-fiyat">'.$yeni_fiyat.' TL</span>
									<a href="urun-incele?id='.$sira.'"><button type="button" class="btn btn-default btn-incele">İncele</button></a>
									</div>
								</div>
							</div>';	
							$i++;  
					}
			?>
			
		</div>
 

		<?php include 'footer.php';?>
		</body>
		
		</html>

