<?php $title="Giriş Yap"; 
		include 'head.php';?>
        
    <body>
		<?php include 'topbar.php';?>
    	
		<?php include 'menu.php';?>
		
		<?php if(isset($_SESSION['login_user'])) 
{ 
  
  header('Location: hesabim.php'); 
  
  exit; 
} 
?>
		
        
        <div class="container uyecerceve ">
		<div class=" member-title" >Üye Girişi
				</div> 
			<form class="form-horizontal col-sm-offset-2 col-sm-7" method="POST" >
  				<div class="form-group">
    				<label class="control-label col-sm-2" for="email">Email</label>
    				<div class="col-sm-10">
     					<input type="email" class="form-control" name="email" id="email" placeholder="">
   					</div>
  				</div>
  				<div class="form-group">
    				<label class="control-label col-sm-2" for="pwd">Şifre</label>
   					 <div class="col-sm-10"> 
     					 <input type="password" class="form-control" name="pwd" id="pwd" placeholder="">
    				</div>
  				</div>
  				<div class="form-group"> 
   					<div class="col-sm-offset-2 col-sm-4">
     					<div class="checkbox">
        					<label><input type="checkbox"> Beni Hatırla</label>
      					</div>
    				</div>
                    <div class="col-sm-offset-2 col-sm-4" style="text-align:right;">
     					
        					<label class="sifre-unut" style="margin-top:10px;"><a href="#">►Şifremi Unuttum</a></label>
      					
    				</div>
  				</div>
  				<div class="form-group"> 
    				<div class="col-sm-offset-2 col-sm-10" >
      					<button type="submit" name="submit" class="btn btn-default btnuye btn-block"><span class="gylphicon glyphicon glyphicon-lock"></span> Giriş Yap</button>
    				
  				
				  <?php
if (isset($_POST['submit']))
	{	
		
		error_reporting(0);	  
include("vtbaglan.php");

session_start();

$email=$_POST['email'];
$password=$_POST['pwd'];
$_SESSION['user_email']=$email;

 
$query = mysql_query("SELECT uyeEmail FROM tbluye WHERE uyeEmail='$email' and uyeSifre='$password'");

 if (mysql_num_rows($query) != 0)
{

	$verileriCek = mysql_query("select uyeId,uyeAd from tbluye where uyeEmail='$email'");
	
	//Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
	while ($b=mysql_fetch_array($verileriCek)){
	  
	 //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
	 $_SESSION['login_user']= $b['uyeAd'];
   $_SESSION['user_Id']= $b['uyeId'];
	}
  
	echo "<script language='javascript' type='text/javascript'> location.href='anasayfa.php' </script>";	
  }

  else if (empty($email) && !empty($password)) {  $mesaj= "Email Adresi Boş Geçilemez!"; }
  else if (!empty($email) && empty($password)) {  $mesaj= "Şifreyi Boş Geçilemez"; }
  else if (empty($email) && empty($password)) {  $mesaj= "Lütfen Yukarıdaki Alanları Doldurunuz!"; }
  else{$mesaj= "Eposta veya Şifre Hatalı!";}

}
    
?>
<p style="margin-top:10px; color:red"><?php error_reporting(0);	   echo "$mesaj"; ?></p>
</div></div>
			</form>
			
		</div>
        
        <div style="">
		<?php include 'footer.php';?>
       </div>
       
   </body>
</html>