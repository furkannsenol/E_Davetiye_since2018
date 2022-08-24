<?php $title="Admin Panel - Kullanıcı İşlemleri"; 
	include 'head.php';?>
    <body>
	<?php include 'adminpanel-header.php'; ?>
    	<div class="container-fuild" >
			<div class="row">
    		<div class="col-md-2" style="padding-left:0px; padding-right:0px; ">
        		<?php include 'adminpanel-menu.php'; ?>
			</div>  
  
			<div class="col-md-10" style="padding-left:10px; padding-right:0px;  margin-left:-1px; margin-top:20px; ">
				<div class="panel panel-default">
					<div class="panel-heading"><span class="glyphicon glyphicon-list" style="padding-left:2px;"></span> <span style="padding-left:5px; font-size: 15px;">Kullanıcı Ekle</span>
					</div>
                    <div class="panel-body"> 

						<form class="form-horizontal col-sm-offset-1 col-sm-7"   method="POST">
							<div class="form-group">
			<div class="form-group">
              <label class="control-label col-sm-3" for="email">Email</label>
              <div class="col-sm-9">
                   <input type="email" class="form-control" id="email" name="email" placeholder="">
                 </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Şifre</label>
                  <div class="col-sm-9"> 
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="">
              </div>
            </div>
			
			<div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Rol</label>
                  <div class="col-sm-9"> 
                   <select class="form-control" id="sel1" name="rol">
						<?php error_reporting(0);	  
