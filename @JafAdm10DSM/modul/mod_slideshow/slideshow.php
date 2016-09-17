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


		
		<?php
		$aksi="modul/mod_slideshow/aksi_slideshow.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="min-width:535px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Slide Show</h3>
				
			</header>

			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Gambar</th> 
    				<th width="30%">Keterangan</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$slide = mysql_query("SELECT * FROM slide ORDER BY id_slider ASC");
				while($s=mysql_fetch_array($slide)){
				
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
					<td width="30%"><img height="120px" src="../images/slider/<?php echo"$s[images]" ?>"></td> 
    				<td><?php echo"$s[keterangan]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=slideshow&act=edit&id=$s[id_slider]";?>">
					<input type="image" src="images/icn_edit.png" title="Edit">
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=slideshow&act=hapus&id=$s[id_slider]";?>" onclick="return confirm('Apakah anda yakin menghapus data ini?');">
					<input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		<article style="min-width:260px;" class="module width_quarter">
			 <header><h3>Post New Slide</h3></header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_slideshow/aksi_slideshow.php?module=slideshow&act=insertnew'>
				<div class="module_content">
						<fieldset><label>Keterangan</label>
							<br /><br />
							<textarea name="isi" style="height:100px"></textarea>
						</fieldset>
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Thumbnail</label><br /><br />
							<input style="margin-left:10px; margin-right:-20px;" type="file" name="fupload">
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Important image size 900x300 px.
						</fieldset>
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
		
		<?php break; 
		case"edit":
			$slideshow = mysql_query("SELECT * FROM slide WHERE id_slider='$_GET[id]'");
				$g=mysql_fetch_array($slideshow);
		
		?>
		
		<article class="module width_quarter">
			 <header><h3 class="tabs_involved">Edit Slideshow</h3>
				
				<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_slideshow/aksi_slideshow.php?module=slideshow&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[id_slider]" ?>'>
				<div class="module_content">
						
						<fieldset><label>Keterangan</label>
							<br /><br />
							<textarea name="isi" style="height:200px" ><?php echo"$g[keterangan]"?></textarea>
						</fieldset>
						
						<fieldset style="float:left; width:35%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Thumbnail</label><br /><br />
							<img width="200px" style="margin-left:5px;" src="../images/slider/<?php echo"$g[images]" ?>">							
						</fieldset>
							
						<fieldset style="float:left; width:30%; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Change Thumbnail</label><br /><br />
							<input style="margin-left:10px; margin-right:-20px;" type="file" name="fupload">
							<br /> &nbsp;&nbsp;&nbsp;&nbsp;*) Image size 900x300 px.
						</fieldset>
						<style>fieldset input[type=text]{width:87%} fieldset textarea {width:85%}</style>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Update" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		<br />
		
		<?php
		
		break; 
		 } ?>
		
<?php } ?>