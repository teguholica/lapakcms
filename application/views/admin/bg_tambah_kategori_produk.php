<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
		<h1><?php echo $judul; ?></h1>
	<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>aksesroot/insert_kategori">
		<div class="control-group">
			<label class="control-label" for="category-name">Nama Kategori Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" name="nama" class="input-block-level span3" size="60">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-category">Kategori Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<select name="kategori" class="login-inp">
						<option value="0">Induk</option>
						<?php foreach($kat->result_array() as $k):?>
						<option value="<?php echo $k['id_kategori'];?>"><?php echo $k['nama_kategori'];?></option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="level">Tingkatan Level</label>
			<div class="controls">
				<div class="row-fluid">
					<select name="tingkat" class="login-inp">
						<option value="0">Tingkat Induk</option>
						<option value="1">Tingkat 1</option>
						<option value="2">Tingkat 2</option>
					</select>
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

