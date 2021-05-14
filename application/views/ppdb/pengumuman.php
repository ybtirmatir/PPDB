<div class="container">
<?php
	$pengumuman = $pengumuman->status;
	if ($pengumuman == 'dihidupkan')
	{
	?>
	<h3 class="header smaller lighter blue">Daftar Keseluruhan Peserta : <?php echo $jumlah;?></h3>
	

		<table class="table table-striped table-bordered data">
			<thead>
				<tr>			
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Alamat</th>
					<th>Jalur</th>
					<th>Status</th>
					<th>KETERANGAN</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->agama;?></td>
					<td><?php echo $peserta->alamat;?></td>
					<td><?php echo $peserta->jalur;?></td>
					<td><?php echo $peserta->status;?></td>
					<td><span class= "btn btn-large btn-warning"><?php echo $peserta->keterangan;?></span></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	<?php
	}
	else
	{
	?>
		<div class="alert alert-danger" role="alert">Maaf Pengumuman belum dibuka</div>
	<?php
	}
?>

		
	</div>