<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
	<h1><?php echo $judul; ?></h1>
	<table class="table table-striped">
		<thead>
        	<tr>
          		<th>Kode Member</th>
       			<th>Nama Member</th>
  				<th>Username</th>
  				<th>Email</th>
  				<th>Telpon</th>
  				<th>Status</th>
  				<th>Edit</th>
  				<th>Hapus</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php foreach($ls->result_array() as $tp):?>
			<?php $st="Tidak Aktif";?>
			<?php if($tp['stts']==1)$st="Aktif";?>
			<tr>
				<td width="120" style="padding:5px;">MHGS-<?php echo $tp['kode_user'];?></td>
				<td style="padding:5px;"><?php echo $tp['nama'];?></td>
				<td style="padding:5px;"><?php echo $tp['username_user'];?></td>
				<td style="padding:5px;"><?php echo $tp['email'];?></td>
				<td style="padding:5px;"><?php echo $tp['telpon']?></td>
				<td style="padding:5px;"><?php echo $st;?></td>
				<td style="padding:5px;"><a href="<?php echo site_url("aksesroot/edit_member/".$tp['kode_user']);?>"><img src="<?php echo base_url();?>asset/images/edit-icon.gif" border=0> Edit</a></td>
				<td style="padding:5px;"><a href="<?php echo site_url("aksesroot/hapus_member/".$tp['kode_user']);?>" onClick='return confirm("Anda yakin ingin menghapus konten ini???")'><img src="<?php echo base_url();?>asset/images/hapus.png" border=0> Hapus</a></td>
			</tr>
			<?php endforeach;?>
  		</tbody>
  	</table>
  	<div class="pagination"><?php echo $paginator; ?></div>
</div>