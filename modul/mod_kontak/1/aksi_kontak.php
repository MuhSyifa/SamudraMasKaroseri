<?php
include ("../../josys/koneksi.php");
mysql_query("INSERT into contact
			(nama,phone,email,subjek,pesan,tanggal)
			values
			('$_POST[name]',
			'$_POST[phone]',
			'$_POST[email]',
			'$_POST[subject]',
			'$_POST[message]',
			'$_POST[date]'
			)");
header('location:../../kontak-daihatsu-solo-mobil');
?>