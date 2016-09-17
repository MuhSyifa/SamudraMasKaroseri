

<div class="news_wrapper">
	<div class="news">
		<h2 align="center"><strong>Informasi </strong></h2>
		<div class="news_box">

			<?php
				$sales=mysql_query('select * from informasi where id_informasi=1');
				$sql=mysql_fetch_array($sales);
				
				echo "
					<img src='images/sales/$sql[image]' style='width: 30%; alt='' class='thumb'>
						<div class='inner'>
					<h4>$sql[nama]</h4>
					<h5>$sql[alamat]<br/>
					$sql[dealer]</h5><br/>
					
					<div class='fL'><b>Phone </b>: &nbsp;$sql[phone]<br/></div>
					<div class='fL'><b>Flexi  &nbsp;</b>: &nbsp;$sql[flexi]<br/></div>
					<div class='fL'><b>BBM    &nbsp;&nbsp;</b>: &nbsp;$sql[bbm]<br/></div>
					<div class='fL'>$sql[email]<br/></div>
						</div>		
					 ";
				?>
                <br />
			<?php include('modul/ym.php');?>	
		</div>
			
			
		<div class="clear"></div>
	</div>
</div>
<div class="side_banners">
		
</div>