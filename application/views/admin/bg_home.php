<div class="container-fluid">
	<div id="content">
		<div id="page-heading">
		<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
			<h1><?php echo $judul; ?></h1><br>
			Selamat datang, <b><?php echo $nama; ?>.</b><br>
			Anda Log In dengan username <strong><?php echo $username; ?></strong>, dengan privilage <?php echo $p; ?>
		</div>
		<div class="clear">&nbsp;</div>
	</div>
</div>