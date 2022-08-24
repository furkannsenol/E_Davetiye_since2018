<?php 
error_reporting(0);
session_start();
$login_session=$_SESSION['login_user'];
if(!isset($login_session)) 
{ 
  echo '<script>alert("Devam etmek için lütfen giriş yapınız.")</script>';
  echo '<script>window.location="login.php"</script>';
  exit; 
} 

$total5=$_SESSION['total'];
if($total5==0)
{
   echo '<script>alert("Sipariş oluşturmak için lütfen sepetinize ürün ekleyiniz.")</script>';
  echo '<script>window.location="urunler?kat=tum-urunler"</script>';
  exit; 
}
?>
<?php $title="Ana Sayfa - Davetiyem.com"; 
		include 'head.php';?>
    <body>
		<?php include 'topbar.php';?>
    	
		<?php include 'menu.php';?>
		<div class="container">
			<div class="col-sm-9">
			<h1><span class="glyphicon glyphicon-circle-arrow-right" ></span> 1/2 Adım: Sipariş Formu</h1>
      <hr>
			<br>
			
		 <ul class="nav nav-tabs">
    		<li class="active"><a data-toggle="tab" href="#home">Düğün</a></li>
    		<li><a data-toggle="tab" href="#menu1">Nişan</a></li>
    		
    		<li><a data-toggle="tab" href="#menu3">Sünnet</a></li>
    		
  		</ul>

  		<div class="tab-content">

    		<div id="home" class="tab-pane fade in active">
          <br><br>
      			<h4 class="col-sm-offset-4">Düğün Davetiye Sipariş Formu</h4><br><br>

      			<form class="form-horizontal  col-sm-offset-2 col-sm-8"   method="POST">
           			<div class="form-group">
              			<label class="control-label " for="text">Gelinin Adı Soyadı</label>
              			<input type="text" class="form-control" id="email" name="dgad" placeholder="" required>
              		</div>

            		<div class="form-group">
              			<label class="control-label " for="text">Gelinin Anne Baba Adı</label>                
                    	<input type="text" class="form-control" id="pwd" name="dgab" placeholder="" required>
            		</div>

          			<div class="form-group">
              			<label class="control-label " for="text">Damadın Adı Soyadı</label>
              			<input type="text" class="form-control" id="email" name="ddad" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Damadın Anne Baba Adı</label>
              			<input type="text" class="form-control" id="email" name="ddab" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Düğün Tarihi</label>
              			<input type="text" class="form-control" id="email" name="dtarih" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Düğün Başlangıç Saati</label>
              			<input type="text" class="form-control" id="email" name="dbaslangic" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Düğün Bitiş Saati</label>
              			<input type="text" class="form-control" id="email" name="dbitis" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Düğün Yeri</label>
              			<input type="text" class="form-control" id="email" name="dyer" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Düğün Adresi</label>
              			<input type="text" class="form-control" id="email" name="dadres" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Kına Tarihi <span class="text-danger"></span></label>
              			<input type="text" class="form-control" id="email" name="ktarih" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Kına Başlangıç Saati</label>
              			<input type="text" class="form-control" id="email" name="kbaslangic" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Kına Bitiş Saati</label>
              			<input type="text" class="form-control" id="email" name="kbitis" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Kına Yeri</label>
              			<input type="text" class="form-control" id="email" name="kyer" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Kına Adresi</label>
              			<input type="text" class="form-control" id="email" name="kadres" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Davetiye Sözü</label>
              			<input type="text" class="form-control" id="email" name="dsöz" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Adınız Soyadınız</label>
              			<input type="text" class="form-control" id="email" name="dkad" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Telefon Numaranız</label>
              			<input type="text" class="form-control" id="email" name="dtelefon" placeholder="" required>
              		</div>

                  <div class="form-group">
                    <label class="control-label " for="text">Teslimat Adresi</label>
                    <textarea type="text" class="form-control" id="email" name="teslimatadres" placeholder="" required></textarea>
                  </div>


              		<div class="form-group">
                    <h4>Ödeme Şeklini Şekliniz:</h4>
                  </div>

                <div class="form-group">
              <label><input type="radio" name="optradio" checked> HAVALE/EFT</label>
          </div>

          <div class="form-group">
            <label><input type="radio" name="optradio" disabled> Kredi Kartı</label>
          </div>

          <div class="form-group">
                    <h4>Kargo Firmayı Seçiniz:</h4>
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1" name="firmakategori">
                   
            <?php error_reporting(0);   
