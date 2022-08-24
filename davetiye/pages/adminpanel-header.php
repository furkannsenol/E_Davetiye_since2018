
			<?php 
 				error_reporting(0);
				session_start();
				$login_session=$_SESSION['login_admin'];
				$admin_session=$_SESSION['admin_Id'];
				$hesap_link='adminpanel-hesabim.php?uye_Id='.$admin_session.'';
				if(empty($login_session))
				{
					header('location: adminpanel-login.php');
				}
			?>
      

<header id="header" class="navbar  navbar-static-top">
			<div class="container-fluid">
			
			<div id="header-logo" class="navbar-header" style="float:left;"><a href="adminpanel-anasayfa.php" class="navbar-brand" style="margin-top:-14px;"><img src="../images/logo1.png" alt="Davetiye" title="Davetiye" width="270" height="50"/></a></div>
				<ul class="nav navbar-nav navbar-right">
			
			
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../images/admin.jpg" width="45" height="45" alt="demo demo" title="demo" id="user-profile" class="img-circle" /><?php echo "$login_session" ?> <i class="fa fa-caret-down fa-fw"></i></a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="<?php echo "$hesap_link";?>"><i class="fa fa-user-circle-o fa-fw"></i> Profilim</a></li>
							
							
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Destek</li>
							<li><a href="anasayfa" target="_blank"><i class="glyphicon glyphicon-home"></i> Davetiye Ana Sayfa</a></li>
							<li><a href="" target="_blank"><i class="fa fa-file-text-o fa-fw"></i> Dökümanlar</a></li>
							<li><a href="" target="_blank"><i class="fa fa-comments-o fa-fw"></i> Destek Formu</a></li>
						</ul>
					</li>
					<li><a href="adminpanel-logout.php"><i class="fa fa-sign-out"></i> <span class="hidden-xs hidden-sm hidden-md">Çıkış</span></a></li>
				</ul>
			</div>
		</header>

		