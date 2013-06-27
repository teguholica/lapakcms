<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
	<h1><?php echo $judul; ?></h1>
	<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>aksesroot/insert_katalog" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="catalogue-title">Judul Katalog</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" name="nama" class="input-block-level span3" size="60">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="catalogue-file">Upload File</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="file" name="userfile" class="input-block-level span3" size="30">
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

