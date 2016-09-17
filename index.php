 <!DOCTYPE html>
<html>
<head>
	<?php
		error_reporting(0);
		$target = $_GET["target"];
		$detail = $_GET["detail"];
		include('josys/koneksi.php');
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="Car-Dealer, auto-salon, automobile, business, car, car-gallery, car-selling-template, cars, dealer, marketplace, mobile, real estate, responsive, sell, vehicle" />
	<meta name="description" content="Auto Dealer HTML - Responsive HTML Auto Dealer Template" />

	<!-- Page Title -->
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style980.css" />
	<link rel="stylesheet" type="text/css" href="css/style800.css" />
	<link rel="stylesheet" type="text/css" href="css/style700.css" />
	<link rel="stylesheet" type="text/css" href="css/style600.css" />
	<link rel="stylesheet" type="text/css" href="css/style500.css" />
	<link rel="stylesheet" type="text/css" href="css/style400.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
	 <link rel="shortcut icon" href="images/pavicon2.png">
	<!--[if IE]>
	<link href="css/style_ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.selectik.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	<script type="text/javascript" src="js/jquery.checkbox.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	
</head>
<body class="page">
	<!--BEGIN HEADER-->
		<div id="header">
			<div class="top_info">
				<div class="logo">
					<a href="home-samudra-mas"><img width="100%" src="images/7.png"></a>
				</div>
				 			
			</div>
			
			<div class="bg_navigation">
				<div class="navigation_wrapper">
				<?php include('modul/menu.php');?> 
				</div>
			</div>
		</div>
	
		
	<!--EOF HEADER-->
	<!--BEGIN CONTENT-->
		<div id="content">
			<div class="content">
				<?php
					include('maincontent.php');
				?>
	
			</div>
		</div>
	
	<!--EOF CONTENT-->
	<!--BEGIN FOOTER-->
		<div id="footer">
			<div class="copyright_wrapper">
				
				<div class="copyright">
					<div class="kiri">&copy; 2015 <a href="http://samudramaskaroseri.com">Samudra Mas.</a> | Developed By <a href="http://jogjasite.com" target="_blank">Jogjasite.com</a>
					</div>

					<div class="kanan">
						<ul class="horizontal">
							<li>
							<?php
							$followus=mysql_query("SELECT * FROM followus where aktif='Y'");
							while($query=mysql_fetch_array($followus)){
							echo"<a href=$query[link]  target=_blank><img src='images/sosmed/$query[image]' alt='' /></a> ";
							}
						?>
							</li>
						</ul>
					</div>
				</div>
	

			</div>
			<div class="copyright_wrapper2">
					<center>
					<?php include ("modul/statistik.php"); ?>
				</center>
			</div>
		</div>
	<!--EOF FOOTER-->
</body>
</html>
