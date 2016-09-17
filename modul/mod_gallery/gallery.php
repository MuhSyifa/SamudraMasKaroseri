<head>
	<title>Gallery Samudra Mas</title>
	</head>
	
		
	
	<div class="breadcrumbs">
					<a href="home-samudra-mas">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Gallery</span>
	</div>
	
	<div class="wrapper_2">
		
	
	
			<div class="main-catalog">
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
				<h1><strong>Gallery</strong></h1>
						
				<ul class="catalog_list">
                <!-- Add jQuery library -->
		<script type="text/javascript" src="popup2/jquery-1.10.1.min.js"></script>
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="popup2/source/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="popup2/source/jquery.fancybox.css?v=2.1.5" media="screen" />

	
		<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
		</script>
					<?php
						$gallery=mysql_query("Select * from gallery order by id_gallery asc");
						while($sql=mysql_fetch_array($gallery)){
						echo"
							<li>
								<a href='images/gallery/$sql[image]' class='fancybox' title='$sql[judul]'>
								<img src='images/gallery/$sql[image]' alt=''/></a>
								
								<div class='title'>
								<p>$sql[judul]</p>
								
								</div>
								
								
							</li>	
							";}
					  ?>
                     
					  
				</ul>
				
			</div>
				<div class="clear"></div>
				
	
	</div>
	<div class="clear"></div>