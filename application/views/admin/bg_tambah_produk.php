<?php echo $scriptmce;?>
<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
		<h1><?php echo $judul; ?></h1>
		<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>aksesroot/insert_produk" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="product-code">Kode Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" value="SDL" name="kons" readonly="readonly" class="input-block-level span3" size="10"> - 
					<input type="text" value="<?php echo $digit_akhir; ?>" name="digit" readonly="readonly" class="input-block-level span3" size="40">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-name">Nama Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" name="nama" class="input-block-level span6" size="60">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-category">Kategori Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<select name="kategori" class="login-inp">
					<?php foreach($kat->result_array() as $k):?>
						<option value="<?php echo $k['id_kategori'];?>"><?php echo $k['nama_kategori'];?></option>
					<?php endforeach;?>
					</select>
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-type">Tipe Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<select name="tipe">
						<option value="pria">Pria</option>
						<option value="wanita">Wanita</option>
						<option value="tanggung">Tanggung</option>
						<option value="anak">Anak</option>
						<option value="baby">Baby</option>
					</select>
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-price">Harga</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" name="harga" class="input-block-level span3" size="60">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-stock">Stok Barang</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" name="stok" class="input-block-level span3" size="60">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-description">Deskripsi Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<textarea name="deskripsi" class="input-block-level span3" cols="70" rows="8"></textarea>
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="product-image">Gambar Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="file" size="40" name="imagefile" class="input-block-level span3"> * Gambar maksimal ukuran 400px
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