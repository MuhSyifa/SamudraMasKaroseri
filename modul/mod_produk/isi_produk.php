

		
        <!-- Promo Text -->
        <div class="main_wrapper">
			<div class="blog">
            <!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
						<a class="addthis_counter addthis_bubble_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
						<!-- AddThis Button END --><br />
			<h1><strong>Produk</strong> Kami</h1>
            
			<?php
				$kategori=mysql_query("Select * from kategori_produk order by id_kategori asc");
				while($sql=mysql_fetch_array($kategori)){
				echo"
					<div id='boxprogram' style='width:98%; min-height:100px; margin:10px; border-bottom:1px solid white; padding-bottom:50px;'>
						<a href=produk-$sql[id_kategori]><p style='color:#607586;'>$sql[nama_kategori]</p><br>
						<img src='images/produk/$sql[image]' style='float:left; margin-right:15px; width: 20%; alt=''/></a>
						<p style='color:#607586;'>$sql[deskripsi_awal] . . . . . <a href=produk-$sql[id_kategori]><i style='color:#607586;'>>>Detail>></i></a></p>
						<br>
						
					</div>	
						
					";}
			  ?>

		

            </div>
        </div>
		
		
		<div class="clear"></div>



       
