<?php 
error_reporting(0);
session_start();
$login_session=$_SESSION['admin_Id'];
 $title="Admin Panel - Kullanıcı İşlemleri"; 
  include 'head.php';
if(!isset($login_session)) 
{ 
  echo '<script>alert("Devam etmek için lütfen giriş yapınız.")</script>';
  echo '<script>window.location="adminpanel-login.php"</script>';
  exit; 
} ?>
<body>
  <?php include 'adminpanel-header.php'; ?>
     <div class="container-fuild" >
      <div class="row">
        <div class="col-md-2" style="padding-left:0px; padding-right:0px;">
            <?php include 'adminpanel-menu.php';?>
      </div>  
  
      <div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px;">
        <div class="col-sm-12" style="padding-left:0px; padding-right:10px;">
     
 <?php
        $gelenid=$_GET['id']; 
        error_reporting(0);   
      include("vtbaglan.php");

      session_start();
        echo '<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Sipariş Listesi</span>
  </div> 
    <div class="panel-body">';

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


<div class="container">

<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Gelin Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dgad" value="<?php echo $dugungelinad; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Gelin Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dgab" value="<?php echo $dugungelinannebaba; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Damat Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ddad" value="<?php echo $dugundamatad; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text"> Damat Anne Baba Adı</label>
                <div class="col-sm-9" >
                  <input type="text" class="form-control" id="urunad" name="ddab" value="<?php echo $dugundamatannebaba; ?>" readonly> 
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dtarih" value="<?php echo $duguntarih; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dbaslangic" value="<?php echo $dugunbaslangicsaat; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dbitis" value="<?php echo $dugunbitissaat; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dyer" value="<?php echo $dugunyer; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dadres" value="<?php echo $dugunadres; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kina Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ktarih" value="<?php echo $kinatarih; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kina Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kbaslangic" value="<?php echo $kinabaslangic; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kına Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kbitis" value="<?php echo $kinabitis; ?>" readonly>
                </div>
              </div>

                <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kına Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kyer" value="<?php echo $kinayer; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Kına Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="kadres" value="<?php echo $kinaadres; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Düğün Davetiye Sözü</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="dsoz" value="<?php echo $dugundavetiyesozu; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Gelin Adı </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ngad" value="<?php echo $nisangelinad; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Gelinin Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ngab" value="<?php echo $nisangelinannebaba; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Damat  Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ndad" value="<?php echo $nisandamatad; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Damat Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ndab" value="<?php echo $nisandamatannebaba; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ntarih" value="<?php echo $nisantarih; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nbaslangic" value="<?php echo $nisanbaslangicsaat; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nbitis" value="<?php echo $nisanbitissaat; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nyer" value="<?php echo $nisanyer; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nadres" value="<?php echo $nisanadres; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Nişan Davetiye Sözü</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="nsoz" value="<?php echo $nisandavetiye; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Çocuğun Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="cad" value="<?php echo $sunnetad; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Çocuğun Anne Baba Adı</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="cab" value="<?php echo $sunnetannebaba; ?>" readonly>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Tarihi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="starih" value="<?php echo $sunnettarih; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Başlangıç Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="sbaslangic" value="<?php echo $sunnetbaslangicsaat; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Bitiş Saati</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="sbitis" value="<?php echo $sunnetbitissaati; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Yeri</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="syer" value="<?php echo $sunnetyer; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Sünnet Adresi</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="sadres" value="<?php echo $sunnetadres; ?>" readonly>
                </div>
              </div>

               <div class="form-group">
                <label class="control-label col-sm-3" for="text">Davetiye Sözü</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="urunad" name="ssoz" value="<?php echo $sunnetdavetiyesozu; ?>" readonly>
                </div>
              </div>

               

             
</form>
</div></div></div></div>
</div>

</div>
	<?php include 'footer.php';?>
		
  
       
   </body>
</html>
