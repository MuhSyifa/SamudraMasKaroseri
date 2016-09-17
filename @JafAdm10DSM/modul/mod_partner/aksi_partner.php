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

// Hapus header
if ($module=='partner' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM partner WHERE id_partner='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[image] != ''){
	unlink("../../../images/leasing/$ex[image]");
	mysql_query("DELETE FROM partner WHERE id_partner='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM partner WHERE id_partner='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Page Room
if ($module=='partner' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM partner WHERE id_partner='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[image] != ''){
		unlink("../../../images/leasing/$ex[image]");
		}
	
	uploadleasing($nama_file_unik);
  
    mysql_query("UPDATE partner SET leasing		 	= '$_POST[nama]',
																link		 	= '$_POST[isi]',
																image		= '$nama_file_unik'
												WHERE id_partner   = '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE partner SET leasing			 	= '$_POST[nama]',
									link				= '$_POST[isi]'
                            WHERE id_partner		    = '$_POST[id]'");
	}
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='partner' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	uploadleasing($nama_file_unik);
  
    mysql_query("INSERT INTO partner(leasing,
									link,
									image) 
                            VALUES('$_POST[nama]',
                                   '".mysql_real_escape_string($_POST[isi])."',
								   '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO partner(leasing,
									link) 
                            VALUES('$_POST[nama]',
                                   '$_POST[isi])");
	}
	
	
  header('location:../../media.php?module='.$module);
}
}
?>
