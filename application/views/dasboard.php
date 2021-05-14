<div class="col-xs-12 col-sm-9">
<div class="center">
<h1 class="header smaller lighter blue"><b><?php echo $biodata->nama_sekolah;?></b></h1>

<div class="col-xs-12 col-sm-9">
<div class="center">
<span class="btn btn-app btn-sm btn-light no-hover">
<span class="line-height-1 bigger-170 blue"><?php echo $jumlah;?></span>

<br />
<span class="line-height-1 smaller-90">Pendaftar</span>
</span>
<span class="btn btn-app btn-sm btn-yellow no-hover">
<span class="line-height-1 bigger-170"><?php echo $jumlah1;?></span>

<br />
<span class="line-height-1 smaller-90"><?php echo $biodata->jalur1;?></span>
</span>
<span class="btn btn-app btn-sm btn-pink no-hover">
<span class="line-height-1 bigger-170"><?php echo $jumlah2;?></span>

<br />
<span class="line-height-1 smaller-90"><?php echo $biodata->jalur2;?></span>
</span>
<span class="btn btn-app btn-sm btn-grey no-hover">
<span class="line-height-1 bigger-170"><?php echo $jumlah3;?></span>

<br />
<span class="line-height-1 smaller-90"><?php echo $biodata->jalur3;?></span>
</span>
<span class="btn btn-app btn-sm btn-success no-hover">
<span class="line-height-1 bigger-170"><?php echo $jumlah4;?></span>

<br />
<span class="line-height-1 smaller-90">Per/Orangtua</span>
</span>
</div>
</div>
</div>
</div>

<a href="<?php echo site_url('admin/hidupkanpendaftaran');?>">
<button class="btn btn-sm btn-warning">
<i class="ace-icon fa fa-fire bigger-110"></i>
<span class="bigger-110 no-text-shadow">Aktif</span>
</button>

<a href="<?php echo site_url('admin/matikanpendaftaran');?>">
<button class="btn btn-sm btn-danger">
<i class="ace-icon fa fa-fire bigger-110"></i>
<span class="bigger-110 no-text-shadow">Non Aktif</span>
</button>
Status pendaftaran saat ini : <span class= "badge badge-warning"><b><?php echo $pendaftaran->statusp;?></b></span>

<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name">Kuota <?php echo $biodata->jalur1;?></div>

													<div class="profile-info-value">
														<span class="editable" id="username"><b><?php echo $biodata->kuota1;?></b></span>
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name">Kuota <?php echo $biodata->jalur2;?></div>

													<div class="profile-info-value">
														<span class="editable" id="username"><b><?php echo $biodata->kuota2;?></b></span>
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name">Kuota <?php echo $biodata->jalur3;?></div>

													<div class="profile-info-value">
														<span class="editable" id="username"><b><?php echo $biodata->kuota3;?></b></span>
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name">Kuota pindahan</div>

													<div class="profile-info-value">
														<span class="editable" id="username"><b><?php echo $biodata->kuota4;?></b></span>
													</div>
												</div>
											</div>
										</a>






<div class="container">
<h3 class="header smaller lighter blue">Informasi</h3>

<h5 class="header smaller lighter blue">Kuota <?php echo $biodata->jalur1;?> : <b><?php echo $biodata->kuota1;?></b> Pendaftar <b><?php echo $jumlah1;?></b> Jarak terjauh <b><?php echo $biodata->score1;?> Meter </b></h5>

<h5 class="header smaller lighter blue">Kuota <?php echo $biodata->jalur2;?> : <b><?php echo $biodata->kuota2;?></b> Pendaftar <b><?php echo $jumlah2;?></b> Passingrade <b><?php echo $biodata->score2;?> </b></h5>
<h5 class="header smaller lighter blue">Kuota <?php echo $biodata->jalur3;?> : <b><?php echo $biodata->kuota3;?></b> Pendaftar <b><?php echo $jumlah3;?></b> penilaia <b><?php echo $biodata->score3;?></b></h5>
<h5 class="header smaller lighter blue">Kuota <?php echo $biodata->jalur4;?> : <b><?php echo $biodata->kuota4;?></b> Pendaftar <b><?php echo $jumlah4;?></b> Passingrade <b><?php echo $biodata->score4;?></b></h5>



