<head>
	<title>Kontak Samudra Mas</title>
</head>
<?php
	include ("../../josys/koneksi.php");
	if($_POST['submit']=="Kirim"){
				$nama 			= trim($_POST['nama']);
				$phone 		= trim($_POST['phone']);
				$email 			= trim($_POST['email']);
				$subjek			= trim($_POST['subjek']);
				$pesan 			= trim($_POST['pesan']);
				$tanggal	 		= trim($_POST['tanggal']);
				$subject 		= "Pesan Mobil ".$_POST['nama'];

				if(empty($nama)) {
					echo 'Anda belum mengisikan NAMA<br/>';
					$err = TRUE;
				}
				if(empty($phone)) {
					echo 'Anda belum mengisikan Phone<br/>';
					$err = TRUE;
				}
				if(empty($email)) {
					echo 'Anda belum mengisikan E-mail<br/>';
					$err = TRUE;
				}
				if(empty($subjek)) {
					echo 'Anda belum mengisikan Subject<br/>';
					$err = TRUE;
				}
				if(empty($pesan)) {
					echo 'Anda belum mengisikan Pesan<br/>';
					$err = TRUE;
				}
				if(empty($tanggal)) {
					echo 'Anda belum mengisikan Tanggal<br/>';
					$err = TRUE;
				}
				
				if($err) {
					echo'<a href="javascript:history.go(-1)"><b>Ulangi Lagi</b><br/>';
				} elseif(!$err) {
					if(!empty($_POST['kode'])) {
						if($_POST['kode'] == $_POST['rahasia']) {
						
							mail("samudramas1@yahoo.com",$subject,$_POST[message],"From: $email");
							
							mysql_query("INSERT INTO contact(nama,phone,email,subjek,pesan,tanggal) 
										 VALUES('$_POST[nama]','$_POST[phone]','$_POST[email]','$_POST[subjek]','$_POST[pesan]','$_POST[tanggal]')");
							echo '<p align="center"><b>Terimakasih telah menghubungi kami. <br/>Kami akan segera meresponnya.</b></p>';
						} else {
							echo 'Hitungan Anda salah, ulangi lagi<br/>';
							echo '<a href="javascript:history.go(-1)"><b>Ulangi Lagi</b></a>';
						}
					} else {
						echo 'Anda belum memasukkan kode<br/>';
						echo '<a href="javascript:history.go(-1)"><b>Ulangi Lagi</b></a>';
					}
				}			
				}
			else{
				
				// memanggil script class
				include 'captcha.php';
				// membuat obyek class
				$captcha1 = new mathcaptcha();
				// panggil method untuk mengenerate kode
				$captcha1->generatekode();
?>
			<div class="contacts">
				<div class="breadcrumbs">
					<a href="home-samudra-mas">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Kontak Kami</span>
				</div>
				<div class="main_wrapper">
                <!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
						<a class="addthis_counter addthis_bubble_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5355d2b06c471530"></script>
						<!-- AddThis Button END --><br />
					<h1><strong>Kontak</strong> Kami</h1>
					<div class="contacts_box">
						<div class="left">
							<h3><strong>Tentang</strong> Kami</h3>
						
                        <?php
						$dealer=mysql_query('select * from modul where id_modul=1');
						$sql=mysql_fetch_array($dealer);
						echo "
							<p>$sql[content]</p>
							 ";
						?>
                    
						</div>
						<div class="map">
						<iframe width="625" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=kranginan+banguntapan+bantul+yogyakarta&amp;aq=&amp;sll=-10.962764,137.680664&amp;sspn=25.929075,43.286133&amp;ie=UTF8&amp;hq=kranginan&amp;hnear=Banguntapan,+Bantul,+Daerah+Istimewa+Yogyakarta&amp;ll=-7.843597,110.411141&amp;spn=0.025764,0.042272&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=2188927917011040096&amp;output=embed"></iframe><br /><small><a href="https://www.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=kranginan+banguntapan+bantul+yogyakarta&amp;aq=&amp;sll=-10.962764,137.680664&amp;sspn=25.929075,43.286133&amp;ie=UTF8&amp;hq=kranginan&amp;hnear=Banguntapan,+Bantul,+Daerah+Istimewa+Yogyakarta&amp;ll=-7.843597,110.411141&amp;spn=0.025764,0.042272&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=2188927917011040096" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>
						<!--<iframe width="668" height="288" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=en;hl=enampamp;hl=en&amp;geocode=&amp;q=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;aq=0&amp;oq=%D0%BC%D0%B0%D0%BD&amp;sll=46.933064,32.007997&amp;sspn=0.243347,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=40.79042,-73.959961&amp;spn=0.14972,0.457993&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>-->
						</div>
					</div>
					<div class="contact_form">
						<h2><strong>Form</strong> Kontak</h2>				
							<form action="kontak-samudra-mas" method="POST" class="sell_box sell_box_1" style="margin-bottom:15px;">
								<div class="fld_box">
									<label><strong>Nama : </strong></label>
									<input style="padding-left:5px; width: 50%;height: 28px; margin-bottom:10px; border-radius: 5px; border: 1px solid #D1D5DC;" type="text" name="nama" placeholder="Nama Anda..."/><br />
								</div>
								<div class="fld_box">
									<label><strong>No.Telp : </strong></label>
									<input style="padding-left:5px; width: 50%;height: 28px; margin-bottom:10px; border-radius: 5px; border: 1px solid #D1D5DC;" type="text" name="phone" placeholder="No. Telp Anda..."/><br />
								</div>
								<div class="fld_box">
									<label><strong>E-Mail : </strong></label>
									<input style="padding-left:5px; width: 50%;height: 28px; margin-bottom:10px; border-radius: 5px; border: 1px solid #D1D5DC;" type="text" name="email" placeholder="Email Anda..."/><br />
								</div>
								<div class="fld_box">
									<label><strong>Subject : </strong></label>
									<input style="padding-left:5px; width: 50%;height: 28px; margin-bottom:10px; border-radius: 5px; border: 1px solid #D1D5DC;" type="text" name="subjek" placeholder="Isikan subject..."/><br />
								</div>
								<div class="fld_box">
									<label><strong>Pesan : </strong></label>
									<textarea style="padding-left:5px; width: 90%;height: 121px; margin-bottom:10px; border-radius: 5px; border: 1px solid #D1D5DC;" type="text" name="pesan" placeholder="Isikan Pesan Anda..."/></textarea><br />					
								</div>
								<div class="fld_box">
									<label><strong>Tanggal : </strong></label>
									<input style="padding-left:5px; width: 50%;height: 28px; margin-bottom:10px; border-radius: 5px; border: 1px solid #D1D5DC;" type="date" name="tanggal" /><br />
								</div>
								<label>Isikan Captcha Berikut:</label>
								<?php $captcha1->showcaptcha();
								echo "<input style='border-radius: 5px; border: 1px solid #D1D5DC; width:40px;' type=text name='kode' maxlength=6><input type=hidden name=rahasia value='".$_SESSION['kode']."'><br/><br/>";?>
								
					</div>
							<div class="clear"></div>
							<div class="sell_submit_wrapper">
								<input class="sell_submit" type="submit" name="submit" value="Kirim"/>
							</div>
						</form>
				</div>
					<div class="personal_box">
						<h2><strong>Informasi</strong></h2>
						<ul class="personal_list">
							<li>
								 <?php
								$sales=mysql_query('select * from informasi where id_informasi=1');
								$sql=mysql_fetch_array($sales);
								
								echo "
									
									<img src='images/sales/$sql[image]' alt='' class='thumb'>
										<div class='inner'>
									<h4>&nbsp;&nbsp;$sql[nama]</h4>
									<h5 style='posision:absolute;'>&nbsp;&nbsp;$sql[jabatan]<br/>
									&nbsp;&nbsp;$sql[dealer]</h5><br/>
									
									<div class='fL'><b>Phone </b>: &nbsp;$sql[phone]<br/>
									
									<b>Flexi  &nbsp;</b>: &nbsp;$sql[flexi]<br/>
									<b>BBM    &nbsp;&nbsp;</b>: &nbsp;$sql[bbm]<br/>
									$sql[email]<br/>
									</div>
									
									</div>
									 			 
									 ";
								?>
                                <?php include('modul/ym.php');?>
				
							</li>
						</ul>
					</div>
				</div>
			</div>
					
		<?php } ?>				
	