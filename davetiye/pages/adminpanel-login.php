<?php $title="Admin Panel - Giriş"; 
		include 'head.php';?>


<?php 
error_reporting(0);
session_start();
$login_session=$_SESSION['login_admin'];
if(isset($login_session)) 
{ 
  
  header('Location: adminpanel-hesabim.php'); 
  exit; 
} ?>

    <body style="background-color:#ebebeb; ">
		
    	<div class="ap-log-container">
        	<div class="ap-log-content">
            	<div class="ap-log-title">Admin Panel Giriş</div>
                <form class="form-horizontal" method="POST">
  					<div class="form-group">
  					  <label class="ap-log-label" for="email">Eposta Adresi</label>
    					<input type="email" class="form-control" id="email" name="email">
  						</div>
  					<div class="form-group">
  					  <label class="ap-log-label" for="pwd">Şifre</label>
  					  <input type="password" class="form-control" id="pwd" name="pwd">
  					</div>
                    <div class="form-group"> 
   					<div class="col-sm-6" style="margin-left:-15px;">
     					<div class="checkbox ap-log-checkbox" >
        					<label><input type="checkbox"> Beni Hatırla</label>
      					</div>
    				</div>
                    <div class="col-sm-6" >
     					
        					<label class="ap-log-sifreunut" style="padding-left:65px; margin-top:10px;"><a href="#">Şifremi Unuttum?</a></label>
      					
    				</div>
  				</div>
  					<button type="submit" class="btn btn-default ap-log-button" name="submit">Giriş</button>
                    
                    
				  <?php
if (isset($_POST['submit']))
	{	
		
		error_reporting(0);	  
include("vtbaglan.php");

session_start();

$email=$_POST['email'];
$password=$_POST['pwd'];


 
$query = mysql_query("SELECT uyeAd,uyeEmail FROM tbluye WHERE uyeEmail='$email' and uyeSifre='$password' and uyeRol_Id=1");

 if (mysql_num_rows($query) != 0)
{
	$verileriCek = mysql_query("select uyeAd,uyeId from tbluye where uyeEmail='$email'");
	
	//Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
	while ($b=mysql_fetch_array($verileriCek)){
	  
	 //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.

	 $_SESSION['login_admin']= $b['uyeAd'];
  $_SESSION['admin_Id']= $b['uyeId'];

   }
	echo "<script language='javascript' type='text/javascript'> location.href='adminpanel-anasayfa.php' </script>";
	
  }

  else if (empty($email) && !empty($password)) {  $mesaj= "Email Adresi Boş Geçilemez!"; }
  else if (!empty($email) && empty($password)) {  $mesaj= "Şifreyi Boş Geçilemez"; }
  else if (empty($email) && empty($password)) {  $mesaj= "Lütfen Yukarıdaki Alanları Doldurunuz!"; }
  else{$mesaj= "Eposta veya Şifre Hatalı!";}

}
    
?>
<p style="margin-top:20px; margin-left:-10px; color:red"><?php error_reporting(0);	   echo "$mesaj"; ?></p>
				</form>
            </div>
        </div>
       
   </body>
</html>

