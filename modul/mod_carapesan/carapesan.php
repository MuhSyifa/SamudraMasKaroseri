        
<head>
	<!-- Page Title -->
	<title>Cara Pesan Samudra Mas</title>
	
</head>
		
<body class="contacts">

		<div class="breadcrumbs">
			<a href="home-samudra-mas">Home</a>
			<img src="images/marker_2.gif" alt=""/>
			<span>Cara Pesan Kami</span>
		</div>
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
					<h1><strong>Cara Pesan</strong></h1>
				<?php
					$promo=mysql_query("SELECT * from carapesan ORDER BY id_carapesan ASC limit 1");
					while($query_prom=mysql_fetch_array($promo)){
					echo "
						<div class='blog_single_post2'>
							<div class='tabel'>
							<p>$query_prom[isi]</p>
								</div>		
						</div>"
						;}
				?>

            </div>
        </div>
		<div class="wrapper_2">
			<div class="right">
				<div class="news_wrapper">
				
						 <?php include('modul/informasi-side.php');?> 
				
				</div>
		
		
			</div>
		</div>
		
		<div class="clear"></div>



       
