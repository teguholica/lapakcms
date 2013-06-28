<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Teguh Arifianto" />
<meta name="keywords" content="lapakcms">
<meta name="description" content="lapakcms">
<title><?php echo $judul; ?></title>
<link href="<?php echo base_url(); ?>asset/images/icon.png"
	rel="shortcut icon" />
<link href="<?php echo base_url(); ?>asset/css/style.css"
	rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>asset/css/ddsmoothmenu.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo base_url(); ?>asset/css/jquery.simpledialog.0.1.css"
	rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo base_url(); ?>asset/css/jquery.fancybox-1.3.4.css"
	media="screen" />
<script type="text/javascript"
	src="<?php echo base_url();?>themes/default_theme/_assets/jquery/jquery-1.9.0.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/vtip.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/skrip.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/flexdropdown.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/jquery.cookie.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/jquery.treeview.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/demo.js"></script>
<script type="text/javascript"
	src="<?php echo base_url(); ?>asset/js/jquery.simpledialog.0.1.js"></script>

<link rel="stylesheet"
	href="<?php echo base_url();?>themes/default_theme/_assets/nivo-slider/themes/default/default.css"
	type="text/css" media="screen" />
<link rel="stylesheet"
	href="<?php echo base_url();?>themes/default_theme/_assets/nivo-slider/themes/light/light.css"
	type="text/css" media="screen" />
<link rel="stylesheet"
	href="<?php echo base_url();?>themes/default_theme/_assets/nivo-slider/themes/dark/dark.css"
	type="text/css" media="screen" />
<link rel="stylesheet"
	href="<?php echo base_url();?>themes/default_theme/_assets/nivo-slider/themes/bar/bar.css"
	type="text/css" media="screen" />
<link rel="stylesheet"
	href="<?php echo base_url();?>themes/default_theme/_assets/nivo-slider/nivo-slider.css"
	type="text/css" media="screen" />
<script type="text/javascript"
	src="<?php echo base_url();?>themes/default_theme/_assets/nivo-slider/jquery.nivo.slider.js"></script>

<link
	href="<?php echo base_url();?>/themes/default_theme/_assets/bootstrap/css/bootstrap.min.css"
	rel="stylesheet">

<link rel="stylesheet"
	href="<?php echo base_url();?>themes/default_theme/_assets/default/css/style.css"
	type="text/css" media="screen" />

<script type="text/javascript">
		/*$(document).ready(function() {
			$("a[rel=example_group]").fancybox({
			
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
		});*/
</script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>
<script type="text/javascript"> 
	$(document).ready( function(){	
		$('#slider').nivoSlider({
			controlNav	: false
		});				
	});
	function slidePordukBaru()
	{
	    akhir = $('ul#produkbaru li:last').hide().remove();
	    $('ul#produkbaru').prepend(akhir);
        $('ul#produkbaru li:first').slideDown("slow");
	}
	function slidePordukLaris()
	{
	    akhir = $('ul#produklaris li:last').hide().remove();
	    $('ul#produklaris').prepend(akhir);
        $('ul#produklaris li:first').slideDown("slow");
	}
	setInterval(slidePordukBaru, 5000);
	setInterval(slidePordukLaris, 7000);
</script>
<?php echo (isset($template["partials"]["header"]))?$template["partials"]["header"]:"";?>
</head>

