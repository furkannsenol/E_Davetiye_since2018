<section id="top-bar" style="margin-top:10px;">
			<div class="container">
				<div class="row" >
				
					<div class="col-sm-3" style="margin-top:-12px; ">
						<a href="anasayfa.php"><img src="../images/logo1.png" width="270" height="50" class="img-rounded" alt="Davetiyem"></a>
					</div>
					
					<div class="col-sm-offset-1 col-sm-4" >
						<form id="searchForm" action="urun-arama" method="POST" >
							<div class="input-group" >
								<input type="text" class="form-control" name="aranan"   placeholder="Aradığınız Her Şey" >
									<span class="input-group-btn" >
										<button class="btn btn-default"  type="submit"><i class="glyphicon glyphicon-search"></i></button>
									</span>
							</div>
						</form>
					</div>	
					
					<div class="col-sm-4 menu-top-right" style=" margin-top:10px; text-align:right;">
						<ul class="list-inline" >
							<li><a href="#"  ><span class="glyphicon glyphicon-road "></span> SİPARİŞ TAKİP</a></li>
							
                           	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user" style="margin-left:3px"></span>
							<?php 
 								error_reporting(0);
								session_start();
								$login_session=$_SESSION['login_user'];
								if(empty($login_session)){
									 echo "Giriş";
									 $girisyap_text="Giriş Yap";
									 $uyeol_text="Üye Ol";
									 $girisyap_link="login.php";
									$uyeol_link="register.php";
								}
								else{
									echo "$login_session";
									$girisyap_text="Hesabım";
									$uyeol_text="Güvenli Çıkış";
									$uye_Id=$_SESSION['user_Id'];
									$girisyap_link='hesabim.php?uye_Id='.$uye_Id.'';
									$uyeol_link="logout.php";

								}
								?></a>
       							 <ul class="dropdown-menu">
        							  <li><a href="<?php echo "$girisyap_link";?>"><?php echo "$girisyap_text";?></a></li>
        							  <?php 
 										error_reporting(0);
										session_start();
										$login_session1=$_SESSION['login_user'];
										if(!empty($login_session1)){
										 echo ' <li><a href="siparislerim.php">Siparişlerim</a></li>';
										 } ?>
         							  <li><a href="<?php echo "$uyeol_link";?>"><?php echo "$uyeol_text";?></a></li>
         							  
        						</ul>
     						 </li>
							<li><a href="sepet.php" ><span class="glyphicon glyphicon-shopping-cart" ></span> SEPET<span class="badge" style="margin-left:3px;"><?php echo count($_SESSION["shopping_cart"]) ?></span></a></li>
						</ul><!--li ul li a{
				font-size:15px; color:gray; 
						}*/-->
					</div>
				</div>
			</div>
		</section><!--Section Top Bar Bitiş-->
		