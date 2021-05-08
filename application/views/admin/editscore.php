<div class="panel-heading">
    <h3 class="panel-title">Formulir Pendaftaran</h3>
  </div>
  <div class="panel-body">
  
   
  <h1>Sekolah</h1>
  <?php require_once('tinymce.php') ?>
<div class="progress" data-percent="">
												<div class="bar" style="width:100%;"></div>
											</div>

    
			<form class="form-horizontal" action="<?php echo site_url('admin/proseseditscore');?>" method="post">
   
  <div class="control-group">
    <label for="score1" class="col-sm-3 control-label">Jarak Terjauh Jalur Zonasi</label>
    <div class="controls">
      <input type="text" class="form-control" id="score1" name="score1" value="<?php echo $biodata->score1;?>" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label for="score2" class="col-sm-3 control-label">Passingrade jalur Prestasi</label>
    <div class="controls">
      <input type="text" class="form-control" id="score1" name="score2" value="<?php echo $biodata->score2;?>" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label for="score3" class="col-sm-3 control-label">Penentuan seleksi Afirmasi</label>
    <div class="controls">
      <input type="text" class="form-control" id="score3" name="score3" value="<?php echo $biodata->score3;?>" placeholder="">
    </div>
  </div>
  <div class="control-group">
    <label for="score4" class="col-sm-3 control-label">Passingrade Kuota Jalur Perpindahan Tugas Orang tua/Wali</label>
    <div class="controls">
      <input type="text" class="form-control" id="score4" name="score4" value="<?php echo $biodata->score4;?>" placeholder="">
    </div>
  </div>

   <input type="hidden" name="idb" value="<?php echo $biodata->idb;?>"/>

<button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
</form>
	
  </div>