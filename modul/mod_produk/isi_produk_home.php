<div class="main-catalog">
		<h1><strong>Produk</strong> Kami</h1>
				
		<ul class="catalog_list">
			<?php
				$kategori=mysql_query("Select * from kategori_produk order by id_kategori asc");
				while($sql=mysql_fetch_array($kategori)){
				echo"
					<li>
						<a href=produk-$sql[id_kategori]>
						<img src='images/produk/$sql[image]' alt=''/>
						
						<div class='title'>
						<p>$sql[nama_kategori]</p>
						
						</div>
						<div class='description'>
							<p>$sql[deskripsi_awal]</p>
						</div>
						</a>
						
					</li>	
					";}
			  ?>
			  
		</ul>
		
	</div>
		<div class="clear"></div>