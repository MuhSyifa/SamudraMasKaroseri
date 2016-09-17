<head>
	<!-- Page Title -->
	<title>Profil Samudra Mas</title>
	
</head>
<body class="contacts">
					
				<div class="breadcrumbs">
					<a href="home-samudra-mas">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Profil</span>
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
						<h1><strong>Profil</strong></h1>
								<?php 
					
								$contact=mysql_query('select * from modul where id_modul=3');
								$sql=mysql_fetch_array($contact);
								echo "<div class='blog_single_post'>
										<div class='tabel'>
										<p>$sql[content]</p>
										</div>
										</div>
										
										";
										
								?>

						</div>
						
				
				</div>
				<div class="wrapper_2">
					<div class="right">
						<div class="news_wrapper">
						
								 <?php include('modul/informasi-side.php');?> 
						
						</div>
				
				
					</div>
					
					<div class="right">
						<div class="news_wrapper">
							 
							 
						
						</div>
					</div>
								
				</div>
				
				<div class="clear"></div>
        </body>
