
<div class="container-fluid">
	<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputEmail">Kode Produk</label>
			<div class="controls">
				<div class="row-fluid">
					<input type="text" id="inputEmail" class="input-block-level span3"> - 
					<input type="text" id="inputEmail" class="input-block-level span3">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password</label>
			<div class="controls">
				<input type="password" id="inputPassword" placeholder="Password">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<label class="checkbox"> <input type="checkbox"> Remember me
				</label>
				<button type="submit" class="btn">Sign in</button>
			</div>
		</div>
	</form>
	<form method="post"
		action="<?php echo base_url();?>aksesroot/aksilogin">
		<input type="text" class="input-block-level" placeholder="Email"
			name="username"> <input type="password" class="input-block-level"
			placeholder="Kata sandi" name="password"> <input type="password"
			class="input-block-level" placeholder="Isikan kode diatas"
			name="captcha"> <label class="checkbox"> <input type="checkbox"
			value="remember-me">Ingat akun ini
		</label>
		<button class="btn btn-primary" type="submit">Masuk</button>
	</form>
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
		<h1><?php echo $judul; ?></h1><br>		<table width="98%" cellpadding="10">
		<tr><td valign="top">
		<fieldset style="border:1px dashed #666666; width:98%; padding:10px;">
<legend align="left"><strong>Form Tambah Produk :</strong></legend>
<form method="post" action="<?php echo base_url(); ?>aksesroot/insert_produk" enctype="multipart/form-data">
<table width="100%">
	<tr><td width="120">Kode Produk</td><td width="10">:</td><td><input type="text" value="SDL" name="kons" readonly="readonly" class="login-inp" size="10"> - <input type="text" value="<?php echo $digit_akhir; ?>" name="digit" readonly="readonly" class="login-inp" size="40"> </td></tr>
	<tr><td width="150">Nama Produk</td><td>:</td><td><input type="text" name="nama" class="login-inp" size="60"> </td></tr>
	<tr><td width="150">Kategori Produk</td><td>:</td><td>
	<select name="kategori" class="login-inp">
	<?php
		foreach($kat->result_array() as $k)
		{
			echo '<option value="'.$k['id_kategori'].'">'.$k['nama_kategori'].'</option>';
		}
	?>
	</select>
	</td></tr>
	<tr><td width="150">Tipe Produk</td><td>:</td><td>
	<select name="tipe" class="login-inp">
	<option value="pria">Pria</option>
	<option value="wanita">Wanita</option>
	<option value="tanggung">Tanggung</option>
	<option value="anak">Anak</option>
	<option value="baby">Baby</option>
	</select>
	</td></tr>
	<tr><td width="120">Harga</td><td>:</td><td><input type="text" name="harga" class="login-inp" size="60"> </td></tr>
	<tr><td width="120">Stok Barang</td><td>:</td><td><input type="text" name="stok" class="login-inp" size="60"> </td></tr>
	<tr><td width="120">Dibeli</td><td>:</td><td><input type="text" name="dibeli" value="1" class="login-inp" size="20"> </td></tr>
	<tr><td width="120" valign="top">Deskripsi Produk</td><td valign="top">:</td><td><textarea name="deskripsi" class="login-inp" cols="70" rows="8"></textarea></td></tr>
	<tr><td width="120">Gambar Produk</td><td>:</td><td><input type="file" size="40" name="imagefile" class="login-inp"> * Gambar maksimal ukuran 400px</td></tr>
	<tr><td width="120"></td><td></td><td><input type="submit" class="input-tombol" value="Simpan Data"> </td></tr>
</table>
</form>
	</fieldset>
		</td></tr>
		</table>
</div>