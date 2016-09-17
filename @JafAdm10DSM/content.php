<?php
include "../josys/koneksi.php";
include "../josys/library.php";
include "../josys/fungsi_combobox.php";
include "../josys/class_paging.php";

// Bagian Home
if ($_GET[module]=='home'){
  if ($_SESSION['leveluser']=='admin'){ ?>
  <h4 class="alert_info">Selamat Datang Di Samudra Mas</h4>
		
		<!-- end of stats article --><?php
  }
}

// Bagian Welcome
elseif ($_GET[module]=='welcome'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_welcome/welcome.php";
  }
}



// Bagian Produk
elseif ($_GET[module]=='produk'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_produk/produk.php";
  }
}

// Bagian Price List
elseif ($_GET[module]=='profil'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_profil/profil.php"; 
  }
}

// Bagian Kontak
elseif ($_GET[module]=='kontak'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_contact/kontak.php";
  }
}

// Bagian Slideshow
elseif ($_GET[module]=='slideshow'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_slideshow/slideshow.php";
  }
}

// Bagian Title
elseif ($_GET[module]=='title'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_title/title.php";
  }
}

// Bagian Portfolio
elseif ($_GET[module]=='gallery'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_gallery/gallery.php";
  }
}
// Bagian Promo
elseif ($_GET[module]=='carapesan'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_carapesan/carapesan.php";
  }
}


// Bagian Keyword
elseif ($_GET[module]=='keyword'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_keyword/keyword.php";
  }
}

// Bagian User
elseif ($_GET[module]=='user'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_user/user.php";
  }
}
// Bagian Leasing
elseif ($_GET[module]=='partner'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_partner/partner.php";
  }
}
// Bagian Follow Us
elseif ($_GET[module]=='followus'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_followus/followus.php";
  }
}
// Bagian Ym
elseif ($_GET[module]=='ym'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_ym/ym.php";
  }
}
// Bagian Sales
elseif ($_GET[module]=='informasi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_informasi/informasi.php";
  }
}
// Bagian Footer
elseif ($_GET[module]=='footer'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_footer/footer.php";
  }
}


// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
