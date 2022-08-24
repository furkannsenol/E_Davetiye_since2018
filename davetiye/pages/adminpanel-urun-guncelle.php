<?php $title="Admin Panel - Ürün Güncelle"; 
	include 'head.php';?>
    <body>
	<?php include 'adminpanel-header.php'; ?>
    	<div class="container-fuild" >
		<div class="row">
    		<div class="col-md-2" style="padding-left:0px; padding-right:0px; ">
        		<?php include 'adminpanel-menu.php'?>
			</div>  
			<?php include("vtbaglan.php");
session_start();
$gelenid=$_GET['id']; 
$sql ="SELECT * FROM tblurun INNER JOIN tblkategori ON tblkategori.kategori_Id=tblurun.urun_Kategori where urun_Id='$gelenid'";
$exec = mysql_query($sql);
$fetch = mysql_fetch_array($exec);
$sira = $fetch['urun_Id'];
       $ad   = $fetch['urun_Ad'];
       $kod = $fetch['urun_Kod'];
	   $ozellik = $fetch['urun_Ozellik'];
       $resim    = $fetch['urun_Resim'];
	   $eski_fiyat    = $fetch['urun_Eski_Fiyat'];
	   $yeni_fiyat    = $fetch['urun_Yeni_Fiyat'];
	   $kategori    = $fetch['kategori_Ad'];
?>
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Ürün Güncelle</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Ürün Ad</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="urunad" name="urunad" value="<?php echo $ad; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Ürün Kod</label>
								<div class="col-sm-9"> 
									<input type="text" class="form-control" id="urunkod" name="urunkod" value="<?php echo $kod; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Ürün Özellik</label>
								<div class="col-sm-9">
									<textarea type="text" class="form-control" id="urunozellik" name="urunozellik" value=""><?php echo $ozellik; ?></textarea>
								</div>
							</div> 
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Ürün Eski Fiyat</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="uruneskifiyat" name="uruneskifiyat" value="<?php echo $eski_fiyat; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Ürün Yeni Fiyat</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="urunyenifiyat" name="urunyenifiyat" value="<?php echo $yeni_fiyat; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="tel">Ürün Kategori</label>
								<div class="col-sm-9">
									<select class="form-control" id="sel1" name="urunkategori">
									 <option disabled selected> Ait Olduğu Kategori: <?php echo $kategori ?> </option>
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
									<input  type="text" class="form-control" id="resim" name="urunresim" value="<?php echo $resim; ?>"/>
								</div>
							</div> 
            

							<div class="form-group"> 
								<div class="col-sm-offset-3 col-sm-10">
								<button type="submit" class="btn btn-default  btnuye" name="submit">  Güncelle</button>

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

								

								if (empty($ad) || empty($kod) || empty($ozellik) || empty($eskifiyat) || empty($yenifiyat) || empty($kategori) || empty($resim)) 
									{ 
										$mesaj= "Lütfen Boş Alan Bırakmayınız!"; 
										$color="Red";
									}
 
								else{
									if ($_POST)
									{
										$query = mysql_query("UPDATE `tblurun` SET urun_Ad='$ad', urun_Resim='$resim', urun_Kod='$kod', urun_Ozellik='$ozellik', urun_Eski_Fiyat='$eskifiyat', urun_Yeni_Fiyat='$yenifiyat', urun_Kategori='$kategori' WHERE `tblurun`.`urun_Id` = '$gelenid'");
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