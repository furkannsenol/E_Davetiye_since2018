<?php $title="Ana Sayfa - Davetiyem.com"; 
    include 'head.php';?>
    <body>
    <?php include 'topbar.php';?>
      
    <?php include 'menu.php';?>
    
		<div class="container">
     <h1 style="text-align: center;">Sipariş Edilen Ürünler</h1><br><br>
 <?php
        $gelenid=$_GET['id']; 
        error_reporting(0);   
      include("vtbaglan.php");

      session_start();
      echo '<table class="table table-bordered table-hover" style="">
      <thead style="background-color:#5b6e82; color:White;">
         <tr>
          <th>Sipariş Numarası</th>
            <th>Ürün Adı</th>
             <th>Ürün Adeti</th>
             
             
             
           </tr>
       </thead>
    <tbody>';

      $sql ="SELECT * from tblsiparis where siparis_Id=$gelenid ";
      $exec = mysql_query($sql);
      while($fetch = mysql_fetch_array($exec))
     {
        $siparisno= $fetch['siparis_Id'];
        $ürünad= $fetch['urun_Id'];
        $siparisadet= $fetch['siparis_Adet'];
        



        echo' <tr class="">
          <td>'.$siparisno.'</td>
          <td>'.$ürünad.'</td>
          <td>'.$siparisadet.'</td>
        
         </tr>';
      
     }
echo '</tbody></table>';
     
        ?><br><br><br><br>
        <h1 style="text-align: center">Sipariş Formu</h1><br>
        <?php 
        include("vtbaglan.php");
        session_start();
$gelenid=$_GET['id']; 
$sql ="SELECT * FROM tblicerik where icerik_Siparis='$gelenid'";
$exec = mysql_query($sql);
$fetch = mysql_fetch_array($exec);
      $sira = $fetch['icerik_Siparis'];
      $dugungelinad   = $fetch['Gelin_Ad_Soyad'];
      $dugungelinannebaba   = $fetch['Gelin_Anne_Baba'];
      $dugundamatad   = $fetch['Damat_Ad_Soyad'];
      $dugundamatannebaba   = $fetch['Damat_Anne_Baba'];
      $duguntarih   = $fetch['Dugun_Tarih'];
      $dugunbaslangicsaat   = $fetch['Dugun_Baslangic_Saat'];
      $dugunbitissaat   = $fetch['Dugun_Bitis_Saat'];
      $dugunyer   = $fetch['Dugun_Yer'];
      $dugunadres   = $fetch['Dugun_Adres'];
      $kinatarih   = $fetch['Kina_Tarih'];
      $kinabaslangic   = $fetch['Kina_Baslangic_Saat'];
      $kinabitis   = $fetch['Kina_Bitis_Saat'];
      $kinayer   = $fetch['Kina_Yeri'];
      $kinaadres   = $fetch['Kina_Adres'];
      $dugundavetiyesozu   = $fetch['Dugun_Davetiye_Sozu'];
      $nisangelinad   = $fetch['Nisan_Gelin_Ad_Soyad'];
      $nisangelinannebaba   = $fetch['Nisan_Gelin_Anne_Baba'];
      $nisandamatad   = $fetch['Nisan_Damat_Ad_Soyad'];

      $nisandamatannebaba   = $fetch['Nisan_Damat_Anne_Baba'];
      $nisantarih   = $fetch['Nisan_Tarih'];
      $nisanbaslangicsaat   = $fetch['Nisan_Baslangic_Saat'];
      $nisanbitissaat   = $fetch['Nisan_Bitis_Saat'];
      $nisanyer   = $fetch['Nisan_Yeri'];
      $nisanadres   = $fetch['Nisan_Adres'];
      $nisandavetiye   = $fetch['Nisan_Davetiye_Sozu'];
      $sunnetad   = $fetch['Sunnet_Cocuk_Ad_Soyad'];
      $sunnetannebaba   = $fetch['Sunnet_Cocuk_Anne_Baba'];
      $sunnettarih   = $fetch['Sunnet_Tarih'];
      $sunnetbaslangicsaat   = $fetch['Sunnet_Baslangic_Saat'];
      $sunnetbitissaati   = $fetch['Sunnet_Bitis_Saati'];
      $sunnetyer   = $fetch['Sunnet_Yer'];
      $sunnetadres   = $fetch['Sunnet_Adres'];
      $sunnetdavetiyesozu   = $fetch['Sunnet_Davetiye_Sozu'];

