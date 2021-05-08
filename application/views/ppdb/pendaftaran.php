<div class="panel panel-info">
	<div class="panel-heading">Form Pendaftaran</div>
  <div class="panel-body">
    <p>

	<form class="form-horizontal" action="<?php echo site_url('ppdb/proses_daftar');?>" method="post">
	<div class="col-sm-10 col-sm-offset-2">
	
	<?php $info=$this->session->flashdata('error');
		if (!empty($info))
		{
			echo $info;
		}
	?>
	
	<?php echo validation_errors();?>
	
	</div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nik" value="<?php echo set_value('nisn')?>" id="inputEmail3" placeholder="NIK">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" value="<?php echo set_value('username')?>" id="inputPassword3" placeholder="pastikan Username belum digunakan orang lain">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password gunakan angka">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_lengkap" value="<?php echo set_value('nama_lengkap')?>" id="inputPassword3" placeholder="Isi dengan huruf kapital">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Panggilan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_panggilan" value="<?php echo set_value('nama_panggilan')?>" id="inputPassword3" placeholder="isi nama panggilan">
    </div>
  </div>
     
    </div>
  </div>
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Daftar</button>
    </div>
  </div>
   
</form>
</p>
  </div>


</div>