<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>PPDB</title>
	
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/datepicker/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap/css/custom2.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.min.css');?>" rel="stylesheet">

	<!--[if lt IE 9]>
			<script src="<?php echo base_url('assets/html5shiv.min.js');?>"></script>
			<script src="<?php echo base_url('assets/respond.min.js');?>"></script>
		<![endif]-->
	
</head>
<style>
.navbar-inverse {
    background-color: #80e1ff;
    border-color: #80e1ff;
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
    margin-bottom: 0;
	box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
}</style>
<body>
		<div class="container">
			<div class="row">
	
				
			
			</div>
		</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<?php echo $_top_menu;?>
			</div>
		</div>
		
	<div class="container">
		<div class="row">
			<div class="col-md-12"><br><br><br><br>
				<?php echo $_content;?>
			</div>
		</div>
		
	</div>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datepicker/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
<script>
$(document).ready(function(){
$(‘.datepicker’).datepicker();
});
</script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
</body>
</html>

























