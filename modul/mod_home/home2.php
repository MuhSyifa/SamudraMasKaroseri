<!-- Slider -->
<div class="slider">
            <div class="container" >
                <div class="row">
                    <div class="span10 offset1">
                        <div class="flexslider">
                            <ul class="slides">
					<?php
						$slide=mysql_query("SELECT * FROM slide ORDER BY id_slider DESC LIMIT 5");
						while($query=mysql_fetch_array($slide)){
						echo"<li data-thumb=assets/img/slider/$query[images] >
						   	<img src='assets/img/slider/$query[images]' >
							<p class='flex-caption'>$query[keterangan]</p>
							</li> ";
						}
					?>
					</ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Site Description -->
<div class="presentation container">
    <div class="portfolio-title">
        <h3>Website Instansi</h3>
 </div>
 <p> 
 Selamat Datang di WebsiteInstansi.com. Anda berkunjung ke halaman website yang tepat. Kami merupakan jasa pembuatan website Instansi dengan ciri khas karya kami yang berselera namun berbiaya murah. Percayakan pembuatan website anda kepada kami. Karena kami akan selalu berusaha memberi lebih dari yang anda butuhkan. Mohon kontak kami untuk memperoleh informasi lebih lengkap dan jelas, kami akan mendampingi dan membantu Anda mewujudkan website yang anda inginkan. Terimakasih dan salam hangat, Support@WebsiteInstansi.com
 </p>
        </div>
<!-- Paket -->
<div class="what-we-do container">
   <div class="row" >
        <?php
			$paket=mysql_query("SELECT * FROM paket ORDER BY id_paket ASC LIMIT 8");
			while($query=mysql_fetch_array($paket)){
			echo "<div class='service span3' style='text-align: left;'>	
							<h4>$query[judul]</h4>
							<ul>
							<li><b>Domain</b>&nbsp; : $query[Domain]</li>
							<li><b>Hosting</b>     &nbsp; : $query[hosting]</li>
							<li><b>Bandwidth</b> &nbsp; : $query[bandwidth]</li>
							<li><b>Halaman</b>    &nbsp; : $query[halaman]</li>
							<li><b>Akun email</b>&nbsp; : $query[akun_email]</li>
							<li><b>Pembuatan</b>&nbsp; : $query[pembuatan]</li>
							<li><b>Garansi</b>      &nbsp; : $query[garansi]</li>
							<li><b>Untuk</b>         &nbsp; : $query[cocok_untuk]</li>
							<li><b>Harga</b>         &nbsp; : $query[harga]</li>
							<li><b>Perpanjangan</b>  &nbsp; : $query[perpanjangan]</li>
							<ul><br/>
							
							<a href=$query[link]>Order <img src='assets/img/keranjang.png' width='25px' height='20px'/></a>
						  </div>";
							
							
					}
				?>
            </div> 
			</div>
       
             

        <!-- Latest Work -->
        <div class="portfolio container">
            <div class="portfolio-title">
                <h3>Portofolio</h3>
            </div>
			<br/>
            <div class="row">
			<div class="main">

				<!-- Elastislide Carousel -->
				<ul id="carousel" class="elastislide-list"style="display: block; max-height: 352px;max-width: 500px; 00ms ease-in-out; -webkit-transition: all 500ms ease-in-out;">
				
			<?php
			$portfolio=mysql_query("SELECT * from portfolio ORDER BY id_port ASC limit 8");
			while($query1=mysql_fetch_array($portfolio)){
			echo "<li>
						<a href=portofolio-$query1[id_port]><img src='assets/img/portfolio/$query1[gambar]' width='200px' height='250px' alt=></a>
						
						</li>";}
			?>
			</li>
			</ul>

		</div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="portfolio container"style="margin-bottom:20px">
            <div class="portfolio-title">
                <h3>Testimoni</h3>
            </div>
            <div class="row">
                <div class="testimonial-list span12">
                    <div class="tabbable tabs-below">
                        <div class="tab-content">
						<div class="testimonials-area">
					
						<marquee behavior="scroll" direction="up" onmouseover="this.setAttribute('scrollamount',0,0);"
						onmouseout="this.setAttribute('scrollamount',2,0);" scrollamount="0">
						<?php
						   $testimoni=mysql_query('Select * from testimoni');
						   while($query=mysql_fetch_array($testimoni)){
						echo"<img src='assets/img/testimonials/$query[image]' title='' alt=''>
							<p><br /><span class='violet'>$query[nama]</span><br/>
							<a href=$query[link]>$query[link]</a><br/>
							$query[komentar]
							</p>
							
						";
						}
						   ?>                         
						
						</marquee>
					   </div>
                   </div>
                </div>
            </div>
        </div>
		</div>
      