<table class="table table-striped table-responsive table-bordered">
 
	<tr>
		<td colspan="3" align="center"><H4>TANDA BUKTI PENGAJUAN PENDAFTARAN PPDB<br/>SDN TAHUN PELAJARAN 2016/2017</H4></td>
	</TR>
	<tr>
		<td colspan="3">Print:<?php echo standard_date($format,$time);?></td>
	</tr>
	<tr class="info">
		<td colspan="3" align="center"><h4>DATA SISWA</h4></td>
	</tr>
	<tr>
		<th style="width:20%;">Nomor Pendaftaran</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->id_peserta;?></td>
	</tr>
	<tr>
		<th>Nomor Induk kependudukan(NIK)</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nik;?></td>
	</tr>
	<tr>
		<th>Nama Lengkap</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_lengkap;?></td>
	</tr>
	<tr>
		<th>Nama Panggilan</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->nama_panggilan;?></td>
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
		<th>Usia</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->usia;?></td>
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
		<th>Anak ke</th>
		<td style="width:1%;">:</td>
		<td><b><?php echo $peserta->anak_ke;?></b> dari <b><?php echo $peserta->jumlah_saudara;?></b> bersaudara</td>
	</tr>
	<tr>
		<th>Bahasa Sehari-hari</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->bahasa_seharihari;?></td>
	</tr>
	<tr>
		<th>Berat Badan</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->berat_badan;?></td>
	</tr>
	<tr>
		<th>Tinggi Badan</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->tinggi_badan;?></td>
	</tr>
	<tr>
		<th>Golongan Darah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->golongan_darah;?></td>
	</tr>
	<tr>
		<th>Penyakit Yang Pernah Diderita</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->penyakit;?></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->alamat;?></td>
	</tr>
	<tr>
		<th>Status Anak</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->status_anak;?></td>
	</tr>
	<tr>
		<th>No Handphone</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->no_handphone;?></td>
	</tr>
	<tr>
		<th>Hobi</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->hobi;?></td>
	</tr>
	<tr>
		<th>Tinggal Pada</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->tinggal_pada;?></td>
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
		<th><a href="<?php echo site_url('ppdb/cetak');?>"> Cetak</a></th>
	</tr>
 
</table>