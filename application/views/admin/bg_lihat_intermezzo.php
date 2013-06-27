<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
	<h1><?php echo $judul; ?></h1>
	<table class="table table-striped">
		<thead>
        	<tr>
          		<th>Kode</th>
       			<th>Judul</th>
  				<th>Tanggal</th>
  				<th>Jam</th>
  				<th>Gambar</th>
  				<th>Dibaca</th>
  				<th>Edit</th>
  				<th>Hapus</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php foreach($tampil->result_array() as $tp):?>
			<tr>
				<td width="120" style="padding:5px;">IHGS-<?php echo $tp['id_berita'];?></td>
				<td style="padding:5px;"><?php echo $tp['judul'];?></td>
				<td style="padding:5px;"><?php echo $tp['tanggal'];?></td>
				<td style="padding:5px;"><?php echo $tp['jam'];?></td>
				<td style="padding:5px;"><?php echo $tp['gambar'];?></td>
				<td style="padding:5px;"><?php echo $tp['dibaca'];?></td>
				<td style="padding:5px;"><a href="<?php echo site_url('aksesroot/edit_intermezzo/'.$tp['id_berita']);?>"><img src="<?php echo base_url();?>asset/images/edit-icon.gif" border=0> Edit</a></td>
				<td style="padding:5px;"><a href="<?php echo site_url('aksesroot/hapus_intermezzo/'.$tp['id_berita'].'/'.$tp['gambar']);?>" onClick='return confirm("Anda yakin ingin menghapus konten ini???")'><img src="<?php echo base_url();?>asset/images/hapus.png" border=0> Hapus</a></td>
			</tr>
			<?php endforeach;?>
  		</tbody>
  	</table>
  	<div class="pagination"><?php echo $paginator; ?></div>
</div>