<?php $title="Ana Sayfa - Davetiyem.com"; 
    include 'head.php';?>
    <body>
    <?php include 'topbar.php';?>
      
    <?php include 'menu.php';?>
    
		<div class="container uyecerceve">
      <div class="row">
        <div class="col-sm-6" style="margin-top: 30px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192631.7398373747!2d28.50825676906622!3d41.02807954163214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa38e89dfac13%3A0xddc019fd2f592e91!2zxLBzdGFuYnVsIEFyZWwgw5xuaXZlcnNpdGVzaSBTZWZha8O2eSBLYW1ww7xzw7w!5e0!3m2!1str!2str!4v1527631687918" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
			<h2 style="text-align:center;">Bize Ulaşın</h2>
          <form class="form-horizontal col-sm-offset-2 "    method="POST">
			
                <div class="form-group">
                    <label class="control-label " for="text">Email Adresiniz</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                  </div>

                   <div class="form-group">
                    <label class="control-label " for="text">Konu</label>
                    <input type="text" class="form-control" id="email" name="konu" placeholder="" required>
                  </div>

                   <div class="form-group">
                    <label class="control-label " for="text">İletiniz</label>
                    <textarea type="text" class="form-control" id="ileti" name="ileti" placeholder="" rows="4" cols="10" required></textarea>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-default btnuye" type="submit" name="iletigonder" >GÖNDER </button>
                  </div>
                </form>
		</div>
    </div>
  </div>

<?php
  		if (isset($_POST['iletigonder']))
{ 
  
  error_reporting(0);   
include("vtbaglan.php");
session_start();
$email = $_POST['email'];
$konu = $_POST['konu'];
$ileti = $_POST['ileti'];

$query = mysql_query("INSERT INTO `tbliletisim` (`iletisim_Id`, `iletisim_Email`, `iletisim_Konu`, `iletisim_İleti`) VALUES (NULL, '$email', '$konu', '$ileti')");
}
 ?>
  	
	<?php include 'footer.php';?>
		
      
       
   </body>
</html>
