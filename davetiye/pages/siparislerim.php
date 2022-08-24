<?php 
error_reporting(0);
session_start();
$login_session=$_SESSION['login_user'];
if(!isset($login_session)) 
{ 
  echo '<script>alert("Devam etmek için lütfen giriş yapınız.")</script>';
  echo '<script>window.location="login.php"</script>';
  exit; 
} ?>
<?php $title="Ana Sayfa - Davetiyem.com"; 
		include 'head.php';?>
    <body>
		<?php include 'topbar.php';?>
    	
		<?php include 'menu.php';?>
		<div class="container">
        <?php
        $kisi=$_SESSION['user_email'];

        error_reporting(0);   
      include("vtbaglan.php");

      session_start();
      echo '<table class="table table-bordered table-hover" style="">
      <thead style="background-color:#5b6e82; color:White;">
         <tr>
          <th>Sipariş Numarası</th>
            <th>İsim Soyisim </th>
             <th>Telefon Numarası</th>
             <th>Oluşturma Tarih</th>
              <th>Ödeme Tipi</th>
              <th>Tutar</th>
              <th> Kargo Firması</th>
              <th> Durum</th>
              <th>İşlem</th>
             
             
           </tr>
       </thead>
    <tbody>';

      $sql ="SELECT DISTINCT siparis_Id, durum_Ad, firma_Ad, siparis_Fiyat, siparis_Tarih, odeme_Ad, siparis_Telefon, siparis_AdSoyad FROM tblsiparis INNER JOIN tbldurum  ON tbldurum.durum_Id=tblsiparis.durum_Id INNER JOIN  tblfirma ON tblfirma.firma_Id=tblsiparis.firma_Id INNER JOIN  tblodeme ON tblodeme.odeme_Id=tblsiparis.odeme_Id where uye_Email='$kisi' ORDER BY siparis_Id DESC ";
      $exec = mysql_query($sql);
      while($fetch = mysql_fetch_array($exec))
     {
        $siparisno= $fetch['siparis_Id'];
        $durum=$fetch['durum_Ad'];
        $firma=$fetch['firma_Ad']; 
        $tutar=$fetch['siparis_Fiyat'];
        $isim=$fetch['siparis_AdSoyad'];
        $telefon=$fetch['siparis_Telefon'];
        $tarih=$fetch['siparis_Tarih'];
        $odeme=$fetch['odeme_Ad'];



        echo' <tr class="">
          <td>'.$siparisno.'</td>
          <td>'.$isim.'</td>
          <td>'.$telefon.'</td>
          <td>'.$tarih.'</td>
          <td >'.$odeme.'</td>
          <td> '.$tutar.'₺</td>
          <td style="max-width:7ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$firma.'</td>
          <td>'.$durum.'</td>
          <td> <a href="siparislerim-detay.php?id='.$siparisno.'"><button type="button" class="btn btn btn-warning btn-sm">Detay</button></a>

           </td>
         </tr>';
      
     }
echo '</tbody></table>';
     
        ?>


		</div>

  		
  	<br><br><br><br><br><br><br><br>
	<?php include 'footer.php';?>
		
      
       
   </body>
</html>
