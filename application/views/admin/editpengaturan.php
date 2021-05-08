<div class="panel-heading">
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
   
  <h1>Sekolah</h1>
  <?php require_once('tinymce.php') ?>
<div class="progress" data-percent="">
												<div class="bar" style="width:100%;"></div>
											</div>

    
			<form class="form-horizontal" action="<?php echo site_url('admin/proseseditpengaturan');?>" method="post">
   
  <div class="control-group">
    <label for="nama_sekolah" class="col-sm-3 control-label">Nama Sekolah</label>
    <div class="controls">
      <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?php echo $biodata->nama_sekolah;?>" placeholder="Nama sekolah">
    </div>
  </div>

   <div class="control-group">
    <label for="alamat_sekolah" class="col-sm-3 control-label">Alamat</label>
    <div class="controls">
      <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" value="<?php echo $biodata->alamat_sekolah;?>" placeholder="">
    </div>
  </div>

<h1>Isi Kuota Jalur Seleksi</h1>

   <div class="control-group">
    <label for="kuota1" class="col-sm-3 control-label"><?php echo $biodata->jalur1;?></label>
    <div class="controls">
      <input type="text" class="form-control" id="kuota1" name="kuota1" value="<?php echo $biodata->kuota1;?>" placeholder="">
    </div>
  </div>

   <div class="control-group">
    <label for="kuota2" class="col-sm-3 control-label"><?php echo $biodata->jalur2;?></label>
    <div class="controls">
      <input type="text" class="form-control" id="kuota2" name="kuota2" value="<?php echo $biodata->kuota2;?>" placeholder="">
    </div>
  </div>

   <div class="control-group">
    <label for="kuota3" class="col-sm-3 control-label"><?php echo $biodata->jalur3;?></label>
    <div class="controls">
      <input type="text" class="form-control" id="kuota3" name="kuota3" value="<?php echo $biodata->kuota3;?>" placeholder="">
    </div>
  </div>

  <div class="control-group">
    <label for="kuota4" class="col-sm-3 control-label"><?php echo $biodata->jalur4;?></label>
    <div class="controls">
      <input type="text" class="form-control" id="kuota4" name="kuota4" value="<?php echo $biodata->kuota4;?>" placeholder="">
    </div>
  </div>

  <h1>Isi Mata Pelajaran Yang diujikan</h1>

  <div class="control-group">
    <label for="mp1" class="col-sm-3 control-label">Mapel 1</label>
    <div class="controls">
      <input type="text" class="form-control" id="mp1" name="mp1" value="<?php echo $biodata->mp1;?>" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label for="mp2" class="col-sm-3 control-label">Mapel 2</label>
    <div class="controls">
      <input type="text" class="form-control" id="mp2" name="mp2" value="<?php echo $biodata->mp2;?>" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label for="mp3" class="col-sm-3 control-label">Mapel 3</label>
    <div class="controls">
      <input type="text" class="form-control" id="mp3" name="mp3" value="<?php echo $biodata->mp3;?>" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label for="mp4" class="col-sm-3 control-label">Mapel 4</label>
    <div class="controls">
      <input type="text" class="form-control" id="mp4" name="mp4" value="<?php echo $biodata->mp4;?>" placeholder="">
    </div>
  </div>


      
              <div class="control-group">
              <label for="prosedur1">INFO PROSEDUR</label>
              <textarea type="text/javascript" class="form-control" id="prosedur1" name="prosedur1"  value="<?php echo $biodata->prosedur1;?>"></textarea>
    </div>

  <div class="control-group">
              <label for="prosedur">INFO JADWAL</label>
              <textarea type="text/javascript" class="form-control" id="jadwal" name="jadwal" value="<?php echo $biodata->jadwal;?>"></textarea>
  </div>
  </div>

   <input type="hidden" name="idb" value="<?php echo $biodata->idb;?>"/>

<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
</form>
	
  </div>