<div class="container-fluid">
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript">
		$(function(){
	    	$('#tgl').datepicker({dateFormat: 'd MM yy'});
		});
	</script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/redmond/jquery-ui.css" type="text/css" rel="stylesheet"/>
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
	<h1><?php echo $judul; ?></h1>
	<table class="table table-striped">
		<thead>
        	<tr>
          		<th>Kode Katalog</th>
       			<th>Judul Katalog</th>
  				<th>Tanggal Posting</th>
  				<th>Edit</th>
  				<th>Hapus</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php foreach($katalog->result_array() as $tp):?>
				<tr>
					<td width="120" style="padding:5px;">KTHGS-<?php echo $tp['id_katalog'];?></td>
					<td style="padding:5px;"><?php echo $tp['judul_file'];?></td>
					<td style="padding:5px;"><?php echo $tp['tgl_posting'];?></td>
					<td style="padding:5px;"><a href="<?php echo base_url().'aksesroot/edit_katalog/'.$tp['id_katalog'];?>"><img src="<?php echo base_url();?>asset/images/edit-icon.gif" border=0> Edit</a></td>
					<td style="padding:5px;"><a href="<?php echo base_url().'aksesroot/hapus_katalog/'.$tp['id_katalog'].'/'.$tp['nama_file'];?>" onClick='return confirm("Anda yakin ingin menghapus konten ini???")'><img src="<?php echo base_url();?>asset/images/hapus.png" border=0> Hapus</a></td>
				</tr>
			<?php endforeach;?>
  		</tbody>
  	</table>
</div>