?>
<form class="form-horizontal col-sm-offset-2 col-sm-7"   method="POST">
              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Gelin Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dgad" value="<?php echo $dugungelinad; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Gelin Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dgab" value="<?php echo $dugungelinannebaba; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Damat Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ddad" value="<?php echo $dugundamatad; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text"> Damat Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ddab" value="<?php echo $dugundamatannebaba; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dtarih" value="<?php echo $duguntarih; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dbaslangic" value="<?php echo $dugunbaslangicsaat; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dbitis" value="<?php echo $dugunbitissaat; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dyer" value="<?php echo $dugunyer; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dadres" value="<?php echo $dugunadres; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kina Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ktarih" value="<?php echo $kinatarih; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kina Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kbaslangic" value="<?php echo $kinabaslangic; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kına Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kbitis" value="<?php echo $kinabitis; ?>">
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kına Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kyer" value="<?php echo $kinayer; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kına Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kadres" value="<?php echo $kinaadres; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Davetiye Sözü</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dsoz" value="<?php echo $dugundavetiyesozu; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Gelin Adı </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ngad" value="<?php echo $nisangelinad; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Gelinin Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ngab" value="<?php echo $nisangelinannebaba; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Damat  Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ndad" value="<?php echo $nisandamatad; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Damat Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ndab" value="<?php echo $nisandamatannebaba; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ntarih" value="<?php echo $nisantarih; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nbaslangic" value="<?php echo $nisanbaslangicsaat; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nbitis" value="<?php echo $nisanbitissaat; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nyer" value="<?php echo $nisanyer; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nadres" value="<?php echo $nisanadres; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Davetiye Sözü</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nsoz" value="<?php echo $nisandavetiye; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Çocuğun Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="cad" value="<?php echo $sunnetad; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Çocuğun Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="cab" value="<?php echo $sunnetannebaba; ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="starih" value="<?php echo $sunnettarih; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="sbaslangic" value="<?php echo $sunnetbaslangicsaat; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="sbitis" value="<?php echo $sunnetbitissaati; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="syer" value="<?php echo $sunnetyer; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="sadres" value="<?php echo $sunnetadres; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Davetiye Sözü</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ssoz" value="<?php echo $sunnetdavetiyesozu; ?>">
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text"></label>
                <div class="col-sm-9">
                  <button type="submit" class="btn btn-default  btnuye" name="siparis_guncelle"> <span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span>  Güncelle</button> </div>
                </div>
              </div>

             
</form>



</div>
	<?php include 'footer.php';?>
		
    <?php
if (isset($_POST['siparis_guncelle']))
{  
error_reporting(0);   
include("vtbaglan.php");

session_start();
$gelenid=$_GET['id']; 
$dgad=$_POST['dgad'];
$dgab=$_POST['dgab'];
$ddad=$_POST['ddad'];
$ddab=$_POST['ddab'];
$dtarih=$_POST['dtarih'];
$dbaslangic=$_POST['dbaslangic'];
$dbitis=$_POST['dbitis'];
$dyer=$_POST['dyer'];
$dadres=$_POST['dadres'];
$ktarih=$_POST['ktarih'];
$kbaslangic=$_POST['kbaslangic'];
$kbitis=$_POST['kbitis'];
$kyer=$_POST['kyer'];
$kadres=$_POST['kadres'];
$dsoz=$_POST['dsoz'];
$ngad=$_POST['ngad'];
$ngab=$_POST['ngab'];
$ndad=$_POST['ndad'];
$ndab=$_POST['ndab'];
$ntarih=$_POST['ntarih'];
$nbaslangic=$_POST['nbaslangic'];
$nbitis=$_POST['nbitis'];
$nyer=$_POST['nyer'];
$nadres=$_POST['nadres'];
$nsoz=$_POST['nsoz'];
$cad=$_POST['cad'];
$cab=$_POST['cab'];
$starih=$_POST['starih'];
$sbaslangic=$_POST['sbaslangic'];
$sbitis=$_POST['sbitis'];
$syer=$_POST['syer'];
$sadres=$_POST['sadres'];
$ssoz=$_POST['ssoz'];


$sql ="SELECT * from tblsiparis where siparis_Id='$gelenid'";
      $exec = mysql_query($sql);
      while($fetch = mysql_fetch_array($exec))
     {
        $siparis_durum= $fetch['durum_Id'];
        
      }

        if($siparis_durum =="1" || $siparis_durum=="2")
     {

        $query=mysql_query("UPDATE `tblicerik` SET `Gelin_Ad_Soyad` = '$dgad', `Gelin_Anne_Baba` = '$dgab', `Damat_Ad_Soyad` = '$ddad', `Damat_Anne_Baba` = '$ddab', `Dugun_Tarih` = '$dtarih', `Dugun_Baslangic_Saat` = '$dbaslangic', `Dugun_Bitis_Saat` = '$dbitis', `Dugun_Yer` = '$dyer', `Dugun_Adres` = '$dadres', `Kina_Tarih` = '$ktarih', `Kina_Baslangic_Saat` = '$kbaslangic', `Kina_Bitis_Saat` = '$kbitis', `Kina_Yeri` = '$kyer', `Kina_Adres` = '$kadres', `Dugun_Davetiye_Sozu` = '$dsoz', `Nisan_Gelin_Ad_Soyad` = '$ngad', `Nisan_Gelin_Anne_Baba` = '$ngab', `Nisan_Damat_Ad_Soyad` = '$ndad', `Nisan_Damat_Anne_Baba` = '$ndab', `Nisan_Tarih` = '$ntarih', `Nisan_Baslangic_Saat` = '$nbaslangic', `Nisan_Bitis_Saat` = '$nbitis', `Nisan_Yeri` = '$nyer', `Nisan_Adres` = '$nadres', `Nisan_Davetiye_Sozu` = '$nsoz', `Sunnet_Cocuk_Ad_Soyad` = '$cad', `Sunnet_Cocuk_Anne_Baba` = '$cab', `Sunnet_Tarih` = '$starih', `Sunnet_Baslangic_Saat` = '$sbaslangic', `Sunnet_Bitis_Saati` = '$sbitis', `Sunnet_Yer` = '$syer', `Sunnet_Adres` = '$sadres', `Sunnet_Davetiye_Sozu` = '$ssoz' WHERE `tblicerik`.`icerik_Siparis` = '$gelenid';");
        echo '<script>window.location="siparislerim-detay?id='.$_GET["id"].'"</script>';
     }

     else
     {
        echo '<script>alert("Siparişiniz Hazırlandığı veya Siparişiz Tamamlandığından Dolayı Ürün İçeriği Güncellenemez.")</script>';
     }
}

      ?>
       
   </body>
</html>