<body onLoad="goforit()">
	<div class="cleaner_h5"></div>
	<div id="logo">
		<div id="logo-content">LAPAKCMS</div>
		<div id="inner-logo">
			<div id="welcome">
				<?php if(empty($_SESSION['username_grosir_sandal'])):?>
				<?php else:?>
				Selamat Datang, <b><?php echo $nama; ?> </b> - <a
					href="<?php echo base_url(); ?>member/logout">Log Out</a>
				<?php endif;?>
			</div>
			<a href="<?php echo base_url(); ?>katalog">Download Katalog</a> | <a
				href="<?php echo base_url(); ?>member">Member Area</a> |
			<script src="<?php echo base_url(); ?>asset/js/clock.js"
				type="text/javascript"></script>
			<span id="clock"></span>
			<p style="padding-top: 5px; margin: 0px auto;"></p>
		</div>
	</div>
	<div id="menu">
		<div id="menu-kiri">
			<ul>
				<li><img src="<?php echo base_url(); ?>asset/images/icon-home.png"
					class="menu-img" border="0"> <a
					href="<?php echo $this->config->item('site_url');?>web"
					title="Beranda - Grosir Sandal Online"> Beranda </a>
				</li>
				<li><img src="<?php echo base_url(); ?>asset/images/icon-about.png"
					class="menu-img" border="0"> <a
					href="<?php echo $this->config->item('site_url');?>profil_sandal_online"
					title="Profil Kami | Grosir Sandal Online"> Tentang Kami </a>
				</li>
				<li><img src="<?php echo base_url(); ?>asset/images/icon-how-to.png"
					class="menu-img" border="0"> <a
					href="<?php echo $this->config->item('site_url');?>cara_belanja"
					title="Cara Belanja | Grosir Sandal Online"> Cara Belanja </a>
				</li>
				<li><img
					src="<?php echo base_url(); ?>asset/images/icon-contact.png"
					class="menu-img" border="0"> <a
					href="<?php echo $this->config->item('site_url');?>hubungi_kami"
					title="Hubungi Kami | Grosir Sandal Online"> Hubungi Kami </a>
				</li>
				<li><img
					src="<?php echo base_url(); ?>asset/images/icon-sitemap.png"
					class="menu-img" border="0"> <a
					href="<?php echo $this->config->item('site_url');?>site_map"
					title="Site Map Website | Grosir Sandal Online"> Site Map Produk </a>
				</li>
				<li><img
					src="<?php echo base_url(); ?>asset/images/icon-shopcart.png"
					class="menu-img" border="0"> <a
					href="<?php echo $this->config->item('site_url');?>keranjang"
					title="Keranjang Belanja | Grosir Sandal Onlinee"> Keranjang
						Belanja </a>
				</li>
				<li id="search">
					<form class="form-search" method="post"
						action="<?php echo base_url(); ?>cari/lihat">
						<input type="text" style="width: 170px;"
							class="input-medium search-query" placeholder='Cari Produk...'
							name="cari">
					</form>
				</li>
			</ul>
		</div>
	</div>

	<div id="banner">
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider">
				<?php foreach($banner->result_array() as $bn):?>
				<img title="#slide-caption<?php echo $bn['kode_banner'];?>"
					src="<?php echo base_url(); ?>asset/banner/<?php echo $bn['gambar']; ?>"
					data-thumb="<?php echo base_url(); ?>asset/banner/<?php echo $bn['gambar']; ?>">
				<?php endforeach;?>
			</div>
			<div id="slider-caption">
				<?php foreach($banner->result_array() as $bn):?>
				<div id="slide-caption<?php echo $bn['kode_banner'];?>"
					class="nivo-html-caption">
					<h3 style="margin: 0px;">
						<?php echo $bn['judul'];?>
					</h3>
					<span><?php echo $bn['deskripsi'];?> </span>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>

	<div id="menu-bawah">
		<div id="smoothmenu1" class="ddsmoothmenu">
			<ul>
				<?php
				foreach($menu->result_array() as $m1)
				{
					$nm_link1 = $m1['id_kategori'].'-'.$m1['nama_kategori'];
					$ld1 = strtolower(str_replace(" ","-",$nm_link1));
					$sub1 = $this->sandal_model->menu_kategori('1',$m1['id_kategori']);
					//if(count($sub1->result_array())>0){
					//echo '<li><a href="#">'.$m1['nama_kategori'].'</a><ul>';
					//}
					//else{
					echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld1.'">'.$m1['nama_kategori'].'</a><ul>';
					//}

					foreach($sub1->result() as $sm1)
					{
						$gbr = "";
						$nm_link2 = $sm1->id_kategori.'-'.$sm1->nama_kategori;
						$ld2 = strtolower(str_replace(" ","-",$nm_link2));
						$sub2 = $this->sandal_model->menu_kategori('2',$sm1->id_kategori);
						if(count($sub2->result())>0)
						{
							$gbr='<img src="'.base_url().'asset/images/right.gif" border="0" align="right">';
							//echo '<li><a href="#">'.$sm1->nama_kategori.''.$gbr.'</a><ul>';
							echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld2.'">'.$sm1->nama_kategori.' '.$gbr.'</a><ul>';
						}
						else
						{
							echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld2.'">'.$sm1->nama_kategori.'</a><ul>';
						}

						foreach($sub2->result() as $sm2)
						{
							$nm_link3 = $sm2->id_kategori.'-'.$sm2->nama_kategori;
							$ld3 = strtolower(str_replace(" ","-",$nm_link3));
							echo '<li><a href="'.$this->config->item('site_url').'kategori/produk/'.$ld3.'">'.$sm2->nama_kategori.'</a></li>';
						}

						echo '</ul>';
						echo '</li>';

					}
					echo '</ul>';
					echo '</li>';
				}
				?>
			</ul>
		</div>
	</div>
	</div>

	<script type="text/javascript">
