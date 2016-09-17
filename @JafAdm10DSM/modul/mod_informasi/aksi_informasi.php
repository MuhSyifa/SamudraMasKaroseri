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

$module=$_GET['module'];
$act=$_GET['act'];


// Update Page Room
if ($module=='informasi' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM informasi WHERE id_informasi='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[image] != ''){
		unlink("../../../images/sales/$ex[image]");
		}
	
	uploadsales($nama_file_unik);
  
    mysql_query("UPDATE informasi SET nama			= '$_POST[nama]',
									  dealer	= '$_POST[dealer]',
									  alamat	= '$_POST[alamat]',
									  flexi		= '$_POST[telp]',
									  phone		= '$_POST[phone]',
									  email		= '$_POST[email]',
									  bbm		= '$_POST[bbm]',
									  image		= '$nama_file_unik'
                            WHERE id_informasi	 	= '$_POST[id]'");
 
	}
	else{
	mysql_query("UPDATE informasi SET nama			= '$_POST[nama]',
									dealer		= '$_POST[dealer]',
									alamat		= '$_POST[alamat]',
									flexi		= '$_POST[telp]',
									phone		= '$_POST[phone]',
									email		= '$_POST[email]',
									bbm			= '$_POST[bbm]'
									
                            WHERE id_informasi		= '$_POST[id]'");
 
	}
	
  header('location:../../media.php?module='.$module);
}
}
?>