<?php

session_start();


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Bu ürün zaten sepette mevcut.")</script>';
			echo '<script>window.location="urun-incele?id='.$_GET["id"].'"</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				
				echo '<script>window.location="sepet.php"</script>';
			}
		}
	}
}
?>
<?php $title="Ürünler - Davetiyem.com"; 
		include 'head.php';?>
    <body>
		<?php include 'topbar.php';?>
    	
		<?php include 'menu.php';?>

		<div class="container" >
			<div class="row">
				  <h2 align="center" style="margin-bottom: 60px; color:gray;">Alışveriş Sepetim (<?php echo count($_SESSION["shopping_cart"]) ?>)</h2>
                <div class="col-sm-9" style="margin-top:20px; ">
                	
              
				<table class="table table-striped table-bordered">
					<thead>
					<tr>
						<th width="40%">Ürün İsmi</th>
						<th width="10%">Adet</th>
						<th width="10%">Fiyat</th>
						<th width="15%">Tutar</th>
						<th width="25%">İşlem</th>
					</tr>
				</thead>
				<tbody>
					<?php

					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;

						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_price"]; ?> ₺</td>
					<td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?> ₺</td>
						<td><a  onclick="return uyar();" href="sepet.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Sepetten Çıkar</span></a></td>
					</tr>
				
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
							$_SESSION["adet"] = $values["item_quantity"];
							
						}
					?>
					<tr>
						<td colspan="5" align="left" ><a href="urunler?kat=tum-urunler"><button class="btn btn-default"><span class="
glyphicon glyphicon-circle-arrow-left"></span> Alışverişe Devam Et</button></a> </td>
						
						
					</tr>
					<?php

					}
					?>

				</tbody>	
				</table>
		
				</div>
				<div class="col-sm-3">
					<div id="Sepet_Div_Ozet" style="margin-top:20px;">
						<div class="Baslik efCl_1">Sepet Özeti</div>
						<div class="Fiyatlar">
                    <div class="col-md-6 col-sm-6 col-xs-6 Etiket" style="margin-left:-15px;">Ara Toplam</div>
                    <div class="col-md-6 col-sm-6 col-xs-6 Fiyat" style="text-align: right;"><?php echo number_format($total, 2); $_SESSION['total']=$total; ?> TL</div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6 Etiket" style="margin-left:-15px;">KDV Tutarı</div>
                    <div class="col-md-6 col-sm-6 col-xs-6 Fiyat" style="text-align: right"><?php echo number_format(($total * 0.08),2)?> TL</div>
                    <div class="clearfix"></div>
                    <div style=" border-bottom: 1px dashed #dddddd; margin-bottom: 10px; margin-top:10px;"></div>
                    <div class="col-md-6 col-sm-8 col-xs-8 Etiket_2" style="margin-left:-15px;">Genel Toplam</div>
                    <div class="col-md-6 col-sm-4 col-xs-4 Fiyat_2" style="text-align: right"><?php echo number_format(($total * 0.08)+$total, 2); ?> TL</div>
                    <div class="clearfix"></div>                                   
            </div>
            <div style=" border-bottom: 1px dashed #dddddd; margin-bottom: 10px;"></div>
            <a href="siparis-adim-1" id="btn_alisverisi_tamamla" class="btn btn-primary btn-block p_tb_10" style="    color: #FFFFFF;
    background-color: #61A119;
    border-color: #4D8014;" name="alisverisi_tamamla">Alışverişi Tamamla <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
    				
					</div>
					
				</div>
		</div>
</div>
		<?php include('footer.php'); ?>
		</body>
<script language="javascript">
function uyar() {
var onay=confirm("Bu Ürünü Sepetenizden Çıkarmak İstediğinize Emin misiniz?");
if (onay) { return true } else { return false; }
}
</script>
		</html>