include("vtbaglan.php");
session_start();

$sql ="SELECT * FROM tblfirma";
$exec = mysql_query($sql);
$i = 0 ;  while($fetch = mysql_fetch_array($exec))
     {
        $rol_sira = $fetch['firma_Id'];
       $rol_ad   = $fetch['firma_Ad'];
     echo '<option value="'.$rol_sira.'" > '.$rol_ad.'</option>';
     
     
       
     }?>
   </select>
   <div class="alert alert-info" role="alert" style="margin-top:10px; height:10px;"><h6 style="margin-top: -6px;">Kargo teslimatı ücretsizdir!</h6></div>
        
          </div>

            		<div class="form-group"> 
              			 <div class=" col-sm-10" style="margin-left: -17px;">
                    		<button type="submit" class="btn btn-default  btnuye" name="dugun_submit"> <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>  Siparişi Tamamla</button> </div>
           			 </div>
           
            	</form>
    		</div>

    		<div id="menu1" class="tab-pane fade">
      			<br><br>
            <h4 class="col-sm-offset-4">Nişan Davetiye Sipariş Formu</h4><br><br>

      			<form class="form-horizontal  col-sm-offset-2 col-sm-8"   method="POST">
           			<div class="form-group">
              			<label class="control-label " for="text">Gelinin Adı Soyadı</label>
              			<input type="text" class="form-control" id="email" name="ngad" placeholder="" required>
              		</div>

            		<div class="form-group">
              			<label class="control-label " for="text">Gelinin Anne Baba Adı</label>                
                    	<input type="text" class="form-control" id="pwd" name="ngab" placeholder="" required>
            		</div>

          			<div class="form-group">
              			<label class="control-label " for="text">Damadın Adı Soyadı</label>
              			<input type="text" class="form-control" id="email" name="ndad" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Damadın Anne Baba Adı</label>
              			<input type="text" class="form-control" id="email" name="ndab" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Nişan Tarihi</label>
              			<input type="text" class="form-control" id="email" name="ntarih" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Nişan Başlangıç Saati</label>
              			<input type="text" class="form-control" id="email" name="nbaslangic" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Nişan Bitiş Saati</label>
              			<input type="text" class="form-control" id="email" name="nbitis" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Nişan Yeri</label>
              			<input type="text" class="form-control" id="email" name="nyer" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Nişan Adresi</label>
              			<input type="text" class="form-control" id="email" name="nadres" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Davetiye Sözü</label>
              			<input type="text" class="form-control" id="email" name="nsoz" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Adınız Soyadınız</label>
              			<input type="text" class="form-control" id="email" name="nkad" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Telefon Numaranız</label>
              			<input type="text" class="form-control" id="email" name="ntelefon" placeholder="" required>
              		</div>

                  <div class="form-group">
                    <label class="control-label " for="text">Teslimat Adresi</label>
                    <textarea type="text" class="form-control" id="email" name="nteslimatadres" placeholder="" required></textarea>
                  </div>

              	<div class="form-group">
                    <h4>Ödeme Şeklini Şekliniz:</h4>
                  </div>

                <div class="form-group">
              <label><input type="radio" name="optradio" checked> HAVALE/EFT</label>
          </div>

          <div class="form-group">
            <label><input type="radio" name="optradio" disabled> Kredi Kartı</label>
          </div>

          <div class="form-group">
                    <h4>Kargo Firmayı Seçiniz:</h4>
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1" name="firmakategori_nikah">
                   
            <?php error_reporting(0);   
include("vtbaglan.php");
session_start();

