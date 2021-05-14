
<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('ppdb/daftar');?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Pendaftaran</a></li>
        <li><a href="<?php echo site_url('ppdb/daftarpeserta');?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Peserta</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Informasi <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('ppdb/prosedur');?>"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Prosedur</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url('ppdb/pengumuman');?>"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Pengumuman</a></li>
			<li><a href="<?php echo site_url('ppdb/jadwal');?>"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Jadwal</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Bantuan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('ppdb/kontak');?>"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Kontak</a></li>
            
          </ul>
        </li>
      </ul>
	  
	  <form class="navbar-form navbar-right" role="search" action="<?php echo site_url('ppdb/proses_login');?>" method="post">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username')?>">
	<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password')?>">
  </div>
  <button type="submit" class="btn btn-default">Masuk</button>
</form>
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


