function mycarousel_initCallback(carousel)
{ 
carousel.buttonNext.bind('click', function() {
carousel.startAuto(0);
});
carousel.buttonPrev.bind('click', function() {
carousel.startAuto(0);
});
carousel.clip.hover(function() {
carousel.stopAuto();
}, function() {
carousel.startAuto();
});
};

jQuery(document).ready(function() {
jQuery('#hs').jcarousel({
visible: 7,
scroll: 1,
wrap: 'circular',
auto: 2,
animation: 1000,
initCallback: mycarousel_initCallback
 });
});
</script>


	<div id="slider-banner">
		<div id="wrap">
			<ul id="hs" class="jcarousel-skin-tango-hs">
				<?php
				foreach($slide_atas->result_array() as $sa)
				{

					$c = array (' ');
					$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
					$s = strtolower(str_replace($d,"",$sa['nama_produk']));
					$link = strtolower(str_replace($c, '-', $s));
					echo '<li><a href="'.base_url().'produk/detail/'.strtolower($sa['kode_produk']).'-'.$link.'" class="vtip" title="'.$sa['nama_produk'].' - Harga Rp.'.number_format($sa['harga'],2,',','.').'"><img src="'.base_url().'asset/produk/'.$sa['gbr_kecil'].'" alt="'.$sa['nama_produk'].'"><br />'.$sa['nama_produk'].'<br>Harga Rp.'.number_format($sa['harga'],2,',','.').'</a></li> ';
				}
				?>
			</ul>
		</div>
	</div>
	<div class="cleaner_h0"></div>
	<!-- LEFT -->
	<div id="content">
		<div id="content-left">
			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Produk Terlaris Bulan Ini</h3>
				</section>
				<section class="sidebar-widget-content">
				<div id="sub-content-center-privat">
					<ul id="produklaris">
						<?php foreach($slide_laris->result_array() as $sl){
							$tss = "";
							$mati = "";
							if($sl['stok']>0){
					$tss = '<span style="margin:0px auto; padding:0px; font-size:12px;"><b>Ada</b></span>';
					$mati = "";
				}else{
					$tss = '<span style="margin:0px auto; padding:0px; font-size:12px; color:red;"><b>Habis</b></span>';
					$mati = "disabled";
				}
				$c = array (' ');
				$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
				$s = strtolower(str_replace($d,"",$sl['nama_produk']));
				$link = strtolower(str_replace($c, '-', $s));
				echo '<li><form method="post" action="'.base_url().'keranjang/tambah_barang"><div id="list-produk">
		<input type="hidden" name="kode_produk" value="'.$sl['kode_produk'].'">
			<input type="hidden" name="banyak" value="5">
			<input type="hidden" name="harga" value="'.$sl['harga'].'">
			<input type="hidden" name="nama_produk" value="'.$sl['nama_produk'].'">
		<p style="text-align:center; margin:0px auto; height:35px;"><strong>'.$sl['nama_produk'].'</strong></p><p style="text-align:center; margin:0px auto;"><img src="'.base_url().'asset/produk/'.$sl['gbr_kecil'].'" width="100" class="vtip" title="'.$sl['nama_produk'].' - Harga Rp.'.number_format($sl['harga'],2,',','.').'" /><br />Rp. '.number_format($sl['harga'],2,',','.').' | Stok : '.$tss.'<br /><div style="width:152px; margin:0px auto; padding:0px;"><input type="submit" class="tombol-beli" value="" '.$mati.'><a href="'.base_url().'produk/detail/'.strtolower($sl['kode_produk']).'-'.$link.'" class="vtip" title="'.$sl['nama_produk'].' - Harga Rp.'.number_format($sl['harga'],2,',','.').'"><img src="'.base_url().'asset/images/bar-detail.png" border=0 style="float:right;" /></a></div>
		</p></div></form></li>';
			}?>
					</ul>
				</div>
				</section>
			</div>

			<div class="cleaner_h10"></div>

			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Belanja Berdasarkan Harga</h3>
				</section>
				<section class="sidebar-widget-content">
				<div id="sub-content-center">
					<ul>
						<?php
						foreach($intermezzo->result_array() as $in)
						{
							$c = array (' ');
							$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
							$s = strtolower(str_replace($d,"",$in['judul']));
							$link = strtolower(str_replace($c, '-', $s));
							echo '<li><a href="'.base_url().'intermezzo/baca/'.$in['id_berita'].'-'.$link.'">'.$in['judul'].'</a></li>';
						}
						?>
					</ul>
				</div>
				</section>
			</div>

			<div class="cleaner_h10"></div>

			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Online Support (YM)</h3>
				</section>
				<section class="sidebar-widget-content">
				<div id="sub-content-center">
					<ul>
						<li><a href="<?php echo base_url(); ?>produk/belanja/-5000">Kurang
								dari <strong>&le; Rp. 5.000</strong>
						</a></li>
						<li><a href="<?php echo base_url(); ?>produk/belanja/5001-10000"><strong>Rp.
									5.001 - Rp. 10.000</strong> </a></li>
						<li><a href="<?php echo base_url(); ?>produk/belanja/10001-15000"><strong>Rp.
									10.001 - Rp. 15.000</strong> </a></li>
						<li><a href="<?php echo base_url(); ?>produk/belanja/15001-20000"><strong>Rp.
									15.001 - Rp. 20.000</strong> </a></li>
						<li><a href="<?php echo base_url(); ?>produk/belanja/20001-30000"><strong>Rp.
									20.001 - Rp. 30.000</strong> </a></li>
						<li><a href="<?php echo base_url(); ?>produk/belanja/30001-">Lebih
								dari <strong>&ge; Rp. 30.001</strong>
						</a></li>
					</ul>
				</div>
				</section>
			</div>

			<div class="cleaner_h10"></div>

			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Intermezzo</h3>
				</section>
				<section class="sidebar-widget-content">
				<div id="sub-content-center">
					<table>
						<tr>
							<td width="90"><li>M. Nasirin</li></td>
							<td><a href='ymsgr:sendim?mnasirin73'><img
									src="http://opi.yahoo.com/online?u=mnasirin73&amp;m=g&amp;t=1"
									border=0> </a></td>
						</tr>
						<tr>
							<td width="90"><li>Ridho</li></td>
							<td><a href='ymsgr:sendim?zridho77'><img
									src="http://opi.yahoo.com/online?u=zridho77&amp;m=g&amp;t=1"
									border=0> </a></td>
						</tr>
						<tr>
							<td width="90"><li>Ristanto</li></td>
							<td><a href='ymsgr:sendim?juan_mata89'><img
									src="http://opi.yahoo.com/online?u=juan_mata89&amp;m=g&amp;t=1"
									border=0> </a></td>
						</tr>
						<tr>
							<td width="90"><li>Owner</li></td>
							<td><a href='ymsgr:sendim?konkrit_68'><img
									src="http://opi.yahoo.com/online?u=konkrit_68&amp;m=g&amp;t=1"
									border=0> </a></td>
						</tr>
					</table>
				</div>
				</section>
			</div>

			<div class="cleaner_h10"></div>

			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Hot Line Service</h3>
				</section>
				<section class="sidebar-widget-content">
				<div id="sub-content-center">
					<p align="center" style="margin: 0px auto; padding: 3px;">
						<img
							src="<?php echo base_url(); ?>asset/images/hot-line-contact.png" />
					</p>
					<p align="center" style="margin: 0px auto; padding: 3px;">
						<img
							src="<?php echo base_url(); ?>asset/images/hot-line-email.png" />
					</p>
				</div>
				</section>
			</div>

		</div>
		<!-- CONTENT -->
		<?php echo $template["body"];?>
		<!-- RIGHT -->
		<div id="content-right">
			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Keranjang Belanja Anda</h3>
				</section>
				<section class="sidebar-widget-content">
				<div id="sub-content-center">
					<img src="<?php echo base_url(); ?>asset/images/beli.png"
						class="img-right" /> <strong><?php echo $this->cart->total_items(); ?>
						item produk</strong>
					<div style="border-bottom: 1px dashed #666666; width: 80%"></div>
					Total: <strong>Rp. <?php echo number_format($this->cart->total(),2,',','.'); ?>
					</strong>
					<?php
					if($this->cart->total_items()>0)
					{
						?>
					<a href="<?php echo base_url(); ?>keranjang"><div
							class="lihat-keranjang-kiri">Lihat Keranjang</div> </a> <a
						href="<?php echo base_url(); ?>checkout"><div
							class="selesai-belanja-kanan">Selesai Belanja</div> </a>
					<?php
					} else { }
					?>
					<div class="cleaner_h0"></div>
				</div>
				</section>
			</div>

			<div class="cleaner_h10"></div>

			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Produk Terbaru Bulan Ini</h3>
				</section>
				<section class="sidebar-widget-content sub-content-center-privat">
				<ul id="produkbaru">
					<?php
					foreach($slide_baru->result_array() as $sb)
					{
						$tss = "";
						$mati = "";
						if($sb['stok']>0)
						{
							$tss = '<span style="margin:0px auto; padding:0px; font-size:12px;"><b>Ada</b></span>';
							$mati = "";
						}
						else
						{
							$tss = '<span style="margin:0px auto; padding:0px; font-size:12px; color:red;"><b>Habis</b></span>';
							$mati = "disabled";
						}
						$c = array (' ');
						$d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
						$s = strtolower(str_replace($d,"",$sb['nama_produk']));
						$link = strtolower(str_replace($c, '-', $s));
						echo '<li><form method="post" action="'.base_url().'keranjang/tambah_barang"><div id="list-produk">
			<input type="hidden" name="kode_produk" value="'.$sb['kode_produk'].'">
			<input type="hidden" name="banyak" value="5">
			<input type="hidden" name="harga" value="'.$sb['harga'].'">
			<input type="hidden" name="nama_produk" value="'.$sb['nama_produk'].'">
			<p style="text-align:center; margin:0px auto; height:35px;"><strong>'.$sb['nama_produk'].'</strong></p><p style="text-align:center; margin:0px auto;"><img src="'.base_url().'asset/produk/'.$sb['gbr_kecil'].'" width="100" class="vtip" title="'.$sb['nama_produk'].' - Harga Rp.'.number_format($sb['harga'],2,',','.').'" /><br />Rp. '.number_format($sb['harga'],2,',','.').' | Stok : '.$tss.'<br /><div style="width:152px; margin:0px auto; padding:0px;"><input type="submit" class="tombol-beli" value="" '.$mati.'><a href="'.base_url().'produk/detail/'.strtolower($sb['kode_produk']).'-'.$link.'" class="vtip" title="'.$sb['nama_produk'].' - Harga Rp.'.number_format($sb['harga'],2,',','.').'"><img src="'.base_url().'asset/images/bar-detail.png" border=0 style="float:right;" /></a></div>
			</p></div></form></li>';
					}
					?>
				</ul>
				</section>
			</div>

			<div class="cleaner_h10"></div>

			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Testimonial Pengunjung</h3>
				</section>
				<section class="sidebar-widget-content"> <script
					type="text/javascript">
				  $(function() {
					var ticker = $("#ticker");
					ticker.children().filter("dt").each(function() {
					  var dt = $(this),
					    container = $("<div>");
					  dt.next().appendTo(container);
					  dt.prependTo(container);
					  container.appendTo(ticker);
					});
							
					ticker.css("overflow", "hidden");
					function animator(currentItem) {
					  var distance = currentItem.height();
						duration = (distance + parseInt(currentItem.css("marginTop"))) / 0.025;
					  currentItem.animate({ marginTop: -distance }, duration, "linear", function() {
						currentItem.appendTo(currentItem.parent()).css("marginTop", 0);
						animator(currentItem.parent().children(":first"));
					  }); 
					};
					
					animator(ticker.children(":first"));
					ticker.mouseenter(function() {
					  ticker.children().stop();
					});
					
					ticker.mouseleave(function() {
					  animator(ticker.children(":first"));
					});
				  });
			    </script> <script type="text/javascript">
			$(document).ready(function () {
			<?php
			for($i=1;$i<=count($testimonial->result_array());$i++)
			{
			?>
			  $('#dialg<?php echo $i; ?>').simpleDialog();
			<?php
			  }
			?>
			});
			</script>
				<div id="tickerContainer">
					<dl id="ticker">

						<?php
						$no = 1;
						foreach($testimonial->result_array() as $ts)
						{
							$komen = substr($ts['pesan'],0,100);
							echo '<dt class="heading"><b><a href="mailto:'.$ts['email'].'">'.$ts['nama'].'</a></b></dt><dd class="text"><span class="komen-testi">'.$komen.'...<b><a href="'.base_url().'testimonial/baca/'.$ts['id_testi'].'/" id="dialg'.$no.'">[baca]</a></b></span></dd>';
							$no++;
						}
						?>
						</ul>
					</dl>
				</div>
				<p align="center" style="margin: 0px auto; padding: 0px;">
					<a href="<?php echo base_url(); ?>testimonial/isi"><img
						src="<?php echo base_url(); ?>asset/images/isi-testi.png"
						border="0" /> </a>
				</p>
				<p align="center" style="margin: 0px auto; padding: 0px;">
					<a href="<?php echo base_url(); ?>testimonial"><img
						src="<?php echo base_url(); ?>asset/images/baca-testimonial.png"
						border="0" /> </a>
				</p>
				</section>
			</div>

			<div class="cleaner_h10"></div>

			<div class="sidebar-widget">
				<section class="sidebar-widget-header">
				<h3>Jasa Pengiriman Barang</h3>
				</section>
				<section class="sidebar-widget-content">
				<div id="sub-content-center">
					<p align="center" style="margin: 0px auto; padding: 3px;">
						<a href="http://www.tiki-online.com/" target="_blank"><img
							src="<?php echo base_url(); ?>asset/images/tiki.png" border="0" />
						</a>
					</p>
					<p align="center" style="margin: 0px auto; padding: 3px;">
						<a href="http://www.esl-express.com/" target="_blank"><img
							src="<?php echo base_url(); ?>asset/images/sl.png" border="0" />
						</a>
					</p>
					<p align="center" style="margin: 0px auto; padding: 3px;">
						<a href="http://www.jne.co.id/" target="_blank"><img
							src="<?php echo base_url(); ?>asset/images/jne.png" border="0" />
						</a>
					</p>
				</div>
				</section>
			</div>

		</div>
	</div>
	<!-- BOTTOM -->






	<div id="footer">
		<div id="inner-footer">
			<div id="left-footer">
				<div id="big-sub-content-title">Metode Pembayaran</div>
				<div id="big-sub-content-center">
					<div id="sub-rekening">
						<img src="<?php echo base_url(); ?>asset/images/bank-syariah.png" /><br />No.
						Rekening : <br /> 2857 027 105 <br />a/n Heri Kuswanto
					</div>
					<div id="sub-rekening">
						<img src="<?php echo base_url(); ?>asset/images/bank-bri.png" /><br />No.
						Rekening : <br /> 6125-01-003271-53-9<br />a/n Heri Kuswanto
					</div>
					<div id="sub-rekening">
						<img src="<?php echo base_url(); ?>asset/images/bank-bca.png" /><br />No.
						Rekening : <br /> 1800 658 299<br />a/n Heri Kuswanto
					</div>
					<div id="sub-rekening">
						<img src="<?php echo base_url(); ?>asset/images/bank-mandiri.png" /><br />No.
						Rekening : <br /> 143-00-1170047-1<br />a/n Heri Kuswanto
					</div>
					<div class="cleaner_h10"></div>
					<div class="cleaner_h5"></div>
					<p style="margin: 0px auto; text-align: center; font-weight: bold;">Setelah
						melakukan pembayaran, silahkan konfirmasi pembayaran anda :</p>
					<div class="cleaner_h10"></div>
					<a href="<?php echo base_url(); ?>konfirmasi"><img
						src="<?php echo base_url(); ?>asset/images/bar-konfirmasi.png"
						style="float: left;" border="0" /> </a>
					<p style="float: left;">atau</p>
					<img
						src="<?php echo base_url(); ?>asset/images/bar-konfirmasi-telpon.png"
						style="float: left;" />
				</div>
				<div id="big-sub-content-footer"></div>
			</div>
			<div id="right-footer">
				<div id="big-sub-content-title">Bergabung Dengan Grup Kami Di
					Facebook</div>
				<div id="big-sub-content-center">
					<iframe
						src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fharmonisgrosirsandal&amp;width=460&amp;colorscheme=light&amp;connections=8&amp;stream=false&amp;header=false&amp;height=180"
						scrolling="no" frameborder="0"
						style="border: none; overflow: hidden; width: 460px; height: 180px;"
						allowTransparency="true"></iframe>
				</div>
				<div id="big-sub-content-footer"></div>
			</div>
			<div class="cleaner_h10"></div>
			<div id="menu-footer">Beranda | Tentang Kami | Cara Belanja |
				Konfirmasi Pembayaran | Hubungi Kami | Site Map Produk | Keranjang
				Belanja</div>
			<div id="copy-footer">
				Copyright &copy; 2011 Grosir Sandal Online. All Rights Reserved.<br />
				Anda berkunjung dengan IP Address 222.124.156.230
			</div>
		</div>
	</div>
	<?php echo (isset($template["partials"]["footer"]))?$template["partials"]["footer"]:"";?>
</body>
</html>
