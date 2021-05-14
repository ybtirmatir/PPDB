<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
  <?php
	$info = $this->session->flashdata('info');
	if (!empty($info))
	{
		echo $info;
	}
  ?>

  <?php
  $status = $peserta->status;
  if ($status == 'belum diverifikasi')
  {
  ?>


   
  <h1>JALUR SELEKSI</h1>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>
    
			<?= form_open_multipart('ppdb/up_biodata', ['class'=>'form-horizontal']) ?>

      <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">PILIH JALUR SELEKSI</label>
    <div class="col-sm-10">
     <select class="form-control" name="jalur">
      <option><?php echo $biodata->jalur1;?></option>
      <option><?php echo $biodata->jalur2;?></option>
      <option><?php echo $biodata->jalur3;?></option>
      <option><?php echo $biodata->jalur4;?></option>
      
    </select>
  </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Jarak Rumah Ke sekolah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="isi angka tanpa koma atau titik" name="jarak" value="<?php echo $peserta->jarak;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nilai Matematika</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="isi nilai matematika" name="mapel1" value="<?php echo $peserta->mapel1;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nilai Bahasa Indonesia</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="isi nilai b.indonesia" name="mapel2" value="<?php echo $peserta->mapel2;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nilai Bahasa Inggris</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="isi nilai b.inggris" name="mapel3" value="<?php echo $peserta->mapel3;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nilai IPA</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="isi nilai IPA" name="mapel4" value="<?php echo $peserta->mapel4;?>">
    </div>
  </div>

<h1>Data Siswa</h1>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="NISN" name="nik" value="<?php echo $peserta->nik;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="nama_lengkap" value="<?php echo $peserta->nama_lengkap;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Panggilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama" name="nama_panggilan" value="<?php echo $peserta->nama_panggilan;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <label class="radio-inline">
		<input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki" checked="checked"> Laki-laki
		</label>
		<label class="radio-inline">
		  <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan"> Perempuan
		</label>
    </div>
  </div>
    
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tempat Lahir</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Mis: Bekasi" name="tempat_lahir" value="<?php echo $peserta->tempat_lahir;?>">
    </div>
	
	</div>
	
	<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">tanggal Lahir</label>
    <div class="col-sm-10">
		<div class="col-sm-4">
			<input type="text" class="form-control" id="inputEmail3" name="tanggal_lahir" value="<?php echo $peserta->tanggal_lahir;?>" placeholder="Tanggal Lahir(xx)">
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="inputEmail3" name="bulan_lahir" value="<?php echo $peserta->bulan_lahir;?>" placeholder="Bulan Lahir(xx)">
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" id="inputEmail3" name="tahun_lahir" value="<?php echo $peserta->tahun_lahir;?>" placeholder="Tahun lahir(xxxx)">
		</div>
    </div>
  </div>

	
	<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Agama</label>
    <div class="col-sm-10">
      <select class="form-control" name="agama">
			<option><?php echo $peserta->agama;?></option>
		  <option>Islam</option>
		  <option>Kristen</option>
		  <option>Katolik</option>
		  <option>Hindu</option>
		  <option>Buddha</option>
	</select>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kewarganegaraan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Kewarganegaraan" name="kewarganegaraan" value="<?php echo $peserta->kewarganegaraan;?>">
    </div>
  </div>
  
  <div class="form-group">
  
    <label for="inputPassword3" class="col-sm-2 control-label">Anak Ke</label>
	<div class="col-sm-2">
      <input type="number" class="form-control" id="inputPassword3" name="anak_ke" value="<?php echo $peserta->anak_ke;?>" placeholder="">
    </div>
	
	<div class="col-sm-3">
      <label for="inputPassword3" class="control-label">Jumlah Saudara</label>
    </div>
	
	<div class="col-sm-2">
      <input type="number" class="form-control" id="inputPassword3" name="jumlah_saudara" value="<?php echo $peserta->jumlah_saudara;?>" placeholder="">
    </div>
	
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Bahasa Sehari-hari</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Bahasa sehari-hari" name="bahasa_seharihari" value="<?php echo $peserta->bahasa_seharihari;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Berat Badan</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Kg" name="berat_badan" value="<?php echo $peserta->berat_badan;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tinggi Badan</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" placeholder="Cm" name="tinggi_badan" value="<?php echo $peserta->tinggi_badan;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Golongan Darah</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Golongan Darah" name="golongan_darah" value="<?php echo $peserta->golongan_darah;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Penyakit yg pernah diderita</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Dapat lebih dari 1, dipisah dengan koma" name="penyakit" value="<?php echo $peserta->penyakit;?>">
    </div>
  </div>
	
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <textarea row="5" class="form-control" id="inputPassword3" name="alamat" value="<?php echo $peserta->alamat;?>" placeholder="Alamat"><?php echo $peserta->alamat;?></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Status Anak</label>
    <div class="col-sm-10">
      <select class="form-control" name="status_anak">
			<option><?php echo $peserta->status_anak;?></option>
		  <option>Anak Kandung</option>
		  <option>Anak Tiri</option>
	</select>
    </div>
  </div>
  
	
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">No Handphone</label>
    <div class="col-sm-4">
      <input type="number" class="form-control" id="inputPassword3" name="no_handphone" value="<?php echo $peserta->no_handphone;?>" placeholder="Mis 0812.....">
    </div>
	
	<label for="inputPassword3" class="col-sm-3 control-label">Hobi</label>
	<div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" name="hobi" value="<?php echo $peserta->hobi;?>" placeholder="Hobi">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tinggal Pada</label>
    <div class="col-sm-10">
      <label class="radio-inline">
		<input type="radio" name="tinggal_pada" id="inlineRadio1" value="orang tua" checked="checked"> Orang Tua
		</label>
		<label class="radio-inline">
		  <input type="radio" name="tinggal_pada" id="inlineRadio2" value="menumpang"> Menumpang
		</label>
		<label class="radio-inline">
		  <input type="radio" name="tinggal_pada" id="inlineRadio2" value="asrama"> Asrama
		</label>
    </div>
  </div>
  




<h1>Data Orang Tua</h1>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>


    
	
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Ayah</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputEmail3" name="nama_ayah" value="<?php echo $peserta->nama_ayah;?>" placeholder="Nama Ayah">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Nama Ibu</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" name="nama_ibu" value="<?php echo $peserta->nama_ibu;?>" placeholder="Nama Ibu">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Pendidikan Tertinggi Ayah</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" name="pendidikan_ayah" value="<?php echo $peserta->pendidikan_ayah;?>" placeholder="Pendidikan Tertinggi Ayah">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Pendidikan Tertinggi Ibu</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" name="pendidikan_ibu" value="<?php echo $peserta->pendidikan_ibu;?>" placeholder="Pendidikan Tertinggi Ibu">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Pekerjaan Ayah</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" name="pekerjaan_ayah" value="<?php echo $peserta->pekerjaan_ayah;?>" placeholder="PNS/TNI/Peg. Swasta/WiraSwasta/Petani/Buruh">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Pekerjaan Ibu</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputPassword3" name="pekerjaan_ibu" value="<?php echo $peserta->pekerjaan_ibu;?>" placeholder="PNS/TNI/Peg. Swasta/WiraSwasta/Petani/Buruh">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">penghasilan</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="inputPassword3" name="penghasilan" value="<?php echo $peserta->penghasilan;?>" placeholder="Misal 2000000">
    </div>
  </div>

  
  



<h1>Upload Kartu Keluarga</h1>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    <span class="sr-only">100% Complete</span>
  </div>
</div>
	
	<div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Upload KK</label>
    <div class="col-sm-9">
      <input type="file" class="form-control" name="userfile">
    </div>
  </div>
	
<input type="hidden" name="id_peserta" value="<?php echo $peserta->id_peserta;?>"/>
<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
<?= form_close() ?>

<?php
  }
  else
  {
  ?>
    <div class="alert alert-danger" role="alert">Maaf Anda telah melakukan Verifikasi, jika ada kesalahan data silahkan hubungi panitia PPDB</div>
  <?php
  }
?>

	
  </div>  
</div>



