<div class="container">
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
				<th>id</th>		
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					
					<th>Usia</th>
					<th>Jalur</th>
					<th>Status</th>
					<th>Dokumen</th>
					<th align="center"><a href="<?php echo site_url('admin/tambahpeserta');?>">Tambah Peserta</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->id_peserta;?></td>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					
					<td><?php echo $peserta->usia;?></td>
					<td><?php echo $peserta->jalur;?></td>
					<td><?php echo $peserta->status;?></td>
					
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>