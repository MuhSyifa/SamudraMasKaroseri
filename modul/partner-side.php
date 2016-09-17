	<div class="news">
		<h2 align="center"><strong>Partners</strong> </h2>
		
				<?php
				$leasing=mysql_query("Select * from partner order by id_partner asc");
				while($sql=mysql_fetch_array($leasing)){
				echo"
						
						<div class='news_box2'>
						<a href='$sql[link]' target='_blank' class='thumb2'>
						<img src='images/leasing/$sql[image]' alt=''/>
						</a>
						
						</div>
						
						
					";}
				?>
		
		
	</div>