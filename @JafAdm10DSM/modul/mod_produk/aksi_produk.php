<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../josys/koneksi.php";
include "../../../josys/fungsi_thumb.php";
include "../../../josys/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus header
if ($module=='produk' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM kategori_produk WHERE id_kategori='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[image] != ''){
	unlink("../../../images/produk/$ex[image]");
	mysql_query("DELETE FROM kategori_produk WHERE id_kategori='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM kategori_produk WHERE id_kategori='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Page Room
if ($module=='produk' AND $act=='update'){
  
  $seo = seo_title($_POST['nama']);
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
  
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM kategori_produk WHERE id_kategori='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[image] != ''){
		unlink("../../../images/produk/$ex[image]");
		}
	
	uploadproduk($nama_file_unik);
  
    mysql_query("UPDATE kategori_produk SET nama_kategori 	= '$_POST[nama]',
									  deskripsi_awal 	= '$_POST[info]',
									  seo = '$seo',
								      deskripsi	 	= '".mysql_real_escape_string($_POST[isi])."',
									  image		= '$nama_file_unik'
                                WHERE id_kategori    	= '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE kategori_produk SET nama_kategori 	= '$_POST[nama]',
									  deskripsi_awal 	= '$_POST[info]',
									  seo = '$seo',
								      deskripsi	 	= '".mysql_real_escape_string($_POST[isi])."'
                                WHERE id_kategori      	= '$_POST[id]'");
	}
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='produk' AND $act=='insertnew'){
  
  $seo = seo_title($_POST['nama']);
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	uploadproduk($nama_file_unik);
  
    mysql_query("INSERT INTO kategori_produk(nama_kategori,
									seo,
									deskripsi_awal,
									deskripsi,
									image) 
                            VALUES('$_POST[nama]',
									'$seo',
									'$_POST[info]',
                                   '".mysql_real_escape_string($_POST[isi])."',
								   '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO kategori_produk(nama_kategori,
									seo,
									deskripsi_awal,
									deskripsi) 
                            VALUES('$_POST[nama]',
									'$seo',
									'$_POST[info]',
                                   '".mysql_real_escape_string($_POST[isi])."')");
	}
	
	
  header('location:../../media.php?module='.$module);
}

}
?>
