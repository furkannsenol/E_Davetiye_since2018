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
error_reporting(0);	  
include("vtbaglan.php");
session_start();
$sql ="SELECT * FROM tbliletisim ORDER BY iletisim_Id ASC";
$exec = mysql_query($sql);
$i = 0 ; 
echo '<div class="panel panel-default">
    <div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;"> Mesaj Listesi</span>
	</div> 
	  <div class="panel-body">';
  
echo '<table class="table table-bordered table-hover" style="">
    	<thead style="background-color:#5b6e82; color:White;">
     		 <tr>
	  			<th>Sıra</th>
       			 <th>Email Adresi</th>
        		<th>Konu</th> 
       			 <th>İleti</th>
       			 <th>İşlem</th>
     			 </tr>
   		 </thead>
		<tbody>';
	 while($fetch = mysql_fetch_array($exec))
     {
       $sira = $fetch['iletisim_Id'];
        $email   = $fetch['iletisim_Email'];
       $konu   = $fetch['iletisim_Konu'];
	   $ileti   = $fetch['iletisim_İleti'];

 		echo' <tr class="">
				 <td style="max-width:5ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$sira.'</td>
				 <td>'.$email.'</td>
				 <td style="max-width:10ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$konu.'</td>
				 <td style="max-width:30ch; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; ">'.$ileti.'</td>
				 
       			
		 		<td><a href="adminpanel-iletisim-detay?id='.$sira.'"><button type="button" class="btn btn btn-warning btn-sm">Detay</button></a>
				<a href="adminpanel-iletisim-sil?id='.$sira.'" onclick="return uyar();"><button type="button" class="btn btn-sm btn btn-danger">Sil</button></a></td>
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