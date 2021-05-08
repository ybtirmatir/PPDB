<div class="panel panel-info">
	<div class="panel-heading">Form Pendaftaran</div>
  <div class="panel-body">
    <p>

<?php
  $pendaftaran = $pendaftaran->statusp;
  if ($pendaftaran == 'aktif')
  {
  ?>
<p><a class="btn btn-primary btn-lg" href="<?php echo site_url('ppdb/pendaftaran');?>" role="button">Pendaftaran Dibuka</a></p>
<?php
  }
  else
  {
  ?>
    <div class="alert alert-danger" role="alert">Maaf Pendaftaran di tutup</div>
  <?php
  }
?>