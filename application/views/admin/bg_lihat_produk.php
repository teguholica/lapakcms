<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
	<h1><?php echo $judul; ?></h1>
	<table class="table table-striped">
		<thead>
        	<tr>
          		<th>Kode Produk</th>
       			<th>Nama Produk</th>
  				<th>Kategori</th>
  				<th>Stok</th>
  				<th>Harga</th>
   				<th>Tipe Produk</th>
   				<th>Edit</th>
   				<th>Hapus</th>
  			</tr>
  		</thead>
  		<tbody>
		<?php foreach($tampil->result_array() as $tp):?>
		<tr>
			<td width="120" style="padding:5px;"><?php echo $tp['kode_produk'];?></td>
			<td style="padding:5px;"><?php echo $tp['nama_produk'];?></td>
			<td style="padding:5px;"><?php echo $tp['nama_kategori'];?></td>
			<td style="padding:5px;"><?php echo $tp['stok'];?></td>
			<td style="padding:5px;"><?php echo $tp['harga'];?></td>
			<td style="padding:5px;"><?php echo $tp['tipe_produk'];?></td>
			<td style="padding:5px;"><a href="<?php echo base_url().'aksesroot/edit_produk/'.$tp['kode_produk'];?>"><img src="<?php echo base_url().'asset/images/edit-icon.gif';?>" border=0> Edit</a></td>
			<td style="padding:5px;"><a href="<?php echo base_url().'aksesroot/hapus_produk/'.$tp['kode_produk'].'/'.$tp['gbr_kecil'];?>" onClick=\'return confirm("Anda yakin ingin menghapus konten ini???")\'><img src="<?php echo base_url().'asset/images/hapus.png';?>" border=0> Hapus</a></td>
		</tr>
		<?php endforeach;?>
		</tbody>
	</table>
	<div class="pagination"><?php echo $paginator; ?></div>
</div>