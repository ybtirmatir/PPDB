<div class="container">
<?php
	$pengumuman = $pengumuman->status;
	if ($pengumuman == 'dihidupkan')
	{
	?>
	<h3 class="header smaller lighter blue">Daftar Keseluruhan Peserta : <?php echo $jumlah;?></h3>
	<h3 class="header smaller lighter blue">Tampilkan Peserta Berdasarkan Jalur: </h3>
	<a href="<?php echo site_url('ppdb/jalurzonasi');?>"><button class="btn btn-large btn-danger">Peserta jalur <strong>ZONASI</strong></button></a>
						
						<a href="<?php echo site_url('ppdb/jalurprestasi');?>"><button class="btn btn-large btn-primary">Peserta jalur <strong>PRESTASI</strong></button></a>

<a href="<?php echo site_url('ppdb/jalurafirmasi');?>"><button class="btn btn-large btn-warning">Peserta jalur <strong>AFIRMASI</strong></button></a>

<a href="<?php echo site_url('ppdb/jalurluarkab');?>"><button class="btn btn-large btn-large">Peserta jalur <strong>LUAR KOTA/KAB</strong></button></a>
						<br/><br/>


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