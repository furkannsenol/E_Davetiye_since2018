<?php $title="Admin Panel - İletişim Detay"; 
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
$sql ="SELECT * FROM tbliletisim where iletisim_Id='$gelenid'";
$exec = mysql_query($sql);
$fetch = mysql_fetch_array($exec);
$sira = $fetch['iletisim_Id'];
        $email   = $fetch['iletisim_Email'];
       $konu   = $fetch['iletisim_Konu'];
	   $ileti   = $fetch['iletisim_İleti'];
	   
?>
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">İleti Detay</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7">
							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Konu : </label>
								<div class="col-sm-9">
									<textarea type="text"  readonly class="form-control" id="urunad" name="kategoriad" value=""> <?php echo $konu; ?></textarea>
							</div></div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="text">Gönderen : </label>
								<div class="col-sm-9">
									<textarea type="text" class="form-control" id="urunad" name="kategoriad" readonly value=""> <?php echo $email; ?></textarea>
							</div></div>

							<div class="form-group">
								<label class="control-label col-sm-3" for="text">İleti : </label>
								<div class="col-sm-9">
									<textarea type="text" class="form-control" id="urunad" name="kategoriad" value="" readonly> <?php echo $ileti; ?></textarea> 
							</div></div>
						</form>
                    </div>
				</div>
			</div>	
		</div>
		</div>
	</body>
</html>