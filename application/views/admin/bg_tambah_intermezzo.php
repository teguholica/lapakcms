<?php echo $scriptmce;?>
<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
		<h1><?php echo $judul; ?></h1>
		<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>aksesroot/insert_intermezzo" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="news-title">Judul</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" name="judul" class="input-block-level span6" size="90">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="news-content">Isi</label>
			<div class="controls">
				<div class="row-fluid">
					<textarea name="isi" class="input-block-level span6" cols="60" rows="10"></textarea>
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="news-image">Gambar Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="file" name="userfile" class="input-block-level" size="30"> * Resolusi gambar maksimal 300 x 300 px
				</div>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</form>
</div>