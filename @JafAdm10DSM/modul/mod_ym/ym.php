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
		$aksi="modul/mod_ym/aksi_ym.php";
		switch($_GET[act]){
			default:
		?>
		
		
		<article style="min-width:535px;" class="module width_3_quarter">
			<header><h3 class="tabs_involved">Yahoo Messenger</h3>
				
			</header>

			<table class='display' id='example'>
			<thead> 
				<tr>  
    				<th>No</th>
    				<th>Name</th> 
    				<th width="30%">Username</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			
			<tbody> 
			<?php 	
				$no=1;
				$ym = mysql_query("SELECT * FROM ym ORDER BY id_ym ASC");
				while($s=mysql_fetch_array($ym)){
				
				?>
				<tr>  
    				<th><?php echo"$no" ?></th>
    				<td><?php echo"$s[nama]" ?></td> 
    				<td width="30%"><?php echo"$s[username]" ?></td> 
					<td style="text-align:center"><a href="<?php echo"?module=ym&act=edit&id=$s[id_ym]";?>"><input type="image" src="images/icn_edit.png" title="Replay"></a> </td>
				</tr> 
			<?php $no++; } ?>
				
				
			</tbody> 
			</table>
			<div class="clear"></div>
			<div class="clear"></div>
		</article>
		
		
		
		<?php break; 
		case"edit":
			$ym = mysql_query("SELECT * FROM ym WHERE id_ym='$_GET[id]'");
				$g=mysql_fetch_array($ym);
		
		?>
		
		<article class="module width_quarter">
			 <header><h3 class="tabs_involved">Edit YM</h3>
				
				<input style="float:right; margin-top:5px;margin-right:10px;" type='button'  class='tombol' value='Back' onclick='self.history.back()'>
				
			</header>
			 <form method='POST' enctype='multipart/form-data' action='modul/mod_ym/aksi_ym.php?module=ym&act=update'>
				<input type='hidden' name='id' value='<?php echo"$g[id_ym]" ?>'>
				<div class="module_content">
						<fieldset>
							<label>Name</label>
							<input name="name" type="text" value="<?php echo"$g[nama]" ?>">
						</fieldset>
						<fieldset>
							<label>Username</label>
							<input name="username" type="text" value="<?php echo"$g[username]" ?>">
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