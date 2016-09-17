	<?php
		$sql=mysql_query("SELECT * FROM kategori_produk WHERE id_kategori=".$detail." ");
		$query=mysql_fetch_array($sql); 
		
	?>
	
	<div class="contacts">
		<div class="breadcrumbs">
			<a href="home-samudra-mas">Home</a>
			<img src="images/marker_2.gif" alt=""/>
			<a href="produk-samudra-mas">Produk Kami</a>
			<img src="images/marker_2.gif" alt=""/>
			<a href="#"><?php echo $query[nama_kategori]; ?></a>
			
		</div>
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
				
				<?php
					
					echo "
							<h1><strong>$query[nama_kategori]</strong></h1>
							<img src='images/produk/$query[image]' style='float:left; margin-right:15px; width: 100%; alt=''/>
							<div class='blog_single_post'>
							<p>$query[deskripsi]</p>
											
							</div>
						";	
					
				?>
			</div>
		
		
		
				<div class="kanan">

		
				 <?php include('modul/informasi-side.php');?> 
			
		
				<div class="news_wrapper">
					 
					 <?php include('modul/partner-side.php');?> 
				
				</div>
				</div>
			
		</div>
		
	</div>
				
		
		
	<div class="clear"></div>