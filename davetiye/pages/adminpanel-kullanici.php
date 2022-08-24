<?php $title="Admin Panel - Kullanıcı İşlemleri"; 
	include 'head.php';?>
    <body>
		<?php include 'adminpanel-header.php'; ?>
		
    	<div class="container-fuild " >
			<div class="row">
    		<div class="col-md-2" style="padding-left:0px; padding-right:0px;">
        		<?php include 'adminpanel-menu.php'?>
			</div>  
  
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<?php
error_reporting(0);	  
include("vtbaglan.php");
session_start();
$sql ="SELECT * FROM tbluye INNER JOIN tblrol ON tblrol.rol_Id=tbluye.uyeRol_Id ORDER BY uyeId ASC";
$exec = mysql_query($sql);
$i = 0 ; 
echo '<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Kullanıcı Listesi</span>
	 <a href="adminpanel-kullanici-ekle"><span class="glyphicon glyphicon-plus ekle" style="float:right;"><strong>Ekle</strong></span></a></div> 
	  <div class="panel-body">';
  
echo '<table class="table table-bordered table-hover" >
    	<thead style="background-color:#5b6e82; color:White;"> 
     		 <tr >
	  			<th>Sıra</th>
       			 <th>Adı Soyadı</th>
				 <th>Yetki</th>
				 <th>Email</th>
        		<th>Ülke</th>
				<th>Şehir</th>
				<th>İlçe</th>
				<th>Telefon</th>
				
				
       			 <th>İşlem</th>
     			 </tr>
   		 </thead>
		<tbody>';
	 while($fetch = mysql_fetch_array($exec))
     {
       $sira = $fetch['uyeId'];
       $ad   = $fetch['uyeAd'];
	   $soyad   = $fetch['uyeSoyad'];
	   $ulke   = $fetch['uyeUlke'];
	   $sehir   = $fetch['uyeSehir'];
	   $ilce   = $fetch['uyeIlce'];
	   $tel   = $fetch['uyeTel'];
	   $email   = $fetch['uyeEmail'];
	   $yetki   = $fetch['rol_Ad'];
		
 		echo' <tr class="">
				 <td>'.$sira.'</td>
				 <td>'.$ad.' '.$soyad.'</td>
				 <td>'.$yetki.'</td>
				 <td>'.$email.'</td>
				 <td>'.$ulke.'</td>
				 <td>'.$sehir.'</td>
				 <td>'.$ilce.'</td>
				 <td>'.$tel.'</td>
				 
       			
		 		<td><a href="adminpanel-kullanici-guncelle?id='.$sira.'"><button type="button" class="btn btn btn-warning btn-sm">Güncelle</button></a>
				<a href="adminpanel-kullanici-sil?id='.$sira.'" onclick="return uyar();"><button type="button" class="btn btn-sm btn btn-danger">Sil</button></a></td>
     		 </tr>';
      $i++;  
     }
echo '</tbody></table></div></div>';
 ?>
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