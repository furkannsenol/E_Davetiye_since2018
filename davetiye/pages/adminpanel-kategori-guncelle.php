<?php $title="Admin Panel - Kategori Güncelle"; 
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
$sql ="SELECT * FROM tblkategori where kategori_Id='$gelenid'";
$exec = mysql_query($sql);
$fetch = mysql_fetch_array($exec);
$sira = $fetch['kategori_Id'];
       $ad   = $fetch['kategori_Ad'];
       $katust = $fetch['kategori_Ust_Id'];
	   
?>
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Kategori Güncelle</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Kategori Ad</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="urunad" name="kategoriad" value="<?php echo $ad; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Üst Kategori Ad</label>
								<div class="col-sm-9"> 
									 <select class="form-control" id="sel1" name="kategoriust">
									 
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
								<button type="submit" class="btn btn-default  btnuye" name="submit">  Güncelle</button>

							<?php 
							if (isset($_POST['submit']))
							{	
								error_reporting(0);	  
								include("vtbaglan.php");
								session_start();
								
								$ad = $_POST['kategoriad'];
								$katust = $_POST['kategoriust'];
															

								if (empty($ad)) 
									{ 
										$mesaj= "Lütfen Boş Alan Bırakmayınız!"; 
										$color="Red";
									}
 
								else{
									if ($_POST)
									{
										$query = mysql_query("UPDATE `tblkategori` SET kategori_Ad='$ad', kategori_Ust_Id='$katust' WHERE `tblkategori`.`kategori_Id` = '$gelenid'");
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