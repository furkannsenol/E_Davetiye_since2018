<?php $title="Admin Panel - Ürün İşlemleri"; 
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
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Kategori Ekle</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Kategori Adı</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="katad" name="katad" placeholder="">
								</div>
							</div>
            
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Kategori Üst Id</label>
								<div class="col-sm-9">
									 <select class="form-control" id="sel1" name="katustid">
									 <option value="0"> Ana Kategori </option>
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
								<div class="col-sm-offset-3 col-sm-10">
								<button type="submit" class="btn btn-default  btnuye" name="submit">  Ekle</button>

							<?php 
							if (isset($_POST['submit']))
							{	
								error_reporting(0);	  
								include("vtbaglan.php");
								session_start();
								
								$ad = $_POST['katad'];								
								$resim = $_POST['katustid'];
								

								$ad_kontrol = mysql_query("select * from tblkategori where kategori_Ad='".$ad."'") or die (mysql_error());

								$ad_varmi = mysql_num_rows($ad_kontrol);
								if($ad_varmi > 0)
									{
										$mesaj="Bu isim başka bir ürün tarafından kullanılıyor!";
										$color="Red";
									}

								elseif (empty($ad))
									{ 
										$mesaj= "Lütfen Boş Alan Bırakmayınız!"; 
										$color="Red";
									}
 
								else{
									if ($_POST)
									{
										$query = mysql_query("INSERT INTO `tblkategori` (`kategori_Id`, `kategori_Ad`, `kategori_Ust_Id`) VALUES (NULL,'$ad','$resim')");
										session_start();
										echo "<script language='javascript' type='text/javascript'> location.href='adminpanel-kategori.php' </script>";	
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