$sql ="SELECT * FROM tblfirma";
$exec = mysql_query($sql);
$i = 0 ;  while($fetch = mysql_fetch_array($exec))
     {
        $rol_sira = $fetch['firma_Id'];
       $rol_ad   = $fetch['firma_Ad'];
     echo '<option value="'.$rol_sira.'" > '.$rol_ad.'</option>';
     
     
       
     }?>
   </select>
   <div class="alert alert-info" role="alert" style="margin-top:10px; height:10px;"><h6 style="margin-top: -6px;">Kargo teslimatı ücretsizdir!</h6></div>
          </div>

            		<div class="form-group"> 
              			<div class=" col-sm-10" style="margin-left: -17px;">
                    		<button type="submit" class="btn btn-default  btnuye" name="nisan_submit" > <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>  Siparişi Tamamla </button> </div>
           			 </div>
           
            	</form>
    		</div>
    		
    		<div id="menu3" class="tab-pane fade">
      			<br><br>
            <h4 class="col-sm-offset-4">Sünnet Davetiye Sipariş Formu</h4><br><br>

      			<form class="form-horizontal  col-sm-offset-2 col-sm-8"   method="POST">
           			<div class="form-group">
              			<label class="control-label " for="text">Çocuğun Adı Soyadı</label>
              			<input type="text" class="form-control" id="email" name="sad" placeholder="" required>
              		</div>

            		<div class="form-group">
              			<label class="control-label " for="text">Çocuğun Anne Baba Adı</label>                
                    	<input type="text" class="form-control" id="pwd" name="sab" placeholder="" required>
            		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Sünnet Tarihi</label>
              			<input type="text" class="form-control" id="email" name="starih" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Sünnet Başlangıç Saati</label>
              			<input type="text" class="form-control" id="email" name="sbaslangic" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Sünnet Bitiş Saati</label>
              			<input type="text" class="form-control" id="email" name="sbitis" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Sünnet Yeri</label>
              			<input type="text" class="form-control" id="email" name="syer" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Sünnet Adresi</label>
              			<input type="text" class="form-control" id="email" name="sadres" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Davetiye Sözü</label>
              			<input type="text" class="form-control" id="email" name="ssoz" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Adınız Soyadınız</label>
              			<input type="text" class="form-control" id="email" name="skad" placeholder="" required>
              		</div>

              		<div class="form-group">
              			<label class="control-label " for="text">Telefon Numaranız</label>
              			<input type="text" class="form-control" id="email" name="stelefon" placeholder="" required>
              		</div>

                    <div class="form-group">
                    <label class="control-label " for="text">Teslimat Adresi</label>
                    <textarea type="text" class="form-control" id="email" name="steslimatadres" placeholder="" required></textarea>
                  </div>


              		<div class="form-group">
              			<h4>Ödeme Şeklini Şekliniz:</h4>
              		</div>

            		<div class="form-group">
  						<label><input type="radio" name="optradio" checked> HAVALE/EFT</label>
					</div>

					<div class="form-group">
  					<label><input type="radio" name="optradio" disabled> Kredi Kartı</label>
					</div>

          <div class="form-group">
                    <h4>Kargo Firmayı Seçiniz:</h4>
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1" name="firmakategori_sunnet">
                   
            <?php error_reporting(0);   
include("vtbaglan.php");
session_start();

$sql ="SELECT * FROM tblfirma";
$exec = mysql_query($sql);
$i = 0 ;  while($fetch = mysql_fetch_array($exec))
     {
        $rol_sira = $fetch['firma_Id'];
       $rol_ad   = $fetch['firma_Ad'];
     echo '<option value="'.$rol_sira.'" > '.$rol_ad.'</option>';
     
     
       
     }?>
   </select>
   <div class="alert alert-info" role="alert" style="margin-top:10px; height:10px;"><h6 style="margin-top: -6px;">Kargo teslimatı ücretsizdir!</h6></div>
          </div>

            		<div class="form-group"> 
              			 <div class=" col-sm-10" style="margin-left: -17px;">
                    		<button type="submit" class="btn btn-default  btnuye" name="sunnet_submit"> <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>  Siparişi Tamamla</button> </div>
           			 </div>
           
            	</form>
    		</div>
  		</div>
  	</div>
  		<div class="col-sm-3 " style="margin-top:170px; position:relative;">
  			<?php 
        $total=$_SESSION['total'];
         ?>
					<div id="Sepet_Div_Ozet" data-spy="affix" data-offset-top="205" style="margin-top:20px;">
						<div class="Baslik efCl_1">Sepet Özeti</div>
						<div class="Fiyatlar">
                    <div class="col-md-6 col-sm-6 col-xs-6 Etiket" style="margin-left:-15px;">Ara Toplam</div>
                    <div class="col-md-6 col-sm-6 col-xs-6 Fiyat" style="text-align: right;"><?php echo number_format($total, 2); ?> TL</div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6 Etiket" style="margin-left:-15px;">KDV Tutarı</div>
                    <div class="col-md-6 col-sm-6 col-xs-6 Fiyat" style="text-align: right"><?php echo number_format(($total * 0.08),2)?> TL</div>
                    <div class="clearfix"></div>
                    <div style=" border-bottom: 1px dashed #dddddd; margin-bottom: 10px; margin-top:10px;"></div>
                    <div class="col-md-6 col-sm-8 col-xs-8 Etiket_2" style="margin-left:-15px;">Genel Toplam</div>
                    <div class="col-md-6 col-sm-4 col-xs-4 Fiyat_2" style="text-align: right"><?php echo number_format(($total * 0.08)+$total, 2); ?> TL</div>
                    <div class="clearfix"></div>                                   
            </div>
            
            
    				
					</div>
					
				</div>
  	</div>
    <?php
  	 foreach($_SESSION["shopping_cart"] as $keys => $values)
            { 
          
          
              $dizi[]= $values["item_name"]; 
        
        } ?>

        
            
	<?php include 'footer.php';?>

		<?php
