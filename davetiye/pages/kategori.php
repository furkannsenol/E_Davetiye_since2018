

    <div >
			
            <?php 
            error_reporting(0);	  
		
            include("vtbaglan.php");
            
            session_start();
			echo '<a href="urunler?kat=tum-urunler" class="list-group-item list-group-item-action">Tüm Ürünler</a>';
                function kategori ($id=0,$string=0){
                    $query = mysql_query("SELECT * FROM tblkategori where kategori_Ust_Id = '$id'");
                    if(mysql_affected_rows()){
						
                        while($row=mysql_fetch_array($query)){
							
                          echo ' <a href="urunler?kat='.$row["kategori_Id"].'"'; echo 'class="list-group-item list-group-item-action">'.str_repeat('-',$string).$row["kategori_Ad"].'</a>';
                            kategori($row["kategori_Id"],$string + 1);
							
                        }
						
                    }else{
                        return false;
                    }
                }
                kategori();
				
				
            ?>
			
			
        </div>
