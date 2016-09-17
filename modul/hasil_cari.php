
        
<head>
	<!-- Page Title -->
	<title>Promo Daihatsu Solo Mobil
	</title>
	
</head>
		
<body class="contacts">

		<div class="breadcrumbs">
			<a href="home-daihatsu-solo-mobil">Home</a>
			<img src="images/marker_2.gif" alt=""/>
			<span>Hasil Cari</span>
		</div>
        
		<div class="wrapper_2">
		
				
<div class="left">
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
	<h1>Hasil Pencarian</h1>
		<?php
		include('../josys/koneksi.php');
			// menghilangkan spasi di kiri dan kanannya
			$kata = trim($_POST['cari']);
				if(!empty($kata)){

			// pisahkan kata per kalimat lalu hitung jumlah kata
				$pisah_kata = explode(" ",$kata);
				$jml_katakan = (integer)count($pisah_kata);
				$jml_kata = $jml_katakan-1;
				
				$cari = "SELECT * FROM kategori_produk WHERE " ;
					for ($i=0; $i<=$jml_kata; $i++){
						$cari .= "nama_kategori LIKE '%$pisah_kata[$i]%'";
							if ($i < $jml_kata ){
								$cari .= " OR ";
							}
						}

				$cari .= " ORDER BY id_kategori DESC";
				
				$hasil  = mysql_query($cari);
				$ketemu = mysql_num_rows($hasil);

					if ($ketemu > 0){
					echo "<p>Ditemukan <b>$ketemu</b> produk dengan nama <font style='color:#FFAD00'><b>$kata</b></font> : </p>"; 
					echo "	<ul class='catalog_list'>";
					while($t=mysql_fetch_array($hasil)){
							
							echo "	
										<li>
										
											<a href='produk-$t[id_kategori]'>
											
											<img src='images/produk/$t[image]' alt=''/>
											
											<div class='title'>
												<p>$t[nama_kategori]</p>
											</div>
											
											<div class='description'>
												<p>$t[deskripsi_awal]</p>
											</div>
											</a>
											
										</li>
									";
							}
						echo"</ul>";
						}
					else{
							echo "	<ul class='catalog_list'>
										<li>
											Tidak ditemukan produk dengan judul <b>$kata</b>
										</li>
									</ul>";
						}
				}
					else{
						echo "	<ul class='catalog_list'>
									<li>
										<h4 style='color:red;'>Warning!</h4>
										Judul pencarian belum diisi ! <!--br><a href=javascript:history.go(-2)><b>Ulangi Lagi</b-->
									</li>
								</ul>";
						}
		?>
</div>
		
			<div class="right">
				<div class="news_wrapper">
				
						 <?php include('modul/informasi-side.php');?> 
				
				</div>
		
		
			</div>
		</div>
		
		<div class="clear"></div>
		
		
		
