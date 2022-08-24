<?php $title="Ana Sayfa - Davetiyem.com"; 
		include 'head.php';?>
    <body>
		<?php include 'topbar.php';?>
    	
		<?php include 'menu.php';?>	
        <div class="container">
			
		</div>
		
        <section id="content" style="margin-top:10px;">
        	<div class="container">
            	<div class="row"> 
					<div class="col-sm-3">
						<?php include 'kategori.php';?>
						
					</div>
                    <div class="col-sm-9" style="">
						<div class="row">
							<?php
error_reporting(0);	  
include("vtbaglan.php");
session_start();
$gelenkat=$_GET['kat'];
if($gelenkat=="tum-urunler")
{
$sql ="select  * from tblurun ORDER BY urun_Id DESC  ";
}
else{
$sql ="select  * from tblurun  where urun_Kategori='$gelenkat' ORDER BY urun_Id DESC  ";
}
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
	   
 		echo' <div class="col-sm-4">
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

                    </div>
                </div>
            </div>
        </section>
        
		 
		<?php include 'footer.php';?>
		
      
       
   </body>
</html>


