
<head>
	<!-- Page Title -->
	<title>Kontak Daihatsu Solo Mobil</title>
	
</head>
<body class="contacts">

				<div class="breadcrumbs">
					<a href="home-daihatsu-solo-mobil">Home</a>
					<img src="images/marker_2.gif" alt=""/>
					<span>Kontak Kami</span>
				</div>
				<div class="main_wrapper">
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0949689205167!2d110.82831829999999!3d-7.564624299999983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd36fda24e56145bb!2sAstra+International+Daihatsu.+PT+-+Solo+Tambaksegaran!5e0!3m2!1sid!2sid!4v1411014696553" width="668" height="288" frameborder="0" style="border:0"></iframe>
						<!--<iframe width="668" height="288" src="https://maps.google.com.ua/maps?f=q&amp;source=s_q&amp;hl=en;hl=enampamp;hl=en&amp;geocode=&amp;q=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;aq=0&amp;oq=%D0%BC%D0%B0%D0%BD&amp;sll=46.933064,32.007997&amp;sspn=0.243347,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%A1%D0%BE%D0%B5%D0%B4%D0%B8%D0%BD%D1%91%D0%BD%D0%BD%D1%8B%D0%B5+%D0%A8%D1%82%D0%B0%D1%82%D1%8B+%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B8&amp;t=m&amp;ll=40.79042,-73.959961&amp;spn=0.14972,0.457993&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>-->
						</div>
					</div>
					<div class="contact_form">
						<h2><strong>Form</strong> Kontak</h2>
						<form action="modul/mod_kontak/aksi_kontak.php"  method="post" name="send-contact">
							<div class="fld_box">
								<label>Name: </label>
								<input type="text" name="name" placeholder="* Enter your full name"  />
								
							</div>
							<div class="fld_box">
								<label>E-mail: </label>
								<input type="text" name="email" placeholder="* Enter your email address"  />
							
							</div>
							<div class="fld_box">
								<label>Phone: </label>
								<input type="text" name="phone" placeholder="* Enter your phone" />
								
							</div>
							<div class="fld_box">
								<label>Subject: </label>
								<input type="text" name="subject" placeholder="* Enter your subject" />
								
							</div>
							<div class="fld_box">
								<label>Date:</label>
								<input type="date" name="date"/>
								
							</div>
								<div class="clear"></div>
								<label>Message: </label>
								<textarea rows="20" cols="20" name="message" placeholder="* Your message here..." ></textarea>
								
								<input type="submit" class="submit"/>
							
						</form>
					</div>
					<div class="personal_box">
						<h2><strong>Sales</strong> Executive</h2>
						<ul class="personal_list">
							<li>
								 <?php
								$sales=mysql_query('select * from sales where id_sales=1');
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
									<a href='mailto:#' class='markered'><i>Kontak melalui email</i></a></div>
									
									</div>
									 			 
									 ";
								?>
							
							
							
				
							</li>
						</ul>
					</div>
				</div>
			
	<!--EOF CONTENT-->
	
</body>
</html>
