<?php $title="Admin Panel - Firma Güncelle"; 
	include 'head.php';?>
    <body>
	<?php include 'adminpanel-header.php'; ?>
    	<div class="container-fuild" >
		<div class="row">
    		<div class="col-md-2" style="padding-left:0px; padding-right:0px; ">
        		<?php include 'adminpanel-menu.php';?>
			</div>  
			<?php include("vtbaglan.php");
session_start();
$gelenid=$_GET['id']; 
$sql ="SELECT * FROM tblfirma where firma_Id='$gelenid'";
$exec = mysql_query($sql);
$fetch = mysql_fetch_array($exec);
$sira = $fetch['firma_Id'];
       $ad   = $fetch['firma_Ad'];
       $resim = $fetch['firma_Resim'];
	   
?>
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Kargo Firma Güncelle</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Firma Ad</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="urunad" name="firmaad" value="<?php echo $ad; ?>">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Firma Resim</label>
								<div class="col-sm-9"> 
									<input type="text" class="form-control" id="urunkod" name="firmaresim" value="<?php echo $resim; ?>">
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
								
								$ad = $_POST['firmaad'];
								$resim = $_POST['firmaresim'];
															

								if (empty($ad) || empty($resim)) 
									{ 
										$mesaj= "Lütfen Boş Alan Bırakmayınız!"; 
										$color="Red";
									}
 
								else{
									if ($_POST)
									{
										$query = mysql_query("UPDATE `tblfirma` SET firma_Ad='$ad', firma_Resim='$resim' WHERE `tblfirma`.`firma_Id` = '$gelenid'");
										session_start();
										echo "<script language='javascript' type='text/javascript'> location.href='adminpanel-firma.php' </script>";	
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