error_reporting(0);   
include("vtbaglan.php");
session_start();
$sql ="select  * from tblsiparis ORDER BY siparis_Id DESC LIMIT 0,1  ";
$exec = mysql_query($sql);
$i = 0 ; 
   while($fetch = mysql_fetch_array($exec))
     {
     $sira  = $fetch['siparis_Id'];
     $siparisid=$sira + 1;
      }
   ?>




<?php
if (isset($_POST['dugun_submit']))
{  
error_reporting(0);   
include("vtbaglan.php");

session_start();
$kullaniciemail=$_SESSION['user_email'];
$siparisAd=$_POST['dkad'];
$_SESSION["siparis_ad"]=$siparisAd;
$firma = $_POST['firmakategori'];

$siparisTelefon=$_POST['dtelefon'];
$teslimatAdres=$_POST['teslimatadres'];
$fiyat=($total * 0.08)+$total;
$date=date('Y.m.d');
//Düğün Formu
$dugungelinad=$_POST['dgad'];
$dugungelinannebaba=$_POST['dgab'];
$dugundamatad=$_POST['ddad'];
$dugundamatannebaba=$_POST['ddab'];
$duguntarih=$_POST['dtarih'];
$dugunbaslangic=$_POST['dbaslangic'];
$dugunbitis=$_POST['dbitis'];
$dugunyer=$_POST['dyer'];
$dugunadres=$_POST['dadres'];
$kinatarih=$_POST['ktarih'];
$kinabaslangic=$_POST['kbaslangic'];
$kinabitis=$_POST['kbitis'];
$kinayer=$_POST['kyer'];
$kinaadres=$_POST['kadres'];
$dugunsoz=$_POST['dsöz'];




foreach($_SESSION["shopping_cart"] as $keys => $values)
   { 
         
    $urunisim= $values["item_name"];
    $urunadet=$values["item_quantity"];
    $query = mysql_query("INSERT INTO `tblsiparis` (`siparis_No`, `siparis_Id`, `siparis_Tarih`, `uye_Email`, `urun_Id`, `siparis_Adet`, `siparis_Fiyat`, `icerik_Id`, `odeme_Id`, `firma_Id`, `durum_Id`, `siparis_AdSoyad`, `siparis_Telefon`, `siparis_Adres`) VALUES (NULL, '$siparisid', '$date', '$kullaniciemail', '$urunisim', '$urunadet', '$fiyat', '1', '1', '$firma', '1', '$siparisAd', '$siparisTelefon', '$teslimatAdres');  ");  
        } 


    $dugun_query = mysql_query("INSERT INTO `tblicerik` (`icerik_Id`, `icerik_Siparis`, `Gelin_Ad_Soyad`, `Gelin_Anne_Baba`, `Damat_Ad_Soyad`, `Damat_Anne_Baba`, `Dugun_Tarih`, `Dugun_Baslangic_Saat`, `Dugun_Bitis_Saat`, `Dugun_Yer`, `Dugun_Adres`, `Kina_Tarih`, `Kina_Baslangic_Saat`, `Kina_Bitis_Saat`, `Kina_Yeri`, `Kina_Adres`, `Dugun_Davetiye_Sozu`, `Nisan_Gelin_Ad_Soyad`, `Nisan_Gelin_Anne_Baba`, `Nisan_Damat_Ad_Soyad`, `Nisan_Damat_Anne_Baba`, `Nisan_Tarih`, `Nisan_Baslangic_Saat`, `Nisan_Bitis_Saat`, `Nisan_Yeri`, `Nisan_Adres`, `Nisan_Davetiye_Sozu`, `Sunnet_Cocuk_Ad_Soyad`, `Sunnet_Cocuk_Anne_Baba`, `Sunnet_Tarih`, `Sunnet_Baslangic_Saat`, `Sunnet_Bitis_Saati`, `Sunnet_Yer`, `Sunnet_Adres`, `Sunnet_Davetiye_Sozu`) VALUES (NULL, '$siparisid', '$dugungelinad', '$dugungelinannebaba', '$dugundamatad', '$dugundamatannebaba', '$duguntarih', '$dugunbaslangic', '$dugunbitis', '$dugunyer', '$dugunadres', '$kinatarih', '$kinabaslangic', '$kinabitis', '$kinayer', '$kinaadres', '$dugunsoz', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');");




    echo "<script language='javascript' type='text/javascript'> location.href='siparis-adim-2.php' </script>";  
    }
    ?>

