<div class="container">
								<h3 class="header smaller lighter blue">Peserta Yang Telah Verifikasi : <?php echo $jumlah;?></h3>
								<table class="table table-striped table-bordered data">
			<thead>
				<tr>	
				<th>id</th>		
					<th>NIK</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					
					<th>Usia</th>
					<th>Status</th>
					<th>Keterangan</th>
					
					<th align="center"><a href="<?php echo site_url('admin/tambahpeserta');?>">Action</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($peserta as $peserta)
				{
				?>
				<tr>
					<td><?php echo $peserta->id_peserta;?></td>
					<td><?php echo $peserta->nik;?></td>
					<td><?php echo $peserta->nama_lengkap;?></td>
					<td><?php echo $peserta->jenis_kelamin;?></td>
					
					<td><?php echo $peserta->usia;?></td>
					<td><?php echo $peserta->status;?></td>
					<td><span class= "badge badge-warning"><?php echo $peserta->keterangan;?></span></td>
					
					<td><a href="<?php echo site_url('admin/unverifikasipeserta/'.$peserta->id_peserta);?>"><span class= "btn btn-sm btn-warning"><b>UnVerifikasi</b></span></a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>