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
				"pagebreak"
			],

			//toolbar: "pagebreak save charmap advhr| insertfile undo redo | styleselect,formatselect,fontselect,fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | jbimages | print preview media | forecolor backcolor emoticons | anchor",
			toolbar:"pagebreak save charmap| insertfile undo redo | styleselect formatselect fontselect fontsizeselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | jbimages | print preview media | forecolor backcolor emoticons | justifyleft justifycenter justifyright justifyfull | cut copy paste pastetext pasteword | search replace | blockquote |link unlink anchor image cleanup help code | insertdate inserttime preview | tablecontrols | hr removeformat visualaid | sub sup | iespell media advhr | print | ltr rtl | fullscreen | insertlayer moveforward movebackward absolute |styleprops spellchecker | cite abbr acronym del ins attribs | visualchars nonbreaking template | insertimage",
			relative_urls: false
	 });
	</script>
<!-- /TinyMCE -->
		
		
		<?php
		$aksi="modul/mod_contact/aksi_kontak.php";
		switch($_GET[act]){
			default:
		?>
		
		<?php 	$aksi="modul/mod_contact/aksi_kontak.php";
				$kontak = mysql_query("SELECT * FROM modul WHERE id_modul='1'");
				$w=mysql_fetch_array($kontak);
				?>
		
		<article class="module width_full">
			<header><h3>Edit Contact</h3></header>
			<form method='POST' enctype='multipart/form-data' action='<?php echo "$aksi"; ?>?module=kontak&act=update'>
				<input type='hidden' name='id' value='<?php echo"$w[id_modul]" ?>'>
				<div class="module_content">
							<textarea name="content" rows="12"><?php echo"$w[content]" ?></textarea>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Publish" class="alt_btn">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">Messages</h3>
				
			</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>Name</th> 
					<th>Phone</th>
    				<th>Email</th> 
					<th>Subjek</th> 
    				<th>Date</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$kontak = mysql_query("SELECT * FROM contact ORDER BY id_contact");
				while($k=mysql_fetch_array($kontak)){
				
				?>
				<tr>  
    				<td><?php echo"$k[nama]" ?></td> 
					<td><?php echo"$k[phone]" ?></td> 
    				<td><?php echo"$k[email]" ?></td>
					<td><?php echo"$k[subjek]" ?></td> 
    				<td><?php echo"$k[tanggal]" ?></td> 
    				<td style="text-align:center"><a href="<?php echo"?module=kontak&act=edit&id=$k[id_contact]";?>"><input type="image" src="images/icn_edit.png" title="Replay"></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo"$aksi?module=kontak&act=hapus&id=$k[id_contact]";?>"><input type="image" src="images/icn_trash.png" title="Trash"></a></td> 
				</tr> 
			<?php } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			</div><!-- end of #tab1 -->
			<div class="clear"></div>
		</div><!-- end of .tab_container -->
		</article>
		
		<?php break; 
		case"edit":
			$kontak = mysql_query("SELECT * FROM contact WHERE id_contact='$_GET[id]'");
				$k=mysql_fetch_array($kontak);
		
		?>
		
		<article class="module width_full">
			<header><h3 class="tabs_involved">Detail Message</h3>
				
				<input style="float:right; margin-top:5px;margin-right:15px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
				<div class="module_content">
					
					<table>
						<tr><td width="120px"><h4>Name</h4></td><td> : <?php echo"$k[nama]" ?></td></tr>
						<tr><td width="120px"><h4>Phone</h4></td><td> : <?php echo"$k[phone]" ?></td></tr>
						<tr><td width="120px"><h4>Email</h4></td><td> : <?php echo"$k[email]" ?></td></tr>					
						<tr><td width="120px"><h4>Subject</h4></td><td> : <?php echo"$k[subjek]" ?></td></tr>
						<tr><td width="120px"><h4>Date</h4></td><td> : <?php echo"$k[tanggal]" ?></td></tr>
						<tr><td width="120px"><h4>Message</h4></td><td width="400px"> : <?php echo"$k[pesan]" ?></td></tr>
					</table>
				
				</div>
		</article>
		
		
		
		<?php
		
		break; 
		 } ?>
		
<?php } ?>