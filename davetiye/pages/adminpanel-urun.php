<?php $title="Admin Panel - Ürün İşlemleri"; 
	include 'head.php';?>
    <body>
	<?php include 'adminpanel-header.php'; ?>
    	<div class="container-fuild" >
		<div class="row">
    		<div class="col-md-2" style="padding-left:0px; padding-right:0px; ">
        		<?php include 'adminpanel-menu.php'?>
			</div>  
  
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px;  ">
				<div class="col-sm-9" style="padding-left:0px; padding-right:10px; margin-top:20px;">
					<?php
error_reporting(0);	  
include("vtbaglan.php");
session_start();
$sql ="SELECT * FROM tblurun INNER JOIN tblkategori ON tblkategori.kategori_Id=tblurun.urun_Kategori ORDER BY urun_Id ASC";
$exec = mysql_query($sql);
$i = 0 ; 
echo '<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Ürün Listesi</span>
	 <a href="adminpanel-urun-ekle"><span class="glyphicon glyphicon-plus ekle" style="float:right;"><strong>Ekle</strong></span></a></div> 
	  <div class="panel-body">';
  
echo '<table class="table table-bordered table-hover" style="">
    	<thead style="background-color:#5b6e82; color:White;">
     		 <tr>
	  			<th>Sıra</th>
       			 <th>Resim</th>
        		<th> Adı</th>
       			 <th> Kodu</th>
				 <th>Özellik</th>
       			 <th> Fiyatı</th>
       			 <th>Kategori </th>
       			 <th>İşlem</th>
     			 </tr>
   		 </thead>
		<tbody>';
	 while($fetch = mysql_fetch_array($exec))
     {
       $sira = $fetch['urun_Id'];
       $ad   = $fetch['urun_Ad'];
       $kod = $fetch['urun_Kod'];
	    $ozellik = $fetch['urun_Ozellik'];
       $resim    = $fetch['urun_Resim'];
	   $eski_fiyat    = $fetch['urun_Eski_Fiyat'];
	   $yeni_fiyat    = $fetch['urun_Yeni_Fiyat'];
	   $kategori    = $fetch['kategori_Ad'];

 		echo' <tr class="">
				 <td>'.$sira.'</td>
				<td  style="text-align:center"><img class="img-rounded " src="'.$resim.'" alt="" style="width:50px; height:50px; "></td>
        		<td class="align-bottom" style="max-width:10ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$ad.'</td>
       			 <td>'.$kod.'</td>
				  <td style="max-width:15ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$ozellik.'</td>
 			 	<td><del>'.$eski_fiyat.'₺</del> <p class="text-danger">'.$yeni_fiyat.'₺</p></td>
				 <td style="max-width:7ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$kategori.'</td>
		 		<td> <a href="adminpanel-urun-guncelle?id='.$sira.'"><button type="button" class="btn btn btn-warning btn-sm">Güncelle</button></a>
				<a href="adminpanel-urun-sil.php?id='.$sira.'" onclick="return uyar();"><button type="button" class="btn btn-sm btn btn-danger">Sil</button></a></td>
     		 </tr>';
      $i++;  
     }
echo '</tbody></table></div></div>';
 ?>
				</div>    
				<div class="col-sm-3"  style="padding-left:0px; padding-right:10px; margin-top:20px;">
                	<div class="panel panel-default">
  						<div class="panel-heading"><span class="glyphicon glyphicon-search"></span><span style="padding-left:5px; font-size: 15px;">Filtrele</span></div>
  						<div class="panel-body">
                        	<form class="form-inline" action="adminpanel-urun-arama" method="POST">
  								<div class="form-group">
    								<label for="text">Ürün Adı</label>
    								<input type="text" class="form-control" name="urunad">
  								</div>
								<hr>
								<div class="form-group">
    								<label for="text">Ürün Kodu</label>
    								<input type="text" class="form-control" name="urunkod">
  								</div>
								<hr>
								<div class="form-group">
    								<label for="text">Ürün Fiyatı</label>
    								<input type="text" class="form-control" name="urunfiyat">
  								</div>
								<hr>
								<div class="form-group">
    								<label for="text">Kategori</label>
    								<input type="text" class="form-control" name="urunkategori">
  								</div>
								<hr>
								<div class="form-group" style="">
									<button type="submit"  class="btn btn-default " name="submit" ><span class="glyphicon glyphicon-search"></span> Filtrele</button>
								</div>
  							</form>				
						</div>
					</div>
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