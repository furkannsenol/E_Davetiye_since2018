<?php $title="Admin Panel - Ürün Ekle"; 
	include 'head.php';?>
    <body>
	<?php include 'adminpanel-header.php'; ?>
    	<div class="container-fuild" >
		<div class="row">
    		<div class="col-md-2" style="padding-left:0px; padding-right:0px; ">
        		<?php include 'adminpanel-menu.php'?>
			</div>  
  
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Ürün Ekle</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Ürün Ad</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="urunad" name="urunad" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Ürün Kod</label>
								<div class="col-sm-9"> 
									<input type="text" class="form-control" id="urunkod" name="urunkod" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Ürün Özellik</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="urunozellik" name="urunozellik" placeholder="">
								</div>
							</div> 
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Ürün Eski Fiyat</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="uruneskifiyat" name="uruneskifiyat" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Ürün Yeni Fiyat</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="urunyenifiyat" name="urunyenifiyat" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="tel">Ürün Kategori</label>
								<div class="col-sm-9">
									<select class="form-control" id="sel1" name="urunkategori">
									 
						<?php error_reporting(0);	  
include("vtbaglan.php");
session_start();

$sql ="SELECT * FROM tblkategori";
$exec = mysql_query($sql);
$i = 0 ;  while($fetch = mysql_fetch_array($exec))
     {
        $rol_sira = $fetch['kategori_Id'];
       $rol_ad   = $fetch['kategori_Ad'];
	   echo '<option value="'.$rol_sira.'" > '.$rol_ad.'</option>';
	   
	   
	     
     }?>
	 </select>
								</div>
							</div> 
          
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Ürün Resim</label>
								<div class="col-sm-9">
									<input  type="text" class="form-control" id="resim" name="urunresim"/>
								</div>
							</div> 
            

							<div class="form-group"> 
								<div class="col-sm-offset-3 col-sm-10">
								<button type="submit" class="btn btn-default  btnuye" name="submit">  Ekle</button>

							<?php 
							if (isset($_POST['submit']))
							{	
								error_reporting(0);	  
								include("vtbaglan.php");
								session_start();
								
								$ad = $_POST['urunad'];
								$kod = $_POST['urunkod'];
								$ozellik = $_POST['urunozellik'];
								$eskifiyat = $_POST['uruneskifiyat'];
								$yenifiyat = $_POST['urunyenifiyat'];
								$kategori = $_POST['urunkategori'];
								$resim = $_POST['urunresim'];

								$ad_kontrol = mysql_query("select * from tblurun where urun_Ad='".$ad."'") or die (mysql_error());

								$ad_varmi = mysql_num_rows($ad_kontrol);
								if($ad_varmi > 0)
									{
										$mesaj="Bu isim başka bir ürün tarafından kullanılıyor!";
										$color="Red";
									}

								elseif (empty($ad) || empty($kod) || empty($ozellik) || empty($eskifiyat) || empty($yenifiyat) || empty($kategori) || empty($resim)) 
									{ 
										$mesaj= "Lütfen Boş Alan Bırakmayınız!"; 
										$color="Red";
									}
 
								else{
									if ($_POST)
									{
										$query = mysql_query("INSERT INTO `tblurun` (`urun_Id`, `urun_Ad`, `urun_Resim`, `urun_Kod`, `urun_Ozellik`, `urun_Eski_Fiyat`, `urun_Yeni_Fiyat`, `urun_Kategori`) VALUES (NULL,'$ad','$resim','$kod','$ozellik','$eskifiyat','$yenifiyat','$kategori')");
										session_start();
										echo "<script language='javascript' type='text/javascript'> location.href='adminpanel-urun.php' </script>";	
										$mesaj=" Veriler Başarılı Bir Şekilde Eklendi!";
										$color="Green";
										
										
									}
								}
							}
							?>
							<p style="margin-top:10px; color:<?php echo $color ?>"><?php error_reporting(0);	   echo "$mesaj"; ?></p>
								</div>
							</div>
           
						</form>
                    </div>
				</div>
			</div>	
			</div>
		</div>
	</body>
</html>