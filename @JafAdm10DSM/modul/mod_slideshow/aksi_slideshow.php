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

$module=$_GET[module];
$act=$_GET[act];

// Update slideshow
if ($module=='slideshow' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM slide WHERE id_slider='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[gambar] != ''){
		unlink("../../../images/slider/$ex[images]");
		}
	
	UploadSlide($nama_file_unik);
  
    mysql_query("UPDATE slide SET keterangan 	= '$_POST[isi]',
															 images			= '$nama_file_unik'
											   WHERE id_slider  = '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE slide SET 	keterangan	= '$_POST[isi]'
                            WHERE id_slider  = '$_POST[id]'");
	}
  header('location:../../media.php?module='.$module);
}
// Update Hapus Message
if ($module=='slideshow' AND $act=='hapus'){
  
    $tampil=mysql_query("SELECT * FROM slide WHERE id_slider='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[images] != ''){
	unlink("../../../images/slider/$ex[images]");
	mysql_query("DELETE FROM slide WHERE id_slider='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM slide WHERE id_slider='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Tambah slideshow
if ($module=='slideshow' AND $act=='insertnew'){
  
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	UploadSlide($nama_file_unik);
  
    mysql_query("INSERT INTO slide(keterangan,
									images) 
                            VALUES('$_POST[isi]',
									'$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO slide(keterangan) 
                            VALUES('$_POST[isi]')");
	}
  header('location:../../media.php?module='.$module);
}

}
?>
