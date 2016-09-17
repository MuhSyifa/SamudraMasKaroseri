<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else { ?>
<style type="text/css" title="currentStyle">
    @import "media/css/demo_table_jui.css";
    @import "media/css/smoothness/jquery-ui-1.8.4.custom.css";
</style>

<script type="text/javascript" language="javascript" src="media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js">
</script>

<script>
$(document).ready( function () {
     var oTable = $('#example').dataTable( {
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
				} );		
} );
</script>
<style>.ui-widget-header{background:none;border:none;}</style>

		<!-- TinyMCE 4.x -->
<script type="text/javascript" src="../tinymce/tinymce.min.js"></script>
	
	<script type="text/javascript">
	tinymce.init({
			selector: "textarea",
			plugins: "table",
			tools: "inserttable",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste jbimages",
				"textcolor",
				"autoresize",
				"pagebreak",
				
			],

			//toolbar: "pagebreak save charmap advhr| insertfile undo redo | styleselect,formatselect,fontselect,fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages | print preview media | forecolor backcolor emoticons | anchor",
			toolbar:"pagebreak save charmap| insertfile undo redo | styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | jbimages | print preview media | forecolor backcolor emoticons | justifyleft justifycenter justifyright justifyfull | cut copy paste pastetext pasteword | search replace | blockquote |link unlink anchor image cleanup help code | insertdate inserttime preview | tablecontrols | hr removeformat visualaid | sub sup | iespell media advhr | print | ltr rtl | fullscreen | insertlayer moveforward movebackward absolute |styleprops spellchecker | cite abbr acronym del ins attribs | visualchars nonbreaking template | insertimage",
			relative_urls: false
	 });
	</script>
<!-- /TinyMCE -->
		
		<?php
		$aksi="modul/mod_produk/aksi_produk.php";
		switch($_GET[act]){
			default:
		?>
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">Daftar Produk</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol'
				value='Insert New' onclick="location.href='?module=produk&act=insertnew'">
				
			</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class='display' id='example'> 
			<thead> 
				<tr>  
    				<th>No</th> 
    				<th>Thumbnail</th> 
    				<th>Nama Produk</th>  
    				<th>Info Awal</th>
    				
					<th>Edit</th> 
					<th>Delete</th>
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$produk = mysql_query("SELECT * FROM kategori_produk ORDER BY id_kategori");
				while($m=mysql_fetch_array($produk)){				
			?>
				<tr>  
    				<td align="center"><?php echo"$no" ?></td> 
    				<td align="center"><img width="100px" height="50px" src="../images/produk/<?php echo"$m[image]" ?>"></td> 
    				<td><?php echo"$m[nama_kategori]" ?></td> 
					<td><?php echo"$m[deskripsi_awal]" ?></td> 
				
    				<td align="center"><a href="<?php echo"?module=produk&act=edit&id=$m[id_kategori]";?>">
					<input type="image" src="images/icn_edit.png" title="Edit"></a></td> 
					<td align="center"><a href="<?php echo"$aksi?module=produk&act=hapus&id=$m[id_kategori]";?>" 
					onclick="return confirm('Apakah anda yakin menghapus data ini?');"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
			</tbody> 
			</table>
			<div class="clear"></div>
			</div><!-- end of #tab1 -->
			<div class="clear"></div>
		</div><!-- end of .tab_container -->
		</article>
		<br />
		<div class="clear"></div>
		
		<?php break; 
		case"insertnew":
		?>
		
		<article class="module width_full">
			<header><h3>Tambahkan Produk</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=produk&act=insertnew'>
				<div class="module_content">
						
						<table>							
							<tr>
								<td style="width:20%;"><label>Nama Produk</label></td> 
								<td style="width:746px; margin-bottom:8px;"><input style="width:100%; margin-bottom:8px;" name="nama" type="text" ></td>
							</tr>
							<tr>
								<td style="width:20%;"><label>Info Awal</label></td> 
								<td style="width:50%; margin-bottom:8px;"><input style="width:100%; margin-bottom:8px;" name="info" ></td>
							</tr>								
						</table>
						<fieldset><label>Deskripsi</label>
							<br /><br />
							<textarea name="isi" style="height:200px"></textarea>
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Image</label>
							<br /><br />
							<input style="margin-left:10px;" type="file" name="fupload" size=40>
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 500x375px.
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><br /><br /><!-- end of post new article -->
		
		<?php break; 
		case"edit":
			$produk = mysql_query("SELECT * FROM kategori_produk WHERE id_kategori='$_GET[id]'");
			$r=mysql_fetch_array($produk);
			
		?>
		<?php
			switch($_GET[act2]){
				default:
		?>
		
		<article class="module width_full">
			<header><h3>Edit Produk</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=produk&act=update'>
				<input type='hidden' name='id' value='<?php echo"$r[id_kategori]" ?>'>
				<div class="module_content">
						
					<table>							
						<tr>	
							<td style="width:20%;"><label>Nama Produk</label></td> 
							<td style="width:747px; margin-bottom:8px;"><input style="width:100%; margin-bottom:8px;" name="nama" type="text" value="<?php echo"$r[nama_kategori]" ?>"></td>
						</tr>
						<tr>	
							<td style="width:20%;"><label>Info Awal</label></td> 
							<td style="width:100%; margin-bottom:8px;"><input style="width:100%; margin-bottom:8px;" name="info" type="text" value="<?php echo"$r[deskripsi_awal]" ?>"></td>
						
						</tr>
							
					</table>
						<fieldset><label>Deskripsi</label>
						<br /><br />
						<textarea name="isi" style="height:200px;"><?php echo"$r[deskripsi]" ?></textarea>
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
						&nbsp;&nbsp;<img width="270px" src="../images/produk/<?php echo"$r[image]" ?>">
						<br /><br />
						<label>Ganti Thumbnail</label><input style="margin-left:10px;" type="file" name="fupload" size=40>
						<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 500x375px.
						</fieldset>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
					<input type="button" onclick='self.history.back()' value="Back">
				</div>
			</footer>
			</form>
		</article><br /><br /><!-- end of post new article -->
		
		<br/><br/>
		
		<div class="clear"></div><br/><br/><br/><br/>
		
		<?php break;
			}
		break;
		 } ?>
		
<?php } ?>