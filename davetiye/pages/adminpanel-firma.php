<?php $title="Admin Panel - Firma İşlemleri"; 
	include 'head.php';?>
    <body>
	<?php include 'adminpanel-header.php'; ?>
		
    	<div class="container-fuild" >
		<div class="row">
    		<div class="col-md-2" style="padding-left:0px; padding-right:0px;">
        		<?php include 'adminpanel-menu.php'?>
			</div>  
  
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px;">
				<div class="col-sm-12" style="padding-left:0px; padding-right:10px;">
					<?php
error_reporting(0);	  
include("vtbaglan.php");
session_start();
$sql ="SELECT * FROM tblfirma ORDER BY firma_Id ASC";
$exec = mysql_query($sql);
$i = 0 ; 
echo '<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Kargo Firma Listesi</span>
	 <a href="adminpanel-firma-ekle"><span class="glyphicon glyphicon-plus ekle" style="float:right;"><strong>Ekle</strong></span></a></div> 
	  <div class="panel-body">';
  
echo '<table class="table table-bordered table-hover" style="">
    	<thead style="background-color:#5b6e82; color:White;">
     		 <tr>
	  			<th>Sıra</th>
       			 <th>Resim</th>
        		<th>Kargo Firma Adı</th>
       			 
       			 <th>İşlem</th>
     			 </tr>
   		 </thead>
		<tbody>';
	 while($fetch = mysql_fetch_array($exec))
     {
       $sira = $fetch['firma_Id'];
       $ad   = $fetch['firma_Ad'];
       
       $resim    = $fetch['firma_Resim'];
	  

 		echo' <tr class="">
				 <td>'.$sira.'</td>
				<td  style="text-align:center"><img class="img-rounded " src="'.$resim.'" alt="" style="width:50px; height:50px; "></td>
        		<td class="align-bottom">'.$ad.'</td>
       			
		 		<td><a href="adminpanel-firma-guncelle?id='.$sira.'"><button type="button" class="btn btn btn-warning btn-sm">Güncelle</button></a>
					<a href="adminpanel-firma-sil?id='.$sira.'" onclick="return uyar();"><button type="button" class="btn btn-sm btn btn-danger">Sil</button></a></td>
     		 </tr>';
      $i++;  
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