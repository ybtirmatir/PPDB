<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>SMP Negeri 2 Ciawi</title>
	
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/custom2.css');?>" rel="stylesheet">

	<!--[if lt IE 9]>
			<script src="<?php echo base_url('assets/html5shiv.min.js');?>"></script>
			<script src="<?php echo base_url('assets/respond.min.js');?>"></script>
		<![endif]-->
    
</head>

<body>
<table class="table table-striped table-responsive table-bordered">
 
	<tr>
		<td colspan="3" align="center"><H4>TANDA BUKTI PENGAJUAN PENDAFTARAN PPDB<br/>SMP TAHUN PELAJARAN 2020/2021</H4></td>
	</TR>
	<tr>
		<td colspan="3">Print: <?php echo standard_date($format,$time);?></td>
	</tr>
	<tr class="info">
		<td colspan="3" align="center"><h4>BUKTI PENDAFTARAN</h4></td>
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
	<tr></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th>DATA SELEKSI</th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr><tr><th></th></tr>
	<tr><th></th></tr>

	<tr>
<th>Jalur Seleksi</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->jalur;?></td>
		</tr>
<tr>
		<th>Jarak rumah ke sekolah</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->jarak;?> meter </td>
		</tr>
		<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th>DATA NILAI</th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr><tr><th></th></tr>
	<tr><th></th></tr>

	<tr>
		
		<th>Bahasa Indonesia</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel1;?></td>
		</tr>
		<tr>
		<th>Bahas Inggris</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel2;?></td>
		</tr>
		<tr>
		<th>Matematika</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel3;?></td>
		</tr>
		<tr>
		<th>IPA</th>
		<td style="width:1%;">:</td>
		<td><?php echo $peserta->mapel4;?></td>
	</tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr><tr><th></th></tr>
	<tr><th></th></tr>
	
	
<tr>
	<th></th>
	<td></td>
	<td></td>
	<td></td>
	<td>Bogor,..................</td>
</tr>
<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr>
	<th>Tanda Tangan</th>
</tr>
<tr>
	<th>Orang Tua/Wali Siswa</th>
	<td></td>
	<td></td>
	<td></td>
	<td>Panitia PPDB</td>
</tr>
<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr>
	<tr><th></th></tr><tr><th></th></tr>
	<tr><th></th></tr>
		<tr>
	<th>(...................)</th>
	<td></td>
	<td></td>
	<td></td>
	<td>(...................)</td>
</tr>
 
</table>
</body>
</html>