<?php
if (isset($_POST['nisan_submit']))
{  
error_reporting(0);   
include("vtbaglan.php");

session_start();
$siparisAd=$_POST['nkad'];
$kullaniciemail=$_SESSION['user_email'];
$_SESSION["siparis_ad"]=$siparisAd;
$firma = $_POST['firmakategori_nikah'];

$siparisTelefon=$_POST['ntelefon'];
$teslimatAdres=$_POST['nteslimatadres'];
$fiyat=($total * 0.08)+$total;
$date=date('Y.m.d');
//Düğün Formu
$nisangelinad=$_POST['ngad'];
$nisangelinannebaba=$_POST['ngab'];
$nisandamatad=$_POST['ndad'];
$nisandamatannebaba=$_POST['ndab'];
$nisantarih=$_POST['ntarih'];
$nisanbaslangic=$_POST['nbaslangic'];
$nisanbitis=$_POST['nbitis'];
$nisanyer=$_POST['nyer'];
$nisanadres=$_POST['nadres'];

$nisansoz=$_POST['nsoz'];




foreach($_SESSION["shopping_cart"] as $keys => $values)
   { 
         
    $urunisim= $values["item_name"];
    $urunadet=$values["item_quantity"];
    $query = mysql_query("INSERT INTO `tblsiparis` (`siparis_No`, `siparis_Id`, `siparis_Tarih`, `uye_Email`, `urun_Id`, `siparis_Adet`, `siparis_Fiyat`, `icerik_Id`, `odeme_Id`, `firma_Id`, `durum_Id`, `siparis_AdSoyad`, `siparis_Telefon`, `siparis_Adres`) VALUES (NULL, '$siparisid', '$date', '$kullaniciemail', '$urunisim', '$urunadet', '$fiyat', '1', '1', '$firma', '1', '$siparisAd', '$siparisTelefon', '$teslimatAdres');  ");  
        } 


    $dugun_query = mysql_query("INSERT INTO `tblicerik` (`icerik_Id`, `icerik_Siparis`, `Gelin_Ad_Soyad`, `Gelin_Anne_Baba`, `Damat_Ad_Soyad`, `Damat_Anne_Baba`, `Dugun_Tarih`, `Dugun_Baslangic_Saat`, `Dugun_Bitis_Saat`, `Dugun_Yer`, `Dugun_Adres`, `Kina_Tarih`, `Kina_Baslangic_Saat`, `Kina_Bitis_Saat`, `Kina_Yeri`, `Kina_Adres`, `Dugun_Davetiye_Sozu`, `Nisan_Gelin_Ad_Soyad`, `Nisan_Gelin_Anne_Baba`, `Nisan_Damat_Ad_Soyad`, `Nisan_Damat_Anne_Baba`, `Nisan_Tarih`, `Nisan_Baslangic_Saat`, `Nisan_Bitis_Saat`, `Nisan_Yeri`, `Nisan_Adres`, `Nisan_Davetiye_Sozu`, `Sunnet_Cocuk_Ad_Soyad`, `Sunnet_Cocuk_Anne_Baba`, `Sunnet_Tarih`, `Sunnet_Baslangic_Saat`, `Sunnet_Bitis_Saati`, `Sunnet_Yer`, `Sunnet_Adres`, `Sunnet_Davetiye_Sozu`) VALUES (NULL, '$siparisid', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$nisangelinad', '$nisangelinannebaba', '$nisandamatad', '$nisandamatannebaba', '$nisantarih', '$nisanbaslangic', '$nisanbitis', '$nisanyer', '$nisanadres', 'nisansoz', '0', '0', '0', '0', '0', '0', '0', '0');");




    echo "<script language='javascript' type='text/javascript'> location.href='siparis-adim-2.php' </script>";  
    }
    ?>

    <?php
