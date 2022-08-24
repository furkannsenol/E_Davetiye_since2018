<?php 
error_reporting(0);
session_start();
$login_session=$_SESSION['login_user'];
if(!isset($login_session)) 
{ 
  echo '<script>alert("Devam etmek için lütfen giriş yapınız.")</script>';
  echo '<script>window.location="login.php"</script>';
  exit; 
} ?>
<?php $title="Ana Sayfa - Davetiyem.com"; 
		include 'head.php';?>
    <body>
		<?php include 'topbar.php';?>
    	
		<?php include 'menu.php';?>
		<div class="container">
      <h1><span class="glyphicon glyphicon-circle-arrow-right" ></span> 2/2 Adım: Havale/EFT İle Ödeme İşlemi</h1>
      <hr>
        <h1>HESAP NUMARAMIZ: XXX XXXXXX XXXXXX</h1><br>
        <?php   $total=$_SESSION['total']; ?>
        <h4 style="text-transform: capitalize;"> Sayın <?php echo $_SESSION["siparis_ad"]; ?> </h4><h4>Siparişiniz oluşturulmuştur. Yukardaki IBAN Numarasına <?PHP echo number_format(($total * 0.08)+$total, 2); ?> TL yatırıp makbuzun resmini ve Sipariş Numaranızı <a href="mailto:frkn.snl@hotmail.com" >Email Adresimize</a> yolladığınız takdirde sipariş işleminiz gerçekleştirelecektir. Detaylı bilgi için <a href="bilgi.php" >buraya tıklayınız!</a></h4><br>
        <h4><a href="siparislerim.php">Siparişimi Görüntüle</a></h4>
		</div>

  		
  	
	<?php include 'footer.php';?>
		
      
       
   </body>
</html>
