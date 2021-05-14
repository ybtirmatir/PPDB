<div class="container">
								<h3 class="header smaller lighter blue">Daftar Keseluruhan Peserta : <?php echo $jumlah;?></h3>
								<h3 class="header smaller lighter blue">Tampilkan Peserta Berdasarkan Jalur: </h3>
	<a href="<?php echo site_url('admin/jalurzonasi');?>"><button class="btn btn-large btn-danger">Peserta jalur <strong>ZONASI</strong></button></a>
						
						<a href="<?php echo site_url('admin/jalurprestasi');?>"><button class="btn btn-large btn-primary">Peserta jalur <strong>PRESTASI</strong></button></a>

<a href="<?php echo site_url('admin/jalurafirmasi');?>"><button class="btn btn-large btn-warning">Peserta jalur <strong>AFIRMASI</strong></button></a>

<a href="<?php echo site_url('admin/jalurluarkab');?>"><button class="btn btn-large btn-large">Peserta jalur <strong>LUAR KOTA/KAB</strong></button></a>

<a href="<?php echo base_url("index.php/siswa/export");?>"><button class="btn btn-large btn-large">Export ke Excel</button></a><br/><br/><br/>
					
				</div>
								<table class="table table-striped table-bordered data">
									
			<thead>
				<tr>	
					
				<th>NO</th>
				<th>id</th>	
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					
					<th>Jalur</th>
					<th>Jarak</th>
					<th>Score</th>
					<th>Status</th>
					
					<th align="center">Aksi</a></th>
					<th align="center">KETERANGAN</a></th>
					<th align="center">LULUS/TIDAK LULUS</a></th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach 
				
				($peserta as $peserta)
				{
				?>
				<tr>
					
					<td><?php echo $no++ ?></td>
					<td><?php echo $peserta->id_peserta;?></td>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					
					<td><?php echo $peserta->jalur;?></td>
					<td><?php echo $peserta->jarak;?></td>
					<td><?php echo $peserta->score;?></td>
					<td><?php echo $peserta->status;?></td>
					
					
					<td><a href="<?php echo site_url('admin/download/'.$peserta->dokumen);?>">Download Lampiran</a></td>
					<td><?php echo $peserta->keterangan;?></td>
					<td><a href="<?php echo site_url('admin/luluspeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-primary">Lulus</span></a>
					<a href="<?php echo site_url('admin/tidakluluspeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-danger">Tidak Lulus</span></a></td>



					
					</td>
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>