if (isset($_POST['sunnet_submit']))
{  
error_reporting(0);   
include("vtbaglan.php");

session_start();
$siparisAd=$_POST['skad'];
$kullaniciemail=$_SESSION['user_email'];
$_SESSION["siparis_ad"]=$siparisAd;
$firma = $_POST['firmakategori_sunnet'];

$siparisTelefon=$_POST['stelefon'];
$teslimatAdres=$_POST['steslimatadres'];
$fiyat=($total * 0.08)+$total;
$date=date('Y.m.d');
//Düğün Formu
$sunnetcocukad=$_POST['sad'];
$sunnetcocukannebaba=$_POST['sab'];

$sunnettarih=$_POST['starih'];
$sunnetbaslangic=$_POST['sbaslangic'];
$sunnetbitis=$_POST['sbitis'];
$sunnetyer=$_POST['syer'];
$sunnetadres=$_POST['sadres'];

$sunnetsoz=$_POST['ssoz'];




foreach($_SESSION["shopping_cart"] as $keys => $values)
   { 
         
    $urunisim= $values["item_name"];
    $urunadet=$values["item_quantity"];
    $query = mysql_query("INSERT INTO `tblsiparis` (`siparis_No`, `siparis_Id`, `siparis_Tarih`, `uye_Email`, `urun_Id`, `siparis_Adet`, `siparis_Fiyat`, `icerik_Id`, `odeme_Id`, `firma_Id`, `durum_Id`, `siparis_AdSoyad`, `siparis_Telefon`, `siparis_Adres`) VALUES (NULL, '$siparisid', '$date', '$kullaniciemail', '$urunisim', '$urunadet', '$fiyat', '1', '1', '$firma', '1', '$siparisAd', '$siparisTelefon', '$teslimatAdres');  ");  
        } 


    $dugun_query = mysql_query("INSERT INTO `tblicerik` (`icerik_Id`, `icerik_Siparis`, `Gelin_Ad_Soyad`, `Gelin_Anne_Baba`, `Damat_Ad_Soyad`, `Damat_Anne_Baba`, `Dugun_Tarih`, `Dugun_Baslangic_Saat`, `Dugun_Bitis_Saat`, `Dugun_Yer`, `Dugun_Adres`, `Kina_Tarih`, `Kina_Baslangic_Saat`, `Kina_Bitis_Saat`, `Kina_Yeri`, `Kina_Adres`, `Dugun_Davetiye_Sozu`, `Nisan_Gelin_Ad_Soyad`, `Nisan_Gelin_Anne_Baba`, `Nisan_Damat_Ad_Soyad`, `Nisan_Damat_Anne_Baba`, `Nisan_Tarih`, `Nisan_Baslangic_Saat`, `Nisan_Bitis_Saat`, `Nisan_Yeri`, `Nisan_Adres`, `Nisan_Davetiye_Sozu`, `Sunnet_Cocuk_Ad_Soyad`, `Sunnet_Cocuk_Anne_Baba`, `Sunnet_Tarih`, `Sunnet_Baslangic_Saat`, `Sunnet_Bitis_Saati`, `Sunnet_Yer`, `Sunnet_Adres`, `Sunnet_Davetiye_Sozu`) VALUES (NULL, '$siparisid', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$sunnetcocukad', '$sunnetcocukannebaba', '$sunnettarih', '$sunnetbaslangic', '$sunnetbitis', '$sunnetyer', '$sunnetadres', 'sunnetsoz');");




    echo "<script language='javascript' type='text/javascript'> location.href='siparis-adim-2.php' </script>";  
    }
    ?>
       
   </body>
</html>
