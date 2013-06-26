<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
	$(function(){
    	$('#tgl').datepicker({dateFormat: 'd MM yy'});		
	});
</script>
<link
	href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/redmond/jquery-ui.css"
	type="text/css" rel="stylesheet" />
<div class="container-fluid">
	<?php if($lvl=="spradmn"){ 
		$p = "Super Admin";
	} else{ $p = "User Biasa";
} ?>
	<h1>
		<?php echo $judul; ?>
	</h1>
	<ul>
		<?php
		foreach($kat_level->result_array() as $m1)
		{
			$nm_link1 = $m1['id_kategori'].'-'.$m1['nama_kategori'];
			$ld1 = strtolower(str_replace(" ","-",$nm_link1));
			echo '<li>'.$m1['nama_kategori'].' - <a href="'.base_url().'aksesroot/edit_kategori/'.$m1['id_kategori'].'"><img src="'.base_url().'asset/images/edit-icon.gif" border=0> Edit</a> | <a href="'.base_url().'aksesroot/hapus_kategori/'.$m1['id_kategori'].'" onClick=\'return confirm("Anda yakin ingin menghapus konten ini???")\'><img src="'.base_url().'asset/images/hapus.png" border=0> Hapus</a><ul>';

			$sub1 = $this->sandal_admin_model->menu_kategori('1',$m1['id_kategori']);
			foreach($sub1->result() as $sm1)
			{
				$nm_link2 = $sm1->id_kategori.'-'.$sm1->nama_kategori;
				$ld2 = strtolower(str_replace(" ","-",$nm_link2));
				$sub2 = $this->sandal_admin_model->menu_kategori('2',$sm1->id_kategori);
				echo '<li>'.$sm1->nama_kategori.' - <a href="'.base_url().'aksesroot/edit_kategori/'.$sm1->id_kategori.'"><img src="'.base_url().'asset/images/edit-icon.gif" border=0> Edit</a> | <a href="'.base_url().'aksesroot/hapus_kategori/'.$sm1->id_kategori.'" onClick=\'return confirm("Anda yakin ingin menghapus konten ini???")\'><img src="'.base_url().'asset/images/hapus.png" border=0> Hapus</a><ul>';

				foreach($sub2->result() as $sm2)
				{
					$nm_link3 = $sm2->id_kategori.'-'.$sm2->nama_kategori;
					$ld3 = strtolower(str_replace(" ","-",$nm_link3));
					echo '<li>'.$sm2->nama_kategori.' - <a href="'.base_url().'aksesroot/edit_kategori/'.$sm2->id_kategori.'"><img src="'.base_url().'asset/images/edit-icon.gif" border=0> Edit</a> | <a href="'.base_url().'aksesroot/hapus_kategori/'.$sm2->id_kategori.'" onClick=\'return confirm("Anda yakin ingin menghapus konten ini???")\'><img src="'.base_url().'asset/images/hapus.png" border=0> Hapus</a></li>';
				}

				echo '</ul>';
				echo '</li>';

			}
			echo '</ul>';
			echo '</li>';
		}
		?>
	</ul>
</div>
