<div class="container">
								<h3 class="header smaller lighter blue">Daftar Keseluruhan Peserta : <?php echo $jumlah;?></h3>
								<h3 class="header smaller lighter blue">Tampilkan Peserta Berdasarkan Jalur: </h3>
	<a href="<?php echo site_url('admin/jalurzonasi');?>"><button class="btn btn-large btn-danger">Peserta jalur <strong>ZONASI</strong></button></a>
						
						<a href="<?php echo site_url('admin/jalurprestasi');?>"><button class="btn btn-large btn-primary">Peserta jalur <strong>PRESTASI</strong></button></a>

<a href="<?php echo site_url('admin/jalurafirmasi');?>"><button class="btn btn-large btn-warning">Peserta jalur <strong>AFIRMASI</strong></button></a>

<a href="<?php echo site_url('admin/jalurluarkab');?>"><button class="btn btn-large btn-large">Peserta jalur <strong>LUAR KOTA/KAB</strong></button></a>
					
<a href="<?php echo base_url("index.php/siswa/export");?>"><button class="btn btn-large btn-large">Export ke Excel</button></a><br/><br/><br/>

								<table class="table table-striped table-bordered">
			<thead>
				<tr>	
					<th>NO</th>
				<th>id</th>		
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					
					<th>Usia</th>
					<th>Jalur</th>
					<th>Jarak</th>
					<th>Keterangan</th>
<<<<<<< HEAD
					<th align="center">LULUS/TIDAK LULUS</a></th>
=======
					<th align="center">Aksi</a></th>
>>>>>>> 122220129a40f2bd7831da915e22e615a0517795
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $peserta->id_peserta;?></td>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					<td><?php echo $peserta->usia;?></td>
					<td><?php echo $peserta->jalur;?></td>
					<td><?php echo $peserta->jarak;?></td>
					<td><span class= "badge badge-warning"><?php echo $peserta->keterangan;?></span></td>
					
<<<<<<< HEAD
					<td><a href="<?php echo site_url('admin/luluspeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-primary">Lulus</span></a>
					<a href="<?php echo site_url('admin/tidakluluspeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-danger">Tidak Lulus</span></a></td>
=======
					<td><a href="<?php echo site_url('admin/luluspeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-warning">Lulus</span></a></td>
					<td><a href="<?php echo site_url('admin/tidakluluspeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-warning">Tidak Lulus</span></a></td>
>>>>>>> 122220129a40f2bd7831da915e22e615a0517795
					
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>