include("vtbaglan.php");
session_start();
$sql ="SELECT * FROM tblrol";
$exec = mysql_query($sql);
$i = 0 ;  while($fetch = mysql_fetch_array($exec))
     {
        $rol_sira = $fetch['rol_Id'];
       $rol_ad   = $fetch['rol_Ad'];
	   echo '<option value="'.$rol_sira.'"> '.$rol_ad.'</option>';
	   
	   
	   $i++;  
     }?>
					</select>
              </div>
            </div>
          
          <div class="form-group">
              <label class="control-label col-sm-3" for="text">Ad</label>
              <div class="col-sm-9">
                   <input type="text" class="form-control" id="ad" name="ad" placeholder="">
                 </div>
            </div>
          <div class="form-group">
              <label class="control-label col-sm-3" for="text">Soyad</label>
              <div class="col-sm-9">
                   <input type="text" class="form-control" id="soyad" name="soyad" placeholder="">
                 </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="tel">GSM No</label>
              <div class="col-sm-9">
                   <input type="number" class="form-control" id="tel" name="tel"  placeholder="">
                 </div>
            </div> 
          <div class="form-group">
              <label class="control-label col-sm-3" for="ulke" id="ulke" >Ülke</label>
              <div class="col-sm-9">
              <select class="form-control" id="ulke" name="ulke">
              <option value="Türkiye" selected="selected">Türkiye</option>
              <option value="ABD Virgin Adaları">ABD Virgin Adaları</option>
              <option value="Almanya">Almanya</option>
              <option value="Amerika Birleşik Devletleri">Amerika Birleşik Devletleri</option>
              <option value="Andorra">Andorra</option>
              <option value="Antigua ve Barbuda">Antigua ve Barbuda</option>
              <option value="Arjantin">Arjantin</option>
              <option value="Arnavutluk">Arnavutluk</option>
              <option value="Aruba">Aruba</option>
              <option value="Avustralya">Avustralya</option>
              <option value="Avusturya">Avusturya</option>
              <option value="Azerbaycan">Azerbaycan</option>
              <option value="Bahama">Bahama</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahreyn">Bahreyn</option>
              <option value="Bangladeş">Bangladeş</option>
              <option value="Barbados">Barbados</option>
              <option value="Belçika">Belçika</option>
              <option value="Belize">Belize</option>
              <option value="Benin">Benin</option>
              <option value="Beyaz Rusya">Beyaz Rusya</option>
              <option value="Birleşik Arap Emirlikleri">Birleşik Arap Emirlikleri</option>
              <option value="Bolivya">Bolivya</option>
              <option value="Bosna Hersek">Bosna Hersek</option>
              <option value="Brezilya">Brezilya</option>
              <option value="Brunei">Brunei</option>
              <option value="Bulgaristan">Bulgaristan</option>
              <option value="Burma">Burma</option>
              <option value="Cebelitarık">Cebelitarık</option>
              <option value="Çek Cumhuriyeti">Çek Cumhuriyeti</option>
              <option value="Çin">Çin</option>
              <option value="Danimarka">Danimarka</option>
              <option value="Dominik Cumhuriyeti">Dominik Cumhuriyeti</option>
              <option value="Ekvator">Ekvator</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Endonezya">Endonezya</option>
              <option value="Eritre">Eritre</option>
              <option value="Ermenistan">Ermenistan</option>
              <option value="Estonya">Estonya</option>
              <option value="Fas">Fas</option>
              <option value="Fiji">Fiji</option>
              <option value="Filipinler">Filipinler</option>
              <option value="Finlandiya">Finlandiya</option>
              <option value="Fransa">Fransa</option>
              <option value="Fransız Polinezyası">Fransız Polinezyası</option>
              <option value="Grenada">Grenada</option>
              <option value="Guadalup">Guadalup</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Güney Afrika">Güney Afrika</option>
              <option value="Gürcistan">Gürcistan</option>
              <option value="Hırvatistan">Hırvatistan</option>
              <option value="Hindistan">Hindistan</option>
              <option value="Hollanda">Hollanda</option>
              <option value="Hollanda Antilleri">Hollanda Antilleri</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="İngiliz Virginia Adaları">İngiliz Virginia Adaları</option>
              <option value="İngiltere">İngiltere</option>
              <option value="İrlanda">İrlanda</option>
              <option value="İspanya">İspanya</option>
              <option value="İsrail">İsrail</option>
              <option value="İsveç">İsveç</option>
              <option value="İsviçre">İsviçre</option>
              <option value="İtalya">İtalya</option>
              <option value="İzlanda">İzlanda</option>
              <option value="Jamaika">Jamaika</option>
              <option value="Japonya">Japonya</option>
              <option value="Kamboçya">Kamboçya</option>
              <option value="Kanada">Kanada</option>
              <option value="Katar">Katar</option>
              <option value="Kayman Adaları">Kayman Adaları</option>
              <option value="Kıbrıs">Kıbrıs</option>
              <option value="Kolombiya">Kolombiya</option>
              <option value="Kore">Kore</option>
              <option value="Kosta Rika">Kosta Rika</option>
              <option value="Kuveyt">Kuveyt</option>
              <option value="Küba">Küba</option>
              <option value="Letonya">Letonya</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Litvanya">Litvanya</option>
              <option value="Lübnan">Lübnan</option>
              <option value="Lüksemburg">Lüksemburg</option>
              <option value="Macaristan">Macaristan</option>
              <option value="Makedonya">Makedonya</option>
              <option value="Maldivler">Maldivler</option>
              <option value="Malezya">Malezya</option>
              <option value="Malta">Malta</option>
              <option value="Mauritius">Mauritius</option>
              <option value="Meksika">Meksika</option>
              <option value="Mısır">Mısır</option>
              <option value="Moldova">Moldova</option>
              <option value="Monako">Monako</option>
              <option value="Mozambik">Mozambik</option>
              <option value="Nikaragua">Nikaragua</option>
              <option value="Norveç">Norveç</option>
              <option value="Özbekistan">Özbekistan</option>
              <option value="Panama">Panama</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Peru">Peru</option>
              <option value="Polonya">Polonya</option>
              <option value="Portekiz">Portekiz</option>
              <option value="Porto Riko">Porto Riko</option>
              <option value="Romanya">Romanya</option>
              <option value="Rusya">Rusya</option>
              <option value="Saint Kitts ve Nevis">Saint Kitts ve Nevis</option>
              <option value="Saint Lucia">Saint Lucia</option>
              <option value="San Marino">San Marino</option>
              <option value="Senegal">Senegal</option>
              <option value="Seyşel">Seyşel</option>
              <option value="Singapur">Singapur</option>
              <option value="Slovakya">Slovakya</option>
              <option value="Slovenya">Slovenya</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Suriye">Suriye</option>
              <option value="Suudi Arabistan">Suudi Arabistan</option>
              <option value="Şili">Şili</option>
              <option value="Tayland">Tayland</option>
              <option value="Tayvan">Tayvan</option>
              <option value="Tunus">Tunus</option>
              <option value="Turks ve Caicos Adaları">Turks ve Caicos Adaları</option>
              <option value="Ukrayna">Ukrayna</option>
              <option value="Umman">Umman</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Ürdün">Ürdün</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Vietnam">Vietnam</option>
              <option value="Yeni Zelanda">Yeni Zelanda</option>
              <option value="Yunanistan">Yunanistan</option>
                  </select>
                 </div>
            </div>
           <div class="form-group">
              <label class="control-label col-sm-3" for="text">Şehir</label>
              <div class="col-sm-9">
                   <input type="text" class="form-control" id="sehir" name="sehir" placeholder="">
                 </div>
            </div> 
            <div class="form-group">
              <label class="control-label col-sm-3" for="text">İlçe / Semt</label>
              <div class="col-sm-9">
                   <input type="text" class="form-control" id="ilce" name="ilce" placeholder="">
                 </div>
            </div>
							
							
							<div class="form-group"> 
								<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-default  btnuye" name="submit">  Ekle</button>

							<?php 
							if (isset($_POST['submit']))
							{	
								error_reporting(0);	  
								include("vtbaglan.php");
								session_start();
								
								$email = $_POST['email'];
$pwd = $_POST['pwd'];
$rol = $_POST['rol'];
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$tel = $_POST['tel'];
$ulke = $_POST['ulke'];
$sehir = $_POST['sehir'];
$ilce = $_POST['ilce'];
$sifre=md5($pwd);
$color="Red";
								

								$email_kontrol = mysql_query("select * from tbluye where uyeEmail='".$email."'") or die (mysql_error());

$eposta_varmi = mysql_num_rows($email_kontrol);
if($eposta_varmi > 0)
{
	$mesaj="E-Posta başka bir üye tarafından kullanılıyor!";
	
}elseif (empty($email) || empty($pwd) || empty($rol) || empty($ad) || empty($soyad) || empty($tel) || empty($ulke) || empty($sehir) || empty($ilce)) 
  { 
   $mesaj= "Lütfen Boş Alan Bırakmayınız!"; 
   
   }
								else{
									if ($_POST)
									{
										$sifre= md5($pwd);
										
										$query = mysql_query("INSERT INTO `tbluye` (`uyeId`, `uyeRol_Id`, `uyeAd`, `uyeSoyad`, `uyeUlke`, `uyeSehir`, `uyeIlce`, `uyeTel`, `uyeEmail`, `uyeSifre`) VALUES (NULL, '$rol', '$ad', '$soyad', '$ulke', '$sehir', '$ilce', '$tel', '$email', '$sifre')");
										session_start();
										echo "<script language='javascript' type='text/javascript'> location.href='adminpanel-kullanici.php' </script>";	
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