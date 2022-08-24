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
    <div class="container uyecerceve">
      <h2 style="text-align: center">Şifre Değiştir</h2><br>
       <?php include("vtbaglan.php");
        session_start();
        $gelenid=$_GET['uye_Id']; 
        $sql ="SELECT * FROM tbluye  where uyeId='$gelenid'";
        $exec = mysql_query($sql);
        $fetch = mysql_fetch_array($exec);

        
        $sifre = $fetch['uyeSifre'];
?>
      

            <form class="form-horizontal col-sm-offset-2 col-sm-7"   method="POST">
              
               

            <div class="form-group">
              <label class="control-label col-sm-3" for="text">Mevcut Şifre</label>
              <div class="col-sm-9">
                   <input type="password" class="form-control" id="ilce" name="pw" placeholder="" >
                 </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-3" for="text">Yeni Şifre</label>
              <div class="col-sm-9">
                   <input type="password" class="form-control" id="ilce" name="pw1" placeholder="" required>
                 </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-3" for="text">Şifre Tekrar</label>
              <div class="col-sm-9">
                   <input type="password" class="form-control" id="ilce" name="pw2" placeholder="" required>
                 </div>
            </div>              
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-default  btnuye" name="sifreguncelle"> Şifreyi Kaydet </button>
                
              </div>
            </div>
          </form>
        </div>
<?php
if (isset($_POST['sifreguncelle']))
              { 
                error_reporting(0);   
                include("vtbaglan.php");
                session_start();
                
                
                $msifre = $_POST['pw'];
                $sifre1 = $_POST['pw1'];
                $sifre2 = $_POST['pw2'];
                
                if($sifre1 != $sifre2)
                {
                  echo '<script>alert("Şifre ve Şifre Tekrar Aynı Olmalıdır.")</script>'; 
  
                }
                else if($sifre!=$msifre)
                {
                  echo '<script>alert("Mevcut Şifre Hatalı.")</script>'; 
                }  
                else{
                  $query = mysql_query("UPDATE `tbluye` SET uyeSifre='$sifre1' WHERE `tbluye`.`uyeId` = '$gelenid' AND UyeSifre='$msifre'");   

                    echo '<script>alert("Şifreniz başarıyla güncellenmiştir.")</script>'; 
                  
                  ;}
}
?>

      
    
  <?php include 'footer.php';?>
    
      
       
   </body>
</html>
