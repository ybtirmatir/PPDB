<table class="table table-striped table-responsive table-bordered">
 
	 
	
	<tr class="info">
		<td colspan="3" align="center"><h4>DATA SISWA</h4></td>
	</tr>
	<tr>
		<th style="width:20%;">Nomor Pendaftaran</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->id_peserta;?></td>
	</tr>
	<tr>
		<th>JALUR SELEKSI</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->jalur;?></td>
	</tr>
	<tr>
		<th>Nama Lengkap</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_lengkap;?></td>
	</tr>
	
	<tr>
		<th>Jenis Kelamin</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->jenis_kelamin;?></td>
	</tr>
	<tr>
		<th>Tempat Lahir</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->tempat_lahir;?></td>
	</tr>
	<tr>
		<th>Tanggal Lahir</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->tanggal_lahir;?></td>
	</tr>
	<tr>
		<th>Agama</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->agama;?></td>
	</tr>
	<tr>
		<th>Kewarganegaraan</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->kewarganegaraan;?></td>
	</tr>
<tr>
		<th>Nomor Induk kependudukan(NIK)</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nik;?></td>
	</tr>
		<th>Alamat</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->alamat;?></td>
	</tr>
	<tr class="info">
		<td colspan="3" align="center"><h4>DATA NILAI</h4></td>
	</tr>
	<tr>
		<th>Jarak Rumah Ke sekolah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->jarak;?> Meter</td>
	</tr>
	<tr>
		<th> Nilai <?php echo $biodata->mp1;?></th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel1;?></td>
	</tr>
	
	<tr>
		<th> Nilai <?php echo $biodata->mp2;?></th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel2;?></td>
	</tr>
	<tr>
		<th> Nilai <?php echo $biodata->mp3;?></th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel3;?></td>
	</tr>
	<tr>
		<th> Nilai <?php echo $biodata->mp4;?></th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel4;?></td>
	</tr>
	<tr>
		<th>Score Nilai</th>
		<td style="width:1%;">:</td>
		<td><b><?php echo $peserta->score;?></b></td>
	</tr>
	</tr>
	<tr class="info">
		<td colspan="3" align="center"><h4>DATA ORANG TUA</h4></td>
	</tr>
	<tr>
		<th>Nama Ayah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_ayah;?></td>
	</tr>
	<tr>
		<th>Nama Ibu</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_ibu;?></td>
	</tr>
	<tr>
		<th>Pendidikan Tertinggi Ayah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->pendidikan_ayah;?></td>
	</tr>
	<tr>
		<th>Pendidikan Tertinggi Ibu</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->pendidikan_ibu;?></td>
	</tr>
	<tr>
		<th>Pekerjaan Ayah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->pekerjaan_ayah;?></td>
	</tr>
	<tr>
		<th>Pekerjaan Ibu</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->pekerjaan_ibu;?></td>
	</tr>
	<tr>
		<th>Penghasilan</th>
		<td style="width:1%;">:</td>
		<td>Rp. <?php echo $peserta->penghasilan;?></td>
	</tr>
	
	<tr>
		<th><a href="<?php echo site_url('admin/cetak/'.$peserta->id_peserta);?>"> Cetak</a></th>
	</tr>
	
	

</table>
	<a href="<?php echo site_url('admin/verifikasipeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-warning"><b>Verifikasi</b></span></a>
	<a href="<?php echo site_url('admin/editpeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm"><b>Edit</b></span></a>
	<a href="<?php echo site_url('admin/belumdiverifikasi');?>"><span class= "btn btn-sm btn-red"><b>Cancel</b></span></a>
 
</table>