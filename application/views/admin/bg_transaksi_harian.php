<div class="container-fluid">
	<?php if($lvl=="spradmn"){ $p = "Super Admin"; } else{ $p = "User Biasa"; } ?>
	<h1><?php echo $judul; ?></h1>
    <form class="form-inline" method="post" action="<?php echo base_url(); ?>aksesroot/transaksi_harian">
	    <select name="tgl" class="login-inp">
			<?php
			  for ($i=1; $i<=31; $i++)
			  {
					$lebar=strlen($i);
					switch($lebar){
					  case 1:
					  {
						echo '<option value="0'.$i.'">0'.$i.'</option>';
						break;     
					  }
					  case 2:
					  {
						echo '<option value="'.$i.'">'.$i.'</option>';
						break;     
					  }      
					} 
				}
			?>
		</select>
		<select name="bln" class="login-inp">
		<?php
		  for ($j=1; $j<=12; $j++)
		  {
				$lebar=strlen($j);
				switch($lebar){
				  case 1:
				  {
					echo '<option value="0'.$j.'">0'.$j.'</option>';
					break;     
				  }
				  case 2:
				  {
					echo '<option value="'.$j.'">'.$j.'</option>';
					break;     
				  }      
				} 
			}
		?>
		</select>
		<select name="thn" class="login-inp">
		<?php
			for($k=2010;$k<=date('Y');$k++)
			{
				echo '<option value="'.$k.'">'.$k.'</option>';
			}
		?>
		</select>
	    <button type="submit" class="btn btn-primary">Lihat Transaksi</button>
    </form>
	<table class="table table-striped">
		<thead>
        	<tr>
          		<th>Kode Transaksi</th>
       			<th>Pemesan</th>
  				<th>Penerima</th>
  				<th>Kode Produk</th>
  				<th>Nama Produk</th>
  				<th>Harga</th>
  				<th>Jumlah</th>
  				<th>Total</th>
  			</tr>
  		</thead>
  		<tbody>
  			<?php foreach($tampil->result_array() as $tp):?>
			<?php $tot = $tp['jumlah']*$tp['harga'];?>
			<tr>
				<td width="120" style="padding:5px;"><?php echo $tp['kode_transaksi'];?></td>
				<td style="padding:5px;"><?php echo $tp['nama'];?></td>
				<td style="padding:5px;"><?php echo $tp['nama_penerima'];?></td>
				<td style="padding:5px;"><?php echo $tp['kode_produk'];?></td>
				<td style="padding:5px;"><?php echo $tp['nama_produk'];?></td>
				<td style="padding:5px;"><?php echo $tp['harga'];?></td>
				<td style="padding:5px;"><?php echo $tp['jumlah'];?></td>
				<td style="padding:5px;"><?php echo $tot;?></td>
			</tr>
			<?php endforeach;?>
  		</tbody>
  	</table>
  	<div class="pagination"><?php echo $paginator; ?></div>
</div>