	
	<!--==========Konten========--><head>
	<title>Samudra Mas</title>
	</head>
	
	<div class="wrapper">
		<div class="slider_wrapper">
			<div class="home_slider">
				<div class="slider slider_1">
					
						<?php
							$slide=mysql_query("SELECT * FROM slide ORDER BY id_slider DESC LIMIT 5");
							while($query=mysql_fetch_array($slide)){
							echo"<div class='slide'>
								
								<img src='images/slider/$query[images]'>
								<div class='description'>
									
										
									<h2 class='desc'>$query[keterangan]</h2>
								
								</div>
								</div>
								";
							}
						?>
					
				</div>
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	<div class="wrapper_2">
	<div class="left">
	<br /><br />
				<?php 
		
					$home=mysql_query('select * from modul where id_modul=2');
					$sql=mysql_fetch_array($home);
					echo "
					<h2>$sql[nama_modul]</h2>
					<br>
					<div class='blog_single_post'>
							
							<p>$sql[content]</p>
							</div>
							
							";
							
					?>
	
	</div>
	<div class="right">
		
						 <?php include('modul/informasi-side.php');?> 
					
		
		
	</div>
	</div>
	
	<div class="wrapper_2">
		<div class="left">
			
				
					
					<?php include('modul/mod_produk/isi_produk_home.php');?> 

		
			
			<div class="clear"></div>
		</div>
		
		
		
		<div class="right">
			<div class="news_wrapper">
				 
				 <?php include('modul/partner-side.php');?> 
			
			</div>
		</div>
		
		<div class="clear"></div>
	</div>
	