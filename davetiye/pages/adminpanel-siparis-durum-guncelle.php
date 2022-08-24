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
$sql ="SELECT * FROM tblsiparis INNER JOIN tbldurum ON tblsiparis.durum_Id=tbldurum.durum_Id where siparis_Id='$gelenid'";
$exec = mysql_query($sql);
$fetch = mysql_fetch_array($exec);

       
	   $yetki   = $fetch['durum_Ad'];
	   
?>
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Sipariş Durum Güncelle</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
							<div class="form-group">
								<label class="control-label col-sm-3" for="pwd">Ödeme Durumu</label>
								<div class="col-sm-9"> 
									 <select class="form-control" id="sel1" name="durum">
									 <option disabled selected> Şuanki Durumu: <?php echo $yetki ?> </option>
									 
						<?php error_reporting(0);	  
include("vtbaglan.php");
session_start();

$sql ="SELECT * FROM tbldurum";
$exec = mysql_query($sql);
$i = 0 ;  while($fetch = mysql_fetch_array($exec))
     {
        $rol_sira = $fetch['durum_Id'];
       $rol_ad   = $fetch['durum_Ad'];
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
								$gelenid=$_GET['id']; 
								$ad = $_POST['durum'];
								
															

								
										$query = mysql_query("UPDATE `tblsiparis` SET durum_Id='$ad'  WHERE `tblsiparis`.`siparis_Id` = '$gelenid'");
										session_start();
										echo "<script language='javascript' type='text/javascript'> location.href='adminpanel-siparis.php' </script>";	
										
										
										
									
								
							}
							?>
							
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