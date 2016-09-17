     <?php 
	//mod ym
		$sql = mysql_query("SELECT * FROM ym");
		$cek = mysql_num_rows($sql);
		if($cek > 0){
			while($s=mysql_fetch_array($sql))
			{
				echo "<div align='left'>
				<p><a href='ymsgr:sendIM?$s[username]' title='chat dengan $s[nama]'>
              <img src='http://opi.yahoo.com/online?u=$s[username]&amp;m=g&amp;t=2' border='0' ></a></p></div>";
			}
		} else { echo "tidak ada ym chat";}
		echo "</p>";
	?>
