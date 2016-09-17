		<?php
			if($target == 'home' or $target == ''){
				include ('modul/mod_home/home.php');
			} else
			if($target == 'simulasikredit'){
				include ('modul/mod_simulasikredit/simulasikredit.php');
			} else
			if($target == 'profil'){
				include ('modul/mod_profil/profil.php');
			} else
			if($target == 'carapesan'){
				include ('modul/mod_carapesan/carapesan.php');
			} else
			if($target == 'produk'){
				if($detail != ''){
				include ('modul/mod_produk/detail_produk.php');
				} else {
				include ('modul/mod_produk/produk.php');
				}
			} else
			if($target == 'gallery'){
				include ('modul/mod_gallery/gallery.php');
			} else
			if($target == 'kontak'){
				include ('modul/mod_kontak/kontak.php');
				}
			if($target == 'cari'){
				include ('modul/hasil_cari.php');
				}
			 
		?>