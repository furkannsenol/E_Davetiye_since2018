<?php $title="Admin Panel - Kategori İşlemleri"; 
	include 'head.php';?>
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
        $kisi=$_SESSION['user_email'];

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
          <th style="width:10px;">Sipariş Numarası</th>
            <th style="width:10px;">İsim Soyisim </th>
             <th style="width:50px;">Telefon Numarası</th>
             <th>Oluşturma Tarih</th>
              <th>Ödeme Tipi</th>
              <th>Tutar</th>
              <th> Kargo Firması</th>
              <th> Durum</th>
              <th>İşlem</th>
             
             
           </tr>
       </thead>
    <tbody>';

      $sql ="SELECT DISTINCT siparis_Id, durum_Ad, firma_Ad, siparis_Fiyat, siparis_Tarih, odeme_Ad, siparis_Telefon, siparis_AdSoyad FROM tblsiparis INNER JOIN tbldurum  ON tbldurum.durum_Id=tblsiparis.durum_Id INNER JOIN  tblfirma ON tblfirma.firma_Id=tblsiparis.firma_Id INNER JOIN  tblodeme ON tblodeme.odeme_Id=tblsiparis.odeme_Id  ORDER BY siparis_Id DESC ";
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
          <td style="width:50px;">'.$isim.'</td>
          <td>'.$telefon.'</td>
          <td>'.$tarih.'</td>
          <td >'.$odeme.'</td>
          <td> '.$tutar.'₺</td>
          <td style="max-width:7ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$firma.'</td>
          <td>'.$durum.'</td>
          <td> <a href="adminpanel-siparis-detay.php?id='.$siparisno.'"><button type="button" class="btn btn btn-warning btn-sm">Detay</button></a>
          <a href="adminpanel-siparis-durum-guncelle.php?id='.$siparisno.'"><button type="button" class="btn btn btn-info btn-sm">Durum Değiştir</button></a>
          <a href="adminpanel-siparis-sil.php?id='.$siparisno.'" onclick="return uyar();"><button type="button" class="btn btn btn-danger btn-sm">Sil</button></a>

           </td>
         </tr>';
      
     }
echo '</tbody></table></div></div>';
     
        ?>
				</div>    
				
			</div>
		</div>
		</div>
	</body>
	<script language="javascript">
function uyar() {
var onay=confirm("Bunu Silmek İstediğinize Emin misiniz?");
if (onay) { return true } else { return false; }
}
</script>
</html>