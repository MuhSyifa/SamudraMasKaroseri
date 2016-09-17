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
if ($module=='gallery' AND $act=='hapus'){
	
	$tampil=mysql_query("SELECT * FROM gallery WHERE id_gallery='$_GET[id]'");
	$ex=mysql_fetch_array($tampil);
	
	if($ex[image] != ''){
	unlink("../../../images/gallery/$ex[image]");
	mysql_query("DELETE FROM gallery WHERE id_gallery='$_GET[id]'");
	}else {
	mysql_query("DELETE FROM gallery WHERE id_gallery='$_GET[id]'");
	}
  header('location:../../media.php?module='.$module);
}

// Update Page Room
if ($module=='gallery' AND $act=='update'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	$tampil=mysql_query("SELECT * FROM gallery WHERE id_gallery='$_POST[id]'");
	$ex=mysql_fetch_array($tampil);
		if($ex[image] != ''){
		unlink("../../../images/gallery/$ex[image]");
		}
	
	uploadgallery($nama_file_unik);
  
    mysql_query("UPDATE gallery SET judul 	= '$_POST[nama]',
								      
									  image		= '$nama_file_unik'
                                WHERE id_gallery    	= '$_POST[id]'");
	}
	else{
	mysql_query("UPDATE gallery SET judul 	= '$_POST[nama]'
								     
                                WHERE id_gallery      	= '$_POST[id]'");
	}
	
  header('location:../../media.php?module='.$module);
}
// Update Room Type
if ($module=='gallery' AND $act=='insertnew'){
  
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  
	if(!empty($lokasi_file)){
  
	uploadgallery($nama_file_unik);
  
    mysql_query("INSERT INTO gallery(judul,
									
									image) 
                            VALUES('$_POST[nama]',
                                   
								   '$nama_file_unik')");
	}
	else{
	mysql_query("INSERT INTO gallery(judul,
									) 
                            VALUES('$_POST[nama]'
                                  )");
	}
	
	
  header('location:../../media.php?module='.$module);
}

}
?>
